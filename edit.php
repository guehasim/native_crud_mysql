<?php
include_once("koneksi.php");
 
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $name=$_POST['name'];
        
    $result = mysqli_query($mysqli, "UPDATE user SET NamaUser='$name' WHERE ID_User=$id");
    
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE ID_User=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id     = $user_data['ID_User'];
    $name   = $user_data['NamaUser'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr>
                <td><input type="text" name="id" value=<?php echo $id;?> hidden></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>