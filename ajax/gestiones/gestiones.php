<?php
require_once "../../config/database.php";
session_start();
$action = $_GET['action'];

switch ($action) {
    case 'list':
        $case = $_GET['case'];

        $query = "SELECT c.*,cli.* FROM cartera c, cliente cli where c.cli_id = cli.cli_id and c.car_estado = '$case'";

        $result = mysqli_query($mysqli, $query); ?>

        <table id="table_<?php echo $case;?>" class="table table-striped table-bordered" style="width:100%">
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
                            <a data-toggle='tooltip' data-placement='top' title='Gestionar' class='btn btn-success btn-md' href='?module=nueva_gestion&id=<?php echo $row['car_id']?>'>
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

        $result = mysqli_query($mysqli,$query);

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
        if($respuesta == 'pago'){
            $monto = $_POST['monto'];
            $observacion = $_POST['observacion'];
            $estado = 'cobrada';
        }
        $id_pago = '';

        if(isset($monto) && $respuesta == 'pago'){
            $queryIdPago = "SELECT max(pag_id) as id_pago from pago";
            $resPago = mysqli_query($mysqli,$queryIdPago);
            $row = mysqli_fetch_array($resPago);
            if($row['id_pago'] != ''){
                $id_pago = $row['id_pago']+1;
            }else{
                $id_pago = 1;
            }
            $queryPago = "INSERT into pago(pag_id,pag_monto,pag_observacion)values('$id_pago','$monto','$observacion')";
            $resPago = mysqli_query($mysqli,$queryPago)or die('error:'.mysqli_error($mysqli));
        }

        $queryGestion = "INSERT INTO gestion(ges_tipo_gestion,ges_tipo_contacto,ges_respuesta,ges_contacto,ges_observacion,us_id,car_id,pag_id)
                        values('$tipo_gestion','$tipo_contacto','$respuesta','$numero_contacto','$observacion_gestion','$us_id','$car_id','$id_pago')";

        $res = mysqli_query($mysqli,$queryGestion) or die('error:'.mysqli_error($mysqli));

        if($res){
            $updCartera = "UPDATE cartera set car_estado = '$estado' where car_id = '$car_id'";
            $result = mysqli_query($mysqli,$updCartera)or die('error'.mysqli_error($mysqli));
            if($result){
                echo 'exito';
            }
        }






        break;
    default:
        # code...
        break;
}

?>