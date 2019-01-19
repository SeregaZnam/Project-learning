<?php 
	require 'core/controllers/main.php';
	$data_user = data_db('users')[0];
	$data_project = data_db('projects');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/styles.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/lodash.min.js"></script>
	<script type="text/javascript" src="js/knockout-min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<main class="page-block">
		@@include('./template/main-info.php', {
			"name": "<?= $data_user['name'] ?>",
			"surname": "<?= $data_user['surname'] ?>",
			"email": "<?= $data_user['email'] ?>",
			"projects": "<?= $data_project ?>"
		})
		<div class="tasks-window">		
			@@include('./template/search-area.php')
			<div class="task-wrapper">
				@@include('./template/tasks.php')
				@@include('./template/tasks-info.php')
				<div class="task-bottom-btn">
					@@include('./template/task-bottom-btn/add-task.php')
					@@include('./template/task-bottom-btn/add-comment.php')
				</div>
			</div>
		</div>
	</main>
</body>
</html>