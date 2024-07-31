<?php
@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Status Check</title>
   <link rel="stylesheet" href="style.css">
   <style>
       .table-container img {
         width: 150px; /* Set the width you want */
         height: auto; /* Maintain aspect ratio */
      }
      body {
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         min-height: 100vh;
         margin: 0;
         font-family: Arial, sans-serif;
      }

.table-container {
  margin: 20px auto;
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #ccc;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 12px;
  border: 1px solid #ccc;
  text-align: left;
}
   </style>
</head>
<body>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.
      '</span> <i class="fas fa-times" 
      onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
?>
<div class="container">
<section class="products">
   <h1 class="heading">Business Details</h1>
   <div class="box-container">
      <?php
      if(isset($_POST['email'])){
         $email = mysqli_real_escape_string($conn, $_POST['email']);
        $select_business = mysqli_query($conn,"SELECT * from applications WHERE email='$email'");
        if(mysqli_num_rows($select_business)>0){
            while($fetch_business = mysqli_fetch_assoc($select_business)){

      ?>
      <form action="" method="post">
    <div class="table-container">
      <table>
      <img src="uploaded_img/<?php echo $fetch_business['file']; ?>" alt="doc">
        <tr>
          <th>Full Name</th>
          <td><?php echo $fetch_business['full_name']; ?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?php echo $fetch_business['email']; ?></td>
        </tr>
        <tr>
          <th>Business Name</th>
          <td><?php echo $fetch_business['business_name']; ?></td>
        </tr>
        <tr>
          <th>Business Type</th>
          <td><?php echo $fetch_business['business_type']; ?></td>
        </tr>
        <tr>
          <th>License Type</th>
          <td><?php echo $fetch_business['license_type']; ?></td>
        </tr>
      </table>
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
      <h2>Check Application Status</h2>
            <form action="status_check.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <button type="submit">Check Status</button>
            </form>
         <h2>Print certificate</h2>
            <form action="certificate.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <button type="submit"> Print certificate</button>
            </form>
            
   </div>
</section>
</div>