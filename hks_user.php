<?php
	$u_name=user_id_name($_SESSION["id"]);
	$user_key=get_user_key($_SESSION["id"]);

	echo "<div class='alert alert-light'>
		<div class='d-flex justify-content-around'>
			<form action='hks_admin_user.php'>
				<button class='btn btn-sm btn-outline-success' type='submit'>
					<i class='fa fa-user-circle'></i>
				</button>
			</form>
			<form action='hks_admin_login.php'>
				<button class='btn btn-sm btn-outline-danger' type='submit'>
					<i class='fa fa-power-off'></i>
				</button>
			</form>
		</div>
		<small>{$u_name}</small>
	</div>";