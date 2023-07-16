<?php
define('API_BASE', 'http://localhost/base.api/api/?option=');
echo '<p>APLICAÇÃO</p>';


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