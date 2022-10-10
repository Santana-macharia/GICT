<?php
$url = 'http://developers.gictsystems.com/api/dummy/items/';

// authorization header
$Authorization: Bearer {ALDJAK23423JKSLAJAF23423J23SAD3};

// create HTTP context with basic auth
$context = stream_context_create([
    'http' => ['header' => "Authorization: Basic $auth"]
]);

// query for data
$data = file_get_contents($url, false, $context);
$escaped = json_encode($data);

/*Initializing temp variable to design table dynamically*/
$temp = "<table>";

/*Defining table Column headers depending upon JSON records*/
$temp .= "<tr><th>Edit</th>";
$temp .= "<th>Full Name</th>";
$temp .= "<th>Email</th>";
$temp .= "<th>Phone</th>";
$temp .= "<th>Address</th></tr>";

/*Generating rows & columns*/
    foreach ($escaped->Users as $user){
        $temp .= "<tr>";
        $temp .= "<td>" . $vehicle->Fullname . "</td>";
        $temp .= "<td>" . $vehicle->Email . "</td>";
        $temp .= "<td>" . $vehicle->Phone . "</td>";
        $temp .= "<td>" . $vehicle->Address . "</td>";
        $temp .= "</tr>";
    }

/*End tag of table*/
$temp .= "</table>";

/*Printing temp variable which holds table*/
echo $temp;
?>