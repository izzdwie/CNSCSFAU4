<!-- HTML with Bootstrap and PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5V/PJlLq8iU6t3Zm3agAIPcKAoP1Va+FLhjYuptpdjEZl5Cv7meN2dN9Pxtz1" crossorigin="anonymous">
  <title>File Upload with PHP and Bootstrap</title>
</head>
<body>

<div class="container mt-5">
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="fileInput" style="display: none" />
    
    <button type="button" class="btn btn-primary" onclick="openFileInput()">
      <i class="bi bi-cloud-upload"></i> Upload File
    </button>

    <div id="uploadedFileName" style="font-size: 24px;"></div>

    <button type="submit" class="btn btn-success mt-3">Submit</button>
  </form>
</div>

<script>
  function openFileInput() {
    document.getElementById('fileInput').click();
  }

  document.getElementById('fileInput').addEventListener('change', handleFileChange);

  function handleFileChange(event) {
    const fileInput = event.target;
    const file = fileInput.files[0];
    if (file) {
      document.getElementById('uploadedFileName').innerHTML = 'Uploaded File: ' + file.name;
    }
  }
</script>

</body>
</html>
