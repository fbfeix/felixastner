<?php
get_header();
?>

    <body class="tk-myriad-pro">
        <div id="main-page">
            
            <header>
                <button onclick="mau()">
                    <img src="<?php bloginfo('template_directory'); ?>/svg/menu.svg" />
                </button>
                <h1>Felix's Blog</h1>
                
            </header>
                        
            
            <div id="content">
                <article>
                    
                    <?php

$i = 0;

if(is_home())
{
    
    if(have_posts()) : while( have_posts()) : the_post();
        $i++;
    
    if($i == 2) echo '<ins class="adsbygoogle"
     style="display:block; margin: 20px 10px"
     data-ad-client="ca-pub-8855735265372980"
     data-ad-slot="9314259355"
     data-ad-format="auto"></ins>';
                     
                    ?>
                    

                    
                    <section class="timeline-item">
                        <h3><a href="<?php the_permalink() ?>" style="color: #000;"><?php the_title(); ?></a></h3>
                        <div class="desc">
                             <?php the_post_thumbnail(); ?> 
                            <div>
                                <p><?php the_content(); ?></p>
                               
                            </div>
                            
                        </div>
                    </section>
                    
                                        <?php
    endwhile; endif;
} // end of if(is_home())


if($i < 2)  echo '<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8855735265372980"
     data-ad-slot="9314259355"
     data-ad-format="auto"></ins>';

?>
                </article>
            </div>

            <div id="menu" >
                <div id="sidebar" >
                    <nav>
                        
                        <img src="<?php bloginfo('template_directory'); ?>/imgs/me.png" alt="ich" />
                        
                        <p><b>Herzlich Willkommen auf meinem Blog!</b></p>
                        <p>Mein Name ist Felix und ich bin Hobbyprogrammierer und zeitwilliger Freizeitfitnesspromoter.</p>
                        
                        <a href="#">Link</a>
                    </nav>
                </div>
            </div>

        
        </div>
        
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        
<?php get_footer(); ?>