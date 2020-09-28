<?php
require_once('../vendor/econea/nusoap/src/nusoap.php');
require_once('../config/database.php');

$estado = 'adeuda';
$fechainicio = '2020-09-22';
$fechafin = date('Y-m-d');

//url del webservice
$wsdl = "http://ibrisystemas.com/cardcontrol/webservice/wsibrisystemas.php?wsdl";

//instanciando un nuevo objeto cliente para consumir el webservice
$client = new nusoap_client($wsdl, 'wsdl');

//pasando los parámetros a un array
$param = array('estadopago' => $estado, 'fechainicio' => $fechainicio, 'fechafin' => $fechafin);

//llamando al método y pasándole el array con los parámetros
$resultado = $client->call('consultarTransaciones', $param);
$err = $client->getError();
if ($err) {
    echo $err;
}

$array_cant = count($resultado); ?>
<?php
for ($i = 0; $i < $array_cant; $i++) {

    $busqueda_existe = "SELECT cli_descripcion from cliente where cli_descripcion ='". utf8_encode($resultado[$i]['Empresa'])."'";
    $response = mysqli_query($mysqli,$busqueda_existe) or die('error: '.mysqli_error($mysqli));
    $cant_cliente = mysqli_num_rows($response);
    if($cant_cliente == 0){
        $query = "INSERT INTO CLIENTE(cli_descripcion)values('". utf8_encode($resultado[$i]['Empresa'])."')";
        $row = mysqli_query($mysqli,$query);

        $busqueda_id = "SELECT cli_id from cliente where cli_descripcion = '". utf8_encode($resultado[$i]['Empresa'])."'";
        $resultado_busqueda = mysqli_query($mysqli,$busqueda_id);
        $row = mysqli_fetch_array($resultado_busqueda);
        $cli_id = $row['cli_id'];
        $busqueda_personal = "SELECT per_id from personal where per_documento = '". utf8_encode($resultado[$i]['Documento'])."'";
        echo $busqueda_personal. '<br/>';
        $result_personal = mysqli_query($mysqli,$busqueda_personal);
        $row_personal = mysqli_fetch_array($result_personal);
        if(mysqli_num_rows($result_personal) > 0){
            $id_personal = $row_personal['per_id'];
        }else{
            $id_personal = '1';
        }
        
        $cant_personal = mysqli_num_rows($result_personal);

        if($cant_personal == 0){
            $query_Id_Personal = "SELECT max(per_id) as max from personal";
            $resIdPersonal = mysqli_query($mysqli,$query_Id_Personal);
            $rowId = mysqli_fetch_array($resIdPersonal);
            if($rowId['max'] != ''){
                $id_personal = $rowId['max']+1;
            }else{
                $id_personal = '1';
            }
            
            $query_Ins_Personal = "INSERT into personal(per_id,per_nombre, per_documento, cli_id) 
                                values('$id_personal','". utf8_encode($resultado[$i]['Nombre'])."','". utf8_encode($resultado[$i]['Documento'])."',"."'$cli_id'".")";
            $result_Ins = mysqli_query($mysqli,$query_Ins_Personal);
        }

        $query_bus_marca = "SELECT mar_id from marca where mar_descripcion = '".utf8_encode($resultado[$i]['Marca'])."'";
        $result_bus_marca = mysqli_query($mysqli,$query_bus_marca);
        $row_bus_marca = mysqli_fetch_array($result_bus_marca);
        $cant_marca = mysqli_num_rows($result_bus_marca);
        $id_marca = '';
        if($cant_marca == 0){
            $query_Id_Marca = "SELECT max(mar_id) as max_marca from marca";
            $resIDMarca = mysqli_query($mysqli,$query_Id_Marca);
            $rowId = mysqli_fetch_array($resIDMarca);
            if($rowId['max_marca'] != ''){
                $id_marca = $rowId['max_marca']+1;
            }else{
                $id_marca = '1';
            }
            
            $query_Ins_Marca = "INSERT INTO marca(mar_id,mar_descripcion) values('$id_marca','". utf8_encode($resultado[$i]['Marca'])."')";

            mysqli_query($mysqli,$query_Ins_Marca);
        }else{
            $id_marca = $row_bus_marca['mar_id'];
        }

        $query_bus_local = "SELECT loc_id from local where loc_direccion = '".utf8_encode($resultado[$i]['Local'])."'";
        $result_bus_local = mysqli_query($mysqli,$query_bus_local) or die('error:'.mysqli_error($mysqli));
        $row_bus_local = mysqli_fetch_array($result_bus_local);
        $cant_local = mysqli_num_rows($result_bus_local);
        $id_local = '';
        if($cant_local == 0){
            $query_Id_Marca = "SELECT max(loc_id) as max_local from local";
            $resIDMarca = mysqli_query($mysqli,$query_Id_Marca);
            $rowId = mysqli_fetch_array($resIDMarca);
            if($rowId['max_local'] != ''){
                $id_local = $rowId['max_local']+1;
            }else{
                $id_local = '1';
            }
            
            $query_Ins_Local = "INSERT INTO local(loc_id,loc_direccion,mar_id)
                                values('$id_local','". utf8_encode($resultado[$i]['Local'])."','$id_marca')";
            mysqli_query($mysqli,$query_Ins_Local);
        }else{
            $id_local = $row_bus_local['loc_id'];
        }



    

        $queryConsumo = "INSERT INTO consumo(con_fecha,con_hora,con_numero_tarjeta,con_valor_neto,
                                            con_iva,con_valor_total,con_autorizacion,con_estado,
                                            loc_id,per_id)
                        values('". utf8_encode($resultado[$i]['Fecha'])."','". utf8_encode($resultado[$i]['Hora'])."',
                        '". utf8_encode($resultado[$i]['Tarjeta'])."','". utf8_encode($resultado[$i]['ValorNeto'])."',
                        '". utf8_encode($resultado[$i]['Iva'])."','". utf8_encode($resultado[$i]['ValorTotal'])."',
                        '". utf8_encode($resultado[$i]['Autorizacion'])."','pendiente','$id_local','$id_personal')";
        
        mysqli_query($mysqli,$queryConsumo) or die('error: '.mysqli_error($mysqli));



    }else{
        $busqueda_id = "SELECT cli_id from cliente where cli_descripcion = '". utf8_encode($resultado[$i]['Empresa'])."'";
        $resultado_busqueda = mysqli_query($mysqli,$busqueda_id);
        $row = mysqli_fetch_array($resultado_busqueda);
        $cli_id = $row['cli_id'];
        $busqueda_personal = "SELECT per_id from personal where per_documento = '". utf8_encode($resultado[$i]['Documento'])."'";
        $result_personal = mysqli_query($mysqli,$busqueda_personal);
        $cant_personal = mysqli_num_rows($result_personal);
        
        if($cant_personal == 0){
            $query_Id_Personal = "SELECT max(per_id) as max from personal";
            $resIdPersonal = mysqli_query($mysqli,$query_Id_Personal);
            $rowId = mysqli_fetch_array($resIdPersonal);
            if($rowId['max'] != ''){
                $id_personal = $rowId['max']+1;
            }else{
                $id_personal = '1';
            }
            
            $query_Ins_Personal = "INSERT into personal(per_id,per_nombre, per_documento, cli_id) 
                                values('$id_personal','". utf8_encode($resultado[$i]['Nombre'])."','". utf8_encode($resultado[$i]['Documento'])."',"."'$cli_id'".")";
            $result_Ins = mysqli_query($mysqli,$query_Ins_Personal);
        }

        $query_bus_marca = "SELECT mar_id from marca where mar_descripcion = '".utf8_encode($resultado[$i]['Marca'])."'";
        $result_bus_marca = mysqli_query($mysqli,$query_bus_marca);
        $row_bus_marca = mysqli_fetch_array($result_bus_marca);
        $cant_marca = mysqli_num_rows($result_bus_marca);
        $id_marca = '';
        if($cant_marca == 0){
            $query_Id_Marca = "SELECT max(mar_id) as max_marca from marca";
            $resIDMarca = mysqli_query($mysqli,$query_Id_Marca);
            $rowId = mysqli_fetch_array($resIDMarca);
            if($rowId['max_marca'] != ''){
                $id_marca = $rowId['max_marca']+1;
            }else{
                $id_marca = '1';
            }
            
            $query_Ins_Marca = "INSERT INTO marca(mar_id,mar_descripcion) values('$id_marca','". utf8_encode($resultado[$i]['Marca'])."')";

            mysqli_query($mysqli,$query_Ins_Marca);
        }else{
            $id_marca = $row_bus_marca['mar_id'];
        }

        $query_bus_local = "SELECT loc_id from local where loc_direccion = '".utf8_encode($resultado[$i]['Local'])."'";
        $result_bus_local = mysqli_query($mysqli,$query_bus_local) or die('error:'.mysqli_error($mysqli));
        $row_bus_local = mysqli_fetch_array($result_bus_local);
        $cant_local = mysqli_num_rows($result_bus_local);
        $id_local = '';
        if($cant_local == 0){
            $query_Id_Marca = "SELECT max(loc_id) as max_local from local";
            $resIDMarca = mysqli_query($mysqli,$query_Id_Marca);
            $rowId = mysqli_fetch_array($resIDMarca);
            if($rowId['max_local'] != ''){
                $id_local = $rowId['max_local']+1;
            }else{
                $id_local = '1';
            }
            
            $query_Ins_Local = "INSERT INTO local(loc_id,loc_direccion,mar_id)
                                values('$id_local','". utf8_encode($resultado[$i]['Local'])."','$id_marca')";
            mysqli_query($mysqli,$query_Ins_Local);
        }else{
            $id_local = $row_bus_local['loc_id'];
        }

        $queryConsumo = "INSERT INTO consumo(con_fecha,con_hora,con_numero_tarjeta,con_valor_neto,
                                            con_iva,con_valor_total,con_autorizacion,con_estado,
                                            loc_id,per_id)
                        values('". utf8_encode($resultado[$i]['Fecha'])."','". utf8_encode($resultado[$i]['Hora'])."',
                        '". utf8_encode($resultado[$i]['Tarjeta'])."','". utf8_encode($resultado[$i]['ValorNeto'])."',
                        '". utf8_encode($resultado[$i]['Iva'])."','". utf8_encode($resultado[$i]['ValorTotal'])."',
                        '". utf8_encode($resultado[$i]['Autorizacion'])."','pendiente','$id_local','$id_personal')";
        
        mysqli_query($mysqli,$queryConsumo) or die('error: '.mysqli_error($mysqli));

    }

    

}

    $queryCartera = "SELECT cli.cli_id,cli.cli_descripcion,sum(con_valor_total) as monto_total 
                    from consumo con, personal p, cliente cli 
                    where con.per_id = p.per_id and p.cli_id = cli.cli_id group by cli.cli_id";

    
    $resultCar = mysqli_query($mysqli,$queryCartera);

    while($row = mysqli_fetch_array($resultCar)){
        $QueryInsCartera = "INSERT INTO cartera(car_estado,cli_valor_pagar,cli_id)
        values('sin_gestion','$row[monto_total]','$row[cli_id]')";

        $resIns = mysqli_query($mysqli,$QueryInsCartera);
    }
?>