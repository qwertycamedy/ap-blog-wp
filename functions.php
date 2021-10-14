<?


add_action('wp_enqueue_scripts', 'apblog_styles');
add_action('wp_enqueue_scripts', 'apblog_scripts');


function apblog_styles() {
  wp_enqueue_style('apblog-style', get_stylesheet_uri() );
}


function apblog_scripts() {
  wp_enqueue_script('apblog-script-vendor', get_template_directory_uri(  ) . '/assets/js/vendor.js', array(), null, true);
  wp_enqueue_script('apblog-script-main', get_template_directory_uri(  ) . '/assets/js/main.js', array(), null, true);
}

add_theme_support('custom-logo');
add_theme_support('menus');


add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
  if($args->menu === 'Main') {
    $atts['class'] = 'sidebar__menu-link';

    if ($item->current) {
      $atts['class'] .= ' active';
    }
  };

  return $atts;

}


function allow_type($type) {
  $type['svg'] = 'image/svg+xml';
  return $type;
}
add_filter('upload_mimes', 'allow_type');

?>