<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intro PHP</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>

<body>

  <!-- Esempio con form -->

  <div class="container d-flex justify-content-center">
    <div class="card rounded-0 shadow col-10">

      <div class="card-body">
        <form action="myscript.php" method="get">
          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="placeholder" aria-describedby="suffixId">
          </div>
          <div class="mb-3">
            <label for="badword">Bad Word</label>
            <input type="text" name="badword" id="lastname" class="form-control" placeholder="placeholder" aria-describedby="suffixId">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>


    </div>
  </div>


</body>
