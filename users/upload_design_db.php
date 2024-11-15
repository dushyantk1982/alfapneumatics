<?php

//$target_dir = "uploads/";
$target_dir = "../ingersol/";
$target_dir = $target_dir . basename( $_FILES["uploadDesign"]["name"]);
$uploadOk=1;

// Check if file already exists
if (file_exists($target_dir . basename($_FILES["uploadDesign"]["name"]))) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
//if ($uploadDesign_size > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}

// Only GIF files allowed 
//if (!($uploadDesign_type == "image/gif")) {
//  echo "Sorry, only GIF files are allowed.";
//    $uploadOk = 0;
//}

//File Uploading in DataBase
// Check if a file has been uploaded
if(isset($_FILES['uploadDesign'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploadDesign']['error'] == 0) {
        // Connect to the database
        $dbLink = new mysqli('localhost', 'alfapneumatic', '', 'alfapneumatic');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
		
		
 
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploadDesign']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploadDesign']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploadDesign']['tmp_name']));
        $size = intval($_FILES['uploadDesign']['size']);
		$division=$_POST['division'];
		$category=$_POST['category'];
		$product_name=$_POST['product_name'];
 
        // Create the SQL query
        $query = "
            INSERT INTO `file` (
                `division`,`category`,`product_name`,`name`, `mime`, `size`, `data`, `created`
            )
            VALUES (
                '{$division}','{$category}','{$product_name}','{$name}', '{$mime}', {$size}, '{$data}', NOW()
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
            $uploadDBOk=1;

			//echo 'Success! Your file was successfully added!';
        }
        else {
		$uploadDBOk=0;
            //echo 'Error! Failed to insert the file'."<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploadDesign']['error']);
    }
 
    // Close the mysql connection
   // $dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
	
}
 





// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 or $uploadDBOk==0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else { 
    if (move_uploaded_file($_FILES["uploadDesign"]["tmp_name"], $target_dir)) {
        echo "The file ". basename( $_FILES["uploadDesign"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


// Echo a link back to the main page
echo '<p>Click <a href="upload_design.html">here</a> to go back</p>';

?>
