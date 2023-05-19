x`xml_error_stringx<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="fileToUpload">
  <input type="submit" value="Upload File">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $file = $_FILES['fileToUpload'];
  if ($file['error'] == UPLOAD_ERR_OK) {
    $filename = basename($file['name']);
    $filetype = $file['type'];
    $filesize = $file['size'];
    $tempname = $file['tmp_name'];
    // Do any necessary checks on file type and size here
    move_uploaded_file($tempname, 'uploads/' . $filename);
    echo 'File uploaded successfully.';
  } else {
    echo 'Error uploading file.';
  }
}
?>

</body>
</html>