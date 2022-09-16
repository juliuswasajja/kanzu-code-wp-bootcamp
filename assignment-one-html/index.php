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
                <form id="my-todos-form" method="POST" >
                    <input id="add-new-to-do-item" name='todoitem' type="text" placeholder="Add new...">
            </div>
            

            <div class="col-3">
                <!-- <span class="calendaricon" style="color:#006CFF ;"><i class="fa-regular fa-calendar-days"></i></span> -->
                    <!-- <input type="date"> -->
                    <input class="form-button" type="submit" value="Add">
                </form>
                
            </div>

            

            
        </div>


        <div class='row'>

        <p>
            <?php
                echo 'final test';

                print_r($_REQUEST);
               // file_put_contents("post.log", print_r($_POST['todoitem'], true));

               file_put_contents("post.log",print_r($_POST,true),FILE_APPEND);
             //   error_log("postreq.log", print_r($_REQUEST, true),FILE_APPEND);


            ?>
        </p>


            <p>
          
                
                
            <?php 
            
            if (array_key_exists("todoitem",$_POST))
            {
            echo "Key exists!";
            }
            else
            {
            echo "Key does not exist!";
            }


            echo 'This div is for php only ';
            var_dump($_POST['todoitem']);
            //var_dump($_REQUEST);
            //var_dump($_GET);
            
            
            ?></p>
        <?php
            if ( isset($_POST['todoitem'])){
            //print_r($_POST['todoitem']);
            //
            //var_dump($_POST['todoitem']);

            $item_name = $_POST['todoitem'];

            ?> <p> <?php

            echo $item_name;

            ?> </p>
            <?php
            }
            // else{
            //     echo 'not set';
            // }

            ?>

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
            <div class="col-12">
                <ul type = none id="my-to-dos-list">
                </ul>
            </div>
            <!-- <div class="col-3">
                <ul type = none id="my-to-dos-list">
                </ul>
            </div> -->




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
<script src="./assets/main.js"></script>
<footer>
</footer>
</html>