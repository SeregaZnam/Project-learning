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
		<div class="main-block">
	<div class="main-block_title">
		task manager
	</div>
	<article class="main-block_info">
		<div class="block-photo">
			<img class="block-photo_img" src="../img/avatar.jpg">
		</div>
		<div class="main-block_info__name"><?= $data_user['name'] ?> <?= $data_user['surname'] ?></div>
		<div class="main-block_info_email"><?= $data_user['email'] ?></div>
		<div class="main-block_settings">
			<div class="buttons-constol">
				<img src="../img/settings.png" alt="settings">
			</div>
			<div class="buttons-constol">
				<div class="buttons-constol_notification">2</div>
				<img src="../img/message.png" alt="message">
			</div>
			<div class="buttons-constol">
				<div class="buttons-constol_notification">5</div>
				<img src="../img/bell.png" alt="bell">
			</div>
		</div>
		<section class="main-block_progress">
			<span class="main-block_progress__value">12/34</span>
			<progress class="main-block_progress__line" value="12" max="32"></progress>
		 </section>
		 <section class="block-values">
			<div class="block-values_item">
				<div class="block-values_item__value">12</div>
				<div class="block-values_item__text">
					<span>Completed</span>
					<span>tasks</span>
				</div>
			</div>
			<div class="block-values_item">
				<div class="block-values_item__value">22</div>
				<div class="block-values_item__text">
					<span>To do</span>
					<span>tasks</span>
				</div>
			</div>
			<div class="block-values_item">
				<div class="block-values_item__value">243</div>
				<div class="block-values_item__text">
					<span>All</span>
					<span>completed</span>
				</div>
			</div>
		 </section>
	</article>
	<article class="block-projects">
		<div class="block-projects_title">projects</div>
		<ul class="block-projects_list">
			<? foreach ($data_project as $index => $project): ?>
				<li><?= $project['name'] ?></li>
			<? endforeach; ?>
		</ul>
	</article>
	<article class="block-person">
		<div class="block-person_title">team</div>
		<div class="block-person_items">
			<div class="block-person_item">
				<img src="../img/avatar.jpg" alt="person">
			</div>
			<div class="block-person_item">
				<img src="../img/avatar.jpg" alt="person">
			</div>
			<div class="block-person_item">
				<img src="../img/avatar.jpg" alt="person">
			</div>
			<div class="block-person_item">
				<img src="../img/avatar.jpg" alt="person">
			</div>
			<div class="block-person_item">
				<img src="../img/avatar.jpg" alt="person">
			</div>
		</div>
	</article>
</div>
		<div class="tasks-window">		
			<div class="search-block">
    <div class="search-block_area">
        <span><img src="../img/search.png" alt="search"></span>
        <input 
            type="text" 
            class="search-block_input"
            placeholder="Search..."
        >
    </div>
    <div class="search-block_tasks">
        <span class="search-block_tasks__text">All tasks</span>
        <span class="search-block_tasks__img">
            <img src="../img/down-arrow.png" alt="down-arrow">
        </span>
    </div>
    <div class="search-block_settings">
        <span>...</span>
    </div>
</div>
			<div class="task-wrapper">
				<div class="tasks-block">
	<div class="tasks-block_info">
		<div class="projects-info">
			<div class="projects-info_line"></div>
			<div class="projects-info_text">marketing</div>
			<div class="projects-info_arrow">
				<img src="../img/down-arrow.png" alt="down-arrow">
			</div>
		</div>
	</div>
	
	<div class="tasks-item">
		<div class="task-item">
			<div class="task-item_success">
				<img src="../img/checked-success.png" alt="success">
			</div>
			<div class="task-item_info">
				<span>Create AdWords camping</span>
				<span>22 Feb, 2018</span>
			</div>
			<div class="task-item_avatar">
				<img src="../img/avatar.jpg" alt="avatar">
			</div>
		</div>
		<div class="task-item">
			<div class="task-item_success">
				<img src="../img/checked-success.png" alt="success">
			</div>
			<div class="task-item_info">
				<span>Create AdWords camping</span>
				<span>22 Feb, 2018</span>
			</div>
			<div class="task-item_avatar">
				<img src="../img/avatar.jpg" alt="avatar">
			</div>
		</div>
		<div class="task-item">
			<div class="task-item_success">
				<img src="../img/checked.png" alt="success">
			</div>
			<div class="task-item_info">
				<span>Create AdWords camping</span>
				<span>22 Feb, 2018</span>
			</div>
			<div class="task-item_avatar">
				<img src="../img/avatar.jpg" alt="avatar">
			</div>
		</div>
		<div class="task-item">
			<div class="task-item_success">
				<img src="../img/checked-success.png" alt="success">
			</div>
			<div class="task-item_info">
				<span>Create AdWords camping</span>
				<span>22 Feb, 2018</span>
			</div>
			<div class="task-item_avatar">
				<img src="../img/avatar.jpg" alt="avatar">
			</div>
		</div>
		<div class="task-item">
			<div class="task-item_success">
				<img src="../img/checked-success.png" alt="success">
			</div>
			<div class="task-item_info">
				<span>Create AdWords camping</span>
				<span>22 Feb, 2018</span>
			</div>
			<div class="task-item_avatar">
				<img src="../img/avatar.jpg" alt="avatar">
			</div>
		</div>
		<div class="task-item">
			<div class="task-item_success">
				<img src="../img/checked-success.png" alt="success">
			</div>
			<div class="task-item_info">
				<span>Create AdWords camping</span>
				<span>22 Feb, 2018</span>
			</div>
			<div class="task-item_avatar">
				<img src="../img/avatar.jpg" alt="avatar">
			</div>
		</div>
		<div class="task-item">
			<div class="task-item_success">
				<img src="../img/checked-success.png" alt="success">
			</div>
			<div class="task-item_info">
				<span>Create AdWords camping</span>
				<span>22 Feb, 2018</span>
			</div>
			<div class="task-item_avatar">
				<img src="../img/avatar.jpg" alt="avatar">
			</div>
		</div>
		<div class="task-item">
			<div class="task-item_success">
				<img src="../img/checked-success.png" alt="success">
			</div>
			<div class="task-item_info">
				<span>Create AdWords camping</span>
				<span>22 Feb, 2018</span>
			</div>
			<div class="task-item_avatar">
				<img src="../img/avatar.jpg" alt="avatar">
			</div>
		</div>
	</div>
</div>
				<div class="tasks-info">
    <div class="task-info_menu">
    <div class="task-info_user">
        <img src="../img/avatar.jpg" alt="avatar">
        <span class="task-info_user__name">Natalie Smith</span>
    </div>
    <div class="task-info_menu__options">
        <div class="option-item">
            <img src="../img/delete.png" alt="delete">
        </div>
        <div class="option-item">
            <img src="../img/user.png" alt="user">
        </div>
        <div class="option-item">
            <img src="../img/bookmark.png" alt="bookmark">
        </div>
        <div class="option-item">
            <img src="../img/select.png" alt="select">
        </div>
        <div class="option-item">
            <img src="../img/clip.png" alt="clip">
        </div>
    </div>
</div>
    <div class="task-content">
    <div class="task-content_active">
        <img src="../../img/checked.png" alt="active">
    </div>
    <div class="content">
        <div class="content_title">
            Write an article about design trends
        </div>
        <div class="content_date">12 Mar, 2018</div>
        <div class="content_text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad nihil beatae iure quasi dolores veniam cumque tempore? Doloribus, ex non, aliquam debitis tempore nisi repellat cupiditate reiciendis maxime reprehenderit mollitia ad dolorem praesentium voluptates accusantium eum facere enim magnam neque molestiae eligendi quod deleniti nemo. Nam rem iste id cumque.
        </div>
        <div class="content_line"></div>
        <div class="content_action">
            <div class="content_action__assigned">
                <span><strong>Olka Nowak</strong> assigned to Natalie Smith.</span>
                <span>19 Feb, 2018</span>
            </div>
            <div class="content_action__added">
                <span><strong>Olka Nowak</strong> added to Marketing.</span>
                <span>18 Feb, 2018</span>
            </div>
            <div class="content_action__created">
                <span><strong>Olka Nowak</strong> created task.</span>
                <span>18 Feb, 2018</span>
            </div>
        </div>
        <div class="content_line"></div>
        <div class="task-status">
            <div class="task-status_img">
                <img src="../../img/checked.png" alt="status">
            </div>
            <div class="task-status_text">
                Natalie completed this task.
            </div>
            <div class="task-status_date">
                26 Feb, 2018
            </div>
        </div>
        <div class="content_line"></div>
        <div class="document">
            <div class="document-wrapper">
                <div class="document_img">
                    <img src="../../img/document.png" alt="document">
                </div>
                <div class="document_title">
                    <span><strong>Article.docx</strong></span>
                    <span>added 26 Feb, 2018</span>
                </div>
            </div>
            <div class="document_options">
                <img src="../../img/delete-file.png" alt="delete">
                <img src="../../img/cloud.png" alt="cloud">
            </div>
        </div>
    </div>
</div>
</div>
				<div class="task-bottom-btn">
					<div class="add-task">
	<button class="add-task_btn">Add task</button>
</div>

					<div class="task-comment">
	<div class="task-comment_area">
		<textarea class="task-comment_area__input" placeholder="Write a comment..."></textarea>
	</div>
	<div class="task-comment_wrapper">
		<div class="task-comment_clip">
			<img src="../../img/clip-comment.png" alt="clip">
		</div>
		<div class="task-comment_forward">
			<img class="task-comment_forward__img" src="../../img/forward.png" alt="forward">
	     	</div>
	</div>
</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>