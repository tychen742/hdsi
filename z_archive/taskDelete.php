<?php
include_once('../includes/headers.php');

//if ($_GET['submit'] == "delete") {
//    error_log('task_menu.php Delete is run.', 0);
//    if (!isset($_GET['id'])) {
//        error_log('the id array is empty.', 0);
//    } else {
//        $taskChecked = $_GET['id'];
//        error_log("task_menu.php saved id from GET: $taskChecked[0]", 0);
//
//
//        foreach ($taskChecked as $id_task) {
//            error_log("the id is $id_task", 0);
//            try {
//                $stmt = $pdo->prepare(" DELETE FROM task WHERE (id_task = $id_task ) ");
//                $stmt->execute();
//                echo "SUCCESS";
//            } catch (PDOException $exception) {
//                echo $exception->getMessage();
//                echo "OOPS Delete error!";
//            }
//        }
//    }
//}