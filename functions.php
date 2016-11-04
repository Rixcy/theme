<?php
//set startup scripts/css
function rixcy_scripts() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css');
    wp_enqueue_script( 'bootstrap-jquery', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), true );
    wp_enqueue_script( 'blog-js', get_template_directory_uri() . '/js/blog.js', array('jquery'), true );
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), true );
    wp_enqueue_script( 'font-awesome', esc_url_raw('https://use.fontawesome.com/35084e8990.js'), array(), true );
}

add_action( 'wp_enqueue_scripts', 'rixcy_scripts' );

//set google fonts
function rixcy_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}

add_action('wp_print_styles', 'rixcy_google_fonts');

//set titles
add_theme_support( 'title_tag' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

// Github
function setting_github() { ?>
  <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

// Linkedin
function setting_linkedin() { ?>
  <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
<?php }

// Email
function setting_email() { ?>
  <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('github', 'Github URL', 'setting_github', 'theme-options', 'section');
  add_settings_field('linkedin', 'LinkedIn URL', 'setting_linkedin', 'theme-options', 'section');
  add_settings_field('email', 'Email Address', 'setting_email', 'theme-options', 'section');

  register_setting('section', 'github');
  register_setting('section', 'linkedin');
  register_setting('section', 'email');
}
add_action( 'admin_init', 'custom_settings_page_setup' );
