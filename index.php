<?php require_once('Connections/cn_datatables.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_cn_datatables, $cn_datatables);
$query_rs_datatables = "SELECT * FROM tbl_datatables";
$rs_datatables = mysql_query($query_rs_datatables, $cn_datatables) or die(mysql_error());
$row_rs_datatables = mysql_fetch_assoc($rs_datatables);
$totalRows_rs_datatables = mysql_num_rows($rs_datatables);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>family list</title>
<style type="text/css" title="currentStyle">
    @import "media/css/demo_table_jui.css";
    @import "media/css/ui-lightness/jquery-ui-1.8.4.custom.css";
	
	body{
		font-family: "Courier New", Courier, monospace;
		font-size: 12px;	
	}
</style>

<script type="text/javascript" language="javascript" 
src="media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" 
src="media/js/jquery.dataTables.js">
</script>

<script>
$(document).ready( function () {
     var oTable = $('#example').dataTable( {
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
				} );		
} );
</script>
</head>

<body>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
  <thead>
  <tr>
    <th>NO</th>
    <th>NAMA</th>
    <th>TMP. LAHIR</th>
    <th>TGL. LAHIR</th>
    <th>STATUS</th>
    <th>KETERANGAN</th>
  </tr>
  </thead>
  <tbody>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rs_datatables['no']; ?></td>
      <td><?php echo $row_rs_datatables['nama']; ?></td>
      <td><?php echo $row_rs_datatables['tmp_lahir']; ?></td>
      <td><?php echo $row_rs_datatables['tgl_lahir']; ?></td>
      <td><?php echo $row_rs_datatables['status']; ?></td>
      <td><?php echo $row_rs_datatables['keterangan']; ?></td>
    </tr>
    <?php } while ($row_rs_datatables = mysql_fetch_assoc($rs_datatables)); ?>
   </tbody>
</table>
</body>
</html>
<?php
mysql_free_result($rs_datatables);
?>
