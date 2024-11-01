<?php


$options =  array(
  'maps_options' => array(
      'type' => 'group',
      'heading' => __( 'Maps' ),
      'options' => array(


      'address' => array(
          'type' => 'textfield',
          'heading' => 'Address',
          'default' => '235 cộng hòa, p 13, q tân binh, ho chi minh',
      ),
      'zoom' => array(
          'type' => 'textfield',
          'heading' => 'Zoom',
          'default' => '16',
      ),
      'height' => array(
          'type' => 'textfield',
          'heading' => 'Height',
          'default' => '400',
      ),
      'width' => array(
          'type' => 'textfield',
          'heading' => 'Width',
          'default' => '100%',
      ),
    )
  )
);

add_ux_builder_shortcode( 'wbc_maps', array(
    'name' => __( 'Maps Embed' ),
    'category' => __( 'Webico.vn' ),
    'thumbnail' =>  WBC_FL_Maps_Addons_URL.'inc/builder/thumbnails/maps_embed.svg',
    'options' => $options
) );
