<?php 
    include('templates/connect.php');

    // 3. Create SQL query to get data from database

    $get_recipe_data = 'SELECT * FROM recipe_tb ORDER BY recipe_id DESC';

    //4. Send Query COmmand to server
    $send_query = mysqli_query($connect, $get_recipe_data);

    //5. Recieve & Store data from database

    $recipes = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

    //6. Close DB Connection

    mysqli_close($connect);

    // print_r($recipes);

?>

<?php include('templates/header.php');?>
    <h2 class="center-align">My Recipes</h2>

    <div class="row">
        <?php foreach ($recipes as $recipe){ ?>
        <div class="col s12 l4">
            <div class="card green lighten-5 hoverable center">
                <div class="card-image">
                    <img src="https://img.youtube.com/vi/tIlR4kl1mQ0/maxresdefault.jpg" alt="icon" width="" class="responsive-img">
                </div>
                <div class="card-content">
                    <h5 class="green-text text-darken-4"><?php echo $recipe['recipe_name'] ?>
                    </h5>
                    <p><?php echo $recipe['created_at'] ?></p> 
                </div>
                <div class="card-action green darken-4">
                    <a href="view_recipe.php?recipe_id=<?php echo $recipe['recipe_id'] ?>" class="white-text">MORE INFO</a>
                    <a href="delete_recipe.php?recipe_id=<?php echo $recipe['recipe_id'] ?>" class="white-text">DELETE</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>              
<?php include('templates/footer.php'); ?>
   