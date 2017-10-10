<?php include '../view/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">

<main>

    <h2>Register for an Event</h2><br>

    <form action="index.php" method="post">
        <input type ="hidden" name ="action" value ="changeReg">
        <label>Racer: </label><?php echo $_SESSION['first'] . ' ' . $_SESSION['last']; ?><br><br>
        <label>Vehicle Type:</label>
        <select name="vehicle">
            <?php foreach ($vehicles as $vehicle) : ?>
                <option value="<?php echo $vehicle['vehicleType']; ?>">
                    <?php echo $vehicle['vehicleType']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <br>
        <label>Select an event, The event type MUST match the vehicle type.</label><br>
        <select name="event">
            <?php foreach ($events as $event) : ?>
                <option value="<?php echo $event['eventName']; ?>">
                    <?php echo $event['eventName']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <input type="hidden" name="first" value="<?php echo $_SESSION['first']; ?>">
        <input type="hidden" name="last" value="<?php echo $_SESSION['last']; ?>">
        <input type="hidden" name="registeriD" value="<?php echo $registerID; ?>">
        <input class="btn-me" type="submit" value="Change">
    </form>
</main>
<?php include '../view/footer.php'; ?>


