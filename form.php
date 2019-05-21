<?php
$conn=mysqli_connect("localhost", "root", "", "farmers")or die(mysqli_error($conn));
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $location=$_POST['location'];
    $gender=$_POST['gender'];
    $crops=$_POST['crops'];
    $animals=$_POST['animals'];
}

$query=mysqli_query($conn, "INSERT INTO farmtb(id, fname, lname, location, gender, crops_grown, animals_rared)
VALUES(null, '$fname', '$lname', '$location', '$gender', '$crops', '$animals')")or die(mysqli_error($conn));

if($query){
    echo"success";
}else{
    echo"failed";
}

?>