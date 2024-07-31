
<?php
@include 'config.php';

if(isset($_POST['submit'])){
    $error=array();
    $cname=isset($_POST['cname'])?$_POST['cname']:'';
    $cemail=isset($_POST['cemail'])?$_POST['cemail']:'';
    $cphone=isset($_POST['cphone'])?$_POST['cphone']:'';
    $cmessage=isset($_POST['cmessage'])?$_POST['cmessage']:'';

    if(empty($cname)){
        $error[]='Please enter name';
    }
    if(empty($cemail)){
        $error[]='Please provide email';
    }
    if(empty($cphone)){
        $error[]='Please enter phone no';
    }
    if(empty($cmessage)){
        $error[]='Please provide message';
    }

    if(empty($error)){
        $insert_details= mysqli_query($conn, "INSERT INTO contacts (cname, cemail, cphone, cmessage)
        VALUES ('$cname', '$cemail', '$cphone', '$cmessage')");
        if($insert_details==1){
            $message ="Information submitted successfully!";
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
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<style>
        * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: Arial, sans-serif;
	line-height: 1.6;
}

/* Header styles */
header {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 20px;
	background-color: #333;
	color: white;
	height: 4rem;
}
/* banner section styles */
.banner {
	text-align: center;
	background-color: #ffffff;
	margin: 0 auto;
}

.banner img {
	max-width: 100%;
	height: auto;
}
/* Contact form styles */
.contact-form {
	padding: 40px 0;
	margin: 0 10px;
}

.form-container {
	max-width: 40%;
	margin: 0 auto;
	padding: 20px;
	background-color: #ffffff;
	border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.contact-form h2 {
	text-align: center;
	margin-bottom: 20px;
}

.form-group {
	margin-bottom: 20px;
}

.form-container label {
	display:block;
	font-weight: bold;
}
.form-container input, textarea{
	width: 100%;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 4px;
	margin-bottom: 1rem;
	resize: vertical;
}
.submit-button {
	padding: 10px 20px;
	background-color: #0dac30;
	border: none;
	color: white;
	border-radius: 4px;
	font-size: 1rem;
	cursor: pointer;
}

/* Contact info styles */
.contact-info {
	text-align: center;
	padding: 50px 0;
	background-color: #f7f7f7;
}

.contact-info h2 {
	margin-bottom: 20px;
}
.contact-pic{
	width: 10%; 
    height: auto;
}
    </style>
	<title>Contact us Page</title>
</head>

<body>
<?php
        if(isset($message)){
            echo '<div class="message"><span>'.$message.'</span></div>';
        }
    ?>

	<section class="banner">
		<img src="https://cdni.iconscout.com/illustration/premium/thumb/contact-us-5795988-4849052.png?f=webp"
			alt="Welcome to our Contact Us page" class="contact-pic">
		<h1>Get in Touch With Us</h1>
	</section>

	<!-- Contact form -->
	<section class="contact-form">
		<div class="form-container">
			<h2>Your Details</h2>
			<form action="" method="POST" enctype="multipart/form-data">

				<label for="cname">Name: </label>
				<input type="text" id="cname" name="cname" value="<?php echo isset($cname) ? $cname : ''; ?>">

				<label for="cemail">Email: </label>
				<input type="email" id="cemail" name="cemail" value="<?php echo isset($cemail) ? $cemail : ''; ?>" required>

				<label for="cphone">Phone: </label>
				<input type="tel" id="cphone" name="cphone" value="<?php echo isset($cphone) ? $cphone : ''; ?>">

				<label for="cmessage">Message: </label>
				<textarea id="cmessage" name="cmessage" rows="4"required> <?php echo isset($cmessage) ? htmlspecialchars($cmessage) : ''; ?> </textarea>

				<button type="submit" id="submit" name="submit" class="submit-button">Submit</button>
			</form>
		</div>
	</section>

	<!-- Company contact info -->
	<section class="contact-info">
		<h2>Address</h2>
		<address>
			Nepal Government<br>
Ministry of Industry, Commerce and Supplies<br>
Office of the Company Registrar<br>
Tripureshwor, Kathmandu, Nepal<br>
Assistant Registrar (Grievance Officer)<br>
			<br>
			
			Phone: <a href="tel:1234567890">123-456-7890</a><br>
			Email: <a href="mailto:info@ocr.gov.np">Info@ocr.gov.np</a>
		</address>
	</section>
</body>

</html>
