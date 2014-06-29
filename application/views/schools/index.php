<div id="school" class="index">
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Address</th>
									<th>Landline</th>
									<th>Mobile</th>
									<th>Enabled</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<tr>
									<td><?php echo $school->id; ?></td>
									<td><?php echo $school->name; ?></td>
									<td><?php echo $school->address; ?></td>
									<td><?php echo $school->landline; ?></td>
									<td><?php echo $school->mobile; ?></td>
									<td><?php echo $school->enabled; ?></td>
								<td>
					<a href="<?php echo site_url('school/read/' . $school->$id); ?>">View</a> | 
					<a href="<?php echo site_url('school/update/' . $school->$id); ?>">Update</a> | 
					<a href="<?php echo site_url('school/delete/' . $school->$id); ?>">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>