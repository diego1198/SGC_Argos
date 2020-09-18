<?php
require_once "../../config/database.php";

$action = $_GET['action'];

switch ($action) {
    case 'list':
        $case = $_GET['case'];

        $query = "SELECT c.*,cli.cli_descripcion FROM cartera c, cliente cli where c.cli_id = cli.cli_id and c.car_estado = '$case'";

        $result = mysqli_query($mysqli, $query); ?>

        <table id="table_<?php echo $case;?>" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Cliente</th>
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
                        <td><?php echo $row['cli_descripcion']; ?></td>
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
    default:
        # code...
        break;
}

?>