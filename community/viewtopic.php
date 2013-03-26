<?php
/*
	Host4Post Community 
	Ben Cousins 
	© 2013
	Script: community/viewforum.php
*/
require '../inc/config.php';
include '../tmp/header.php';
echo '<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<thead>
<tr>
<td class="thead" colspan="3">
<div style="float: right;">
			</div>
			<div>
				<strong>Topic Name</strong>
			</div>
		</td>
	</tr>
	<tr>
		<td class="tcat" width="20%"><span class="smalltext"><strong>Poster</span></strong></span></td>
		<td class="tcat" width="66%"><span class="smalltext"><strong>Post</strong></span></td>
		
		
	</tr>';
//Get them threads in the forum gotten by $_GET['fid']
$sqltopics = mysql_query("SELECT * FROM  `forum_posts` WHERE `topic_id` = '{$_GET["t"]}' ORDER BY  `post_date`") or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_assoc($sqltopics)){
echo '<tr>
<td align="center" class="trow2 forumdisplay_regular" width="2%" valign="top">';
	$sqlmember = mysql_query("SELECT * FROM  `forum_members` WHERE `member_id` = '{$row["author_id"]}'") or die(mysql_error());
	while($rowu = mysql_fetch_assoc($sqlmember)){
echo '<small>User #'.$rowu['member_id'].'</small><br>
	<b>'.$rowu['members_display_name'].'</b><br>
	<span style="color:#555;">'.$rowu['title'].'</span><br>';
	if($rowu['member_group_id'] == 4){
		echo 'Administrator';
	}
	elseif($rowu['member_group_id'] == 8){
		echo 'Retired Staff';
	}
	else{
		echo 'H4P Member';
	}
}
	echo '</td>';
	echo '<td class="trow2 forumdisplay_regular">
		'.$row['post'].'
	</td>
	</tr>';
}

	//End the Table
	echo '</tbody></table>';
	
include '../tmp/footer.php';
?>