<?php
include 'connect.php';
/*
echo "mySearch=".$_POST["mySearch"];
echo "| myPage=".$_POST["myPage"];
echo "| myCond=".$_POST["myCond"];
*/ 
$strSearch = preg_replace("[ ]","",$_POST["mySearch"]);
$strPage = $_POST["myPage"];
$strcond = $_POST["myCond"];

$strSQL = "SELECT * FROM jisho WHERE 1";
if($strcond=="1"){//ขึ้นต้น
$strSQL.=" and (kanji like '{$strSearch}%' or hiragana like '{$strSearch}%' or hiraganasub like '{$strSearch}%' or romanji like '{$strSearch}%' or romanjisub like '{$strSearch}%' or meaning like '{$strSearch}%')";
}else if($strcond=="2"){//ลงท้าย
$strSQL.=" and (kanji like '%{$strSearch}' or hiragana like '%{$strSearch}' or hiraganasub like '%{$strSearch}' or romanji like '%{$strSearch}' or romanjisub like '%{$strSearch}' or meaning like '%{$strSearch}')";
}else if($strcond=="3"){//ระหว่าง
//$strSQL.=" and (kanji like '_%{$strSearch}%_' or hiragana like '_%{$strSearch}%_' or hiraganasub like '_%{$strSearch}%_' or romanji like '_%{$strSearch}%_' or romanjisub like '_%{$strSearch}%_' or meaning like '_%{$strSearch}%_')";
$strSQL.=" and (kanji like '{$strSearch}%' or hiragana like '{$strSearch}%' or hiraganasub like '{$strSearch}%' or romanji like '{$strSearch}%' or romanjisub like '{$strSearch}%' or meaning like '{$strSearch}%' or kanji like '%{$strSearch}' or hiragana like '%{$strSearch}' or hiraganasub like '%{$strSearch}' or romanji like '%{$strSearch}' or romanjisub like '%{$strSearch}' or meaning like '%{$strSearch}')";
}else if($strcond=="4"){//ตรงตัว
$strSQL.=" and (kanji = '{$strSearch}' or hiragana = '{$strSearch}' or hiraganasub = '{$strSearch}' or romanji = '{$strSearch}' or romanjisub = '{$strSearch}' or meaning = '{$strSearch}')";
}
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$Num_Rows = mysql_num_rows($objQuery);
$Per_Page = "20";
$Page = $strPage;
if(!$strPage){
	$Page=1;
}
$Prev_Page = $Page-1;
$Next_Page = $Page+1;
$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page){
	$Num_Pages =1;
}else if(($Num_Rows % $Per_Page)==0){
	$Num_Pages =($Num_Rows/$Per_Page) ;
}else{
	$Num_Pages =($Num_Rows/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}
$strSQL .=" order by level ASC LIMIT $Page_Start , $Per_Page";
$objQuery  = mysql_query($strSQL);
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
<?php if($Num_Rows=="0"){ ?>
      <tr>
        <td colspan="5" align="center">data not found</td>
      </tr>
<?php }else{
$i=($Per_Page*($Page-"1"));
while($result = mysql_fetch_array($objQuery)){$i++;?>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $result['kanji'];?></td>
        <td><?php echo $result['hiragana'];?> : hiraganasub =<?php echo $result['hiraganasub'];?> </td>
        <td><?php echo $result['romanji'];?> : romanjisub =<?php echo $result['romanjisub'];?></td>
        <td><?php echo $result['meaning'];?></td>
      </tr>
<?php } ?>
<?php } ?>
    </tbody>
  </table>
<br>
<p>คำศัพท์ที่พบ ( <?php echo $Num_Rows;?>คำ )</p>
หน้า :
<?php
if($Prev_Page){
	echo " <a href=\"JavaScript:doCallAjax(document.getElementById('stext').value,$('input:radio[name=cond]:checked').val(),'$Prev_Page')\"><< Back</a> ";
}
for($i=1; $i<=$Num_Pages; $i++){
	if($i != $Page){
		echo "[ <a href=\"JavaScript:doCallAjax(document.getElementById('stext').value,$('input:radio[name=cond]:checked').val(),'$i')\">$i</a> ]";
	}else{
		echo "<b> $i </b>";
	}
}
if($Page!=$Num_Pages){
	echo " <a href=\"JavaScript:doCallAjax(document.getElementById('stext').value,$('input:radio[name=cond]:checked').val(),'$Next_Page')\">Next >></a> ";
}
mysql_close();
?>