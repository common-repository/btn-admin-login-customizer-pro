<?php
add_action('in_admin_footer', 'BTN_add_custom_preview_section_to_admin_panel_js');
    
    function BTN_add_custom_preview_section_to_admin_panel_js () {  ?>
        <script type='text/javascript'>
            jQuery(document).ready( function(){	
                $ff_p = '';
                $ff_p += '<div class="custom-privew">';
                $ff_p += '<div class="entry-content">'
                $ff_p += '<h1>';
                $ff_p += '<a href="https://mutumams.staging.wpengine.com/" title="" tabindex="-1"></a></h1><form name="loginform" id="loginform" action="https://mutumams.staging.wpengine.com/wp-login.php?wpe-login=true" method="post" _lpchecked="1">';
                $ff_p += '<p class="login-username">';
                $ff_p += '<label for="user_login"></label>';
                $ff_p += '<input type="text" name="log" id="user_login" class="input" value="" size="20" placeholder="user name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">';
                $ff_p += '</p>';
                $ff_p += '<p class="login-password">';
                $ff_p += '<label for="user_pass"></label>';
                $ff_p += '<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" placeholder="Password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">';
                $ff_p += '</p>';
            
                $ff_p += '<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p>';
                $ff_p += '<p class="login-submit">';
                $ff_p += '<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="LOG IN">';
                $ff_p += '<input type="hidden" name="redirect_to" value="">';
                $ff_p += '</p>';
            
                $ff_p += '</form><a class="lost-password-lnk btm_pad_no" href="/forgot-password/">Lost your password?</a>';
                $ff_p += '<a class="go_to_mutu lost-password-lnk" href="https://mutumams.staging.wpengine.com/">← Back to website</a>';
                $ff_p += '</div>';
                $ff_p += '</div>';
                jQuery('.redux-container').append($ff_p);
                // .display_header

                $ff_l = '<h2><a target="_blank" class ="custom_logo" href="http://businesstechninjas.com/"><img src="http://techninjas.wpengine.com/wp-content/uploads/2016/09/BusinessTechNinjas-LOGO-White.png" alt="logo"></a></h2>';
                jQuery('.display_header').prepend($ff_l);
                
                // $buttun_refresh = '<input type="submit" id="refresh-defaults-c" class="button button-primary" value="Refresh Preview Section" style="display:  block;width:  100%;">';
                // jQuery('.entry-content').after($buttun_refresh);

                
            });	
            jQuery( document ).ajaxSuccess(function( event, xhr, settings ) {
   
                if (settings.data.indexOf("redux_demo_ajax_save") >= 0){
                    location.reload();
                }else{
                    
                }
            });
        </script>
    <?php 
    }
    ?>


<?php
if(isset($_GET['page'])){
    if($_GET['page'] == "custom_options"){
        function BTN_add_custom_css_to_admin_header_css() {
            
            include( dirname( __FILE__ ) . '/style-admin.php' );
        }
        add_action( 'in_admin_header', 'BTN_add_custom_css_to_admin_header_css' );
    }
}

?>