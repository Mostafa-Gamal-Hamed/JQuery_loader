<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>
  <!-- Css link  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Jquery link -->
  <script src="jquery.js"></script>
</head>
<body>

  <div class="container text-center">
    <div class="mt-5">
      <!-- Message -->
      <h2 class="text-center text-success"><?php echo (isset($_SESSION['message'])) ? $_SESSION['message'] . " uploaded successfully" : ''; session_unset(); ?></h2>

      <form action="loader.php" method="get" enctype="multipart/form-data">
        <input type="file" name="file" id="file" class="form-control mt-3 w-50 m-auto"><br>
        <button type="submit" id="submit" name="submit" class="btn btn-primary w-25 m-auto">Upload</button>
      </form>
    </div>
  </div>

  <!-- Jquery style -->
  <script>

  </script>
</body>
</html>