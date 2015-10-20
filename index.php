<?php
require_once 'app/controller/PlanController.php';
require_once 'app/controller/PlanItemController.php';
require_once 'app/controller/StudentController.php';
require_once 'app/controller/NetworkController.php';


//todo make POST for operations like op=plan or op=student
$planController = new PlanController();
$planController->handleRequest();

$planItemController = new PlanItemController();
$planItemController->handleRequest();

$studentController = new StudentController();
$studentController->handleRequest();

$networkController = new NetworkController();
$networkController->handleRequest();

?>