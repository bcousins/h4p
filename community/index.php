<?php
/*
	Host4Post Community 
	Ben Cousins 
	© 2013
	Script: community/index.php
*/
require '../inc/config.php';
include '../tmp/header.php';
echo '<div class="navigation"><span class="active">Host 4 Post Community</span></div>';

echo '<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<thead>
<tr>
<td class="thead" colspan="5">';
//host4post.com
$sqlcat1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `id` = 3') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `parent_id` = 3 ORDER BY `position`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div><strong><a href="">'.$row['name'].'</a></strong><br /><div class="smalltext"></div></div>';
  }

echo '</td></tr>
</thead>
<tbody style="" id="cat_3_e">
<tr>
<td class="tcat" colspan="2"><span class="smalltext"><strong>Forum</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Threads</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Posts</strong></span></td>
<td class="tcat" width="200" align="center"><span class="smalltext"><strong>Last Post</strong></span></td>
</tr>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr class="trow1">
		<td align="center" valign="top" width="1"><img src="/img/nonewpst.gif" alt="No New Posts" title="No New Posts" class="ajax_mark_read" id="mark_read_11" /></td>
		<td valign="top">
		<a href="./viewforum.php?f='.$rowf['id'].'"><b>'.$rowf['name'].'</b></a></strong><div class="smalltext">'.$rowf['description'].'</div>
		</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['topics'].'</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['posts'].'</td>
		<td valign="top" align="right" style="white-space: nowrap"><!-- start: forumbit_depth2_forum_lastpost -->
		<span class="smalltext">
		<a href="./viewtopic.php?t='.$rowf['last_id'].'" title="'.$rowf['last_title'].'"><strong>'.$rowf['last_title'].'</strong></a>
		<br />Today 03:02 PM<br />by <a href="./user/'.$rowf['last_poster_id'].'">'.$rowf['last_poster_name'].'</a></span>
	<!-- end: forumbit_depth2_forum_lastpost --></td>
	</tr>';
	}
	//End the Table
	echo '</tbody></table>';
	echo '<br><br>';
if($gid > 0){
	echo '<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<thead>
<tr>
<td class="thead" colspan="5">';

//Hosting Service
$sqlcat1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `id` = 5') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `parent_id` = 5 ORDER BY `position`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div><strong><a href="">'.$row['name'].'</a></strong><br /><div class="smalltext"></div></div>';
  }

echo '</td></tr>
</thead>
<tbody style="" id="cat_3_e">
<tr>
<td class="tcat" colspan="2"><span class="smalltext"><strong>Forum</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Threads</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Posts</strong></span></td>
<td class="tcat" width="200" align="center"><span class="smalltext"><strong>Last Post</strong></span></td>
</tr>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr class="trow1">
		<td align="center" valign="top" width="1"><img src="/img/nonewpst.gif" alt="No New Posts" title="No New Posts" class="ajax_mark_read" id="mark_read_11" /></td>
		<td valign="top">
		<a href="./viewforum.php?f='.$rowf['id'].'"><b>'.$rowf['name'].'</b></a></strong><div class="smalltext">'.$rowf['description'].'</div>
		</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['topics'].'</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['posts'].'</td>
		<td valign="top" align="right" style="white-space: nowrap"><!-- start: forumbit_depth2_forum_lastpost -->
		<span class="smalltext">
		<a href="./viewtopic.php?t='.$rowf['last_id'].'" title="'.$rowf['last_title'].'"><strong>'.$rowf['last_title'].'</strong></a>
		<br />Today 03:02 PM<br />by <a href="./user/'.$rowf['last_poster_id'].'">'.$rowf['last_poster_name'].'</a></span>
	<!-- end: forumbit_depth2_forum_lastpost --></td>
	</tr>';
	}
	//End the Table
	echo '</tbody></table>';
		echo '<br><br>';
}
	echo '<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<thead>
<tr>
<td class="thead" colspan="5">';
//Community and General
$sqlcat1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `id` = 6') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `parent_id` = 6 ORDER BY `position`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div><strong><a href="">'.$row['name'].'</a></strong><br /><div class="smalltext"></div></div>';
  }

echo '</td></tr>
</thead>
<tbody style="" id="cat_3_e">
<tr>
<td class="tcat" colspan="2"><span class="smalltext"><strong>Forum</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Threads</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Posts</strong></span></td>
<td class="tcat" width="200" align="center"><span class="smalltext"><strong>Last Post</strong></span></td>
</tr>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr class="trow1">
		<td align="center" valign="top" width="1"><img src="/img/nonewpst.gif" alt="No New Posts" title="No New Posts" class="ajax_mark_read" id="mark_read_11" /></td>
		<td valign="top">
		<a href="./viewforum.php?f='.$rowf['id'].'"><b>'.$rowf['name'].'</b></a></strong><div class="smalltext">'.$rowf['description'].'</div>
		</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['topics'].'</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['posts'].'</td>
		<td valign="top" align="right" style="white-space: nowrap"><!-- start: forumbit_depth2_forum_lastpost -->
		<span class="smalltext">
		<a href="./viewtopic.php?t='.$rowf['last_id'].'" title="'.$rowf['last_title'].'"><strong>'.$rowf['last_title'].'</strong></a>
		<br />Today 03:02 PM<br />by <a href="./user/'.$rowf['last_poster_id'].'">'.$rowf['last_poster_name'].'</a></span>
	<!-- end: forumbit_depth2_forum_lastpost --></td>
	</tr>';
	}
	//End the Table
	echo '</tbody></table>';
			echo '<br><br>';
	echo '<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<thead>
<tr>
<td class="thead" colspan="5">';
//Website Administration and The Internet
$sqlcat1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `id` = 8') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `parent_id` = 8 ORDER BY `position`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div><strong><a href="">'.$row['name'].'</a></strong><br /><div class="smalltext"></div></div>';
  }

echo '</td></tr>
</thead>
<tbody style="" id="cat_3_e">
<tr>
<td class="tcat" colspan="2"><span class="smalltext"><strong>Forum</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Threads</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Posts</strong></span></td>
<td class="tcat" width="200" align="center"><span class="smalltext"><strong>Last Post</strong></span></td>
</tr>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr class="trow1">
		<td align="center" valign="top" width="1"><img src="/img/nonewpst.gif" alt="No New Posts" title="No New Posts" class="ajax_mark_read" id="mark_read_11" /></td>
		<td valign="top">
		<a href="./viewforum.php?f='.$rowf['id'].'"><b>'.$rowf['name'].'</b></a></strong><div class="smalltext">'.$rowf['description'].'</div>
		</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['topics'].'</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['posts'].'</td>
		<td valign="top" align="right" style="white-space: nowrap"><!-- start: forumbit_depth2_forum_lastpost -->
		<span class="smalltext">
		<a href="./viewtopic.php?t='.$rowf['last_id'].'" title="'.$rowf['last_title'].'"><strong>'.$rowf['last_title'].'</strong></a>
		<br />Today 03:02 PM<br />by <a href="./user/'.$rowf['last_poster_id'].'">'.$rowf['last_poster_name'].'</a></span>
	<!-- end: forumbit_depth2_forum_lastpost --></td>
	</tr>';
	}
	//End the Table
	echo '</tbody></table>';
			echo '<br><br>';
	echo '<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<thead>
<tr>
<td class="thead" colspan="5">';
//Technology
$sqlcat1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `id` = 9') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `parent_id` = 9 ORDER BY `position`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div><strong><a href="">'.$row['name'].'</a></strong><br /><div class="smalltext"></div></div>';
  }

echo '</td></tr>
</thead>
<tbody style="" id="cat_3_e">
<tr>
<td class="tcat" colspan="2"><span class="smalltext"><strong>Forum</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Threads</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Posts</strong></span></td>
<td class="tcat" width="200" align="center"><span class="smalltext"><strong>Last Post</strong></span></td>
</tr>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr class="trow1">
		<td align="center" valign="top" width="1"><img src="/img/nonewpst.gif" alt="No New Posts" title="No New Posts" class="ajax_mark_read" id="mark_read_11" /></td>
		<td valign="top">
		<a href="./viewforum.php?f='.$rowf['id'].'"><b>'.$rowf['name'].'</b></a></strong><div class="smalltext">'.$rowf['description'].'</div>
		</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['topics'].'</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['posts'].'</td>
		<td valign="top" align="right" style="white-space: nowrap"><!-- start: forumbit_depth2_forum_lastpost -->
		<span class="smalltext">
		<a href="./viewtopic.php?t='.$rowf['last_id'].'" title="'.$rowf['last_title'].'"><strong>'.$rowf['last_title'].'</strong></a>
		<br />Today 03:02 PM<br />by <a href="./user/'.$rowf['last_poster_id'].'">'.$rowf['last_poster_name'].'</a></span>
	<!-- end: forumbit_depth2_forum_lastpost --></td>
	</tr>';
	}
	//End the Table
	echo '</tbody></table>';
			echo '<br><br>';
	echo '<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<thead>
<tr>
<td class="thead" colspan="5">';
//How To Tutorials
$sqlcat1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `id` = 96') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `parent_id` = 96 ORDER BY `position`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div><strong><a href="">'.$row['name'].'</a></strong><br /><div class="smalltext"></div></div>';
  }

echo '</td></tr>
</thead>
<tbody style="" id="cat_3_e">
<tr>
<td class="tcat" colspan="2"><span class="smalltext"><strong>Forum</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Threads</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Posts</strong></span></td>
<td class="tcat" width="200" align="center"><span class="smalltext"><strong>Last Post</strong></span></td>
</tr>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr class="trow1">
		<td align="center" valign="top" width="1"><img src="/img/nonewpst.gif" alt="No New Posts" title="No New Posts" class="ajax_mark_read" id="mark_read_11" /></td>
		<td valign="top">
		<a href="./viewforum.php?f='.$rowf['id'].'"><b>'.$rowf['name'].'</b></a></strong><div class="smalltext">'.$rowf['description'].'</div>
		</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['topics'].'</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['posts'].'</td>
		<td valign="top" align="right" style="white-space: nowrap"><!-- start: forumbit_depth2_forum_lastpost -->
		<span class="smalltext">
		<a href="./viewtopic.php?t='.$rowf['last_id'].'" title="'.$rowf['last_title'].'"><strong>'.$rowf['last_title'].'</strong></a>
		<br />Today 03:02 PM<br />by <a href="./user/'.$rowf['last_poster_id'].'">'.$rowf['last_poster_name'].'</a></span>
	<!-- end: forumbit_depth2_forum_lastpost --></td>
	</tr>';
	}
	//End the Table
	echo '</tbody></table>';
//if($gid > 8){
			echo '<br><br>';
if($gid > 5){
	echo '<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<thead>
<tr>
<td class="thead" colspan="5">';

//Staff Stuff
$sqlcat1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `id` = 4') or die(mysql_error());
$sqlforum1 = mysql_query('SELECT * FROM  `forum_forums` WHERE `parent_id` = 4 ORDER BY `position`') or die(mysql_error());
//Prepare the div (??)
while($row = mysql_fetch_array($sqlcat1))
  {
	echo '<div><strong><a href="">'.$row['name'].'</a></strong><br /><div class="smalltext"></div></div>';
  }

echo '</td></tr>
</thead>
<tbody style="" id="cat_3_e">
<tr>
<td class="tcat" colspan="2"><span class="smalltext"><strong>Forum</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Threads</strong></span></td>
<td class="tcat" width="85" align="center" style="white-space: nowrap"><span class="smalltext"><strong>Posts</strong></span></td>
<td class="tcat" width="200" align="center"><span class="smalltext"><strong>Last Post</strong></span></td>
</tr>';
while($rowf = mysql_fetch_array($sqlforum1))
	{
		echo '<tr class="trow1">
		<td align="center" valign="top" width="1"><img src="/img/nonewpst.gif" alt="No New Posts" title="No New Posts" class="ajax_mark_read" id="mark_read_11" /></td>
		<td valign="top">
		<a href="./viewforum.php?f='.$rowf['id'].'"><b>'.$rowf['name'].'</b></a></strong><div class="smalltext">'.$rowf['description'].'</div>
		</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['topics'].'</td>
		<td valign="top" align="center" style="white-space: nowrap">'.$rowf['posts'].'</td>
		<td valign="top" align="right" style="white-space: nowrap"><!-- start: forumbit_depth2_forum_lastpost -->
		<span class="smalltext">
		<a href="./viewtopic.php?t='.$rowf['last_id'].'" title="'.$rowf['last_title'].'"><strong>'.$rowf['last_title'].'</strong></a>
		<br />Today 03:02 PM<br />by <a href="./user/'.$rowf['last_poster_id'].'">'.$rowf['last_poster_name'].'</a></span>
	<!-- end: forumbit_depth2_forum_lastpost --></td>
	</tr>';
	}
	//End the Table
	echo '</tbody></table>';
}

?>
<br />
<br />
<font color="black">
<br />
<!-- end: index_boardstats -->
</font>
<dl class="forum_legend smalltext">
	<dt><img src="/img/newpst.gif" alt="Forum Contains New Posts" title="Forum Contains New Posts" style="vertical-align: middle; padding-bottom: 4px;" /></dt>
	<dd>Forum Contains New Posts</dd>

	<dt><img src="/img/nonewpst.gif" alt="Forum Contains No New Posts" title="Forum Contains No New Posts" style="vertical-align: middle; padding-bottom: 4px;" /></dt>
	<dd>Forum Contains No New Posts</dd>

	<dt><img src="/img/forumlock.gif" alt="Forum is Locked" title="Forum is Locked" style="vertical-align: middle;" /></dt>
	<dd>Forum is Locked</dd>
</dl>

<?php
include '../tmp/footer.php';
?>