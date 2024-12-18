<?php
    get_header(); 
?>

<div class="main-wrapper">
    <article class="content ml-10 px-3 py-5 p-md-5">
        <?php
            if(have_posts()){
                while( have_posts()){
                    the_post();
                    get_template_part('template-part/content', 'page');
                }
            }
        ?>

    <?php
        the_posts_pagination();
    ?>    
    </article>

</div>

<?php
    get_footer();
?> 
