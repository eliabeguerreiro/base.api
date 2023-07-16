<?php
define('API_BASE', 'http://localhost/base.api/api/?option=');
echo '<p>APLICAÇÃO</p>';

$resultado = api_request('random&min=10&max=100');

//verificação (sucess)

if($resultado['status'] == 'ERROR'){
    die('algo de errado não está certo!');
}
echo'<pre>';
print_r(api_request('status'));


//var_dump($resultado);
function api_request($option)
{

    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}

?>