<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Black+Ops+One&family=Creepster&family=La+Belle+Aurore&family=MedievalSharp&family=Orbitron&family=Rye&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/theme.css">
  <link rel="stylesheet" href="css/upload.css">
  <script src="js/index.js"></script>

  <title>Upload File</title>
</head>
<body>

  <form action="index.php" method="post" enctype="multipart/form-data" id="info">
    <label>Input First Name:</label>
      <input type="text" name="fname">
    <label>Input Lirst Name:</label>
      <input type="text" name="lname">
    <label>Input Age:</label>
      <input type="number" name="age">
    <label>Upload Profile Picture:</label>
      <input type="file" name="profpic" id="profpic">
    <label>Upload Picture:</label>
      <input type="file" name="bgpic" id="bgpic">
    <input type="submit"  name="submit" value="Submit">
    <a href="index.php"><button>Cancel</button></a>
  </form>

</body>
</html>

<?php

// $target_dir = "uploads/PROF";
// $original_profpic = $_FILES["profpic"]["name"];
// $original_bgpic = $_FILES["bgpic"]["name"];

// $new_filename = $prefix . $original_filename;
// $target_file = $target_dir . basename($new_filename);//insert the file here
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if (isset($_POST["submit"])) {

//   $fname = $_POST['fname'];
//   $lname = $_POST['lname'];
//   $age = $_POST['age'];


//   if (isset($original_profpic)) {
//     $new_profpic = $fname . $original_profpic;
//   } else{
//     echo "File not uploaded";
//   }

//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if ($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }

//   // Check file type (extension)
//   if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif") {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
//   }

//   if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//   // if everything is ok, try to upload file
//   } else {
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//       echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
//     } else {
//       echo "Sorry, there was an error uploading your file.";
//     }
//   }
// }

?>