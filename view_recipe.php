<?php
//COnnect to database
include('templates/connect.php');

//Declare empty variables
$recipe_id = $delete_id = '';

if(isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];

    $delete_query = "DELETE FROM `recipe_tb` WHERE recipe_id = '$delete_id'";

    $send_delete_query = mysqli_query($connect, $delete_query);

    if($send_delete_query){
        header('Location: index.php');
    } else {
        echo 'could not delete' , mysqli_connect_error($connect);
    }

    mysqli_close($connect);
}

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
<p class="green-text text-darken-4">How to Prepare:</p>
<p><?php echo $recipe['recipe_description'] ?></p>

    <form action="view_recipe.php" method="POST">
        <div class="row">
            <div class="col s1">
                <input type="text" name="delete_id" hidden value="<?php echo $recipe['recipe_id']; ?>">
            </div>
            <br>
        </div>
        <input type="submit" value="delete" name="delete" class="btn btn-flat green darken-4 white-text">
    </form>

<?php  include('templates/footer.php')?>