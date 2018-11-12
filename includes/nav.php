<nav>
    <?php
        $urls = array(
            'Home' => '/',
            'Guestbook' => 'guestbook.php'
		);
		
		foreach ($urls as $name => $url) {
			echo '<li><a href="'.$url.'">'.$name.'</a></li>';
		}

	?>
</nav>