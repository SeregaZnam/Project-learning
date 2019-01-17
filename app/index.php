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
		@@include('./template/main-info.html')
		<div class="tasks-window">		
			@@include('./template/search-area.html')
			<div class="task-wrapper">
				@@include('./template/tasks.html')
				@@include('./template/tasks-info.html')
				<div class="task-bottom-btn">
					@@include('./template/task-bottom-btn/add-task.html')
					@@include('./template/task-bottom-btn/add-comment.html')
				</div>
			</div>
		</div>
	</main>
</body>
</html>