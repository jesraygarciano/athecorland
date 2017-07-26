<?php get_header();?>

<!--START OF CONTENT-->
<div id="full-blog-header">
    <div class="container">
        <div class="jumbotron">
            <h2>Blog.</h2>
            <hr>
        </div>
    </div>
</div>
<!--END OF CONTENT-->













<!--START OF BLOG-->
<div id="full-blog-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array("posts_per_page" => 3, "paged" => $paged);
            $blog_query = new WP_Query($args);
            wp_pagenavi(array('query' => $blog_query));
            if($blog_query->have_posts()):
            while($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <div class="row container-fluid">
                    <a href="">
                        <?php the_post_thumbnail('thumb-blog', array("class" => "blog-bg"));?>
                    </a>
                    <div class="col-sm-12">
                        <a href="#"><h1><?php echo get_the_title();?></h1></a>
                        <p class="date-name">by <a href="#"><?php the_author();?></a>/ <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
                        <p class="blog-parag"><?php echo substr(get_the_excerpt(), 0,150)."…"; ?></p>
                        <div class="text-center">
                            <a href="<?php echo get_the_permalink();?>"><p class="btn">Read more</p></a>
                        </div>
                        <div class="blog-date">
                            <p><?php the_time("d"); ?></p>
                            <p><?php the_time("M"); ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
                wp_pagenavi(array('query' => $blog_query));
            endif;
            wp_reset_query();
            ?>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>


    <!--<div class="container">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>-->

</div>
<!--END OF BLOG-->

<?php get_footer();?>