<?php

$sql = "SELECT * FROM todolistitems;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - title: " . $row["title"]. " " . $row["date_added"]. "<br>";
    }
  } else {
    echo "0 results";
  }

?>
