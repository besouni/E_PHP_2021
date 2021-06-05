<?php
   $sql = "SELECT * FROM users ORDER BY created_at DESC";
   $result = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_assoc($result)){
?>
      <div class="info">
         <div class="firstname"><?=$row['firstname']?></div>
         <div class="lastname"><?=$row['lastname']?></div>
         <div class="age"><?=$row['age']?></div>
         <div class="actions">
            <span><a href="?action=edit&id=<?=$row['id']?>">EDIT</a></span>
            <span><a href="?action=delete&id=<?=$row['id']?>">DELETE</a></span>
         </div>
      </div>
<?php
   }
?>