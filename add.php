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