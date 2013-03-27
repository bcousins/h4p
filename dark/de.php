<?php
require '../inc/config.php';
$DECRYPT = mysql_query("SELECT * FROM  `forum_members` WHERE `id` = 1") or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_assoc($DECRYPT)){
	echo md5($row['member_pass_hash']);
}
?>