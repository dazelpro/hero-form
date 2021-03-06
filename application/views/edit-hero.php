<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Edit Hero Mobile Legends</title>
</head>
<body>
    <?php foreach ($hero->result() as $data) : ?>
	<div class="w3-sidebar w3-teal w3-bar-block" style="width:15%">
		<h3 class="w3-bar-item">RestAPI</h3>
		<a href="<?php echo site_url('/'); ?>" class="w3-bar-item w3-button">Daftar Hero</a>
		<a href="<?php echo site_url('/form-input'); ?>" class="w3-bar-item w3-button">Input Hero</a>
	</div>

	<div style="margin-left:15%">
		<div class="w3-container">
			<h2>Edit Hero Mobile Legends</h2>
			<hr>
			<form action="<?php echo site_url('/welcome/edit'); ?>" method="POST">
				<div class="w3-row">
					<div class="w3-container w3-twothird">
						<label>Hero Name</label>
						<input class="w3-input w3-border w3-round-large" type="text" value="<?php echo $data->hero_name;?>" name="name">
						<input type="hidden" value="<?php echo $data->hero_id;?>" name="id">
						<label>Hero Avatar</label>
						<input class="w3-input w3-border w3-round-large" type="text" value="<?php echo $data->hero_avatar;?>" name="avatar">
						<label>Hero Durability</label>
						<input class="w3-input w3-border w3-round-large" type="text" value="<?php echo $data->hero_durability;?>" name="durability">
						<label>Hero Offense</label>
						<input class="w3-input w3-border w3-round-large" type="text" value="<?php echo $data->hero_offence;?>" name="offence">
						<label>Hero Ability Effects</label>
						<input class="w3-input w3-border w3-round-large" type="text" value="<?php echo $data->hero_ability;?>" name="ability">
						<label>Hero Difficulty</label>
						<input class="w3-input w3-border w3-round-large" type="text" value="<?php echo $data->hero_difficulty;?>" name="dificulty">
						<br>
						<button class="w3-button w3-block w3-section w3-teal w3-ripple w3-padding" type="submit">Perbarui</button>
					</div>
					<div class="w3-container w3-third">
						<label><b>Hero Role</b></label>
						<div style="overflow-y:scroll;height:150px;margin-bottom:30px;">
                            <?php 
                                $post_tag = $data->hero_role;
                                $strtag = explode(",", $post_tag);
                                for($j = 0; $j < count($strtag); $j++){

                                }
                                foreach ($role->result() as $row) : ?>
								<p>
									<input class="w3-check" type="checkbox" name="role[]" id="<?php echo $row->role_name;?>" value="<?php echo $row->role_name;?>" <?php if(in_array($row->role_name, $strtag)) echo 'checked="checked"';?>>
									<label for="<?php echo $row->role_name;?>"><?php echo $row->role_name;?></label>
								</p>
							<?php endforeach;?>
						</div>
						<hr>
						<label><b>Hero Specially</b></label>
						<div style="overflow-y:scroll;height:150px;margin-bottom:30px;">
                            <?php 
                                $post_tag = $data->hero_specially;
                                $strtag = explode(",", $post_tag);
                                for($j = 0; $j < count($strtag); $j++){

                                }
                                foreach ($spec->result() as $row) : ?>
								<p>
									<input class="w3-check" type="checkbox" name="spec[]" id="<?php echo $row->specially_name;?>" value="<?php echo $row->specially_name;?>" <?php if(in_array($row->specially_name, $strtag)) echo 'checked="checked"';?>>
									<label for="<?php echo $row->specially_name;?>"><?php echo $row->specially_name;?></label>
								</p>
							<?php endforeach;?>
						</div>
					</div>
				</div> 
			</form>
		</div>
    </div>
    <?php endforeach;?>
</body>
<style>
	.w3-active {
		color: black;
		background-color: #ccc !important;
	}
</style>
</html>
