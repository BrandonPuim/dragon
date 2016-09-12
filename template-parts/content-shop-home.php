

<h1 class="center">SHOP STUFF</h1>
<section class="shop-stuff-container container">
  <?php $terms = get_terms( 'type', array('hide_empty' => false) );
  foreach ($terms as $t) { ?>
    <div class="product-icon">
      <?php
        //echo '<pre>'; print_r($t); echo '</pre>';
        //echo '<div class="shop text-center shop-border" >';
        echo'<img src="'.get_bloginfo("stylesheet_directory").'/images/product-type-icons/'.$t->slug.'.svg" class="shop-icon"  >';
        echo $t->description;
        echo '<a href="'.get_term_link($t).'" ><button class="read-adventure center btn">'.$t->name.' STUFF</button></a>';
      ?>
    </div>
  <?php } ?>
</section>
