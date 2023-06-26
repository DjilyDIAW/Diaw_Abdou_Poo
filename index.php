<?php
require 'autoload.php'; 

if(!array_key_exists("controller", $_GET) ||
    !array_key_exists("action", $_GET)){
    header('Location: index.php?controller=moto&action=list');
}

if($_GET["controller"] == 'default'){
    $controller = new DefaultController();
    if($_GET["action"] == 'not-found'){
        $actionFind = true;
        $controller->notFound();
    }
}

if($_GET["controller"] == "moto"){
    $controller = new MotoController();
    if($_GET["action"] == 'list'){
        $actionFind = true;
        $controller->list();
    }
}

if($_GET["action"] == "detail" &&
array_key_exists("id", $_GET)) {
$actionFind = true;
$controller->detail($_GET["id"]);
}

if($_GET['action'] == 'delete' &&  array_key_exists("id", $_GET)){
    $actionFind = true;
    $controller->delete($_GET["id"]);
}

if($_GET["action"] == 'add'){
        $actionFind = true;
        $controller->ajout();
    }

    if(is_null($actionFind)){
        header("Location: index.php?controller=default&action=not-found");
    }    