<?php 

class Task{
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    public function getAll(){
        $stmt = $this->db->query("SELECT * FROM tasks");
        return $stmt->fetchAll();
    }

    public function create($name){
        $stmt = $this->db->prepare("INSERT INTO tasks (name) VALUES (?)");
        $stmt->execute([$name]);
    }

    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function getById($id){
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
   }

    public function update($name,$id){
        $stmt = $this->db->prepare("UPDATE tasks SET name=? WHERE id=?");
        $stmt->execute([$name, $id]);
    }
}