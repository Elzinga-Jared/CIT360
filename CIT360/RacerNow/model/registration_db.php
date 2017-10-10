<?php

// Register the product and associate it with the customer
//// Check the registrations table to see what data is expected
function add_registration($first, $last, $vehicle, $event) {
    global $db;
    $query = 'INSERT INTO registration
        (racerFirst, racerLast, vehicle, event)
             VALUES (:first, :last, :vehicle, :event)';
    $statement = $db->prepare($query);
    $statement->bindValue(':first', $first, PDO::PARAM_STR);
    $statement->bindValue(':last', $last, PDO::PARAM_STR);
    $statement->bindValue(':vehicle', $vehicle, PDO::PARAM_STR);
    $statement->bindValue(':event', $event, PDO::PARAM_STR);
    $statement->execute();
    $rowsChanged = $statement->rowCount();
    $statement->closeCursor();
    return $rowsChanged;
}

// Edit a registry
function edit_registration($first, $last, $vehicle, $event, $registerID) {
    global $db;
    $sql = 'UPDATE registration 
                SET
                racerFirst = :first,
                racerLast = :last,
                vehicle = :vehicle,
                event = :event
                WHERE
                registerID = :registerID';
    $statement = $db->prepare($sql);
    $statement->bindValue(':first', $first, PDO::PARAM_STR);
    $statement->bindValue(':last', $last, PDO::PARAM_STR);
    $statement->bindValue(':vehicle', $vehicle, PDO::PARAM_STR);
    $statement->bindValue(':event', $event, PDO::PARAM_STR);
    $statement->bindValue(':registerID', $registerID, PDO::PARAM_INT);
    $statement->execute();
     $rowsChanged = $statement->rowCount();
    $statement->closeCursor();
    return $rowsChanged;
}

// Cancel a registry
function delete_registration($registerID) {
    global $db;
    $sql = 'DELETE FROM registration WHERE registerID = :registerID';
    $statement = $db->prepare($sql);
    $statement->bindValue(':registerID', $registerID, PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor();
}
// for the edit view I need to get registerID
function get_register($registerID){
    global $db;
    $query = 'SELECT * FROM registration
              WHERE registerID = :registerID';
    $statement = $db->prepare($query);
    $statement->bindValue(':registerID', $registerID, PDO::PARAM_INT);
    $statement->execute();
    $id = $statement->fetch();
    $statement->closeCursor();
    return $id;
}

