<?php
//session_start();
?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody>
  <tr>
    <td>
<!DOCTYPE html>
<html lang="en">
<title>Add courier</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<table border="0" cellpadding="0" cellspacing="0" width="1200">
<tbody><tr>
<td colspan="15">
<img src="images/bg2.jpg" height="350" width="1500"></td>
</tr>
<tr bgcolor="#4863A0">
<td bgcolor="#4863A0" width="4">&nbsp;</td>
<td height="30" width="90"><div align="center"><span class="headtext13 style2"><b><h2>SHIPMENT:</h2></b></span></div></td>
<td height="30" width="83"><div class="lowerstyle" align="center"> <a href="add-courier.php"><h3>Add</h3></a></div></td>
<td width="3"><div align="left">|</div></td>
<td height="30" width="74"> <div class="lowerstyle" align="center"><a href="courier-list.php"><h3>Update  </h3></a></div></td>
<td width="3"><div align="left">|</div></td>
<td width="89"><div class="lowerstyle" align="center">
  <div align="center"><a href="search-edit.php"><h3>Search &amp; Edit</h3> </a></div>
</div></td>
<td width="3"><div align="left">|</div></td>
<td height="30" width="90"><div align="center"><span class="headtext13 style2"><b><h2>REPORTS:</b></h2></span></span></div></td>
<td height="30" width="83"><div class="lowerstyle" align="center"><a href="delivered-list.php"><h3>Delivered</h3> </a> </div></td>
<td width="3">|</td>
<td width="76"><div class="lowerstyle" align="center"><a href="datewise-list.php"><h3>Datewise</h3> </a> </div></td>
<td width="3">&nbsp;</td>
<td width="71"><div class="lowerstyle" align="center"><a href="http://tracking4web.com/admin/report_statuswise.php?status=all"></a> </div></td>
<td width="3"></td>
<td height="30" width="80">

</td>
</tr>

</tbody></table>

<?php
if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
?>
<table border="0" cellpadding="0" cellspacing="0" height ="100" width="1500">
  <tbody><tr style="height:20px;">
    <td bgcolor="#B7CEEC" width="4">&nbsp;</td>
    <td bgcolor="#B7CEEC" width="90">&nbsp;<b><h2>Admin Menu</h2></b></td>
    <td bgcolor="#B7CEEC" width="90"><div align="center"><a href="offices-list.php" class="headtext13"><h3>Office Details</h3></a></div></td>
    <td bgcolor="#B7CEEC" width="5">|</td>
    <td bgcolor="#B7CEEC" width="90"><div align="center"><a href="add-office.php" class="headtext13"><h3>Add New Office</h3></a></div></td>
    <td bgcolor="#B7CEEC" width="5">|</td>
<td bgcolor=" #B7CEEC" width="90"><div align="center"><a href="admin.php" class="headtext13"><h3>Home</a></h3> </div></td>
<td bgcolor="#B7CEEC" width="5">|</td>
<td bgcolor="#B7CEEC" width="90"><div align="center"><a href="process.php?action=logOut" class="headtext13"><h3>Logout</h3></a></div></td>
  </tr>
</tbody>
</table>
<?php
}
?>
