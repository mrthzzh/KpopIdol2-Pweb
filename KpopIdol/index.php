<?php
include 'env.php';
// var_dump($_ENV);
$url = $_SERVER['REQUEST_URI'];
$dirName =  'KpopIdol';
$url = implode("/",
                array_filter(
                    explode("/",
                        str_replace($dirName, "",
                            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
                        )
                    ),'strlen'
                )
            );
// var_dump($url);

switch ($url) {
    case 'login':
        include 'view/auth/login.php';
            break;
    case 'register':
        include 'view/auth/register.php';
                break;
    case 'dashboard':
        include 'view/dash/dashboard.php';
                break;
    case 'contact' :
        include 'model/contact.php';
    case 'addpage' :
        include 'view/crud/addpage.php';
        break;
    case 'add' :
        include 'controller/insert.php';
        break;
    case 'updatepage' :
        include 'view/crud/updatepage.php';
        break;
    case 'update' :
        include 'controller/update.php';
        break;
    case 'delete' :
        include 'controller/delete.php';
        break;
    default:
        echo '<h1>KpopPage<h1>';
}