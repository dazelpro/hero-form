<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Daftar Hero Mobile Legends</title>
</head>
<body>
	<div class="w3-sidebar w3-teal w3-bar-block" style="width:15%">
		<h3 class="w3-bar-item">RestAPI</h3>
		<a href="<?php echo site_url('/'); ?>" class="w3-bar-item w3-button w3-active">Daftar Hero</a>
		<a href="<?php echo site_url('/form-input'); ?>" class="w3-bar-item w3-button">Input Hero</a>
	</div>

	<div style="margin-left:15%">
		<div class="w3-container">
			<h2>Daftar Hero Mobile Legends</h2>
			<hr>
			<table class="w3-table-all">
				<thead>
					<tr class="w3-teal">
						<th>No</th>
						<th>Hero Name</th>
						<th>Hero Role</th>
						<th>Hero Avatar</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
					$no=0;
					$query = $this->db->query("SELECT * FROM table_hero_ml");
					foreach ($query->result() as $data):
					$no++;
				?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $data->hero_name;?></td>
					<td><?php echo $data->hero_role;?></td>
					<td><?php echo $data->hero_avatar;?></td>
					<td>
						<a href="<?php echo site_url('/edit/'); ?><?php echo $data->hero_id;?>" class="w3-button w3-tiny w3-border">Edit</a>
					</td>
				</tr>
				<?php endforeach;?>
			</table>
		</div>
	</div>
</body>
<style>
	.w3-active {
		color: black;
		background-color: #ccc !important;
	}
</style>
</html>
