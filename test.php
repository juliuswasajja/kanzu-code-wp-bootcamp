<!DOCTYPE html>

<html>

<head>

<title>Embed PHP in a .html File</title>

</head>

<body>

<h1>

tes this and 
<?php
echo "hello world"

?>

hahaha    
    #</h1>




    <?php

$employees = array('John', 'Michelle', 'Mari', 'Luke', 'Nellie');

?>

<h1>List of Employees</h1>

<ul>

<?php foreach ($employees as $employee) { 
    ?>

<li>
    <?php echo $employee ?>
</li>

<?php }  ?>

</ul>

</body>

</html>