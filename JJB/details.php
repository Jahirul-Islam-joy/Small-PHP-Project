<?php 

# connect to the database
include('config/db_connect.php');

# Detele functions
if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);

    $sql="DELETE FROM pizzas WHERE id = $id_to_delete";

    if(mysqli_query($conn,$sql)){
        //success
        header('location:index.php');
    } {
        //failure 
        echo 'query error : '. mysqli_errno($conn);
    }
}

# Checking the GET request id parameter
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn,$_GET['id']);

    # Make Sql
    $sql = "SELECT * FROM pizzas WHERE id=$id";

    # get the query result 
    $result = mysqli_query($conn,$sql);

    # Fetch the result in the array format
    $pizza=mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    # colse the database connection 
    mysqli_close($conn);

    # print the selected ids pizza
    // print_r($pizza);
}


?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<div class="container center ">

    <?php if($pizza): ?>

        <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
        <p>Created By: <?php echo htmlspecialchars($pizza['email']); ?></p>
        <p><?php echo date($pizza['created_at']); ?></p>
        <h5>Ingredients</h5>
        <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

        <!-- Delete form -->
        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>

    <?php else: ?>
        <h4>No pizza exits!</h4>

    <?php endif; ?>


</div>

<?php include('templates/footer.php'); ?>

</html>