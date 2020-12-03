<?php
require  __DIR__. "/_connect_db.php";

if (!isset($_SESSION['receiver'])) {
    $_SESSION['receiver'] = [];
}

$output = [
    'success' => true,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];
$_SESSION['receiver'] = $_POST;
/*
$email = isset($_POST['mail']) ? $_POST['mail'] : Null ;
$name = isset($_POST['name']) ? $_POST['name'] : Null ;
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : Null ;
$SendTime = isset($_POST['SendTime']) ? $_POST['SendTime'] : Null ;
$shipWay = isset($_POST['addressC']) ? $_POST['addressC'] : Null ;
$address = isset($_POST['address']) ? $_POST['address'] : Null ;
$payment = isset($_POST['payment']) ? $_POST['payment'] : Null ;
$numbering = isset($_POST['numbering']) ? $_POST['numbering'] : "無" ;




// $output['receiver'] = $_SESSION['receiver'];

$output = [
    $_SESSION['receiver']['mail'] = $email,
    $_SESSION['receiver']['name'] = $name,
    $_SESSION['receiver']['mobile'] = $mobile,
    $_SESSION['receiver']['SendTime'] = $SendTime,
    $_SESSION['receiver']['shipWay'] = $shipWay,
    $_SESSION['receiver']['address'] = $address,
    $_SESSION['receiver']['payment'] = $payment,
    $_SESSION['receiver']['numbering'] = $numbering,

    'code' => 0,
    'success' => true
];
*/
echo json_encode($output, JSON_UNESCAPED_UNICODE);