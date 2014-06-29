<div id="room" class="index">
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>Number</th>
									<th>Enabled</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<tr>
									<td><?php echo $room->id; ?></td>
									<td><?php echo $room->number; ?></td>
									<td><?php echo $room->enabled; ?></td>
								<td>
					<a href="<?php echo site_url('room/read/' . $room->$id); ?>">View</a> | 
					<a href="<?php echo site_url('room/update/' . $room->$id); ?>">Update</a> | 
					<a href="<?php echo site_url('room/delete/' . $room->$id); ?>">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>