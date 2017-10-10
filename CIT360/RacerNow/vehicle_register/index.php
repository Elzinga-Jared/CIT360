<?php

session_start();
// The db connection file for rc database
require_once('../model/database.php');

// Get the models needed 
require_once('../model/racer_db.php');
require_once('../model/registration_db.php');
require_once('../model/vehicle_db.php');
require_once ('../model/event_db.php');

$error = '';
// declare action
$action = filter_input(INPUT_POST, 'action');
// Check for and capture the value of action if sent from the browser

if ($action == NULL) {

    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'email';
    }
}
//---Default action- have user login with existing email--
if ($action == 'email') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// Validate the email
    if ($email == NULL || $email == FALSE) {
        $error = "";
        include '../view/racer_login.php';
    }
// pass through and trigger database functions
    else {
        $racer_first = get_racer_by_firstname($email);
        $racer_last = get_racer_by_lastname($email);
        // declare racer first and last as sessions.
        $_SESSION['first'] = $racer_first;
        $_SESSION['last'] = $racer_last;
        $vehicles = get_vehicles();
        $vehicle = filter_input(INPUT_POST, 'vehicle_id', FILTER_SANITIZE_STRING);
        $events = get_events();
        $racer_id = get_racerid($email);
        // *  4. Send the logged-in user to the vehicle registration page
        include ('../view/vehicle_register.php');
    }
}
//--Insert a registry--
else if ($action == 'registerRace') {
    $vehicle = filter_input(INPUT_POST, 'vehicle_id', FILTER_SANITIZE_STRING);
    $event = filter_input(INPUT_POST, 'event_id', FILTER_SANITIZE_STRING);
    $first = filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING);
    $last = filter_input(INPUT_POST, 'last', FILTER_SANITIZE_STRING);
    $vehicle_type = get_vehicleID($vehicle);


    if (empty($vehicle || $event || $first || $last)) {
        $error = "Not a valid email or you have not previously Registered. Please contact the website manager to be added to our database.";
        include '../view/racer_login.php';
    }
//    $registration_date = date("Y/m/d");
    else {
        $registerID = add_registration($first, $last, $vehicle, $event);
//       echo $first.', '.$last.', '.$vehicle.', '.$event;
//       exit;
        $message = "Please confirm your selections.";
        include '../view/check_order.php';
    }
// ---------------------Action to bring the user to the check_order form------------
} else if ($action == 'changeView') {
$first = filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING);
$last = filter_input(INPUT_POST, 'last', FILTER_SANITIZE_STRING);
$registerID = filter_input(INPUT_POST, 'registerID', FILTER_VALIDATE_INT);
$vehicle = filter_input(INPUT_POST, 'vehicle', FILTER_SANITIZE_STRING);
$event = filter_input(INPUT_POST, 'event', FILTER_SANITIZE_STRING);
$_SESSION['registerID'] = $registerID;
$vehicles = get_vehicles();
$events = get_events();
// Display edit page
include '../view/editForm.php';
exit;
}
//----------------------Action to actually change the registry------------------
else if ($action == 'changeReg'){
$first = filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING);
$last = filter_input(INPUT_POST, 'last', FILTER_SANITIZE_STRING);
$registerID = filter_input(INPUT_POST, 'registerID', FILTER_VALIDATE_INT);
$vehicle = filter_input(INPUT_POST, 'vehicle', FILTER_SANITIZE_STRING);
$event = filter_input(INPUT_POST, 'event', FILTER_SANITIZE_STRING);
// Validate 
if (empty($first || $last || $vehicle || $event || $registerID)){
    $error = "There was a problem, make sure all inputs are filled.";
include '../view/error.php';
exit;
// pass through to database
}else{
    edit_registration($first, $last, $vehicle, $event, $registerID);
    include '../view/check_order.php';
    exit;
}
}
//---------------------Action to confirm delete-----------------------------------
else if ($action == 'confirmDel'){
   $first = filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING);
   $registerID = filter_input(INPUT_POST, 'registerID', FILTER_VALIDATE_INT);
   $warning = "$first, are you sure you wish to delete this registry?";
   include '../view/confirmDel.php';
   exit;
   
}
//-------------------Action to delete registry-------------------------------------
else if ($action == 'cancel'){
    $first = filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING);
   $registerID = filter_input(INPUT_POST, 'registerID', FILTER_VALIDATE_INT);
   $confirm = "$first, you have successfully unregistered from the previously selected event.";
   include '../view/confirm.php';
   exit;
}
//---------------------Action to confirm----------------------------------------
else if ($action == 'Confirm'){
    $first = filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING);
    $last = filter_input(INPUT_POST, 'last', FILTER_SANITIZE_STRING);
    $vehicle = filter_input(INPUT_POST, 'vehicle', FILTER_SANITIZE_STRING);
    $event = filter_input(INPUT_POST, 'event', FILTER_SANITIZE_STRING);
    $confirm = "$first $last, <br> You have successfully registered <br> a $vehicle for the $event event.";
    include '../view/confirm.php';
    exit;
}
