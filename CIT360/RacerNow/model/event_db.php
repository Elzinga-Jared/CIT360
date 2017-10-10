<?php

// create a function to select events by vehicle
function get_events() {
    global $db;
    $query = 'SELECT * FROM events
                ORDER BY eventName';
    $statement = $db->prepare($query);
    $statement->execute();
    $events = $statement->fetchAll();
    $statement->closeCursor();
    return $events;
}
