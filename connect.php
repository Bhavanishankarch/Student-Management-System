<?php
$Name=$_POST['Name'];
$RollNumber=$_POST['RollNumber'];
$FatherName=$_POST['FatherName'];
$gender=$_POST['gender'];
$Age=$_POST['Age'];
$Qualification=$_POST['Qualification'];
$CGPA=$_POST['CGPA'];
$Marks=$_POST['Marks'];
$CollegeName=$_POST['CollegeName'];
$Address=$_POST['Address'];
$PinCode=$_POST['PinCode'];


$conn=new mysqli('localhost','root','','project-w');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into datasubmit(Name,RollNumber,FatherName,gender,Age,Qualification,CGPA,Marks,CollegeName,Address,PinCode)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssissssss",$Name,$RollNumber,$FatherName,$gender,$Age,$Qualification,$CGPA,$Marks,$CollegeName,$Address,$PinCode);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
}

?>