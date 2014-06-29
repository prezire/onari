<div id="student" class="index">
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>Full Name</th>
									<th>Enabled</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<tr>
									<td><?php echo $student->id; ?></td>
									<td><?php echo $student->full_name; ?></td>
									<td><?php echo $student->enabled; ?></td>
								<td>
					<a href="<?php echo site_url('student/read/' . $student->$id); ?>">View</a> | 
					<a href="<?php echo site_url('student/update/' . $student->$id); ?>">Update</a> | 
					<a href="<?php echo site_url('student/delete/' . $student->$id); ?>">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>