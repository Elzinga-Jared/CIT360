<?php include '../view/header.php';?>
<main>
    <h1>Confirmation Page</h1>
  <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
         <form action="index.php" method="post" id="add_form">
             <input type="hidden" name="action" value="changeView">
                <h2>Registry Details</h2>
                <input type="hidden" name="first" value="<?php echo $first; ?>" readonly>
                <input type="hidden" name="last" value="<?php echo $last; ?>" readonly>
                
                <label>Vehicle Type</label>
                <input type="text" name="vehicle" value="<?php echo $vehicle; ?>" readonly>
                <br>

                <label>Racing Event</label>
                <input type="text" name="event" value="<?php echo $event; ?>" readonly>
                <br>

                <input type="hidden" name="registerID" value="<?php echo $registerID; ?>" readonly>
         <label class="request">Edit selection?</label>
                <input class="btn-me" type="submit" value="Change Registry">
            </form><br>
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="confirmDel">
                <label class="request">Cancel Selection.</label>
                <input type="hidden" name="registerID" value="<?php echo $registerID; ?>" readonly>
                <input type="hidden" name="first" value="<?php echo $first; ?>">
                <input class="btn-me" type="submit" value="Cancel Registry">
            </form><br>
            <form action="index.php" method="post">
                <label class="request">Submit Request</label>
                <input type="hidden" name="first" value="<?php echo $first;?>">
                <input type="hidden" name="last" value="<?php echo $last; ?>">
                <input type="hidden" name="vehicle" value="<?php echo $vehicle; ?>">
                <input type="hidden" name="event" value="<?php echo $event; ?>">
                <input class="btn-me" type="submit" name="action" value="Confirm">
            </form>
</main>
