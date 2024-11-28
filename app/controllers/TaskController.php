<?php
require_once "../app/models/Task.php";

class TaskController
{
    private $taskModel;

    public function __construct()
    {
        $this->taskModel = new Task();
    }

    public function index()
    {
        $tasks = $this->taskModel->getAll();
        require_once "../app/views/tasks/index.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->taskModel->create($_POST['name']);
            header("Location: " . BASE_URL . "Task/index");

        }
        require_once "../app/views/tasks/create.php";
    }

    public function delete($id)
    {
        $this->taskModel->delete($id);
        header("Location: " . BASE_URL . "Task/index");
    }

    public function update($id){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name']; 
            $this->taskModel->update($name, $id); 
            header("Location: " . BASE_URL . "Task/index");
            exit;
        }
   
        // Fetch the task by id to display the current task details
        $task = $this->taskModel->getById($id);
        require_once "../app/views/tasks/update.php";
   }
   

}