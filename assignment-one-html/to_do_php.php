<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>To Do List</title>
<body>
    <header>
        
    </header>
    <main>
        <?php     

        $to_do_list =['wake up', 'shower', 'breakfast', 'dress up','go to work'];

        //print to_do_list
        function print_to_do_list(){

            global $to_do_list;
            ?>
            <ol>
                <?php
                    foreach ($to_do_list as $to_do_item){
                        echo "<li> $to_do_item . </li> ";
                    };
                ?>
            </ol>
            <?php
        }
        //call function
        print_to_do_list();



        //replace shower with "sleep a bit more"
        function replace_item ($index,$item){

            global $to_do_list;
            
            $to_do_list[$index] = $item;

            print_to_do_list();

        }
        //call function
        //replace_item(1,'sleep a bit more');




        //remove shower from the array
        function delete_item ($index){
            
            global $to_do_list;
            
            array_splice ($to_do_list, $index-1 ,1 );

            print_to_do_list();

        }
        //call function
        //delete_item (2);

        ?>
    </main>
</body>
<footer>
</footer>
</html>