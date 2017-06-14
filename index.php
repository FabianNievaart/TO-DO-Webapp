<?php include 'header.php';
require 'conn.php'; ?>

<body>

<?php

    $stmt = $conn->prepare("SELECT * FROM todo");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll();

echo "<a href='add.php'>Add new to do</a><br>
      <table style='border: solid 1px black;'>
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
        <td style='width:150px;border:1px solid black;'><a href='delete.php?id=".$v['id']."'>Delete</a></td>
      </tr>";
}
echo "</tbody>
      </table>"
?>

</body>
</html>