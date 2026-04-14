<!-- index.php:
    Receiving the request
     Selecting the page
     Calling the controller
-->

<?php
require_once('controllers/MainController.php');

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'form':
        require 'views/form.php';
        break;

    case 'confirm':
        $data = $_POST;

        if (
            empty($data['name']) ||
            empty($data['age']) ||
            empty($data['height']) ||
            empty($data['weight'])
        ) {
            echo "All fields are required!";
            exit;
            // or you can use header here to index.php again
        }

        require 'views/confirm.php';
        break;

    case 'result':
        $data = $_POST;
        $result = handleResult($data);
        require 'views/result.php';
        break;

    default:
        require 'views/home.php';
}
