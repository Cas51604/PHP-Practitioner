<?php

require 'functions.php';

class Task { // create class
    public $description;  //set properties
    public $completed = false;

    public function __construct($description) //create special construct method
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'), //0    triggers construct with 'new and class name'
    new Task('Finish my screencast'), //1
    new Task('Clean my room') //2
];

$tasks[0]->complete();

require 'index.view.php';

