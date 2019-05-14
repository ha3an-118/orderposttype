<?php
add_action( 'init', 'ha_order_posttype_register' );


 function ha_order_posttype_register(){

   // TODO: make argoman for function register_post_type(name , Arg)

   $label = array(
     'name' => __( 'سفارش' ),
     'singular_name' => __( 'سفارش' ),
   );
   $arg = array(
     'labels' => $label,
     'public' => true,
     'has_archive' => true,
     'menu_position' => 10,
     'supports' =>array(
       'title',
       'editor',
       'custom-fields',
     ),

   );
   register_post_type("haorder",$arg);

 }






 ?>
