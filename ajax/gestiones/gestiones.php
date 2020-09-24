<?php
require_once "../../config/database.php";
session_start();
$action = $_GET['action'];

switch ($action) {
    case 'list':
        $case = $_GET['case'];

        $query = "SELECT c.*,cli.* FROM cartera c, cliente cli where c.cli_id = cli.cli_id and c.car_estado = '$case'";

        $result = mysqli_query($mysqli, $query); ?>

        <table id="table_<?php echo $case; ?>" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Ciudad</th>
                    <th>Cliente</th>
                    <th>Contacto</th>
                    <th>Dia Corte</th>
                    <th>Valor a Pagar</th>
                    <th>Fecha de Ingreso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['cli_ciudad']; ?></td>
                        <td><?php echo $row['cli_descripcion']; ?></td>
                        <td><?php echo $row['cli_contacto']; ?></td>
                        <td><?php echo $row['cli_dia_corte']; ?></td>
                        <td><?php echo $row['cli_valor_pagar']; ?></td>
                        <td><?php echo $row['car_fecha_ingreso']; ?></td>
                        <td>
                            <a data-toggle='tooltip' data-placement='top' title='Gestionar' class='btn btn-success btn-md' href='?module=nueva_gestion&id=<?php echo $row['car_id'] ?>'>
                                <i style='color:#fff' class='icon dripicons-document-edit'></i>
                            </a>
                        </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>

    <?php

        break;
    case 'cliente':
        $id_car = $_GET['id'];

        $query = "SELECT cli.* from cliente cli, cartera car where car.cli_id = cli.cli_id and car.car_id = '$id_car'";

        $result = mysqli_query($mysqli, $query);

        $row = mysqli_fetch_array($result);

        echo json_encode($row);
        break;

    case 'save':
        $estado = 'pendiente';

        $car_id = $_GET['id_car'];
        $tipo_gestion = $_POST['tipo_gestion'];
        $tipo_contacto = $_POST['tipo_contacto'];
        $respuesta = $_POST['respuesta'];
        $numero_contacto = $_POST['numero_contacto'];
        $observacion_gestion = $_POST['observacion_gestion'];
        $us_id = $_SESSION['id_user'];
        if ($respuesta == 'pago') {
            $monto = $_POST['monto'];
            $observacion = $_POST['observacion'];
            $estado = 'cobrada';
        }
        $id_pago = '';

        if (isset($monto) && $respuesta == 'pago') {
            $queryIdPago = "SELECT max(pag_id) as id_pago from pago";
            $resPago = mysqli_query($mysqli, $queryIdPago);
            $row = mysqli_fetch_array($resPago);
            if ($row['id_pago'] != '') {
                $id_pago = $row['id_pago'] + 1;
            } else {
                $id_pago = 1;
            }
            $queryPago = "INSERT into pago(pag_id,pag_monto,pag_observacion)values('$id_pago','$monto','$observacion')";
            $resPago = mysqli_query($mysqli, $queryPago) or die('error:' . mysqli_error($mysqli));
        }

        $queryGestion = "INSERT INTO gestion(ges_tipo_gestion,ges_tipo_contacto,ges_respuesta,ges_contacto,ges_observacion,us_id,car_id,pag_id)
                        values('$tipo_gestion','$tipo_contacto','$respuesta','$numero_contacto','$observacion_gestion','$us_id','$car_id','$id_pago')";

        $res = mysqli_query($mysqli, $queryGestion) or die('error:' . mysqli_error($mysqli));

        if ($res) {
            $updCartera = "UPDATE cartera set car_estado = '$estado' where car_id = '$car_id'";
            $result = mysqli_query($mysqli, $updCartera) or die('error' . mysqli_error($mysqli));
            if ($result) {
                echo 'exito';
            }
        }

        break;
    case 'total':
        $id_cliente = $_GET['id'];
        $queryTotal = "SELECT sum(con.con_valor_total) as 'valor_pagar' 
        from consumo con, personal p,cliente c where con.per_id = p.per_id and p.cli_id = c.cli_id and c.cli_id = '$id_cliente'";
        $resultTotal = mysqli_query($mysqli, $queryTotal);
        $row = mysqli_fetch_array($resultTotal);
        echo $row['valor_pagar'];
        break;

    case 'consumos':
        $id_cliente = $_GET['id'];
        $query = "SELECT con.*,p.per_nombre,p.per_documento,l.loc_direccion,m.mar_descripcion 
        from consumo con, personal p,cliente c,local l,marca m 
        where con.loc_id = l.loc_id and l.mar_id = m.mar_id and 
        con.per_id = p.per_id and p.cli_id = c.cli_id and c.cli_id = '$id_cliente'";
        $result = mysqli_query($mysqli, $query);
    ?>
        <table class="table table-bordered table-hover" id="table_consumos">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Local</th>
                    <th>Sucursal</th>
                    <th>Tarjeta</th>
                    <th>Documento</th>
                    <th>Nombres</th>
                    <th>Autorización</th>
                    <th>Valor Neto</th>
                    <th>IVA</th>
                    <th>Valor Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['con_fecha'];?></td>
                        <td><?php echo $row['con_hora'];?></td>
                        <td><?php echo $row['mar_descripcion'];?></td>
                        <td><?php echo $row['loc_direccion'];?></td>
                        <td><?php echo $row['con_numero_tarjeta'];?></td>
                        <td><?php echo $row['per_documento'];?></td>
                        <td><?php echo $row['per_nombre'];?></td>
                        <td><?php echo $row['con_autorizacion'];?></td>
                        <td><?php echo $row['con_valor_neto'];?></td>
                        <td><?php echo $row['con_iva'];?></td>
                        <td><?php echo $row['con_valor_total'];?></td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>

<?php
        break;
    default:
        # code...
        break;
}

?>