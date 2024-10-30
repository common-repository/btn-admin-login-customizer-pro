<?php 
/*
    file        :  creat-login-page.php
    Description :  This file to create a default page of memberium
    Version     :  V1.0
    Author      :  BTN
*/
// Define variable redux_demo to get saved option
global $redux_demo;   

// programmatically create some basic pages, and then set Home and Blog
// setup a function to check if these pages exist
function BTN_the_slug_exists_custom_search_function($post_name) {
	global $wpdb;
	if($wpdb->get_row("SELECT post_name FROM  ". $wpdb->prefix . "posts WHERE post_name = '" . $post_name . "'", 'ARRAY_A')) {
		return true;
	} else {
		return false;
	}
}

function BTN_get_id_by_slug_custom_search_function($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
} 

/**
 * create the Login page
 * with slug login-pro
 */
if( $redux_demo['opt-switch-create-new-page'] == 1 ){
    /**
     * Take a option that have been saved and stor it on variable
     */ 
        
        if ( !empty($redux_demo['opt-select-forgot']) && $redux_demo['opt-select-forgot'] !=0 )  {

            if ( !empty($redux_demo['opt-text-forgot-slug-page']) ) {
                $forgot_slug = $redux_demo['opt-text-forgot-slug-page'];
            }else{
                $post = get_post($redux_demo['opt-select-forgot']); 
                $forgot_slug = $post->post_name;
            }

            if ( !empty($redux_demo['forgot-text-content']) ) {
                $forgot_content = $redux_demo['forgot-text-content'];
            }else{
                $post = get_post($redux_demo['opt-select-forgot']); 
                $forgot_content = $post->post_content;
            }

        }
        else{
            $forgot_slug = "forgot-password";
            $forgot_content = '[memb_is_logged_in]
            [memb_logout_link]
            [else_memb_is_logged_in]
            [memb_send_password successurl="'.esc_url( home_url( '/' ) ).'"]
            [/memb_is_logged_in]';
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // this for login slug option
        
        if ( !empty($redux_demo['opt-select-login']) && $redux_demo['opt-select-login'] !=0 ) {

            if ( !empty($redux_demo['opt-text-slug-page']) ) {
                $login_slug = $redux_demo['opt-text-slug-page'];
            }else{
                $post = get_post($redux_demo['opt-select-login']); 
                $login_slug = $post->post_name;
            }

            if ( !empty($redux_demo['login-text-content']) ) {
                $login_content = $redux_demo['login-text-content'];
            }else{
                $post = get_post($redux_demo['opt-select-login']); 
                $login_content = $post->post_content;
            }

        }
        else{
            $login_slug = "login";
            $login_content = '[memb_is_logged_in]
            Already logged in!
            [memb_logout_link]
            [else_memb_is_logged_in]
            [memb_loginform username_label="" button_label="LOG IN" password_label=""]<a class="lost-password-lnk btm_pad_no" href="/'.$forgot_slug.'/">Lost your password?</a>
            <a class="go_to_mutu lost-password-lnk" href="'.esc_url( home_url( '/' ) ).'">← Back to '.get_bloginfo( 'name' ).'</a>[/memb_is_logged_in]';
        }

    /**
     * 
    *  Start condition to create a forgot page and some constraint
    * 
    */
    if ( !empty($redux_demo['opt-select-forgot']) && $redux_demo['opt-select-forgot'] !=0 )  {
        if (is_admin()){
            
            $blog_page_content = $forgot_content;
            if ( !empty($redux_demo['opt-select-forgot']) && $redux_demo['opt-select-forgot'] !=0 ) {
                $forgot_ID = $redux_demo['opt-select-forgot'];
                wp_update_post(
                    array (
                        'ID'            => $forgot_ID,
                        'post_content' => $blog_page_content,
                        'post_name'     => $forgot_slug
                    )
                );
            }
        }
    }
    /**
     * 
     *  End condition to create a forgot page and some constraint    
     * 
     */

    /**
     * 
     *  Start condition to create a login page and some constraint
     *
     */
    if ( !empty($redux_demo['opt-select-login']) && $redux_demo['opt-select-login'] !=0 ) {
        if (is_admin()){
            
            $blog_page_content = $login_content;
            if ( !empty($redux_demo['opt-select-login']) && $redux_demo['opt-select-login'] !=0 ) {
                $login_ID = $redux_demo['opt-select-login'];
                wp_update_post(
                    array (
                        'ID'            => $login_ID,
                        'post_content' => $blog_page_content,
                        'post_name'     => $login_slug
                    )
                );
            }
        }
    }
    /**
     * 
     *  End condition to create a login page and some constraint  
     *       
     */
}else{ 

} 

//Page Slug Body Class
function BTN_add_slug_body_class_custom_pages_function( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'BTN_add_slug_body_class_custom_pages_function' );

?>