<?php

$fname = "";
$lname = "";
$age = "_";

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {

    $dir_prof = "upload/prof_pic/"; //directory folder for prof
    $dir_bg = "upload/background_pic/"; //directory folder for bg
    $original_profpic = $_FILES["profpic"]["name"];//store prof here
    $original_bgpic = $_FILES["bgpic"]["name"]; //store bg here 
    $uploadOk = 1;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $prefix = $fname . "_";


    if (isset($original_profpic)) {
        $new_profpic = $prefix . $original_profpic;
        $file_prof = $dir_prof . basename($new_profpic);//insert the file here
        $imageFileType_prof = strtolower(pathinfo($file_prof, PATHINFO_EXTENSION));

        //check if file is real image
        $check = getimagesize($_FILES["profpic"]["tmp_name"]);
        if ($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Profile is not an image.";
            $uploadOk = 0;
        }

        // Check file type (extension)
        if ($imageFileType_prof != "jpg" && $imageFileType_prof != "png" && $imageFileType_prof != "jpeg"
            && $imageFileType_prof != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed for profile picture.";
            $uploadOk = 0;
        }

        //check for uploading
        if ($uploadOk == 0) {
            echo "Sorry, your Profile picture was not uploaded.";

          // if everything is ok, upload file
        } else {
            if (move_uploaded_file($_FILES["profpic"]["tmp_name"], $file_prof)) {
              //echo "The file " . htmlspecialchars(basename($_FILES["profpic"]["name"])) . " has been uploaded.";
               echo '<script>alert("The Profile picture has been uploaded.");</script>';
            } else {
              echo "Sorry, there was an error uploading your Profile picture.";
            }
        }

    } else{
        echo "Profile not uploaded";
    }

    if (isset($original_bgpic)) {
        $new_bgpic = $prefix . $original_bgpic;
        $file_bg = $dir_bg . basename($new_bgpic);//insert the file here
        $imageFileType_bg = strtolower(pathinfo($file_bg, PATHINFO_EXTENSION));

        //check if file is real image
        $check = getimagesize($_FILES["bgpic"]["tmp_name"]);
        if ($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Background is not an image.";
            $uploadOk = 0;
        }

        // Check file type (extension)
        if ($imageFileType_bg != "jpg" && $imageFileType_bg != "png" && $imageFileType_bg != "jpeg"
            && $imageFileType_bg != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed for background.";
            $uploadOk = 0;
        }

        //check for uploading
        if ($uploadOk == 0) {
            echo "Sorry, your background picture was not uploaded.";

          // if everything is ok, upload file
        } else {
            if (move_uploaded_file($_FILES["bgpic"]["tmp_name"], $file_bg)) {
              //echo "The file " . htmlspecialchars(basename($_FILES["bgpic"]["name"])) . " has been uploaded.";
                echo '<script>alert("The Background picture has been uploaded.");</script>';
            } else {
              echo "Sorry, there was an error uploading your background picture.";
            }
        }

    } else{
        echo "Background not uploaded";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Black+Ops+One&family=Creepster&family=La+Belle+Aurore&family=MedievalSharp&family=Orbitron&family=Rye&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme.css">
    <script src="js/index.js"></script>

	<title>Happy Birthday</title>

	<style type="text/css">
    	#suprise-img:active {
            <?php
                if (isset($file_bg)) {
                echo 'background-image: url("'.$file_bg.'")';
            }else{
                echo 'background-image: url("upload/background_picDaniel_Screenshot 2023-03-22 210750.png")';
            }
            ?>
/*             background-image: url("<?php echo $file_bg; ?>");*/
        }
        .suprise-imgs{
/*            background-image: url("upload/gift-cover.jpg");*/
            <?php
                if (isset($file_bg)) {
                echo 'background-image: url("upload/gift-cover.jpg")';
            }else{
                echo 'background-image: url("upload/gift-cover.jpg")';
            }
            ?>
        }
	</style>

</head>
<body>
	<header>
		<div id="header">
            <h1>Happy birthday <?php echo "$fname $lname";?></h1>
            <?php 
            if (isset($file_prof)) {
                echo '<img id="prof-pic" src="'.$file_prof.'"';
            }else{
                echo '<img id="prof-pic" src="upload/prof_picDaniel_Screenshot 2023-04-27 201117.png">';
            }
            ?>
            <h2 id="age">You are now <?php echo "$age";?> years old</h2>
        </div>
	</header>

	<section>
		<div class="suprise-section">
            <h2 class="suprise-title">Here's my supprise for you</h2>
            <h3 class="hint" id="hint">(Hold on to the gift)</h3>
            <div class="suprise-imgs" id="suprise-img"></div>
        </div>
    </section>

    <footer id="footer">
        <p id="footer">Edit and Upload file <a href="upload.php">HERE!</a></p>
        <a href="index.html"><button>Back to Dashboard</button></a>
    </footer>

</body>
</html>