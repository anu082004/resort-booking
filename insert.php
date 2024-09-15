<?php
if(isset($_POST['submit']))
{
    $u1=$_POST['a'];
    $u2=$_POST['b'];
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"newproject");
    mysqli_query($con,"insert into marks values('$u1','$u2');");
}
?>