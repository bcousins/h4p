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
<td class="thead" colspan="7">
<div style="float: right;">
			</div>
			<div>
				<strong>Forum Name</strong>
			</div>
		</td>
	</tr>
	<tr>
		<td class="tcat" colspan="3" width="66%"><span class="smalltext"><strong>Thread  / Author</strong></span></td>
		<td class="tcat" align="center" width="7%"><span class="smalltext"><strong>Replies</strong></span></td>
		<td class="tcat" align="center" width="7%"><span class="smalltext"><strong>Views</span></td>
		<td class="tcat" align="right" width="20%"><span class="smalltext"><strong>Last Post</span></strong></span></td>
		
	</tr>';
//Get them threads in the forum gotten by $_GET['fid']
$sqltopics = mysql_query("SELECT * FROM  `forum_topics` WHERE `forum_id` = '{$_GET["f"]}' ORDER BY  `last_post` DESC") or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_assoc($sqltopics)){
	echo '<tr>
	<td align="center" colspan="2" class="trow2 forumdisplay_regular" width="2%"><img src="/img/nonewpst.gif" alt="" title="No new posts" /></td>
	<td class="trow2 forumdisplay_regular">
		
		<div>
			<span><a href="/viewtopic.php?t='.$row['tid'].'" class="" subject_new" id="tid_721">'.$row['title'].'</a></span>
			<div class="author smalltext"><a href="/user/'.$row['starter_id'].'">'.$row['starter_name'].'</a></div>
		</div>
	</td>
	<td align="center" class="trow2 forumdisplay_regular">'.$row['posts'].'</td>
	<td align="center" class="trow2 forumdisplay_regular">'.$row['views'].'</td>
	<td class="trow2 forumdisplay_regular" style="white-space: nowrap; text-align: right;">
	<span class="lastpost smalltext">Today 09:26 PM<br />
	Last Post: by prasit</span>
	</td></tr>';
}
	//End the Table
	echo '</tbody></table>';
	
include '../tmp/footer.php';
?>