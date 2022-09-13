<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content=”width=device-width, initial-scale=1.0″> -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/fontawesome/webfonts/fa-solid-900.ttf">

    <title>To Do List</title>
<body>
    <?php 
    include 'connection.php';
    include 'insert.php';
    include 'select.php';

    ?>

            
    <header>
        
    </header>
    <main>
        <div class="row">
            <div class ="col-12">
                <h1><span><i class="fa-solid fa-check-square"></i></span> My Todo-s</h1>
            </div>
        </div>
        
        <div class="row" id="form-container">
            <div class="col-9">
                <form id="my-todos-form" method="POST" action="insert.php"">
                    <input id="add-new-to-do-item" name="todoitem" type="text" placeholder="Add new...">
            </div>

            <div class="col-3">
                <!-- <span class="calendaricon" style="color:#006CFF ;"><i class="fa-regular fa-calendar-days"></i></span> -->
                    <!-- <input type="date"> -->
                    <input class="form-button" type="submit" value="Add" >
                </form>

                     <?php

                    // $to_do_list=["sleep","shower"];

                    // if(isset($_POST['todoitem'])){
                    
                    // $to_do_item = $_POST['todoitem'];

                    // array_push ($to_do_list, $to_do_item);
                    // }            

                     ?>
            </div>
        </div>
        
        <div class="row" id="filtersection">
            <div class="col-12">
                <label for="cars">Filter</label>

                    <select name="cars" id="cars">
                    <option value="volvo">All</option>
                    </select>
                
                    <label for="cars">Sort</label>

                    <select name="cars" id="cars">
                    <option value="volvo">Added date</option>
                    </select>
            </div>

        </div>
            
        <div class="row" id="listcontainer">


            <div class="col-8">
                <ul type = none id="my-to-dos-list">
                <?php
                    
                    foreach ($to_do_list as $to_do_item){
                        echo "<li>. $to_do_item . 
                        
                    <button class=''edit-button button'>
                        Edit
                    </button> 
                    <button class='delete-button button'>
                        Delete
                    </button>";
                    }
                
                ?>
                </ul>
            </div>

            <!-- <div class="col-2">
                    <button class="edit-button button">
                        Edit
                    </button>
            </div>
            <div class="col-2">
                    <button class="delete-button button">
                        Delete
                    </button>
            </div> -->

            
            
        </div>     
    </main>
</body>
<!-- <script src="./assets/main.js"></script> -->
<footer>
</footer>
</html>