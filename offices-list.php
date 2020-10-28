<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
$sql = "SELECT *
		FROM tbl_offices";
$result = dbQuery($sql);		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title><h3Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

</style>
</head>
<body
<table border="0" cellpadding="0" cellspacing="0" align="center" width="1000">
  <tbody><tr>
    <td width="1000">

<?php include("header.php"); ?>
	</td>
  </tr>
  
  <tr>
    <td bgcolor="LightBlue">
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
<table border="0" align="center" width="100%">
    <tbody>
    <tr>
      <td class="LightBlue" bgcolor="LightBlue" align="left"><div class="Partext1" align="center"><strong><h1>View All Office Details </h1></strong></div></td>
    </tr>
  </tbody></table>

 
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="100%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="100%">
    <tbody><tr class="BoldRED" bgcolor="LightBlue" style="height:30px;">
      <td class="newtext" bgcolor="RoyalBlue" width="30%"><h3>Office Name</h3> </td>
      <td class="newtext" bgcolor="RoyalBlue" width="30%"><h3>Address</h3></td>
	  <td class="newtext" bgcolor="RoyalBlue" width="30%"><h3>City</h3></td>
      <td class="newtext" bgcolor="RoyalBlue" width="30%"><h3>Phone Number</h3></td>
      <td class="newtext" bgcolor="RoyalBlue" width="30%"><h3>Office Timing</h3></td>
      <td class="newtext" bgcolor="RoyalBlue" width="30%"><h3>Contact Person</h3></td>
    </tr>
	<?php
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='Salmon';" onMouseOut="this.bgColor='PaleTurquoise';" bgcolor="Lavender" style="height:50px;">
      <td class="gentxt"><?php echo $off_name; ?></td>
      <td class="gentxt"><?php echo $address; ?></td>
      <td class="gentxt"><?php echo $city; ?></td>
      <td class="gentxt"><?php echo $ph_no; ?></td>
      <td class="gentxt"><?php echo $office_time; ?></td>
	  <td class="gentxt"><?php echo $contact_person; ?></td>
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>
	
    </td>
  </tr>
  
</td>
  </tr>
</tbody></table>


</body></html>