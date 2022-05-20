<?php

$data =[] ;

if (isset($_GET['option'])) {

    switch ($_GET['option']) {
        case 'status':
            $data['status'] = 'success';
            $data['data'] = 'status api ok ';
            break;
        default:
            $data['data'] = 'status api : 🔴';
            break;
    }
} else {
    $data['status'] = 'error';
}


//response

function response($data_response)
{
    header("Content-type:application/json");
    printf(json_encode($data_response));
}

response($data) ;