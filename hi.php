<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $me = array(
    "name" => "Cristan M. Lecira",
    "age" => 18,
    "address" => "Malolos, Bulacan",
    "hobbies" => "Sleeping, Eating, Playing",
    "dream_job" => "Software Engineer",
    "course" => "Associate in Computer Technology",
    "school" => "Bulacan Polytechnic College"
);

echo "My Personal Information<br>";
echo "Name: " . $me["name"] . "<br>";
echo "Age: " . $me["age"] . "<br>";
echo "Address: " . $me["address"] . "<br>";
echo "Hobbies: " . $me["hobbies"] . "<br>";
echo "Dream Job: " . $me["dream_job"] . "<br>";
echo "Course: " . $me["course"] . "<br>";
echo "School: " . $me["school"] . "<br>";

print "I am " . $me["name"] . ", a " . $me["course"] . " student of " . $me["school"] . ".";

?>
</body>
</html>