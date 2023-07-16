<?php


function define_response (&$data, $value)
{
    $data['status'] = 'SUCESS'; 
    $data['data'] = $value;
}


function response($data_response)
{
    header("Content-Type:application/json");
    echo json_encode($data_response);
}

function api_status(&$data)
{
    define_response($data, 'API DE BOA');
}

?>