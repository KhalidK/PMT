<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Project Managment Tool</title>
	<meta name="description" content="Project Managment Tool for Freelancers">
	<meta name="author" content="Khalid Magdy">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link href="normalize.css" rel="stylesheet" type="text/css">
	<link href="theme.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->



</head>
<body>
<div class="container">
<table>
	<thead>
		<tr>
			<th>Project Name</th>
			<th>Job</th>
			<th>Deadline</th>
			<th>Client name</th>
			<th>Client email</th>
			<th>Fixed Price</th>
		</tr>
	</thead>
<tbody>
	<form action="operations.php" method="POST">
		<tr>
			<td><input type='text' name='p_name'></td>
			<td><input type='text' name='p_job'></td>
			<td><input type='text' name='p_deadline'></td>
			<td><input type='text' name='p_client_name'></td>
			<td><input type='text' name='p_client_email'></td>
			<td><input type='text' name='p_fixed_price'></td>
			<input type="hidden" name="p_created_in" value="<?echo date('Y-m-d')?>">
			<input type="hidden" name='operation' value="add">
		</tr>

	</tbody>
</table>

	<div class="buttons">
		<input type="submit" value="Add Project" class='btn default'>
	</div>

	</form>

</div>




</body>
</html>