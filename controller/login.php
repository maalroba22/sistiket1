<?php

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        include_once('../models/login.php');
        switch ($_POST['opcn']) {
            case 'login':
                $res = SingUp::login($_POST);
                echo json_encode($res);
                break;
            
        }
}
