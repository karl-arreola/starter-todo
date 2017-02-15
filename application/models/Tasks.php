<?php

class Tasks extends CI_Model {

	var $data = [
		['taskNo' => '1', 'taskName' => 'job1', 'taskDesc' => 'do stuff', 'status' => '1'],
		['taskNo' => '2', 'taskName' => 'job2', 'taskDesc' => 'do stuff again', 'status' => '1'],
		['taskNo' => '3', 'taskName' => 'job3', 'taskDesc' => 'do more stuff', 'status' => '1'],
		['taskNo' => '4', 'taskName' => 'job4', 'taskDesc' => 'do more stuff again', 'status' => '1']
	];

	public function __construct() {
		parent::__construct();
    }

    // return all tasks
    public function all() {
		return $this->data;
    }
}


?>
