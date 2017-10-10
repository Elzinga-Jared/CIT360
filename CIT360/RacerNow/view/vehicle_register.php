<?php include '../view/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">

<main>

    <h2>Register for an Event</h2><br>

    <form action="index.php" method="post">
        <input type ="hidden" name ="action" value ="registerRace">
        <label>Racer: </label><?php echo $_SESSION['first'] . ' ' . $_SESSION['last']; ?><br><br>
        <label>Vehicle Type:</label>
        <select name="vehicle_id">
            <?php foreach ($vehicles as $vehicle) : ?>
                <option value="<?php echo $vehicle['vehicleType']; ?>">
                    <?php echo $vehicle['vehicleType']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <br>
        <label>Choose an event.<br> Must match the vehicle type:</label><br><br>
        <select name="event_id">
            <?php foreach ($events as $event) : ?>
                <option value="<?php echo $event['eventName']; ?>">
                    <?php echo $event['eventName']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <input type="hidden" name="first" value="<?php echo $_SESSION['first']; ?>"><br>
        <input type="hidden" name="last" value="<?php echo $_SESSION['last']; ?>">
        <input type="submit" value="Register Vehicle for Event">
    </form>
</main>
<?php include '../view/footer.php'; ?>
