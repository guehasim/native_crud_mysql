<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        
        include_once("koneksi.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO user(NamaUser) VALUES('$name')");
        
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>