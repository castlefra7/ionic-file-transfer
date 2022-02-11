<?php

class Project {
    public $id;
    public $name;
    public $user_id;

    function __construct($_id, $_name, $_user_id)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->user_id = $_user_id;
    }
}

class Amounts {
    public $cout_total;
    public $cout_prevu;
    public $cout_depassement;

    function __construct($_cout_tot, $_cout_prevu, $_cout_depass)
    {
        $this->cout_total = $_cout_tot;
        $this->cout_prevu = $_cout_prevu;
        $this->cout_depassement = $_cout_depass;
    }
}

class TaskInfoUser {
    public $id;
    public $name;
    public $total_task;
    public $tot_remaing;
    public $tot_worked;
    public $tota_estimate;

    function __construct($_id, $_name, $_tottask, $_totremain, $_totwork, $_totest)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->total_task = $_tottask;
        $this->tot_remaing = $_totremain;
        $this->tot_worked = $_totwork;
        $this->tota_estimate = $_totest;
    }
}

class Task {
    public $id;
    public $name;
    public $estimated_hours;
    public $project_id;
    public $task_type_id;
    public $worked_hours;
    public $remaining_hours;
    public $user_name;
    
    function __construct($_id, $_name, $_estimated_hours, $_project_id, $_task_type_id)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->estimated_hours = $_estimated_hours;
        $this->project_id = $_project_id;
        $this->task_type_id = $_task_type_id;
    }
}

class TaskAdvances {
    public $id;
    public $date;
    public $task_id;
    public $task_name;
    public $worked_hours;
    public $remaining_hours;
    public $estimated_hours;

    function __construct($_id, $_task_name, $_task_id, $_worked_hours, $_remaining_hours, $_estimated_hours)
    {
        $this->task_name = $_task_name;
        $this->id = $_id;
        $this->task_id = $_task_id;
        $this->worked_hours = $_worked_hours;
        $this->remaining_hours = $_remaining_hours;
        $this->estimated_hours = $_estimated_hours;
    }
}

class ProjectAdvance {
    public $advance_percentage;
    public $project_id;
    public $depassement;
    public $total_worked_hours;
    public $total_remaining_hours;

    function __construct($_p_id, $_depass, $_advance, $_tot_worked, $_tot_remaining)
    {
        $this->advance_percentage = $_advance;
        $this->project_id = $_p_id;
        $this->depassement = $_depass;
        $this->total_worked_hours = $_tot_worked;
        $this->total_remaining_hours = $_tot_remaining;
    }
}

class User {
    public $id;
    public $name;
    function __construct($_id, $_name)
    {  
       $this->id = $_id; 
       $this->name = $_name; 
    }
}

class TaskType {
    public $id;
    public $name;

    function __construct($_id, $_name)
    {
        $this->id = $_id;
        $this->name = $_name;
    }
}