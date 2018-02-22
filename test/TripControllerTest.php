<?php
echo '<pre>';

function getConfig() {
    return require("../config" . DIRECTORY_SEPARATOR . "config.php");
}

require_once('../classes/TripController.php');

$tripController = new TripController();

print_r('createTrip: <br/>' . $tripController->createTrip('2018-02-23 10:10:10', 1, 9.2, 9.2, 10.3, 10.3, 5));
echo '<br/>';
print_r('showCurrentTrips: <br/>' . $tripController->showCurrentTrips());
echo '<br/>';
//print_r('deleteTrip: <br/>' . $tripController->deleteTrip(3));
echo '<br/>';
print_r('setDriver: <br/>' . $tripController->setDriver(2, 2));
echo '<br/>';
print_r('getTripsBetween: <br/>' . $tripController->getTripsBetween('2018-02-23 07:10:10', '2018-02-24 10:10:10'));
echo '<br/>';
print_r('getTripsByDriver: <br/>' . $tripController->getTripsByDriver(2));
echo '<br/>';


echo '</pre>';