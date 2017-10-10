<?php include '../view/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">
<main>

    <h2>Racer Login</h2>
    
    <p>In order to select an event you have to already have registered with us.</p>
    <p>Enter Email address to register for an Event. </p>
 
     <?php echo '<p>' . (isset($error) ? $error : '') . '</p>' ?>
    <!--post it to index.php-->
    <form action="index.php" method="post">
   <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="Email@example.com" class="textbox">
    
    <input type="submit" value="Login">
    </form>
</main>
<?php include '../view/footer.php'; ?>

