<?php
/**
 * Created by PhpStorm.
 * User: Fabian N
 * Date: 9-6-2017
 * Time: 14:20
 */



class crud{

    public function add(){
        require_once 'conn.php';
        if (isset($_POST['todo'])){

            $todo = $_POST['todo'];

            $sql = "INSERT INTO todo (todo) 
                    VALUES (:todo);";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':todo',$todo);




            $stmt->execute();

            echo "<br>New record created successfully";
        }
    }

    public function delete(){


    }

}