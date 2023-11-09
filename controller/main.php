<?php
require_once 'controller/controllers.php';
require_once 'controller/functions.php';
require_once 'config/config.php';

$url = $_GET['url'] ?? '/mvc-dynamic';
switch ($url) {
    //ROLE
    case 'roles':
        $type = $_GET['type'] ?? 0;
        RoleController::index();
        break;

    //STUDENT
    case 'add-data':
        $action = $_GET['action'] ?? '';
        if ($action === 'save') {
            StudentController::save();
        }
        StudentController::add();
        break;

    //STUDENT
    case 'show':
        $id = $_GET['id'] ?? 0;
        StudentController::show($id);
        break;
    
    //STUDENT
    case 'edit':
        $id = $_GET['id'] ?? 0;
        $action = $_GET['action'] ?? '';
        if ($action === 'save') {
            StudentController::update($id);
        }
        StudentController::edit($id);
        break;
    
    //STUDENT
    case 'rem':
        $id = $_GET['id'] ?? 0;
        StudentController::remove($id);
        break;

    //ROLE
    case 'role-students':
        $type = $_GET['type'] ?? 0;
        RoleController::getRoles($type);
        break;
    default:
        // var_dump($url);
        // break;
        $action = isset($_GET['action']) ? $_GET['action'] : 'default';
        if ($action === 'restore') {
            StudentController::restore();
        }
        else if ($action === 'purge') {
            StudentController::purge();
        } 
        else {
            StudentController::index();
        }
        break;
}

