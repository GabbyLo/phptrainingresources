<?php
    include_once ("config.php"); 
    if(isset($_POST['update']))
    {
        //'id' OR 'firsname' and others came from edit.php form (name)
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $bdate = $_POST['bdate'];
        $dept = $_POST['dept'];
        $rank = $_POST['rank'];

        //:fname, :lname and others are called placeholder
        $sql = "UPDATE tblemployee ";
        $sql .= "set Efname=:fname, Elname=:lname, Egender=:gender, Ebirthdate=:bdate, Edept=:dept, rank=:rank ";
        $sql .= "where ID = :id";
        $query = $conn->prepare($sql);
        $query->bindparam(':id', $id);
        $query->bindparam(':fname', $fname);
        $query->bindparam(':lname', $lname);
        $query->bindparam(':gender', $gender);
        $query->bindparam(':bdate', $bdate);
        $query->bindparam(':dept', $dept);
        $query->bindparam(':rank', $rank);
        $query->execute();

        echo "Successfully updated" . "<br/>";
        echo "<a href= \"index.php\">Back</a>";
    }
    else
    {
        echo "Error: Restricted Access.";
    }
?>
