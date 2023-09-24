<?php
//COnnect to database
include('templates/connect.php');

//Declare empty variable
$recipe_id = '';

//Check if variable is set 
if(isset($_GET['recipe_id'])){
    $recipe_id = $_GET['recipe_id'];
    // echo $recipe_id;

    //write the query
    $select_single_data = "SELECT * FROM `recipe_tb` WHERE recipe_id = '$recipe_id'";

    //send query to db
    $send_query = mysqli_query($connect, $select_single_data);

    //store result as associative array

    $recipe = mysqli_fetch_assoc($send_query);

    //close the connection
    mysqli_close($connect);

    // print_r($recipe);
}



?>

<?php  include('templates/header.php')?>

<h1><?php echo $recipe['recipe_name'] ?></h1>
<p>created by: <?php echo $recipe['created_at']?></p>
<?php  include('templates/footer.php')?>