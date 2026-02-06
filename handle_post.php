<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Handle Post</title>
</head>
<body>

<h1>Form Results</h1>

<?php
// Step 1: Get values from POST
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

// Step 2: Concatenate strings
$full_name = $first_name . ' ' . $last_name;

// Step 3: Display result
echo "<p>Hello, $full_name!</p>";
?>

</body>
</html>
