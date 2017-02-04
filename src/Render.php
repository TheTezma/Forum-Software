<?php

class Render {

	public function SiteHead($fileloc) {
		include($fileloc."templates/SiteHead.php");
	}

	public function AdminBar($userpermission, $fileloc) {
		require 'Database.php';

		switch ($userpermission) {
			case '0':
				// Nothing
				include($fileloc."templates/UserBar.php");
				break;

			case '1':
				// Nothing
				include($fileloc."templates/UserBar.php");
				break;

			case '2':
				// Render Mod Bar
				include($fileloc."templates/ModBar.php");
				break;

			case '3':
				// Render Admin Bar
				include($fileloc."templates/AdminBar.php");
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
