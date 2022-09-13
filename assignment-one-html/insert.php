<?php


if(isset($_POST['todoitem'])){



$to_do_item = $_POST['todoitem'];

include 'connection.php';


$sql ="INSERT INTO todolistitems ( id,title ,date_added)VALUES( '14 ', '$to_do_item', '2022-09-1');";


            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // $conn->close();

}

?>
