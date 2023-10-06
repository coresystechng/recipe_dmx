<?php
include('templates/connect.php');
session_start();
$recipe_id = $_SESSION['recipe_id'];

//write the query
$select_single_data = "SELECT * FROM `recipe_tb` WHERE recipe_id = '$recipe_id'";

//send query to db
$send_query = mysqli_query($connect, $select_single_data);

$recipe = mysqli_fetch_assoc($send_query);

$update_recipe_name = '';

if(isset($_POST['update'])) {
    $update_recipe_name = $_POST['update_recipe_name'];

    $sql = "UPDATE `recipe_tb` SET recipe_name = '$update_recipe_name' WHERE recipe_id = '$recipe_id'";
    $send_update_query = mysqli_query($connect, $sql);

    if($send_query) {
        header('Location: index.php');
    } else {
        echo 'error in updating' . mysqli_connect_error($connect);
    }
}

mysqli_close($connect);
?>


<?php  include('templates/header.php')?>

<div class="container">
    <h1>Update Recipe</h1>
    <form action="update_recipe.php" method="POST">
        <div class="row">
            <div class="input-field col s6">
                <input type="text" name="update_recipe_name" id="" placeholder="<?php echo $recipe['recipe_name']; ?>">
            </div>
            <div class="col s12">
            <input type="submit" value="update" name="update" class="btn green darken-4 darken-4">
            </div>
        </div>
    </form>
</div>
<?php  include('templates/footer.php')?>