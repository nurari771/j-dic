<?php
include 'connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp; </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<?php if(@$_GET["level"]!=""){
if(@$_GET["page"]==""){
	$page="1";
}else{
	$page=$_GET["page"];
}
$Per_page = "30";

$page_Start = ($page-"1")*$Per_page;
$strSQL = "SELECT * FROM jisho WHERE level='".$_GET["level"]."'";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$Num_Rows = mysql_num_rows($objQuery);
$total_page=ceil($Num_Rows/$Per_page);
$strSQL .=" order by id ASC LIMIT $page_Start , $Per_page";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th width="36">id</th>
        <th width="77"><div align="center">แสดง kanji </div></th>
        <th width="133">แสดง hiragana </th>
        <th width="79"><div align="center">แสดง romanji </div></th>
        <th width="79"><div align="center">ความหมาย</div></th>
      </tr>
    </thead>
    <tbody>
<?php 
$i=$page_Start;
while($result = mysql_fetch_array($objQuery)){$i++;?>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $result['kanji'];?></td>
        <td><?php echo $result['hiragana'];?> : hiraganasub =<?php echo $result['hiraganasub'];?> </td>
        <td><?php echo $result['romanji'];?> : romanjisub =<?php echo $result['romanjisub'];?></td>
        <td><?php echo $result['meaning'];?></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
 <a href="?level=<?php echo $_GET["level"];?>&page=1" aria-label="Previous">
 <span aria-hidden="true">&laquo;</span>
 </a>
 <?php for($i=1; $i<=$total_page; $i++){
	if(@$_GET['page']==""){
		$Page="1";
	}else{
		$Page=$_GET['page'];
	}
	$Page1 = $Page-4;
	$Page2 = $Page+4;
	if($i != $Page && $i >= $Page1 && $i <= $Page2){
?>
 <a href="?level=<?php echo $_GET["level"];?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php }elseif($i==$Page){ ?>
 <a href="#"><B><U><?php echo $i; ?></U></B></a>
<?php	}
}
 ?>
 <a href="?level=<?php echo $_GET["level"];?>&page=<?php echo $total_page;?>" aria-label="Next">
 <span aria-hidden="true">&raquo;</span>
 </a>
<?php }else{ ?>
<table width="938" border="0">
<?php 
$strSQL1 = "SELECT id FROM jisho WHERE level='1'";
$objQuery1 = mysql_query($strSQL1);
$Num_Rows1 = mysql_num_rows($objQuery1);
$strSQL2 = "SELECT id FROM jisho WHERE level='2'";
$objQuery2 = mysql_query($strSQL2);
$Num_Rows2 = mysql_num_rows($objQuery2);
$strSQL3 = "SELECT id FROM jisho WHERE level='3'";
$objQuery3 = mysql_query($strSQL3);
$Num_Rows3 = mysql_num_rows($objQuery3);
$strSQL4 = "SELECT id FROM jisho WHERE level='4'";
$objQuery4 = mysql_query($strSQL4);
$Num_Rows4 = mysql_num_rows($objQuery4);
$strSQL5 = "SELECT id FROM jisho WHERE level='5'";
$objQuery5 = mysql_query($strSQL5);
$Num_Rows5 = mysql_num_rows($objQuery5);

?>
  <tr>
    <td width="359"><a href="?level=5">Link &#3649;&#3626;&#3604;&#3591;&#3648;&#3593;&#3614;&#3634;&#3632; Level 5 &#3627;&#3617;&#3604;&#3607;&#3640;&#3585;&#3605;&#3633;&#3623;(&#3592;&#3635;&#3609;&#3623;&#3609; <?php echo $Num_Rows5;?>
 &#3588;&#3635;)</a></td>
    <td width="345">&nbsp;</td>
    <td width="220">&nbsp;</td>
  </tr>
  <tr>
    <td><a href="?level=4">Link&#3649;&#3626;&#3604;&#3591;&#3648;&#3593;&#3614;&#3634;&#3632; Level 4 &#3627;&#3617;&#3604;&#3607;&#3640;&#3585;&#3605;&#3633;&#3623;(&#3592;&#3635;&#3609;&#3623;&#3609; <?php echo $Num_Rows4;?>
 &#3588;&#3635;)</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="?level=3">Link&#3649;&#3626;&#3604;&#3591;&#3648;&#3593;&#3614;&#3634;&#3632; Level 3 &#3627;&#3617;&#3604;&#3607;&#3640;&#3585;&#3605;&#3633;&#3623;(&#3592;&#3635;&#3609;&#3623;&#3609; <?php echo $Num_Rows3;?>
 &#3588;&#3635;)</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="?level=2">Link&#3649;&#3626;&#3604;&#3591;&#3648;&#3593;&#3614;&#3634;&#3632; Level 2 &#3627;&#3617;&#3604;&#3607;&#3640;&#3585;&#3605;&#3633;&#3623;(&#3592;&#3635;&#3609;&#3623;&#3609; <?php echo $Num_Rows2;?>
 &#3588;&#3635;)</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="?level=1">Link&#3649;&#3626;&#3604;&#3591;&#3648;&#3593;&#3614;&#3634;&#3632; Level 1 &#3627;&#3617;&#3604;&#3607;&#3640;&#3585;&#3605;&#3633;&#3623;(&#3592;&#3635;&#3609;&#3623;&#3609; <?php echo $Num_Rows1;?>
 &#3588;&#3635;)</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php } ?>
<p>&nbsp;</p>
<p>&nbsp;		</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
