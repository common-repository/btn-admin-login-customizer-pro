<?php
/*
    file        :  memberpress-style-login.php
    Description :  This file for styling a default login page (wp-login.php)
    Version     :  V1.0
    Author      :  BTN
*/
global $redux_demo;
$img1 = BG_IMG_1;
$img2 = BG_IMG_2;
$img3 = BG_IMG_3;

?>
    <?php
        if(!empty($redux_demo['opt-text-slug-page'])){
            $classMaster = $redux_demo['opt-text-slug-page'];
        }else{
            $classMaster = "login-pro";
        }

        if(!empty($redux_demo['opt-text-forgot-slug-page'])){
            $classforgotMaster = $redux_demo['opt-text-forgot-slug-page'];
        }else{
            $classforgotMaster = "lost-password";
        }
    ?>
<?php if(!is_user_logged_in()){
        if (is_page( $classforgotMaster ) || is_page( $classMaster )) {
            ?>
<style type="text/css">
      body.page-<?php echo $classMaster; ?>:not(.logged-in) #main ,
      body.page-login:not(.logged-in) #main
      {
          height: 100vh;
      }

      body.page-<?php echo $classMaster; ?>:not(.logged-in) #primary ,
      body.page-login:not(.logged-in) #primary
      {
        margin: 0;
      }

      /*================================================
                      General option starts page-<?php echo $classforgotMaster; ?>
                      opt-text-slug-page
                      opt-text-forgot-slug-pagecscsacascas
                      memberpress
      ==================================================*/


      body.page-<?php echo $classMaster; ?>:not(.logged-in){
        overflow: hidden;
      }
      body.page-<?php echo $classMaster; ?>:not(.logged-in) a.go_to_mutu.lost-password-lnk,
      body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form .login-remember label,
      body.page-login:not(.logged-in) a.go_to_mutu.lost-password-lnk,
      body.page-login:not(.logged-in) .entry-content form .login-remember label
      {
        text-transform: normal !important;
      }
      body.page-<?php echo $classMaster; ?>:not(.logged-in) .go_to_mutu,
      body.page-login:not(.logged-in) .go_to_mutu{
          padding-bottom : 0px !important;
      }
      body.page-<?php echo $classMaster; ?>:not(.logged-in) input#wp-submit,
      body.page-login:not(.logged-in) input#wp-submit{
        margin-bottom: 24px !important;
        font-weight: normal;
        height: 40px

      }
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .site,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) #main-wrap,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .site,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) #main-wrap,
        body.page-login:not(.logged-in) .site,
        body.page-login:not(.logged-in) #main-wrap,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .site,
        body.page-login:not(.logged-in) #main-wrap {
			background-color: transparent;
		}
        body.page-<?php echo $classMaster; ?>:not(.logged-in) #secondary,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) #secondary,
        body.page-login:not(.logged-in) #secondary,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) #secondary{
            display:none !important;
        }
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .site-content,
        body.page-login:not(.logged-in) .site-content,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .site-content {
            float: none;
            width: 100%;
            min-height: 100vh;
            border : none;

        }
        body.page-<?php echo $classMaster; ?>:not(.logged-in) div#right-panel div#right-panel-inner #main-wrap,
        body.page-login:not(.logged-in) div#right-panel div#right-panel-inner #main-wrap,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) div#right-panel div#right-panel-inner #main-wrap {
            background-color: transparent !important;
        }
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .site,
        body.page-login:not(.logged-in) .site,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .site {
            /* height: 100vh; */
            min-height: 100vh;
        }
        /* typography */
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content,
        body.page-login:not(.logged-in) .entry-content,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content {
            margin: auto;
            overflow: hidden;
            <?php if(!empty($redux_demo['opt-secundry-color-rgba']['rgba'])){ ?>
                background: <?php echo $redux_demo['opt-secundry-color-rgba']['rgba'];  ?>;
              <?php }else{ ?>
                background: #ffffff;
                opacity:0.84;
              <?php } ?>
            padding: 0px!important;
            <?php if(!empty($redux_demo['opt_form-width']['width'])){ ?>
              width: <?php echo $redux_demo['opt_form-width']['width'];  ?><?php echo $redux_demo['opt_form-width']['units'];  ?>;
            <?php }else{ ?>
              width: 363px;
            <?php } ?>
            position: absolute;

            <?php if(!empty($redux_demo['form-position-set-single'])){ ?>
               <?php if($redux_demo['form-position-set-single'] == 2){ ?>
                    left:50% !important;
                <?php }elseif($redux_demo['form-position-set-single'] == 1){ ?>
                    left:20%!important;
                <?php }else{ ?>
                    right: 0%;
                    left: unset !important;
                <?php } ?>
            <?php } else{ ?>
                left:50%!important;
            <?php } ?>

            top: 50%!important;
            transform: translate(-50%,-50%) !important;
            <?php if(!empty($redux_demo['opt-form-border-radius'])){ ?>
              border-radius: <?php echo $redux_demo['opt-form-border-radius'];  ?>;
            <?php }else{ ?>
              border-radius: 20px;
            <?php } ?>
            background-color: #fff;
            padding-top: 0 !important;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content *,
        body.page-login:not(.logged-in) .entry-content *,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content *{
            <?php if(!empty($redux_demo['opt-typography']['font-style'])){ ?>
                font-style: <?php echo $redux_demo['opt-typography']['font-style']; ?>;
              <?php }else{ ?>
                font-style:normal;
              <?php } ?>
              <?php if(!empty($redux_demo['opt-typography']['font-family'])){ ?>
                font-family: <?php echo $redux_demo['opt-typography']['font-family'];  ?>;
              <?php }else{ ?>
                font-family: Arial;
                    text-transform: none;
              <?php } ?>
              <?php if(!empty($redux_demo['opt-typography']['font-size'])){ ?>
                font-size: <?php echo $redux_demo['opt-typography']['font-size'];  ?>;
              <?php }else{ ?>
                font-size: 13px;
              <?php } ?>
              <?php if(!empty($redux_demo['opt-typography']['color'])){ ?>
                color: <?php echo $redux_demo['opt-typography']['color'];  ?>;
              <?php }else{ ?>
                color: #000;
              <?php } ?>
        }
        body.page-<?php echo $classMaster; ?>:not(.logged-in) div#right-panel #main-wrap #inner-wrap,
        body.page-login:not(.logged-in) div#right-panel #main-wrap #inner-wrap,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) div#right-panel #main-wrap #inner-wrap {
            <?php if($redux_demo['opt-switch-background'] == 1){ ?>

                <?php if($redux_demo['opt-switch'] == 1){ ?>

                  <?php if(!empty($redux_demo['opt-select-image-1'])){ ?>

                    <?php if($redux_demo['opt-select-image-1']==1){ ?>
                      background-image: url("<?php echo $img1; ?>");
                    <?php } elseif ($redux_demo['opt-select-image-1']==2) { ?>
                      background-image: url("<?php echo $img2; ?>");
                    <?php } else{?>
                      background-image: url("<?php echo $img3; ?>");
                    <?php } ?>

                  <?php } else { ?>
                    background-image: url("<?php echo $img1; ?>");
                  <?php } ?>

                <?php } else { ?>

                  <?php if(!empty($redux_demo['opt-background']['url'])){ ?>
                    background-image: url("<?php echo $redux_demo['opt-background']['url']; ?>");
                  <?php } else { ?>
                    background-image: url("<?php echo $img1; ?>");
                  <?php } ?>

                <?php } ?>
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-position-y: 0px;

            <?php } else { ?>
                <?php if(!empty($redux_demo['opt-color-background'])){ ?>
                  background-color: <?php echo $redux_demo['opt-color-background'];  ?>!important;
                <?php }else{ ?>
                  background-color: #fff!important;
                <?php } ?>

            <?php } ?>
        }
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content h1,
        body.page-login:not(.logged-in) .entry-content h1,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content h1 {
          <?php if(!empty($redux_demo['opt-primary-color-rgba']['rgba'])){ ?>
            background-color: <?php echo $redux_demo['opt-primary-color-rgba']['rgba'];  ?>;
          <?php }else{ ?>
            background-color: #9c9e9b;
          <?php } ?>
		  background-repeat: no-repeat;
          background-position: bottom;
          padding-bottom: 0!important;
          padding-top: 10px!important;
          margin-bottom: 40px;
          position: relative;
          margin-top:0px;

          <?php if(!empty($redux_demo['opt-form-border-radius'])){ ?>
            border-top-left-radius: <?php echo $redux_demo['opt-form-border-radius'];  ?>;
          <?php }else{ ?>
            border-top-left-radius: 20px;
          <?php } ?>

          <?php if(!empty($redux_demo['opt-form-border-radius'])){ ?>
            border-top-right-radius <?php echo $redux_demo['opt-form-border-radius'];  ?>;
          <?php }else{ ?>
            border-top-right-radius: 20px;
          <?php } ?>
          min-height: 100px;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content h1:before,
        body.page-login:not(.logged-in) .entry-content h1:before,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content h1:before {
          content: "";
          width: 0;
          height: 0;
          border-style: solid;
          <?php if(!empty($redux_demo['opt_form-width']['width'])){ ?>
            border-width: 30px<?php echo $redux_demo['opt_form-width']['width'];  ?><?php echo $redux_demo['opt_form-width']['units'];  ?> 0 0;
          <?php }else{ ?>
            border-width: 30px 363px 0 0;
          <?php } ?>
          <?php if(!empty($redux_demo['opt-primary-color-rgba']['rgba'])){ ?>
            border-color: <?php echo $redux_demo['opt-primary-color-rgba']['rgba'];  ?> transparent transparent transparent;
          <?php }else{ ?>
            border-color: #9c9e9b transparent transparent transparent;
          <?php } ?>
          position: absolute;
          bottom: -29px;
          left: 0;
          z-index: 9999999;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content h1 a,
        body.page-login:not(.logged-in) .entry-content h1 a,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content h1 a {
            height: 100px!important;

              <?php if(!empty($redux_demo['opt-logo-1']['url'])){ ?>
                background-image: url("<?php echo $redux_demo['opt-logo-1']['url']; ?>");
              <?php }else{ ?>
                background-image: url("https://res.cloudinary.com/dbw0ag11w/image/upload/v1520785009/wp-logo.png");
              <?php } ?>
            background-size: contain;
            background-repeat: no-repeat;
            margin: 0 auto;
            display: block!important;
            height: 100px !important;
            background-position: 1px;
            max-width: 300px !important;
            background-position: center;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form#mepr_loginform .input,
        body.page-login:not(.logged-in) .entry-content form#mepr_loginform .input,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form#mepr_loginform .input {
            background: rgba(0,0,0,0.15) !important;
            border: none;
            font-size: 14px;
            padding: 9px;
            text-align: center;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form,
        body.page-login:not(.logged-in) .entry-content form,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form ,
        body.page-login:not(.logged-in) .entry-content div#accessally-login-reset-1 {
            /*background-color: rgba(246, 247, 247, 0.9);*/
            padding: 9px 43px!important;
            padding-bottom: 30px;
            margin: 0 auto;
            text-align: center;
        }


        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #user_login::-webkit-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_login::-webkit-input-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #user_login::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #user_login::-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_login::-moz-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #user_login::-moz-placeholder {
            /* Firefox 19+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #user_login:-ms-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_login:-ms-input-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #user_login:-ms-input-placeholder {
            /* IE 10+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #user_login:-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_login:-moz-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #user_login:-moz-placeholder {
            /* Firefox 18- */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #user_pass::-webkit-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_pass::-webkit-input-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #user_pass::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #user_pass::-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_pass::-moz-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #user_pass::-moz-placeholder {
            /* Firefox 19+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #user_pass:-ms-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_pass:-ms-input-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #user_pass:-ms-input-placeholder {
            /* IE 10+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #user_pass:-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_pass:-moz-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #user_pass:-moz-placeholder {
            /* Firefox 18- */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input::-webkit-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input::-webkit-input-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input::-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input::-moz-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input::-moz-placeholder {
            /* Firefox 19+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input:-ms-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input:-ms-input-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input:-ms-input-placeholder {
            /* IE 10+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input:-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input:-moz-placeholder,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input:-moz-placeholder {
            /* Firefox 18- */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form#mepr_loginform #user_pass,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form#mepr_loginform #user_login,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input,
        body.page-login:not(.logged-in) .entry-content form#mepr_loginform #user_pass,
        body.page-login:not(.logged-in) .entry-content form#mepr_loginform #user_login,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form#mepr_loginform #user_pass,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form#mepr_loginform #user_login,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input {
            <?php if(!empty($redux_demo['text-background-color'])){ ?>
              background-color: <?php echo $redux_demo['text-background-color'];  ?>!important;
            <?php }else{ ?>
              background-color : #9c9e9b!important;
            <?php } ?>
            <?php if(!empty($redux_demo['text-feild-border'])){ ?>
              border-bottom: <?php echo $redux_demo['text-feild-border']['border-bottom'];  ?> <?php echo $redux_demo['text-feild-border']['border-style'];  ?> <?php echo $redux_demo['text-feild-border']['border-color'];  ?>;
              border-top:    <?php echo $redux_demo['text-feild-border']['border-top'];  ?> <?php echo $redux_demo['text-feild-border']['border-style'];  ?> <?php echo $redux_demo['text-feild-border']['border-color'];  ?>;
              border-left:   <?php echo $redux_demo['text-feild-border']['border-left'];  ?> <?php echo $redux_demo['text-feild-border']['border-style'];  ?> <?php echo $redux_demo['text-feild-border']['border-color'];  ?>;
              border-right:  <?php echo $redux_demo['text-feild-border']['border-right'];  ?> <?php echo $redux_demo['text-feild-border']['border-style'];  ?> <?php echo $redux_demo['text-feild-border']['border-color'];  ?>;
            <?php }else{ ?>
              border-bottom: 0px solid #000;
              border-top: 0px solid #000;
              border-left: 0px solid #000;
              border-right: 0px solid #000;
            <?php } ?>
            <?php if(!empty($redux_demo['opt-border-raduias-text'])){ ?>
              border-radius: <?php echo $redux_demo['opt-border-raduias-text'];  ?>;
            <?php }else{ ?>
              border-radius: 5px;
            <?php } ?>
            color: #575756;
            font-size: 13px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
            height: 35px;
            border: 0;
            box-shadow: none;
            width: 100% !important;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-email-input {
            margin-top: 40px
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form p,
        body.page-login:not(.logged-in) .entry-content form p,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form p {
            margin-bottom: 20px!important;
            text-align: center;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form .login-remember,
        body.page-login:not(.logged-in) .entry-content form .login-remember,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form .login-remember {
            font-size: 20px;
                text-transform: none;
            color: #575756;
            display: block;
            margin: 18px 0!important;
            text-align: left;
            margin-bottom : 29px !important;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form .login-remember input ,
        body.page-login:not(.logged-in) .entry-content form .login-remember input ,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form .login-remember input {
            padding: 0;
            height: initial;
            width: initial;
            margin-bottom: 0;
            visibility: hidden;
            cursor: pointer;
            display: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]+span:before,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]+label:before,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]+strong:before,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]+span:before,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]+label:before,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]+strong:before,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]+span:before,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]+label:before,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]+strong:before {
            display: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form .login-remember label,
        body.page-login:not(.logged-in) .entry-content form .login-remember label,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form .login-remember label {
            position: relative;
            cursor: pointer;
            font-weight: black;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form .login-remember label:before,
        body.page-login:not(.logged-in) .entry-content form .login-remember label:before,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form .login-remember label:before {
            content: '';
            -webkit-appearance: none;
            background-color: transparent;
            border: 5px solid #fff;
            display: inline-block;
            position: relative;
            vertical-align: middle;
            cursor: pointer;
            margin-right: 5px;
            margin-left: 5px;
            border-radius: 50%;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form .login-remember label.clicccked:after,
        body.page-login:not(.logged-in) .entry-content form .login-remember label.clicccked:after,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form .login-remember label.clicccked:after {
            content: '';
            display: block;
            position: absolute;
            top: 6px;
            left: 7px;
            width: 6px;
            height: 6px;
            border-width: 0;
            <?php if(!empty($redux_demo['opt-primary-color-rgba']['rgba'])){ ?>
                <?php if($redux_demo['opt-primary-color-rgba']['rgba']=="#fff" || $redux_demo['opt-primary-color-rgba']['rgba']=="#ffffff" ){ ?>
                    background: #000;
                <?php }else{?>
                    background: <?php echo $redux_demo['opt-primary-color-rgba']['rgba'];  ?>;
                <?php } ?>

            <?php }else{ ?>
                background: #9c9e9b;
            <?php } ?>

            border-radius: 50%;
            visibility: visible;
        }
        body.page-login:not(.logged-in) .entry-content .pal-login-table tr td a[title="Lost Password"],
        body.page-login:not(.logged-in) .entry-content .accessally-login-reset-back-container a.accessally-reset-back-link
        {
            width: 100%;
            text-align: center !important;
        }
        body.page-login:not(.logged-in) .entry-content .pal-login-table tr td input[name="wp-submit"] ,
        body.page-login:not(.logged-in) .entry-content .accessally-login-reset-login-submit{
            border: 0;
            background: none;
            text-shadow: none;
            box-shadow: none;
            display: block;
            width: 100%;
            margin-top: 15px;
            font-weight: 100!important;
                text-transform: none!important;
            border-radius: 5px;
            <?php if(!empty($redux_demo['opt-primary-color-rgba']['rgba'])){ ?>
                background: <?php echo $redux_demo['opt-primary-color-rgba']['rgba'];  ?>!important;
            <?php }else{ ?>
                background: #9c9e9b !important;
            <?php } ?>
            box-shadow: none !important;
            <?php if($redux_demo['opt-primary-color-rgba']['rgba']=="#fff" || $redux_demo['opt-primary-color-rgba']['rgba']=="#ffffff" ){ ?>
                    color: #000!important;
                <?php }else{?>
                    color: #fff!important;
                <?php } ?>
                height: 35px!important;
        }
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form .submit input[type="submit"],
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-block2 input[type="submit"] ,
        body.page-login:not(.logged-in) .entry-content form .submit input[type="submit"],
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-block2 input[type="submit"] ,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form .submit input[type="submit"],
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-block2 input[type="submit"] {
            border: 0;
            background: none;
            text-shadow: none;
            box-shadow: none;
            display: block;
            width: 100%;
            margin-top: 15px;
            font-weight: 100!important;
                text-transform: none!important;
            border-radius: 5px;
            <?php if(!empty($redux_demo['opt-primary-color-rgba']['rgba'])){ ?>
                background: <?php echo $redux_demo['opt-primary-color-rgba']['rgba'];  ?>!important;
            <?php }else{ ?>
                background: #9c9e9b!important;
            <?php } ?>
            box-shadow: none !important;
            <?php if($redux_demo['opt-primary-color-rgba']['rgba']=="#fff" || $redux_demo['opt-primary-color-rgba']['rgba']=="#ffffff" ){ ?>
                    color: #000!important;
                <?php }else{?>
                    color: #fff!important;
                <?php } ?>
                height: 35px;
        }

        #memb_password_send-1-email-label {
            display: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-block2,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-block2,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form #memb_password_send-1-block2 {
            margin-top: 40px
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]:checked+span:after,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]:checked+label:after,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]:checked+strong:after,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]:checked+span:after,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]:checked+label:after,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]:checked+strong:after,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]:checked+span:after,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]:checked+label:after,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content input[type="checkbox"]:checked+strong:after {
            background: #575756;
            border-radius: 50%;
            font-size: 0;
            top: 1px;
            left: auto;
            right: 15px;
            width: 14px;
            height: 14px;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) article,
        body.page-login:not(.logged-in) article,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) article {
            padding: 0!important
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) header.entry-header ,
        body.page-login:not(.logged-in) header.entry-header ,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) header.entry-header {
            display: none;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) #primary ,
        body.page-login:not(.logged-in) #primary ,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) #primary {
            background-color: transparent;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) ,
        body.page-login:not(.logged-in) ,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) {
            <?php if($redux_demo['opt-switch-background'] == 1){ ?>

                <?php if($redux_demo['opt-switch'] == 1){ ?>

                  <?php if(!empty($redux_demo['opt-select-image-1'])){ ?>

                    <?php if($redux_demo['opt-select-image-1']==1){ ?>
                      background-image: url("<?php echo $img1; ?>");
                    <?php } elseif ($redux_demo['opt-select-image-1']==2) { ?>
                      background-image: url("<?php echo $img2; ?>");
                    <?php } else{?>
                      background-image: url("<?php echo $img3; ?>");
                    <?php } ?>

                  <?php } else { ?>
                    background-image: url("<?php echo $img1; ?>");
                  <?php } ?>

                <?php } else { ?>

                  <?php if(!empty($redux_demo['opt-background']['url'])){ ?>
                    background-image: url("<?php echo $redux_demo['opt-background']['url']; ?>");
                  <?php } else { ?>
                    background-image: url("<?php echo $img1; ?>");
                  <?php } ?>

                <?php } ?>
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-position-y: 0px;

            <?php } else { ?>
                <?php if(!empty($redux_demo['opt-color-background'])){ ?>
                  background-color: <?php echo $redux_demo['opt-color-background'];  ?>!important;
                <?php }else{ ?>
                  background-color: #fff!important;
                <?php } ?>

            <?php } ?>
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) #right-panel,
        body.page-login:not(.logged-in) #right-panel,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) #right-panel {
            position: relative
        }

        bodybody.page-<?php echo $classMaster; ?>:not(.logged-in) .site,
        bodybody.page-<?php echo $classMaster; ?>:not(.logged-in) #main-wrap,
        bodybody.page-login:not(.logged-in) .site,
        bodybody.page-login:not(.logged-in) #main-wrap,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .site,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) #main-wrap {
            background-color: transparent!important;
        }

        bodybody.page-<?php echo $classMaster; ?>:not(.logged-in),
        bodybody.page-login:not(.logged-in),
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) {
            position: relative;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content,
        body.page-login:not(.logged-in) .entry-content,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content {
            <?php if(!empty($redux_demo['opt-secundry-color-rgba']['rgba'])){ ?>
              background: <?php echo $redux_demo['opt-secundry-color-rgba']['rgba'];  ?>;
            <?php }else{ ?>
              background: #ffffff;
              opacity:0.84;
            <?php } ?>
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) header,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) footer,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) #mobile-header,
        body.page-login:not(.logged-in) header,
        body.page-login:not(.logged-in) footer,
        body.page-login:not(.logged-in) #mobile-header,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) header,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) footer,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) #mobile-header {
            display: none!important;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) #right-panel,
        body.page-login:not(.logged-in) #right-panel,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) #right-panel {
            margin-top: 0!important;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .password_send_message,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .memberium-login-error,
        body.page-login:not(.logged-in) .password_send_message,
        body.page-login:not(.logged-in) .memberium-login-error,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .password_send_message,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .memberium-login-error  {
            /*background-color: rgba(246, 247, 247, 0.9);*/
            padding: 60px 80px;
            padding-bottom: 30px;
            max-width: 360px;
            margin: 0 auto;
            text-align: center;
            margin-top: 17px;
            padding-bottom: 0;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in).logged-in .entry-content,
        body.page-login:not(.logged-in).logged-in .entry-content,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in).logged-in .entry-content {
            /*background-color: rgba(246, 247, 247, 0.9);*/
            padding: 60px 80px;
            max-width: 360px;
            margin: 0 auto;
            text-align: center;
            display: block;
            font-size: 20px;
            margin-top: 70px;
        }
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content .lost-password-lnk,
        body.page-login:not(.logged-in) .entry-content .lost-password-lnk,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content .lost-password-lnk {
            /*background-color: #f6f7f7;*/
            max-width: 364px;
            margin: 0 auto;
            text-align: center;
            display: block;
            <?php if(!empty($redux_demo['opt-link-color']['regular'])){ ?>
                color: <?php echo $redux_demo['opt-link-color']['regular'];  ?>!important;
            <?php }else{ ?>
                color: #000!important;
            <?php } ?>
            padding-top: 0;
            max-width: 364px;
            margin: 0 auto;
            text-align: center;
            /*background-color: rgba(246, 247, 247, 0.9);*/
            margin-bottom : 16px;
        }
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content .lost-password-lnk:visited,
        body.page-login:not(.logged-in) .entry-content .lost-password-lnk:visited,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content .lost-password-lnk:visited{
          <?php if(!empty($redux_demo['opt-link-color']['visited'])){ ?>
            color: <?php echo $redux_demo['opt-link-color']['visited'];  ?>!important;
          <?php }else{ ?>
            color: #000!important;
          <?php } ?>
        }

        /* mouse over link */
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content .lost-password-lnk:hover,
        body.page-login:not(.logged-in) .entry-content .lost-password-lnk:hover,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content .lost-password-lnk:hover {
          <?php if(!empty($redux_demo['opt-link-color']['hover'])){ ?>
            color: <?php echo $redux_demo['opt-link-color']['hover'];  ?>!important;
          <?php }else{ ?>
            color: #000!important;
          <?php } ?>
        }

        /* selected link */
        body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content .lost-password-lnk:active ,
        body.page-login:not(.logged-in) .entry-content .lost-password-lnk:active ,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content .lost-password-lnk:active {
          <?php if(!empty($redux_demo['opt-link-color']['active'])){ ?>
            color: <?php echo $redux_demo['opt-link-color']['active'];  ?>!important;
          <?php }else{ ?>
            color: #000!important;
          <?php } ?>
        }

        .password_send_message {
            width: 100% !important;
            position: absolute!important;
            left: 0!important;
            top: 25%!important;
        }
        p.memberium-login-error {
            position:  absolute;
            padding: 0 !important;
            display: inline-block;
            top: 50%;
            left: 50%;
            color: red !important;
            transform: translate(-50%,-10%);
        }
        body.page-login:not(.logged-in) .elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {
            padding: 0px !important;
        }
        body.page-login:not(.logged-in) td.accessally-login-label-col {
            display:  none;
        }

        body.page-login:not(.logged-in) td.accessally-login-input-col {
            display:  block;
            width:  100%;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .mp-form-label,
        body.page-login:not(.logged-in) .mp-form-label,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .mp-form-label,
        body.page-<?php echo $classMaster; ?>:not(.logged-in) label,
        body.page-login:not(.logged-in) label,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) label
        {
            text-align:  left !important;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .mepr-login-actions ,
        body.page-login:not(.logged-in) .mepr-login-actions,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .mepr-login-actions
         {
            text-align:  center!important;
            margin-bottom: 13px!important;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .mp-spacer ,
        body.page-login:not(.logged-in) .mp-spacer,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .mp-spacer
         {
            display:  none!important;
        }

        body.page-<?php echo $classMaster; ?>:not(.logged-in) .mp_wrapper h3 ,
        body.page-login:not(.logged-in) .mp_wrapper h3,
        body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .mp_wrapper h3
         {
            display: none;
        }

        /*--------------------------------------------------------------
        2.1 - MAXIMUM width of 720 pixels (phones landscape)
        --------------------------------------------------------------*/

        @media screen and (max-width: 720px) {

            body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content form,
            body.page-login:not(.logged-in) .entry-content form,
            body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content form {
                padding: 20px
            }

            body.page-<?php echo $classMaster; ?>:not(.logged-in) .entry-content,
            body.page-login:not(.logged-in) .entry-content,
            body.page-<?php echo $classforgotMaster; ?>:not(.logged-in) .entry-content {
                width: 90%
            }
            body.page-<?php echo $classMaster; ?> .entry-content,
            body.page-login:not(.logged-in) .entry-content,
            body.page-<?php echo $classforgotMaster; ?> .entry-content {
                left :50% !important;
            }
        }
        <?php
          if (isset($redux_demo['opt_add_remove_back_to_website']) ) {

              if ($redux_demo['opt_add_remove_back_to_website'] == 1) {
          ?>
              p#backtoblog {
                  display:  none !important;
              }

              p#nav {
                  margin-bottom:  10px !important;
              }
              a.go_to_mutu {
                  display: none !important;
              }
          <?php
             }

          }
          ?>

        <?php echo $redux_demo['css_editor-c']; ?>
      /*================================================
                      General option end
       =================================================*/
    </style>

    <script>
            jQuery(document).ready(function () {
                jQuery('body.page-<?php echo $classMaster; ?> form#mepr_loginform').before('<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" tabindex="-1"></a></h1>');
                jQuery('body.page-<?php echo $classMaster; ?> .entry-content').find('br').remove();
                <?php if($classMaster !="login"){ ?>
                    jQuery('body.page-login:not(.logged-in) form#mepr_loginform').before('<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" tabindex="-1"></a></h1>');
                    jQuery('body.page-login:not(.logged-in) .entry-content').find('br').remove();
                <?php } ?>

                jQuery("input#memb_password_send-1-email-input").attr("placeholder", "Enter your email");
                jQuery("input#user_login").attr("placeholder", "user name");
                jQuery("input#user_pass").attr("placeholder", "Password");

                jQuery('input#user_login,input#user_pass,input#memb_password_send-1-email-input').focus(function(){
                    jQuery(this).data('placeholder',jQuery(this).attr('placeholder'))
                        .attr('placeholder','');
                }).blur(function(){
                    jQuery(this).attr('placeholder',jQuery(this).data('placeholder'));
                })
            });

            jQuery(document).ready(function () {
                jQuery('body.page-<?php echo $classforgotMaster; ?> form#mepr_forgot_password_form').before('<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" tabindex="-1"></a></h1>');
                jQuery('body.page-<?php echo $classforgotMaster; ?> .entry-content').find('br').remove();
                jQuery('body.page-login form#mepr_forgot_password_form').before('<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" tabindex="-1"></a></h1>');
                jQuery('body.page-login .entry-content').find('br').remove();
            });

            jQuery(document).ready(function () {
                jQuery("input#rememberme").change(function (e) {
                    jQuery("input#rememberme").parent().toggleClass("clicccked");
                });
            });

            jQuery(document).ready(function () {
              jQuery('p').each(function() {
                  var thisElement = jQuery(this);
                  if(thisElement.html().replace(/\s|&nbsp;/g, '').length == 0 || thisElement.html().replace(/<!--[\s\S]*?-->/g, '') == 0 )
                      thisElement.remove();
              });
            });
        </script>
<?php }
    }?>
