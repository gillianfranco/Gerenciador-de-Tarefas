<?php
    include "connection.php";
    $data = [
        'task' => $_POST['task'],
        'dateToDo' => $_POST['dateToDo'],
        'deadline' => $_POST['deadline'],
        'priority' => $_POST['priority'],
        'description' => $_POST['description']
    ];
    
    $sql = "INSERT INTO tasks (Task, DateToDo, Deadline, Priority, Description) VALUES('{$data['task']}', '{$data['dateToDo']}', '{$data['deadline']}', '{$data['priority']}', '{$data['description']}')";

    $conn ->    exec($sql);