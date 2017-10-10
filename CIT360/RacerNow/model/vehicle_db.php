<?php

// Get all the products for the registration dropdown list
//function get_products() {
//    global $db;
//    $query = 'SELECT * FROM tech_support
//            . 'WHERE productID = :product_id';


function get_vehicles() {
    global $db;
    $query = 'SELECT vehicleType FROM vehicles
              ORDER BY vehicleType';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

   // this is a select statement from the dropdown menu
    function get_vehicleID($name) {
    global $db;
    $query = 'SELECT vehicleType
                FROM vehicles
              WHERE vehicle_id = :vehicle_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':vehicle_id', $name);
    $statement->execute();
    $vehicle_name = $statement->fetch();
    $statement->closeCursor();
    $vehicle_type = $vehicle_name['vehicleType'];
    return $vehicle_type;
    }