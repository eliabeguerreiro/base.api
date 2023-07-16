<?php
//importações
require_once('output.php');

//responde
$data['status'] = 'ERROR';
$data['data'] = [];

//request
if(isset($_GET['option'])){

    switch ($_GET['option']){
        case 'status':
            api_status($data);
            break;
    }
}

//emitir a respota da API
response($data);
