<?php

class Render {

	public function AdminBar($userpermission) {
		require 'Database.php';

		switch ($userpermission) {
			case '0':
				// Nothing
				echo file_get_contents("templates/UserBar.php");
				break;
			
			case '1':
				// Nothing
				echo file_get_contents("templates/UserBar.php");
				break;

			case '2':
				// Render Mod Bar
				echo file_get_contents("templates/ModBar.php");
				break;

			case '3':
				// Render Admin Bar
				echo file_get_contents("templates/AdminBar.php");
				break;

			default:
				// Nothing
				break;
		}
	}

	public function CategoryList() {
		require 'Database.php';

		$stmt = $db->prepare("SELECT * FROM categories ORDER BY name DESC");
		$stmt->execute();

		foreach($stmt as $Category) {
			?>
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="category/<?= $Category['id'] ?>"><?= $Category['name'] ?></a>
					<p><?= $Category['description'] ?></p>
				</div>
			</div>
			<?php
		}

	}

	public function LatestPost() {
		require 'Database.php';
		require 'Format.php';

		$Format = new Format;

		$stmt = $db->prepare("SELECT * FROM posts ORDER BY timestamp DESC LIMIT 1");
		$stmt->execute();

		$LatestPost = $stmt->fetch(PDO::FETCH_ASSOC);

		$RenderLatestPost = "<a href='post/".$LatestPost['id']."'>".$LatestPost['title']."</a><br>";
		$RenderLatestPost .= "<a href='user/".$LatestPost['author']."'>
							 ".$LatestPost['author']."</a><span>
							  - 
							 ".$Format::TimeSince($LatestPost['timestamp'])."</span>";

		echo $RenderLatestPost;
	}

}

?>