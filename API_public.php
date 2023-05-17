<?php

$conn=mysqli_connect("localhost,root,''");
mysqli_select_db($conn,"apidb");


$name=trim($_POST['name']);
$email=trim($_POST['email']);
$pass=trim($_POST['pass']);



$qry="select * from tbl_user where email='$email";
$raw=mysqli_query($conn,$qry);
$count=mysqli_num_rows($raw);


if($count>0){
    $response="Exist";

}

else{
    $qry="INSERT INTO ('tbl_user','name','email','pass') VALUSE (NULL,'$name','$email',$pass')";

    if($res==true)
    $response['Message']="Inserted";
    else['Message']="failed";
}
echo json_encode($response);
?>