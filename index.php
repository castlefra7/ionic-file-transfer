<?php
require 'flight/Flight.php';
require 'models/Models.php';
require 'functions/functions.php';

Flight::register('db', 'PDO', array('mysql:host=localhost;dbname=gestion_projet', 'root', 'root'), function ($db) {
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
});

Flight::before('route', function () {
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");

    header('Access-Control-Allow-Methods: GET,PUT,POST,DELETE');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
});


Flight::route('/', function () {
    echo 'hello world!';
});

Flight::route(' POST /pictures/upload', function () {
    $code = 200;
    $message = "";
    $data = array();
    try {
        $fileTmpPath = $_FILES['file_to_upload']['tmp_name'];
        $uploaddir = "D:\\files\\_docs\\documentations_cheatsheets\\_ionic_file_transfer_server\\server_file_transfer\\files\\";
        $uploadfile = $uploaddir . basename($_FILES['file_to_upload']['name']);
        if (move_uploaded_file($fileTmpPath, $uploadfile)) {
            $code = 200;
            $message = "Fichier uploader avec succés";
        } else {
            $code = 404;
            $message = "Une erreur inconnu est survenue";
        }
    } catch(\Exception $ex) {
        $code = 500;
        $message = $ex->getMessage();
    }
   
    $result = array(
        "status" => array(
            "code" => $code,
            "message" => $message
        ),
        "data" => $data
    );
    Flight::json($result);
});

/* CODE EXAMPLES

Flight::route('GET /tasks', function () {
    $code = 200;
    $message = "";
    $result = array(
        "status" => array(
            "code" => $code,
            "message" => $message
        ),
        "data" => getEveryTasks()
    );
    Flight::json($result);
});


Flight::route('GET /projects/@id/tasksinfousers', function ($id) {
    $code = 200;
    $message = "";
    $result = array(
        "status" => array(
            "code" => $code,
            "message" => $message
        ),
        "data" => getTasksInfoUsers($id)
    );
    Flight::json($result);
});


Flight::route('GET /tasks/@id', function ($id) {
    $code = 200;
    $message = "";
    $result = array(
        "status" => array(
            "code" => $code,
            "message" => $message
        ),
        "data" => getTask($id)
    );
    Flight::json($result);
});


Flight::route('GET /projects/@id/advances', function ($project_id) {
    $code = 200;
    $message = "";
    $result = array(
        "status" => array(
            "code" => $code,
            "message" => $message
        ),
        "data" => getAllTaskAdvances($project_id)
    );
    Flight::json($result);
});

Flight::route('POST /projects', function () {
    $code = 200;
    $message = "";
    $data = array();
    try {
        $newProject = new Project(-1, $_POST['name'], $_POST['user_id']);
        insertProject($newProject);
    } catch (\Exception $ex) {
        $code = 500;
        $message = $ex->getMessage();
    }

    $result = array(
        "status" => array(
            "code" => $code,
            "message" => $message
        ),
        "data" => $data
    );
    Flight::json($result);
});

Flight::route('POST /tasksassign', function () {
    $code = 200;
    $message = "";
    $data = array();
    $body = Flight::request()->getBody();
    $newData = json_decode($body, true);
    try {
        assignerTache($newData['user_id'], $newData['task_id']);
    } catch (\Exception $ex) {
        $code = 500;
        $message = $ex->getMessage();
    }

    $result = array(
        "status" => array(
            "code" => $code,
            "message" => $message
        ),
        "data" => $data
    );
    Flight::json($result);
});
*/

Flight::start();
