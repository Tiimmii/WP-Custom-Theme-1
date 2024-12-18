<?php
    get_header();
?>

<div class="main-wrapper">
    <article class="content ml-10 px-3 py-5 p-md-5">
        <header class="content-header">
            <div class="meta mb-3"><span class="date"><?php echo get_the_date(); ?></span>
                <?php
                    the_tags('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>', '</span>')
                ?>
                <span class="tag"><i class='fa fa-tag'></i> category</span>
                <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a></span>
            </div>
        </header>
        <?php
            if(have_posts()){
                while( have_posts()){
                    the_post();
                    // get_template_part('template-part/content', 'article');
                    the_content();
                }
            }
            comments_template();
        ?>
    </article>

</div>

<?php
    get_footer();
?> 
