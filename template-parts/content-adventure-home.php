<h1 class="center">LATEST ADVENTURE</h1>

<?php
  $args = array('posts_per_page' =>4,'post_type'=>'Adventures');
  	$myposts=get_posts($args);
  	$i=1;
    function text ($i) {
      echo $i;
    }
?>

<?php
class get_ad_class{
  public $count;
  public function get_class() {
    if($this->count==1){
      $class = "full-adventure";
    }elseif ($this->count==2) {
      $class="half-adventure";
    }else{
      $class="quarter-adventure";
    }
    return $class;
  }
}
?>
<div class="flex flex-column">
  <?php
  $class = new get_ad_class();
   foreach ( $myposts  as $post ) : setup_postdata( $post ); ?>
   <div class="story-wrap">
     <?php $class->count = $i; ?>
    	<div class=" <?php echo $class->get_class(); ?>">
    		<div class="adventure-image">
    			<?php if ( has_post_thumbnail() ) : ?>
    				<?php the_post_thumbnail( 'large' ); ?>
    			<?php endif; ?>
    		</div>
  			<div class="story-info">
  				<?php the_title( sprintf( '<h2 class="adventure-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
  					<a class="adventure-read" href="<?php echo esc_url( get_permalink() );?>"><button class="read-adventure">Read More</button></a>
  			</div>
      </div>
    </div>
  	<?php $i++; ?>
  <?php endforeach; wp_reset_postdata(); ?>

  <p class="clearfix">
      <a href="adventures" class="button">More Adventures</a>
  </p>
</div>
