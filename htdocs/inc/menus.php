<?php
	// "menu 1 title,menu 1 url;menu 2 title,menu 2 url;..."
	$menus = "home,/;new home,./home;about us,./about-us;our customers,./our-customers;projects,./projects;contact us,./contact-us";
?>

<nav class="nav left ">
	<ul>
		<?
			$menus=explode(';', $menus);
			foreach ($menus as $menu_id => $menu) {
				list($menu_txt,$menu_url)=explode(',', $menu);
				$menu_class = false ? 'active':'';
				echo "<li><a class='$menu_class' id='menu_$menu_id' href='$menu_url'>$menu_txt</a></li>";
			}
		?>
	</ul>
	<div class="clear"></div>
</nav><!--End nav-->