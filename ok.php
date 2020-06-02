<?php
$pass = "special";
$errors = '<p style="color:red">incorrecte</p>';
if (isset($_POST['mdp']) && $_POST['mdp'] == $pass){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p align="center">you have successfully found the password to access this page and then you can do what you want now.</p>
</body>
</html>
<?php
}
else{
    echo $errors;
}
?>