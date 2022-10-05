<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY ID_User DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New User</a><br/><br/>
 
    <table width='50%' border=1>
 
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    <?php 
    $no = 1; 
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['NamaUser']."</td>";   
        echo "<td><a href='edit.php?id=$user_data[ID_User]'>Edit</a> | <a href='delete.php?id=$user_data[ID_User]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>