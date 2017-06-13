<?php include 'header.php';
include_once 'crud.class.php'; ?>
<body class="body">

<form action="add.php" method="post">
    To do:<br>
    <input required type="text" name="todo"><br>
    <input type="submit" value="Submit">
</form>

<a href="index.php"><button>Back to table</button></a>

</body>

</html>


<?php

$crud = new crud();

$crud->add();

/*
if (isset($_POST['todo'])){

$sql = "INSERT INTO todo (todo) 
VALUES (:todo);";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':todo',$todo);

$todo = $_POST['todo'];


$stmt->execute();

echo "<br>New record created successfully";
}*/
?>
