<h1 class="center">INHABITENT JOURNAL</h1>
<div class="">
  <ul class="journal-post container">
    <?php
      $args = array( 'posts_per_page'=>3, 'post_type'=>'journal');
      $posts = get_posts($args);
      foreach ($posts as $post){
        setup_postdata($post);?>
        <li>
          <div class="journal-picture">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="journal-info">
            <?php the_date();
            comments_number();
            the_title(); ?>
          </div>
        </li>
      <?php } ?>
</div>
