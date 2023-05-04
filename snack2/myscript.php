<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];
//salvo tutto all'interno di alcune variabili
$nameCheck = strlen($name) > 3;
$emailCheckDOT = str_contains($email, ".");
$emailCheckAT = str_contains($email, "@");
$ageCheck = is_numeric($age);
// che non userò
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
  <?php if (strlen($name) > 3 && str_contains($email, ".") && str_contains($email, "@") && is_numeric($age)) : ?>
    <div class="container text-center my-5">
      <h1 class="text-success my-4">ACCESS SUCCESS</h1>
      <div class="row">
        <div class="mb-5 d-flex flex-column gap-4">
          <h3>Welcome Mr. / Mrs. <?php echo $name; ?></h3>
          <h3>Your age is <?php echo $age; ?></h3>
          <h5>Your email is : <strong><?php echo $email; ?></strong></h5>
        </div>
      </div>
      <a name="new" id="new" class="btn btn-secondary" href="./index.php">New User</a>
    </div>
  <?php else : ?>
    <div class="container text-center my-5">
      <h1 class="text-danger my-4">ACCESS DENIED</h1>
      <a name="new" id="new" class="btn btn-secondary" href="./index.php">New User</a>
    </div>
    </div>
  <?php endif; ?>
</body>

</html>