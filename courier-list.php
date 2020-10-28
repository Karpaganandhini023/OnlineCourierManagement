<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT cid, cons_no, ship_name, rev_name, pick_date, pick_time, status
		FROM tbl_courier
		WHERE status != 'Delivered'
		ORDER BY cid DESC 
		LIMIT 0, 20";
$result = dbQuery($sql);		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">

<?php include("header.php"); ?>
	</td>
  </tr>
  
  <tr>
    <td bgcolor="SkyBlue">
	<script language="JavaScript">
var checkflag = "false";

function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}
	
	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="SkyBlue" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td class="LargeBlue" bgcolor="SkyBlue" align="left"><div class="Partext1" align="center"><strong><h2>Update Shipment </h2></strong></div></td>
    </tr>
  </tbody></table>

 
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="SkyBlue" style="height:20px;">
      <td class="newtext" bgcolor="RoyalBlue" width="6%"><div align="center"><h3>Edit</h3></div></td>
      <td class="newtext" bgcolor="RoyalBlue" width="10%"><h3>Consignment No </h3></td>
      <td class="newtext" bgcolor="RoyalBlue" width="7%"><h3>Shipper</h3></td>
      <td class="newtext" bgcolor="RoyalBlue" width="11%"><h3>Receiver</h3></td>
      <td class="newtext" bgcolor="RoyalBlue" width="11%"><h3>Pickup Date/Time</h3></td>
      <td class="newtext" bgcolor="RoyalBlue" width="9%"><h3>Status</h3></td>
    </tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='Salmon';" onMouseOut="this.bgColor='PaleTurquoise';" bgcolor="Lavender">
	
      <td class="gentxt" align="center">
	  <a href="edit-courier.php?cid=<?php echo $cid; ?>">
	  <img src="images/profile1.png" border="0" height="20" width="20"></a>
	  </td>
      <td class="gentxt"><?php echo $cons_no; ?></td>
      <td class="gentxt"><?php echo $ship_name; ?></td>
      <td class="gentxt"><?php echo $rev_name; ?></td>
      <td class="gentxt"><?php echo $pick_date; ?> - <?php echo $pick_time; ?></td>
      <td class="gentxt"><?php echo $status; ?></td>
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>
	
    </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
</table>
</td>
  </tr>
</tbody></table>


</body></html>