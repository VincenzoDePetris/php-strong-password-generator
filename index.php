<?php
include_once './functions/functions.php';

$title = "STRONG PASSWORD GENERATOR";

$form_submitted =isset($_GET['password-length']);

$passwrod_length = $_GET['password-length'] ?? '';



if($form_submitted){
  $password = generate_password($passwrod_length);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strong password generator</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="m-4">
    <h1>
      <?php echo $title ?>
    </h1>

    <form>
      <div class="mb-2">
        <label for="password-length">Password length</label>
        <input type="number" name="password-length" min="5" max="20" value="">
      </div>
      <div>
        <button class="btn btn-primary">Generate</button>
      </div>
    </form>
  </div>
</body>
</html>