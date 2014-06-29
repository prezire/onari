<div id="teacher" class="index">
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>Full Name</th>
									<th>Username</th>
									<th>Password</th>
									<th>Enabled</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<tr>
									<td><?php echo $teacher->id; ?></td>
									<td><?php echo $teacher->full_name; ?></td>
									<td><?php echo $teacher->username; ?></td>
									<td><?php echo $teacher->password; ?></td>
									<td><?php echo $teacher->enabled; ?></td>
								<td>
					<a href="<?php echo site_url('teacher/read/' . $teacher->$id); ?>">View</a> | 
					<a href="<?php echo site_url('teacher/update/' . $teacher->$id); ?>">Update</a> | 
					<a href="<?php echo site_url('teacher/delete/' . $teacher->$id); ?>">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>