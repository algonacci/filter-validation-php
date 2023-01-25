<?php
// if (filter_has_var(INPUT_POST, "data")) {
//  echo "Data Found!";
// } else {
//  echo "No data!";
// }

/*
if (filter_has_var(INPUT_POST, "data")) {
$email = $_POST["data"];

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email . "<br>";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "Email is valid!";
} else {
echo "Email is NOT valid!";
}
}
 */

$var = "<script>alert(1)</script>";
echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

$filters = array(
 "data"  => FILTER_VALIDATE_EMAIL,
 "data2" => array(
  "filter"  => FILTER_VALIDATE_INT,
  "options" => array(
   "min_range" => 1,
   "max_range" => 100,
  ),
 ),
);
echo "<br>";
print_r(filter_input_array(INPUT_POST, $filters));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter & Validation</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="text" name="data">
        <input type="text" name="data2">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
