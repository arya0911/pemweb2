<?php
$profileArray = [
    "nama" => "Arya", 
    "semester" => 2 
];
echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";

$profileMultiArray = [
    [
        "nama" => "Arya",
        "semester" => 2
    ], [
        "nama" => "Jarwo",
        "semester" => 3
    ]
];
foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}