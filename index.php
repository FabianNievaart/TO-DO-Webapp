<?php include 'header.php'?>

<body>

<?php
/*echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>To do</th><th>Done?</th><th>Action</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = null;
$dbname = "myDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM todo");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
*/?>


<?php

$servername = "localhost";
$username = "root";
$password = null;
$dbname = "mydb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM todo");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll();


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo "<table style='border: solid 1px black;'>
        <thead>
            <tr>
                <th>Id</th>
                <th>To do</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>";

foreach ($result as $v) {
echo "<tr>
        <td style='width:150px;border:1px solid black;'>".$v['id']."</td>
        <td style='width:150px;border:1px solid black;'>".$v['todo']."</td>
        <td style='width:150px;border:1px solid black;'><a href='delete.php'>Delete</a></td>
      </tr>";
}
echo "</tbody>
      </table>"
?>
</body>
</html>