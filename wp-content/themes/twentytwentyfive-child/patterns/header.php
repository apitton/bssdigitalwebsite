<?php
/**
 * Title: Header
 * Slug: twentytwentyfive-child/header
 * Categories: homepage
 * Description: Home page header
*/
?>
<span id="logo">
    <a href="<?php echo esc_url(home_url('/')); ?>"><img alt="bss digital" src="<?php echo esc_url(get_stylesheet_directory_uri().'./assets/images/logo.png') ?>"/></a>
</span>
<nav id="navMenu">
    <span>
        <span class="menuTitle">About us</span>
            <ul>
                <li><a href="#">The team</a></li>
                <li><a href="#">Our values</a></li>
                <li><a href="#">Other services</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>        
    </span>
    <span>
        <span class="menuTitle"><a href="#">Contact us</a></span>     
    </span>
</nav>

