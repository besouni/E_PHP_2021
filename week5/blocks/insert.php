<?php
   if(isset($_POST['insert'])){
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $age = $_POST['age'];
      $created_at = date("Y-m-d H:i:s");
      $sql = "INSERT INTO users(firstname, lastname, age, created_at) VALUES ('$firstname', '$lastname', '$age', '$created_at')";
      mysqli_query($conn, $sql);
      header("location:info.php");
   }
?>

<form method="post" class="insert">
   <h2>INSRT FORM</h2>
   <input type="text" name="firstname" placeholder="firstname">
   <br><br>
   <input type="text" name="lastname" placeholder="lastname">
   <br><br>
   <input type="numeric" name="age" placeholder="age">
   <br><br>
   <button name="insert">INSERT</button>
</form>