<?php include 'header.php';
include_once 'crud.class.php'; ?>
    <body class="body">

    <form action="delete.php" method="post">
        Id of the item to delete:<br>
        <input required type="text" name="id"><br>
        <input type="submit" value="Submit">
    </form>

    <a href="index.php"><button>Back to table</button></a>

    </body>

    </html>


<?php

$crud = new crud();

$crud->delete($v['id']);