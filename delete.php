<?php include 'header.php';
include_once 'crud.class.php'; ?>

<body class="body">

<a href="index.php"><button>Back to table</button></a>

</body>

</html>

<?php

$crud = new crud();

$crud->delete($_GET['id']);