<?php 

function get_racer_by_firstname($email) { 
    global $db;
    $query = 'SELECT *
                FROM racers
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $racer = $statement->fetch();
    $statement->closeCursor();
    $racer_first = $racer['firstName'];
    return $racer_first;
    
}
function get_racer_by_lastname($email) { 
    global $db;
    $query = 'SELECT *
                FROM racers
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $racer = $statement->fetch();
    $statement->closeCursor();
    $racer_last = $racer['lastName'];
    return $racer_last;
}

    function get_racerid($email) { 
    global $db;
    $query = 'SELECT *
                FROM racers
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $racer = $statement->fetch();
    $statement->closeCursor();
    $racer_id = $racer['racerID'];
    return $racer_id;
    }
 