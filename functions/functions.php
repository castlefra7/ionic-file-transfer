<?php



/* CODE EXAMPLES
function insertProject(\Project $project) {
    $db = Flight::db();
    $stmt = $db->prepare('insert into projects (name, user_id) values (:name, :user_id)');
    $stmt->bindParam(':name', $project->name);
    $stmt->bindParam(':user_id', $project->user_id);

    $stmt->execute();
   
}

function getAllUsers() {
    $sql = "SELECT * FROM users";

    $query = Flight::db()->query($sql);

    $result = array();
    while ($row = $query->fetch()) {
        $result[] = new User($row["id"], $row["name"]);
    }
    return $result;
}

function getAllTaskAdvances($project_id) {
    $sql = "select tasks.id as task_id, tasks.name, tasks.estimated_hours, coalesce(somme_worked_hours.sum_worked_hours, 0) as worked_hours, coalesce(task_advances.remaining_hours, 0) as remaining_hours from tasks left join somme_worked_hours on somme_worked_hours.task_id = tasks.id left join max_remaining_hours on max_remaining_hours.task_id = tasks.id left join task_advances on task_advances.id = max_remaining_hours.max_remaining where tasks.project_id = %d";
    $sql = sprintf($sql, $project_id);

    $query = Flight::db()->query($sql);
    // $sth->bindParam(':id', $project_id);

    $result = array();
    while ($row = $query->fetch()) {
        $result[] = new TaskAdvances($row["task_id"], $row["name"], $row["task_id"], $row["worked_hours"], $row["remaining_hours"], $row["estimated_hours"]);
    }
    return $result;
}

function getOne($sql) {
    $query = Flight::db()->query($sql);
    $result = -1;
    if($row = $query->fetch()) 
    {
        $result = $row["col"];
    }
    return $result;
}

END CODE EXAMPLES */