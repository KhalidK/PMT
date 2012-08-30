
<div class="container">    
<table>
	<thead>
		<tr>
			<th>Project Name</th>
			<th>Created In</th>
			<th>Job</th>
			<th>Currently</th>
			<th>Deadline</th>
			<th>Client name</th>
			<th>Client email</th>
			<th>Fixed Price</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach($data as $project){
		?>
		<tr>
			<td><?=$project->p_name?></td>
			<td><?=$project->p_created_in?></td>
			<td><?=$project->p_job?></td>
			<?php
				switch($project->p_currently){
					case 0:
						echo '<td class="black">Finished</td>';
					break;
					case 1:
						echo '<td class="green">Active</td>';
					break;
					case 2:
						echo '<td class="grey">Waiting For Payment</td>';
					break;
				}
			?>
			<td><?=$project->p_deadline?></td>
			<td><?=$project->p_client_name?></td>
			<td><?=$project->p_client_email?></td>
			<td><?=$project->p_fixed_price?><small><?=$project->p_currency?></small></td>
		</tr>

		<?php
		}
		?>

	</tbody>
</table>
	<div class="buttons">
		<a href="add_project.php" class="btn default">New Project</a>
	</div>
</div>
</body>
</html>