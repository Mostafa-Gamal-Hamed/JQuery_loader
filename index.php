<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loader</title>
<!-- Css link  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="style.js"></script>
</head>
<body>
  <div class="container text-center">
    <h2>File Upload</h2>
    <h3 class="message"></h3>

    <form id="uploadForm" enctype="multipart/form-data">
      <input type="file" name="file" class="form-control"><br>
      <div class="w-25 m-auto mb-3">
        <div class="text-light bg-primary" id="progressBar" style="width: 0%;">0%</div>
      </div>
      <button type="submit" name="submit" class="btn btn-info w-25 m-auto">Upload</button><br>
      <p href="" class="linkFile mt-5"></p>
    </form>

  </div>
</body>
</html>
