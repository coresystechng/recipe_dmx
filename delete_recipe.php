<?php
//COnnect to database
include('templates/connect.php');

//Recieve id from address bar

if(isset($_GET['recipe_id'])){
    $recipe_id = $_GET['recipe_id'];

}

//Declare empty variable
$delete_id = '';

//Check if Delete button is pressed
if(isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];

    //Write the Query to delete
    $delete_query = "DELETE FROM `recipe_tb` WHERE recipe_id = '$delete_id'";

    //Send Query to server
    $send_delete_query = mysqli_query($connect, $delete_query);

    if( $send_delete_query){
        header('Location: index.php');
    } else {
        echo 'error in deleting' . mysqli_connect_error($connect);
    }

    mysqli_close($connect);
};




?>

<?php  include('templates/header.php')?>
<br>
<br>
<br>
<br>
<h3>Delete Recipe?</h3>
<form action="delete_recipe.php" method="POST">
    <input type="text" name="delete_id" disabled value="<?php echo $recipe_id; ?>">
    <input type="submit" value="delete" name="delete" class="btn green darken-4 white-text">
</form>
<?php  include('templates/footer.php')?>