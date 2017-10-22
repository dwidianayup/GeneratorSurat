<?php 
include "koneksidatabase.php";

$id=$_GET['id'];
$kategori=$_GET['kat'];
$sql="delete from surat where no = '$id'";
mysqli_query($con,$sql);

if ($kategori=="bendera") {
    header("location:history_bendera.php"); 
}elseif ($kategori=="kabel") {
    header("location:history_kabel.php");
}elseif ($kategori=="stand") {
    header("location:history_stand.php");
}elseif ($kategori=="mediapartner") {
    header("location:history_mediapartner.php");
}else{

}
?>