<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv='Content-type' content='text/html;charset=utf-8'>
<title>RTH - Requirements and Testing Hub</title>
<link rel=stylesheet type='text/css' href='./css/default.php'>
<script type='text/JavaScript' src='api/javascript_api.js'></script>
<script src='sortable.js'></script>
</head>
<body>
<h2>DEMO - REQUIREMENT DETAIL</h2>
<form method=post name=navigate_to_id id=form_validate action='navigate_to_id_action.php' >
<table class=hide100>
<tr><td class=header-r>
Goto TestID
<input type=text size=6 id='validate_txt_field' name=id_txt_field>
<input type=submit value='Go'></td></tr>
</table>
</form>
<form method=post name=form_set_project action='login_switch_proj.php'>
<table class=hide100>
<tr>
<td class=header-l width='33%'>logged in as admin</td>
<td class=header-c width='33%'>2014-03-31 12:05:18 (CEST)</td>
<td class=header-r width='33%'>
<noscript>
<input type=hidden name=javascript_disabled value=true>
</noscript>
<input type=hidden name='login[page]' value=''>
<input type=hidden name='login[get]' value=''>
<input type=hidden name='uname' value='admin'>
<noscript>
<input type=hidden name=non_javascript_browser value=true>
</noscript>
Switch Project
<select name='login[switch_project]' onchange='document.forms.form_set_project.submit();'>
<option value='DEMO' selected>DEMO</option>
</select>
</td>
</tr>
</table>
</form>
<table class=width100 cellspacing=0>
<tr>
<td class=menu>
<a href='http://rth.liedl.at//home_page.php'>Home</a> | 
<a href='http://rth.liedl.at//requirement_page.php'>Requirements</a> | 
<a href='http://rth.liedl.at//test_page.php'>Test Library</a> | 
<a href='http://rth.liedl.at//release_page.php'>Release</a> | 
<a href='http://rth.liedl.at//results_page.php'>Test Results</a> | 
<a href='http://rth.liedl.at//bug_page.php'>Defects</a> | 
<a href='http://rth.liedl.at//report_page.php'>Reporting</a> | 
<a href='http://rth.liedl.at//admin_page.php'>Manage</a> | 
<a href='http://rth.liedl.at//user_manage_page.php'>User</a> | 
<a href='http://rth.liedl.at//help_index.php' target=_blank>Help</a> | 
<a href='http://rth.liedl.at//logout.php'>Logout</a>
</td>
</tr>
</table>
<br>
<div align='center'>
<table class='sub-menu'>
<tr>
<td class='menu'>&nbsp;&nbsp;<a href='requirement_page.php'>Requirements</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='requirement_associations_page.php'>Folder View</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='requirement_add_page.php?type=R'>Add Requirement - Record</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='requirement_add_page.php?type=F'>Add Requirement - File</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='requirement_notification_page.php'>Notifications</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='requirement_traceability_matrix_page.php'>Traceability Matrix</a>&nbsp;&nbsp;</td>
</tr>
</table>
</div>
<br>
<form method=post action='requirement_detail_page.php'>
<table class=width100 rules=cols>
<tr>
<td width='33%' nowrap class=grid-header-c>ReqID</td>
<td width='33%' nowrap class=grid-header-c>Requirement Name</td>
<td width='33%' nowrap class=grid-header-c>Version</td>
</tr>
<tr>
<td width='33%' class=grid-data-c>00009</td>
<td width='33%' class=grid-data-c>storage</td>
<td width='33%' class=grid-data-c>1.0</td>
</tr>
</table>
<br>
<table class=width100 rules=all>
<tr>
<td width='25%' nowrap class=grid-header-l>Status</td>
<td width='25%' class=grid-data-l>New</td>
<td width='25%' nowrap  class=grid-header-l>Priority</td>
<td width='25%' class=grid-data-l>High</td>
</tr>
<tr>
<td nowrap class=grid-header-l>Author</td>
<td class=grid-data-l>admin</td>
<td width='25%' nowrap  class=grid-header-l>Area Covered</td>
<td width='25%' class=grid-data-l>Requirements</td>
</tr>
<tr>
<td nowrap class=grid-header-l>Assigned To</td>
<td class=grid-data-l>admin</td>
<td nowrap class=grid-header-l>Doc Type</td>
<td class=grid-data-l>Func Spec</td>
</tr>
<tr>
<td nowrap class=grid-header-l valign=top>Assigned to Release</td>
<td class=grid-data-l valign=top></td>
<td nowrap class=grid-header-l valign=top>Functionality</td>
<td class=grid-data-l>User Mgmt<br></td>
</tr>
<tr>
<td nowrap class=grid-header-l valign=top>Date Created</td>
<td class=grid-data-l valign=top>2014-03-31 11:59:26</td>
<td nowrap class=grid-header-l>Locked By</td>
<td class=grid-data-l>admin</td>
</tr>
<tr>
<td nowrap class=grid-header-l>Last Updated</td>
<td class=grid-data-l></td>
<td nowrap class=grid-header-l>Locked Date</td>
<td class=grid-data-l>2014-03-31 12:01:24</td>
</tr>
<tr>
<td nowrap class=grid-header-l>Create Test</td>
<td class=grid-data-l><a href='test_add_page.php?assoc_req=9'>Test</a></td>
<td nowrap class=grid-header-l>Show History</td>
<td class=grid-data-l><a href='requirement_version_history_page.php?req_id=9&amp;req_version_id=9'>History</a></td>
</tr>
<tr>
<td nowrap class=grid-header-l>Create Child Requirement</td>
<td class=grid-data-l><a href='requirement_add_page.php?type=F&amp;parent_req=9'>File</a> | <a href='requirement_add_page.php?type=R&amp;parent_req=9'>Record</a></td>
<td nowrap class=grid-header-l>Change Request</td>
<td class=grid-data-l></td>
</tr>
<tr>
<td nowrap class=grid-header-l>Detail</td>
<td colspan=3 class=grid-data-l>Text entered by the user shall be stored in an ArrayList data structure  which come as a part of java.util.ArrayList package . The characters  entered shall be added to the list via the add() method.&nbsp; <br/></td>
</tr>
</table>
<table class=hide100>
<tr>
<td width='20%' align=center><input type=submit name=submit_req_add_ver value='Add New Version' ></td>
<td width='20%' align=center><input type=submit name=submit_req_update value='Update Requirement' ></td>
<td width='20%' align=center>
<input type=submit name=submit_req_delete value='Delete Requirement' >
<input type='hidden' name='r_page' value='requirement_page.php'>
<input type='hidden' name='f' value='delete_requirement'>
<input type='hidden' name='id' value='9'>
<input type='hidden' name='project_id' value='1'>
<input type='hidden' name='msg' value='190'>
<input type='hidden' name='req_version_id' value='9'>
</td>
<td width='20%' align=center><input type=submit name=submit_req_lock disabled value='Lock Requirement'></td>
<td width='20%' align=center><input type=submit name=submit_req_unlock  value='Unlock Requirement'></td>
</tr>
</table>
</form>
<br>
<br>
<table class=hide100>
<tr>
<td>
<br><div class='center'>
<form name='req_detail_tab' method=post action='requirement_detail_page.php?req_id=9&amp;req_version_id=9'>
<table class='width70'>
<tr>
<td class='menu' width='25%'>
Requirements Assoc</td><td class='menu' width='25%'>
<a href='requirement_detail_page.php?tab=2'>Test Assoc</a></td>
<td class='menu' width='25%'>
<a href='requirement_detail_page.php?tab=4'>Release Assoc</a></td><td class='menu' width='25%'>
<a href='requirement_detail_page.php?tab=3'>Discussions</a></td></tr>
</table>
</form>
</div>
</td>
</tr>
<tr>
<td align=center>
[ <a href='requirement_assoc_page.php?req_id=9&amp;req_version_id=9'>Edit Children</a> ]
</td>
</tr>
<tr>
<td>
<table cellpadding=4 width='100%'>
<tr>
<td>
<div align=center>
There are no Requirements related to this Requirement.</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
<br>
<br>
<br>
<hr>
<table>
<tr>
<td class=footer-l>RTH - Requirements and Testing Hub</td>
</tr>
<tr>
<td class=footer-l>Version 1.7.2</td>
</tr>
<tr>
<td class=footer-l>Please contact the system administrator with any problems <a href='mailto:andreas_rth@24speed.at'>RTH_Admin</a></td>
</tr>
<tr>
<td class=footer-l>For general help or support please visit our project page:  <a href='http://sourceforge.net/projects/rth/' target='_blank'>sourceforge.net</a></td>
</table>
<tr>
	<td class=footer-l>Time: 0.085539 seconds.</td>
</tr>
</table>
</body>
</html>
