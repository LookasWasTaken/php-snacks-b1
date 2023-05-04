<?php
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
//<?php echo strlen($censored);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- EXTERNAL BOOTSTRAP CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Your Data</title>
</head>

<body>

<?php

if ($name < "3" && ) {
  echo "Access Denied";
} else {
  echo "Access Succed";
}
?>


  <div class="container text-center my-5">
    <h1 class="text-danger my-4">Your insert data</h1>
    <div class="row m">
      <div class="mb-5 d-flex flex-column gap-4">
        <h3>Welcome Mr. / Mrs. <?php echo $name; ?></h3>
        <h3>Your age is <?php echo $age; ?></h3>
        <h5>Your email is : <strong><?php echo $email; ?></strong></h5>
      </div>
    </div>
    <a name="new" id="new" class="btn btn-secondary" href="./index.php">New User</a>
  </div>
</body>

</html>