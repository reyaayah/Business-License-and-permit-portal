
<?php
@include 'config.php';

if(isset($_POST['submit'])){
    $error=array();
    $full_name=isset($_POST['full_name'])?$_POST['full_name']:'';
    $email=isset($_POST['email'])?$_POST['email']:'';
    $business_name=isset($_POST['business_name'])?$_POST['business_name']:'';
    $business_type=isset($_POST['business_type'])?$_POST['business_type']:'';
    $license_type=isset($_POST['license_type'])?$_POST['license_type']:'';

    if(empty($full_name)){
        $error[]='Please enter name';
    }
    if(empty($email)){
        $error[]='Please provide email';
    }
    if(empty($business_name)){
        $error[]='Please enter business name';
    }
    if(empty($business_type)){
        $error[]='Please provide business type';
    }
    if(empty($license_type)){
        $error[]='Please provide license_type';
    }
    

    if(!is_dir(UPLOAD_DIR)){
        mkdir(UPLOAD_DIR,0777, true);
    }
    $file_name=$_FILES['file']['name'];
    $file_tmp=$_FILES['file']['tmp_name'];
    $tmp=explode(".",$file_name);
    $file_ext=end($tmp);

    if(empty($error)){
        $insert_details= mysqli_query($conn, "INSERT INTO applications (full_name, email, business_name, business_type, license_type, file)
        VALUES ('$full_name', '$email', '$business_name', '$business_type', '$license_type', '$file_name')");
        if($insert_details==1){
            move_uploaded_file($_FILES['file']['tmp_name'],"uploaded_img/".$file_name);
            $message ="Application submitted successfully!";
        }
        else{
            $message="Error adding details to database";
        }
    }
    else {
        $message = implode(",", $error);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Applicattion</title>
</head>
<body>
<?php
        if(isset($message)){
            echo '<div class="message"><span>'.$message.'</span></div>';
        }
    ?>
<div class="message">
    <h2> </h2>

</div>
<h2 style="text-align: center;">Business License Application Form</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" value="<?php echo isset($full_name) ? $full_name : ''; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"value="<?php echo isset($email) ? $email : ''; ?>"><br>

        <label for="business_name">Business Name:</label>
        <input type="text" id="business_name" name="business_name" value="<?php echo isset($business_name) ? $business_name : ''; ?>"><br>

        <label for="business_type">Business Type:</label>
        <input type="text" id="business_type" name="business_type" value="<?php echo isset($business_type) ? $business_type : ''; ?>"><br>

        <label for="license_type">License Type:</label>
        <select id="license_type" name="license_type" value="<?php echo isset($liscence_type) ? $liscence_type : ''; ?>">
            <option value="General Business License">General Business License</option>
            <option value="Food and Beverage License">Food and Beverage License</option>
            <option value="Health and Safety Permit">Health and Safety Permit</option>
        </select><br>
        <label for="file">Documents</label>
        <input type="file" id="file" name="file">

        <button type="submit" id="submit" name="submit">Submit Application</button>

    </form>
</body>
</html>

