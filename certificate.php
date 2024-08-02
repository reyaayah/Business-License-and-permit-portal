<?php
@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Business Certificate</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <style>

  .certificate-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
  }
  
  .certificate {
    background: #fff;
    padding: 40px;
    border: 20px solid #4CAF50;
    border-radius: 15px;
    width: 600px;
    text-align: center;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }
  
  .certificate h1 {
    font-family: "Sofia", sans-serif;
    font-size: 3em;
    margin-bottom: 10px;
  }
  
  .certificate h2 {
    font-family: "Sofia", sans-serif;
    font-size: 2em;
    margin: 20px 0;
  }
  
  .certificate h3, .certificate h4 {
    font-family: "Sofia", sans-serif;
    font-size: 1.5em;
    margin: 10px 0;
  }
  
  .certificate p {
    font-size: 1.2em;
    margin: 5px 0;
  }
  .but-design{
    
    display: block;
    width: 20%;
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
  }
  
  </style>
</head>
<body>
<?php
      if(isset($_POST['email'])){
         $email = mysqli_real_escape_string($conn, $_POST['email']);
        $select_business = mysqli_query($conn,"SELECT * from applications WHERE email='$email'");
        if(mysqli_num_rows($select_business)>0){
            while($fetch_business = mysqli_fetch_assoc($select_business)){

      ?>
<form action="" method="post">
  <div class="certificate-container">
    <div class="certificate">
      <h1>Business Certificate</h1>
      <h2>Certificate of Ownership</h2>
      <p>This is to certify that</p>
      <h2><?php echo $fetch_business['business_name']; ?></h2>
      <p>owned by</p>
      <h3><?php echo $fetch_business['full_name']; ?></h3>
      <p>has been officially registered as a</p>
      <h4><?php echo $fetch_business['business_type']; ?></h4>
      <p>under the license type</p>
      <h4><?php echo $fetch_business['license_type']; ?></h4>
      
    </div>
  </div>
</form>
<?php
            }
        }
        else {
            echo "<p>No application found for the provided email.</p>";
        }
      } else {
         echo "<p>Please enter an email to check the application status.</p>";
      }

      ?>
      <br><button class="but-design"><a href="certificate.php" download> Download certificate</a></button>

      
</body>
</html>
