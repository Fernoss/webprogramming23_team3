<?php 
session_start(); 
include("../webprogramming23_team3/header.php");
echo "this is a session   ".$_SESSION['username'];
$email=$_SESSION['username'];


include("../webprogramming23_team3/db.php");
$sql = "SELECT * FROM  shammi_linkinfo WHERE email='$_SESSION[username]'";
echo $sql;
$result = $conn->query($sql);
if($result ->num_rows > 0) {?>
<div class="container">
<table class="table" style="color:white; margin-top:100px; border:2px;">
<thead>
<tr>
    <th scope="col">Business Name</th>
    <th scope="col">Website</th>
    <th scope="col">Image URL</th>
    <th scope="col">Description</th>
    <th scope="col">Time updated</th>
    <th scope="col">Edit</th>
    <th scope="col">Update</th>
</tr>
</thead>

 <?php
    while($row = $result ->fetch_assoc()){ ?>
    <tbody>
    <tr>
        <td><?php echo $row["orgName"];?></td>
        <td><a href="<?php echo $row['url'];?>"><?php echo $row['url'];?></a></td> 
        <td><a href="<?php echo $row['image'];?>"><?php echo $row['image'];?></a> </td>
        <td><?php echo $row["description"];?><?php echo "<p>Distance form the city center : ".$row["distance"]."km</p>";?></td>
        <td><?php echo $row["date"];?></td>
        <td><a href="linkInfoUpdate.php?id=<?php echo $row['linkId']; ?>">Update</a></td>
        <td><a href="linkInfoDelete.php?id=<?php echo $row['linkId']; ?>">Delete</a></td>
    </tr>
    </tbody>
   <?php } ?>
    </table><?php } else {  echo "no results";}?>
</div>
<?php  



$conn->close();
include "../webprogramming23_team3/footer.php"
?>


