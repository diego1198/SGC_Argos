<?php
require_once "../../config/database.php";

$tipo = $_GET['tipo'];
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$tipo.xls");

switch ($tipo) {
    case 'ventas por locales':
        $fechaini = $_GET['fecha_inicio'];
        $fechafin = $_GET['fecha_fin'];
        $marca = $_GET['marca'];
?>
        <table style="width: 20%;" border="1" class="table table-bordered">
            <tr >
                <td colspan=3 style="background-color:LIGHTSTEELBLUE"> DETALLE VENTAS</td>
            </tr>
            <tr >
                <td colspan="3" style="background-color:LIGHTSTEELBLUE" >DESDE: <?php echo $fechaini;?>  HASTA: <?php echo $fechafin;?></td>
            </tr>
            <tr>
                <td>Empresa</td>
                <td>Valor</td>
                <td>Propina</td>
            </tr>
            <?php

            $total = 0.00;

            $iva = 0.00;

            $query = "SELECT loc_direccion, con_valor_total,con_iva,mar_descripcion from consumo c,local l,marca m 
                    where c.loc_id = l.loc_id and c.con_fecha >= '$fechaini' and c.con_fecha<='$fechafin'
                    and l.mar_id = m.mar_id and m.mar_descripcion = '$marca' group by l.loc_id";

            $result = mysqli_query($mysqli, $query);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo  utf8_decode($row['loc_direccion']) ?></td>
                    <td>
                        <?php 
                            echo $row['con_valor_total']; 
                            $total+= $row['con_valor_total'];
                            $iva += $row['con_iva'];
                        ?>
                    </td>
                    <td><?php ?></td>
                </tr>
            <?php
            }
            ?>
            <tr></tr>

            <tr >
                <td colspan=2>TOTAL</td>
                <td><?php echo $total?></td>
            </tr>
            <tr >
                <td colspan=2>TOTAL PROPINA</td>
                <td><?php echo 0?></td>
            </tr>
            <tr >
                <td colspan=2>TOTAL SIN PROPINA</td>
                <td><?php echo $total?></td>
            </tr>
            <tr></tr>
            <tr >
                <td colspan=2>DESGLOSE IVA</td>
                <td><?php echo 0?></td>
            </tr>
            <tr >
                <td colspan=2>IVA</td>
                <td><?php echo $iva;?></td>
            </tr>
            <tr >
                <td colspan=2>COMISION</td>
                <td><?php echo 0?></td>
            </tr>
            <tr >
                <td colspan=2>VALOR A PAGAR</td>
                <td><?php echo $total?></td>
            </tr>

        </table>
    <?php
        break;
    case 'cobranzas anteriores':
    ?>

    <?php
        break;
    case 'total cobranza':
    ?>

    <?php
        break;
    case 'detalle cobranza':
    ?>

    <?php
        break;
    case 'dinero por edades de cartera':
    ?>

    <?php
        break;
    case 'cartera recuperada':
    ?>

    <?php
        break;
    case 'cliente + consumos':
    ?>

    <?php
        break;
    case 'cliente - consumos':
    ?>

    <?php
        break;
    case 'cobranza por gestor':
    ?>

    <?php
        break;
    case 'consumos del mes':
    ?>

<?php
        break;

    default:
        # code...
        break;
}

?>