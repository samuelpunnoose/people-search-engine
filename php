<?php

if(isset($_POST['firstname'])&&!empty($_POST['firstname'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$search = file_get_contents("https://www.linkedin.com/pub/dir/".$firstname."/".$lastname);
echo htmlspecialchars($search);
}

?>

<html>
<form action="index.php" method="POST">
First Name: <input type="text" name="firstname"/></br>
Last Name: <input type="text" name="lastname"/></br>
<input type="submit"/>
</form>
</html>
