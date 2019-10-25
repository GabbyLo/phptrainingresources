<?php
include_once('config.php');
if(isset($_POST['add'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    if(empty($username) || empty($password) || empty($role)){
        if(empty($username)){
            echo "Username is empty";
        }
        if(empty($password)){
            echo "Password is empty";
        }
        if(empty($role)){
            echo "Role is empty";
        
        }

        echo "<a href=\"add.php\">Back </a>";

    }
    else{

    
    $sql = "insert into atan.tblusers ";
    $sql .= "(username, password, role) ";
    $sql .= "values (:username, :password, :role) ";
    $query = $conn->prepare($sql);
    $query -> bindparam(':username', $username);
    $query -> bindparam(':password', md5$password);
    $query -> bindparam(':role', $role);
    $query -> execute();

    echo "Successfully updated" . "<br/>";
    echo "<a href = \"index.php\">Back</a>";
    }
}
else{
    echo "ERROR: Restricted Access!";
}
?>