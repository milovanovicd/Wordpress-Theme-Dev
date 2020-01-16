<?php  
    //Register nav
    require_once('wp_bootstrap_navlist_walker.php');

    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');
        register_nav_menus( array(
            'primary' => __( 'Primary Menu')
        ) );        
        
        //Format postova
        add_theme_support('post-formats', array('aside', 'gallery'));
    }


    add_action('after_setup_theme', 'wpb_theme_setup'); //add_action sluzi za dodavanje necega

    //Kontrola duzine opisa postova
    function set_excerpt_length() {
        return 80;
    }

    add_filter('excerpt_length', 'set_excerpt_length'); //add_filter() sluzi za izmenu necega

    //Lokacija Widgeta
    function wpb_init_widgets($id) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => 'Box1',
            'id' => 'box1',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => 'Box2',
            'id' => 'box2',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => 'Box3',
            'id' => 'box3',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
    }

    add_action('widgets_init', 'wpb_init_widgets'); // dodaje se opcija Widget u Appearance

    //Customizer
    require get_template_directory().'/inc/customizer.php';


//1. Authorization Using WordPress API
    // define WC APP Keys.
define( 'WP_CONSUMER_KEY', 'wptheme' );
define( 'WP_CONSUMER_SECRET', 'wptheme123' );
 
/**
 * Validate Authorization header for an API calls.
 */
function validate_authorization_header() {
 
    $headers = apache_request_headers();
    if ( isset( $headers['Authorization'] ) ) {
 
        $wc_header = 'Basic ' . base64_encode( WP_CONSUMER_KEY . ':' . WP_CONSUMER_SECRET );
        if ( $headers['Authorization'] == $wc_header ) {
            return true;
        }
    }
    return false;
}


//2. Login Using WordPress API
//http://localhost:8080/wordpress/api/login
// WordPress provides an action ‘rest_api_init’ using which we need to build our custom endpoint. 
// Here we are using the register_rest_route function which produces our API enpoint as YOUR_SITE_URL/wp-json/api/login.

// In our above code ‘api’ is the namespace, ‘login’ is the route, a method is ‘POST’ and ‘login’ is a callback function 
// where we should write our actual logic. We write the login logic in a method as follows. The POST data required for the below
// method is username and password which should send from the front end along with Authorization header. 
// While posting data you need to send it in JSON format. For example {“username”:”YOUR_USERNAME”,”password”:”YOUR_PASSWORD”}.

add_action(
'rest_api_init',
function () {
    register_rest_route(
        'api',
        'login',
        array(
            'methods'  => 'POST',
            'callback' => 'login',
        )
    );
}
);

/**
 * Check if details are correct for login
 *
 * @param object $request get request body.
 */
function login( WP_REST_Request $request ) {
    if ( validate_authorization_header() ) {
        $arr_request = json_decode( $request->get_body() );
 
        if ( ! empty( $arr_request->username ) && ! empty( $arr_request->password ) ) {
 
            // this returns the user ID and other info from the user name.
            $user = get_user_by( 'email', $arr_request->username );
 
            if ( ! $user ) {
                // if the user name doesn't exist.
                return [
                    'success' => false,
                    'message' => 'Wrong email.',
                ];
            }
 
            // check the user's login with their password.
            if ( ! wp_check_password( $arr_request->password, $user->user_pass, $user->ID ) ) {
                // if the password is incorrect for the specified user.
                return [
                    'success' => false,
                    'message' => 'Wrong password.',
                ];
            }
 
            return [
                'success' => true,
                'message' => 'User credentials are correct.',
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Invalid credentials.',
            ];
        }
    } else {
        return [
            'success' => false,
            'message' => 'Authorization failed.',
        ];
    }
}

//3. Build An Endpoint For GET Request
//DELETING USER

add_action(
    'rest_api_init',
    function () {
        register_rest_route(
            'api',
            'delete_user/(?P<id>\d+)',
            array(
                'methods'  => 'GET',
                'callback' => 'delete_user',
            )
        );
    }
);

/**
 * Delete the user entry from the database.
 *
 * @param string $data get customer id.
 */
function delete_user( $data ) {
    if ( ! empty( $data['id'] ) ) {
        if ( validate_authorization_header() ) {
            // delete the user
            require_once(ABSPATH.'wp-admin/includes/user.php' );
            wp_delete_user($data['id']);
 
            return [
                'success' => true,
                'message' => 'User deleted successfully.',
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Authorization failed.',
            ];
        }
    } else {
        return [
            'success' => false,
            'message' => 'Missing user id.',
        ];
    }
}
?>

