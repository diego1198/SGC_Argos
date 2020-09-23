<?php
require_once('../vendor/econea/nusoap/src/nusoap.php');
require_once('../config/database.php');

$estado = 'pagado';
$fechainicio = '2020-07-15';
$fechafin = '2020-09-15';

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
    $response = mysqli_query($mysqli,$busqueda_existe);
    $cant_cliente = mysqli_num_rows($response);
    if($cant_cliente == 0){
        $query = "INSERT INTO CLIENTE(cli_descripcion)values('". utf8_encode($resultado[$i]['Empresa'])."')";
        $row = mysqli_query($mysqli,$query);

        $busqueda_id = "SELECT cli_id from cliente where cli_descripcion = '". utf8_encode($resultado[$i]['Empresa'])."'";
        $resultado_busqueda = mysqli_query($mysqli,$busqueda_id);
        $row = mysqli_fetch_array($resultado_busqueda);
        $cli_id = $row['cli_id'];
        $busqueda_personal = "SELECT per_id from personal where per_documento = '". utf8_encode($resultado[$i]['Documento'])."'";
        $result_personal = mysqli_query($mysqli,$busqueda_personal);
        $cant_personal = mysqli_num_rows($result_personal);

        if($cant_personal == 0){
            $query_Ins_Personal = "INSERT into personal(per_nombre, per_documento, cli_id) values('". utf8_encode($resultado[$i]['Nombre'])."','". utf8_encode($resultado[$i]['Documeno'])."',"."'$cli_id'".")";
            $result_Ins = mysqli_query($mysqli,$query_Ins_Personal);
        }
    }else{
        $busqueda_id = "SELECT cli_id from cliente where cli_descripcion = '". utf8_encode($resultado[$i]['Empresa'])."'";
        $resultado_busqueda = mysqli_query($mysqli,$busqueda_id);
        $row = mysqli_fetch_array($resultado_busqueda);
        $cli_id = $row['cli_id'];
        $busqueda_personal = "SELECT per_id from personal where per_documento = '". utf8_encode($resultado[$i]['Documento'])."'";
        $result_personal = mysqli_query($mysqli,$busqueda_personal);
        $cant_personal = mysqli_num_rows($result_personal);

        if($cant_personal == 0){
            $query_Ins_Personal = "INSERT into personal(per_nombre, per_documento, cli_id) values('". utf8_encode($resultado[$i]['Nombre'])."','". utf8_encode($resultado[$i]['Documeno'])."',"."'$cli_id'".")";
            $result_Ins = mysqli_query($mysqli,$query_Ins_Personal);
        }
    }

    

}
?>