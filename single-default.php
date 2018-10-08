<?php get_template_part('header-single'); ?>

<div class="container-fluid margin-top-box-post-sidebar ">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 fa-pull-left">
            <div id="sidebar">
                   <div class="block-sidebar">
                       <div class="box-sidebar">
                           <form action="<?php bloginfo('url'); ?>" method="post">
                               <input class="search-sidebar " name="s" placeholder="جستجو ..."  type="text"><i class="fas fa-search search-i-sidebar"></i>
                               <input name="post_type" value="product" type="hidden">
                           </form>
                       </div>
                   </div>
                   <div class="block-sidebar">

                   </div>
                   <?php dynamic_sidebar('sidebar left'); ?>
               </div>
            </div>
            <div class="col-sm-9 col-md-9 fa-pull-right">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="post2" id="post-<?php the_ID(); ?>">
                            <div class="tasvir-post">
                                <?php if ( has_post_thumbnail()) :  ?>
                                    <?php the_post_thumbnail( );?>
                                <?php else: ?>
                                    <img class="tasvir-pishfarz" src="<?php bloginfo('template_url'); ?>/img/thumb.png"  alt="تصویر بند انگشتی" title="تصویر بند انگشتی"/>
                                <?php endif; ?>
                            </div>

                            <div class="post-matn">
                                <div class="matn-post">
                                    <?php the_content(); ?>
                                </div>

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-9 col-md-9 nazarat">
                <p class="title-nazarat-karbaran">نظرات کاربران</p><i class="fa fa-comment"></i>
                <?php comments_template(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

