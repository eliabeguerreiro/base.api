<?php
define('API_BASE', 'http://localhost/api_base/api/?option=');
echo '<p>APLICAÇÃO</p>';

$resultado = api_request('random');

//verificação (sucess)

if($resultado['status'] == 'ERROR'){
    die('algo de errado não está certo!');
}

echo'<pre>';
print_r($resultado);


function api_request($option)
{

    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}

?>