<?php
    if(isset($_POST['edit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $id = $_POST['id'];
        $created_at = date("Y-m-d H:i:s");
        $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', age='$age', created_at='$created_at' WHERE id='$id'";
        mysqli_query($conn, $sql);
        header("location:info.php");
    }
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql = "SELECT * FROM users WHERE id='$id'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
?>
<form method="post" class="insert">
   <h2>EDIT FORM</h2>
   <input type="text" name="firstname" placeholder="firstname" value="<?=$row['firstname']?>">
   <br><br>
   <input type="text" name="lastname" placeholder="lastname" value="<?=$row['lastname']?>">
   <br><br>
   <input type="numeric" name="age" placeholder="age" value="<?=$row['age']?>">
   <br><br>
    <input type="hidden" name="id" value="<?=$row['id']?>">
   <button name="edit">EDIT</button>
</form>
<?php
   }
?>
