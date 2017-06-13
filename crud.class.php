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

    public function delete($var1){

        require_once 'conn.php';

        if (isset($var1)){

//            $id = $_POST['id'];

            $sql = "DELETE FROM todo WHERE id=:val";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':val',$var1);
            // use exec() because no results are returned
            $stmt->execute();
            echo "Record deleted successfully";

        }
    }
}