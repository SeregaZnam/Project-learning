<div class="main-block">
	<div class="main-block_title">
		task manager
	</div>
	<article class="main-block_info">
		<div class="block-photo">
			<img class="block-photo_img" src="../img/avatar.jpg">
		</div>
		<div class="main-block_info__name">@@name @@surname</div>
		<div class="main-block_info_email">@@email</div>
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