<?php 

include('templates/connect.php');

//Declare empty variables
$email = '';
$recipe_name = '';
$recipe_type = '';
$recipe_description = '';

//Check if the submit button is clicked
if(isset($_POST['submit'])) {
   
    //Record the inputs
    $email = $_POST['email'];
    $recipe_name = $_POST['recipe_name'];
    $recipe_type = $_POST['recipe_type'];
    $recipe_description = $_POST['recipe_description'];

    //write the query

    $save_query = "INSERT INTO `recipe_tb`(`email`, `recipe_name`, `recipe_type`, `recipe_description`) VALUES ('$email','$recipe_name','$recipe_type','$recipe_description')";

    //send the query to server
    $send_to_server = mysqli_query($connect, $save_query);

    //Check if the data is saved to the database
    if($send_to_server){
        header('Location: index.php');
    } else {
        echo 'Error to save data' . mysqli_error(($connect));
    }

}
   

?>






<?php include('templates/header.php');?>

    <div class="row">
        <br>
        <div class="container center">
            <h4>New Recipe</h4>
            <form action="add_recipe.php" method="POST">
                <div class="col s12 input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="email" name="email" id="email" class="validate">
                    <label for="email">Your Email</label>
                </div>
                <div class="col s6 input-field">
                <i class="material-icons prefix">cake</i>
                <input type="text" name="recipe_name" id="recipe_name" required> 
                <label for="recipe_name">Recipe Name</label>
            </div>
            <div class="col s6 input-field">
                <select name="recipe_type" id="recipe_type">
                <option value="" disabled selected>Recipe Type</option>
                <option value="cake">Cake</option>
                <option value="soup">Soup</option>
                <option value="chicken">Chicken</option>
                </select>
                <!-- <label for="recipe_type">Recipe Type</label> -->
            </div>
            <div class="col s12 input-field">
                    <i class="material-icons prefix">assignment</i>
                    <textarea name="recipe_description" id="recipe_description" class="materialize-textarea"></textarea>
                    <label for="recipe_description">How to Prepare</label>
                </div>
                <div class="col s12 ">
                    <input type="submit" name="submit" id="submit" value="submit" class="btn green darken-3 white-text">
                </div>
            </form>
        </div>
    </div>







<?php include('templates/footer.php'); ?>