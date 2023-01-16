<?php

session_start();

include("ayar.php");



if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {

    //header("Location: cikis.php");

}



//$id = $_GET['id'];







$sql = "delete from sairekle where id=$id";

//$sil=$baglan->query($sql);


if ($_POST ) {
    $id = $_POST["id"];
    $sorgu = $baglan->query("delete from sairekle where id='$id'");
    echo "<script> window.location.href='sairekle.php'; </script>";
                     }




if($baglan->query($sql)===TRUE)

  {

    echo"<script>alert('silindi.')</script>";

    
  }
else{
	echo"<script>alert('silinmedi.')</script>";
}







?>