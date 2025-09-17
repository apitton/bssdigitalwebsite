<?php
/**
 * Title: Slider Front Page
 * Slug: twentytwentyfive-child/sliderfrontpage
 * Categories: homepage
 * Description: Slider Front Page
*/
?>

<!-- wp:group {"align":"left","className":"slider-front"} -->
<div class="sliderContainer">
    <div class="slider slider1">
        <div class="arrow">        
            <img class="arrowSign" src="<?php echo esc_url(get_stylesheet_directory_uri().'./assets/images/arrow.png') ?>" />
            <p class="arrowText">Design</p>                    
        </div>
        <ul class="mainp">
            <li>Website design</li>
            <li>Modern, responsive layouts</li>
            <li>Tailored to brand identity</li>
        </ul>                    
    </div>
    
    <div class="slider slider2">
        <div class="arrow">    
            <img class="arrowSign" src="<?php echo esc_url(get_stylesheet_directory_uri().'./assets/images/arrow.png') ?>" />
            <p class="arrowText">Implementation</p>
        </div>
        <ul class="mainp">                        
            <li>Static websites (HTML/CSS/JS) for speed & simplicity</li>
            <li>WordPress for content management</li>
            <li>Interactivity, animations & custom features upon request</li>
        </ul>                    
    </div> 
    
    <div class="slider slider3">
        <div class="arrow">    
            <img class="arrowSign" src="<?php echo esc_url(get_stylesheet_directory_uri().'./assets/images/arrow.png') ?>" />
            <p class="arrowText">Hosting</p>
        </div>
        <ul class="mainp">                        
            <li>Reliable hosting on AWS</li>
            <li>Setup of domains and SSL certificates</li>
            <li>Security best practices and backups included</li>                                                
        </ul>
    </div> 
    
    <div class="slider slider4">
        <div class="arrow">    
            <img class="arrowSign" src="<?php echo esc_url(get_stylesheet_directory_uri().'./assets/images/arrow.png') ?>" />
            <p class="arrowText">Support</p>
        </div>
        <ul class="mainp">                        
            <li>Ongoing maintenance and updates</li>
            <li>Analytics integration & SEO optimization</li>
            <li>Option to scale features as your business grows</li>
        </ul>                    
    </div>
</div>
<!-- /wp:group -->