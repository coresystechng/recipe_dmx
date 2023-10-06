<?php
//COnnect to database
include('templates/connect.php');

//Declare empty variables
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
    session_start();
    $_SESSION['recipe_id'] = $recipe['recipe_id'];
    //close the connection
    mysqli_close($connect);

    // print_r($recipe['recipe_id']);
}



?>

<?php  include('templates/header.php')?>

<h1><?php echo $recipe['recipe_name'] ?>
    <span>
        <a href="update_recipe.php?recipe_id=<?php echo $recipe['recipe_id']?>">
            <i class="material-icons small green-text text-darken-4">mode_edit</i>
        </a>
    </span>
</h1>
<p>created by: <?php echo $recipe['created_at']?></p>
<p class="green-text text-darken-4">How to Prepare:</p>
<p><?php echo $recipe['recipe_description'] ?></p>


<?php  include('templates/footer.php')?>