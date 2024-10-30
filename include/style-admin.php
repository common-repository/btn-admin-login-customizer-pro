<?php
global $redux_demo;
$img1 = BG_IMG_1;
$img2 = BG_IMG_2;
$img3 = BG_IMG_3;

  ?>
<style>
    <?php
        $va = apply_filters( "IsLightness_filter", "#a99966" );
        var_dump($va);
    ?>
    .redux-container #redux-header .display_header {
        margin: 0;
    }
    .redux-container #redux-header .display_header  a.custom_logo img {
        max-height: 93px;
    }
    form#redux-form-wrapper {
        width:  70%;
        border-right: 1px solid #D8D8D8;
        display:  inline-block;
        vertical-align: middle;
    }

    .custom-privew {
        width :29%;
        display:  inline-block;
        vertical-align: middle;
        padding-top: 20px;

    }
    .entry-content {
        margin: 0 auto !important;
        pointer-events: none;
    }



     /*================================================
                      General option starts page-lost-password
      ==================================================*/
      .custom-privew a.go_to_mutu.lost-password-lnk,
      .custom-privew .entry-content form .login-remember label,
      body.page-login:not(.logged-in) a.go_to_mutu.lost-password-lnk,
      body.page-login:not(.logged-in) .entry-content form .login-remember label
      {
        text-transform: normal !important;
      }
      .custom-privew .go_to_mutu,
      body.page-login:not(.logged-in) .go_to_mutu{
          padding-bottom : 0px !important;
      }
      .custom-privew input#wp-submit,
      body.page-login:not(.logged-in) input#wp-submit{
        margin-bottom: 24px !important;
        font-weight: normal;

      }
        .custom-privew .site,
        .custom-privew #main-wrap,
        body.page-lost-password:not(.logged-in) .site,
        .custom-privew #main-wrap,
        body.page-login:not(.logged-in) .site,
        body.page-login:not(.logged-in) #main-wrap,
        body.page-lost-password:not(.logged-in) .site,
        body.page-login:not(.logged-in) #main-wrap {
			background-color: transparent;
		}
        .custom-privew #secondary,
        body.page-lost-password:not(.logged-in) #secondary,
        body.page-login:not(.logged-in) #secondary,
        body.page-lost-password:not(.logged-in) #secondary{
            display:none !important;
        }
        .custom-privew .site-content,
        body.page-login:not(.logged-in) .site-content,
        body.page-lost-password:not(.logged-in) .site-content {
            float: none;
            width: 100%;
            min-height: 100vh;
            border : none;

        }
        .custom-privew div#right-panel div#right-panel-inner #main-wrap,
        body.page-login:not(.logged-in) div#right-panel div#right-panel-inner #main-wrap,
        body.page-lost-password:not(.logged-in) div#right-panel div#right-panel-inner #main-wrap {
            background-color: transparent !important;
        }
        .custom-privew .site,
        body.page-login:not(.logged-in) .site,
        body.page-lost-password:not(.logged-in) .site {
            /* height: 100vh; */
            min-height: 100vh;
        }
        /* typography */
        .custom-privew .entry-content,
        body.page-login:not(.logged-in) .entry-content,
        body.page-lost-password:not(.logged-in) .entry-content {
            margin: auto;
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

            <?php if(!empty($redux_demo['opt-form-border-radius'])){ ?>
              border-radius: <?php echo $redux_demo['opt-form-border-radius'];  ?>;
            <?php }else{ ?>
              border-radius: 20px;
            <?php } ?>
            background-color: #fff;
            padding-top: 0 !important;
        }

        .custom-privew .entry-content *,
        body.page-login:not(.logged-in) .entry-content *,
        body.page-lost-password:not(.logged-in) .entry-content *{
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
        .custom-privew div#right-panel #main-wrap #inner-wrap,
        body.page-login:not(.logged-in) div#right-panel #main-wrap #inner-wrap,
        body.page-lost-password:not(.logged-in) div#right-panel #main-wrap #inner-wrap {
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
        .custom-privew .entry-content h1,
        body.page-login:not(.logged-in) .entry-content h1,
        body.page-lost-password:not(.logged-in) .entry-content h1 {
          <?php if(!empty($redux_demo['opt-primary-color-rgba']['rgba'])){ ?>
            background-color: <?php echo $redux_demo['opt-primary-color-rgba']['rgba'];  ?>;
          <?php }else{ ?>
            background-color: #9c9e9b;
          <?php } ?>
		  background-repeat: no-repeat;
          background-position: bottom;
          <?php if(!empty($redux_demo['opt-text-margin-top-bottom'])){ ?>
            padding-bottom: <?php echo $redux_demo['opt-text-margin-top-bottom'];  ?>px!important;
            padding-top: <?php echo $redux_demo['opt-text-margin-top-bottom'];  ?>px!important;
            border-top-left-radius: <?php echo $redux_demo['opt-text-margin-top-bottom'];  ?>;
          <?php }else{ ?>
            padding-bottom: 20px!important;
            padding-top: 20px!important;
          <?php } ?>

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

        .custom-privew .entry-content h1:before,
        body.page-login:not(.logged-in) .entry-content h1:before,
        body.page-lost-password:not(.logged-in) .entry-content h1:before {
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
          z-index: 999;
        }

        .custom-privew .entry-content h1 a,
        body.page-login:not(.logged-in) .entry-content h1 a,
        body.page-lost-password:not(.logged-in) .entry-content h1 a {
            height: 100px!important;
            <?php if(!empty($redux_demo['opt-logo-1']['width'])){ ?>
                /* width: <?php echo $redux_demo['opt-logo-1']['width']; ?>px; */
              <?php }else{ ?>
                width: 80px!important;
              <?php } ?>


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

        .custom-privew .entry-content form#loginform .input,
        body.page-login:not(.logged-in) .entry-content form#loginform .input,
        body.page-lost-password:not(.logged-in) .entry-content form#loginform .input {
            background: rgba(0,0,0,0.15) !important;
            border: none;
            font-size: 14px;
            padding: 9px;
            text-align: center;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .custom-privew .entry-content form,
        body.page-login:not(.logged-in) .entry-content form,
        body.page-lost-password:not(.logged-in) .entry-content form {
            /*background-color: rgba(246, 247, 247, 0.9);*/
            padding: 9px 43px!important;
            padding-bottom: 30px;
            margin: 0 auto;
            text-align: center;
        }


        .custom-privew .entry-content form #user_login::-webkit-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_login::-webkit-input-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #user_login::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #user_login::-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_login::-moz-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #user_login::-moz-placeholder {
            /* Firefox 19+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #user_login:-ms-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_login:-ms-input-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #user_login:-ms-input-placeholder {
            /* IE 10+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #user_login:-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_login:-moz-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #user_login:-moz-placeholder {
            /* Firefox 18- */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #user_pass::-webkit-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_pass::-webkit-input-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #user_pass::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #user_pass::-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_pass::-moz-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #user_pass::-moz-placeholder {
            /* Firefox 19+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #user_pass:-ms-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_pass:-ms-input-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #user_pass:-ms-input-placeholder {
            /* IE 10+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #user_pass:-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #user_pass:-moz-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #user_pass:-moz-placeholder {
            /* Firefox 18- */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #memb_password_send-1-email-input::-webkit-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input::-webkit-input-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #memb_password_send-1-email-input::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #memb_password_send-1-email-input::-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input::-moz-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #memb_password_send-1-email-input::-moz-placeholder {
            /* Firefox 19+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #memb_password_send-1-email-input:-ms-input-placeholder,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input:-ms-input-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #memb_password_send-1-email-input:-ms-input-placeholder {
            /* IE 10+ */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form #memb_password_send-1-email-input:-moz-placeholder,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input:-moz-placeholder,
        body.page-lost-password:not(.logged-in) .entry-content form #memb_password_send-1-email-input:-moz-placeholder {
            /* Firefox 18- */
            color: #000;
            font-size: 15px;
            text-align: center;
            font-family: Arial;
                text-transform: none;
        }

        .custom-privew .entry-content form#loginform #user_pass,
        .custom-privew .entry-content form#loginform #user_login,
        .custom-privew .entry-content form#loginform #memb_password_send-1-email-input,
        body.page-login:not(.logged-in) .entry-content form#loginform #user_pass,
        body.page-login:not(.logged-in) .entry-content form#loginform #user_login,
        body.page-login:not(.logged-in) .entry-content form#loginform #memb_password_send-1-email-input,
        body.page-lost-password:not(.logged-in) .entry-content form#loginform #user_pass,
        body.page-lost-password:not(.logged-in) .entry-content form#loginform #user_login,
        body.page-lost-password:not(.logged-in) .entry-content form#loginform #memb_password_send-1-email-input {
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
            width: 100%;
        }

        .custom-privew .entry-content form #memb_password_send-1-email-input,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-email-input,
        body.page-lost-password:not(.logged-in) .entry-content form #memb_password_send-1-email-input {
            margin-top: 40px
        }

        .custom-privew .entry-content form p,
        body.page-login:not(.logged-in) .entry-content form p,
        body.page-lost-password:not(.logged-in) .entry-content form p {
            margin-bottom: 20!important;
            text-align: center;
        }

        .custom-privew .entry-content form .login-remember,
        body.page-login:not(.logged-in) .entry-content form .login-remember,
        body.page-lost-password:not(.logged-in) .entry-content form .login-remember {
            font-size: 20px;
                text-transform: none;
            color: #575756;
            display: block;
            margin: 18px 0!important;
            text-align: left;
            margin-bottom : 29px !important;
        }

        .custom-privew .entry-content form .login-remember input ,
        body.page-login:not(.logged-in) .entry-content form .login-remember input ,
        body.page-lost-password:not(.logged-in) .entry-content form .login-remember input {
            padding: 0;
            height: initial;
            width: initial;
            margin-bottom: 0;
            visibility: hidden;
            cursor: pointer;
            display: none;
        }

        .custom-privew .entry-content input[type="checkbox"]+span:before,
        .custom-privew .entry-content input[type="checkbox"]+label:before,
        .custom-privew .entry-content input[type="checkbox"]+strong:before,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]+span:before,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]+label:before,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]+strong:before,
        body.page-lost-password:not(.logged-in) .entry-content input[type="checkbox"]+span:before,
        body.page-lost-password:not(.logged-in) .entry-content input[type="checkbox"]+label:before,
        body.page-lost-password:not(.logged-in) .entry-content input[type="checkbox"]+strong:before {
            display: none;
        }

        .custom-privew .entry-content form .login-remember label,
        body.page-login:not(.logged-in) .entry-content form .login-remember label,
        body.page-lost-password:not(.logged-in) .entry-content form .login-remember label {
            position: relative;
            cursor: pointer;
            font-weight: black;
        }

        .custom-privew .entry-content form .login-remember label:before,
        body.page-login:not(.logged-in) .entry-content form .login-remember label:before,
        body.page-lost-password:not(.logged-in) .entry-content form .login-remember label:before {
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

        .custom-privew .entry-content form .login-remember label.clicccked:after,
        body.page-login:not(.logged-in) .entry-content form .login-remember label.clicccked:after,
        body.page-lost-password:not(.logged-in) .entry-content form .login-remember label.clicccked:after {
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
        .custom-privew .entry-content form .login-submit input[type="submit"],
        .custom-privew .entry-content form #memb_password_send-1-block2 input[type="submit"] ,
        body.page-login:not(.logged-in) .entry-content form .login-submit input[type="submit"],
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-block2 input[type="submit"] ,
        body.page-lost-password:not(.logged-in) .entry-content form .login-submit input[type="submit"],
        body.page-lost-password:not(.logged-in) .entry-content form #memb_password_send-1-block2 input[type="submit"] {
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
            <?php if(!empty($redux_demo['opt-button-color-rgba-k']['rgba'])){ ?>
                background: <?php echo $redux_demo['opt-button-color-rgba-k']['rgba'];  ?>!important;
            <?php }else{ ?>
                background: #9c9e9b!important;
            <?php } ?>
            box-shadow: none !important;
            <?php if($redux_demo['opt-button-color-rgba-k']['rgba']=="#fff" || $redux_demo['opt-button-color-rgba-k']['rgba']=="#ffffff" ){ ?>
                    color: #000!important;
                <?php }else{?>
                    color: #fff!important;
                <?php } ?>
                height: 35px;

        }

        #memb_password_send-1-email-label {
            display: none;
        }

        .custom-privew .entry-content form #memb_password_send-1-block2,
        body.page-login:not(.logged-in) .entry-content form #memb_password_send-1-block2,
        body.page-lost-password:not(.logged-in) .entry-content form #memb_password_send-1-block2 {
            margin-top: 40px
        }

        .custom-privew .entry-content input[type="checkbox"]:checked+span:after,
        .custom-privew .entry-content input[type="checkbox"]:checked+label:after,
        .custom-privew .entry-content input[type="checkbox"]:checked+strong:after,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]:checked+span:after,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]:checked+label:after,
        body.page-login:not(.logged-in) .entry-content input[type="checkbox"]:checked+strong:after,
        body.page-lost-password:not(.logged-in) .entry-content input[type="checkbox"]:checked+span:after,
        body.page-lost-password:not(.logged-in) .entry-content input[type="checkbox"]:checked+label:after,
        body.page-lost-password:not(.logged-in) .entry-content input[type="checkbox"]:checked+strong:after {
            background: #575756;
            border-radius: 50%;
            font-size: 0;
            top: 1px;
            left: auto;
            right: 15px;
            width: 14px;
            height: 14px;
        }

        .custom-privew article,
        body.page-login:not(.logged-in) article,
        body.page-lost-password:not(.logged-in) article {
            padding: 0!important
        }

        .custom-privew header.entry-header ,
        body.page-login:not(.logged-in) header.entry-header ,
        body.page-lost-password:not(.logged-in) header.entry-header {
            display: none;
        }

        .custom-privew #primary ,
        body.page-login:not(.logged-in) #primary ,
        body.page-lost-password:not(.logged-in) #primary {
            background-color: transparent;
        }

        .custom-privew ,
        body.page-login:not(.logged-in) ,
        body.page-lost-password:not(.logged-in) {
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

        .custom-privew #right-panel,
        body.page-login:not(.logged-in) #right-panel,
        body.page-lost-password:not(.logged-in) #right-panel {
            position: relative
        }

        body.custom-privew .site,
        body.custom-privew #main-wrap,
        bodybody.page-login:not(.logged-in) .site,
        bodybody.page-login:not(.logged-in) #main-wrap,
        body.page-lost-password:not(.logged-in) .site,
        body.page-lost-password:not(.logged-in) #main-wrap {
            background-color: transparent!important;
        }

        body.custom-privew,
        bodybody.page-login:not(.logged-in),
        body.page-lost-password:not(.logged-in) {
            position: relative;
        }

        .custom-privew .entry-content,
        body.page-login:not(.logged-in) .entry-content,
        body.page-lost-password:not(.logged-in) .entry-content {
            <?php if(!empty($redux_demo['opt-secundry-color-rgba']['rgba'])){ ?>
              background: <?php echo $redux_demo['opt-secundry-color-rgba']['rgba'];  ?>;
            <?php }else{ ?>
              background: #ffffff;
              opacity:0.84;
            <?php } ?>
        }

        .custom-privew header,
        .custom-privew footer,
        .custom-privew #mobile-header,
        body.page-login:not(.logged-in) header,
        body.page-login:not(.logged-in) footer,
        body.page-login:not(.logged-in) #mobile-header,
        body.page-lost-password:not(.logged-in) header,
        body.page-lost-password:not(.logged-in) footer,
        body.page-lost-password:not(.logged-in) #mobile-header {
            display: none!important;
        }

        .custom-privew #right-panel,
        body.page-login:not(.logged-in) #right-panel,
        body.page-lost-password:not(.logged-in) #right-panel {
            margin-top: 0!important;
        }

        .custom-privew .password_send_message,
        .custom-privew .memberium-login-error,
        body.page-login:not(.logged-in) .password_send_message,
        body.page-login:not(.logged-in) .memberium-login-error,
        body.page-lost-password:not(.logged-in) .password_send_message,
        body.page-lost-password:not(.logged-in) .memberium-login-error  {
            /*background-color: rgba(246, 247, 247, 0.9);*/
            padding: 60px 80px;
            padding-bottom: 30px;
            max-width: 360px;
            margin: 0 auto;
            text-align: center;
            margin-top: 0;
            padding-bottom: 0;
        }

        .custom-privew.logged-in .entry-content,
        body.page-login:not(.logged-in).logged-in .entry-content,
        body.page-lost-password:not(.logged-in).logged-in .entry-content {
            /*background-color: rgba(246, 247, 247, 0.9);*/
            padding: 60px 80px;
            max-width: 360px;
            margin: 0 auto;
            text-align: center;
            display: block;
            font-size: 20px;
            margin-top: 70px;
        }
        .custom-privew .entry-content .lost-password-lnk,
        body.page-login:not(.logged-in) .entry-content .lost-password-lnk,
        body.page-lost-password:not(.logged-in) .entry-content .lost-password-lnk {
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
        .custom-privew .entry-content .lost-password-lnk:visited,
        body.page-login:not(.logged-in) .entry-content .lost-password-lnk:visited,
        body.page-lost-password:not(.logged-in) .entry-content .lost-password-lnk:visited{
          <?php if(!empty($redux_demo['opt-link-color']['visited'])){ ?>
            color: <?php echo $redux_demo['opt-link-color']['visited'];  ?>!important;
          <?php }else{ ?>
            color: #000!important;
          <?php } ?>
        }

        /* mouse over link */
        .custom-privew .entry-content .lost-password-lnk:hover,
        body.page-login:not(.logged-in) .entry-content .lost-password-lnk:hover,
        body.page-lost-password:not(.logged-in) .entry-content .lost-password-lnk:hover {
          <?php if(!empty($redux_demo['opt-link-color']['hover'])){ ?>
            color: <?php echo $redux_demo['opt-link-color']['hover'];  ?>!important;
          <?php }else{ ?>
            color: #000!important;
          <?php } ?>
        }

        /* selected link */
        .custom-privew .entry-content .lost-password-lnk:active ,
        body.page-login:not(.logged-in) .entry-content .lost-password-lnk:active ,
        body.page-lost-password:not(.logged-in) .entry-content .lost-password-lnk:active {
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
        /*--------------------------------------------------------------
        2.1 - MAXIMUM width of 720 pixels (phones landscape)
        --------------------------------------------------------------*/

        @media screen and (max-width: 720px) {

            .custom-privew .entry-content form,
            body.page-login:not(.logged-in) .entry-content form,
            body.page-lost-password:not(.logged-in) .entry-content form {
                padding: 20px
            }

            .custom-privew .entry-content,
            body.page-login:not(.logged-in) .entry-content,
            body.page-lost-password:not(.logged-in) .entry-content {
                width: 90%
            }
            body.page-login-pro .entry-content,
            body.page-login .entry-content,
            body.page-lost-password .entry-content {
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
            jQuery('body.page-login-pro form#loginform').before('<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" tabindex="-1"></a></h1>');
            jQuery('body.page-login-pro .entry-content').find('br').remove();

            jQuery('body.page-login form#loginform').before('<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" tabindex="-1"></a></h1>');
            jQuery('body.page-login .entry-content').find('br').remove();

            jQuery("input#memb_password_send-1-email-input").attr("placeholder", "Enter your email");
            jQuery("input#user_login").attr("placeholder", "user name");
            jQuery("input#user_pass").attr("placeholder", "Password");
        });

        jQuery(document).ready(function () {
            jQuery('body.page-lost-password form#memb_password_send-1').before('<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" tabindex="-1"></a></h1>');
            jQuery('body.page-lost-password .entry-content').find('br').remove();
        });

        jQuery(document).ready(function () {
            jQuery("input#rememberme").change(function (e) {
                jQuery("input#rememberme").parent().toggleClass("clicccked");
            });
        });

        jQuery(document).ready(function () {
            jQuery('#refresh-defaults-c').click(function (e) {
                e.preventDefault();
                location.reload();

            });
        });

        // jQuery( document ).ajaxStop(function() {

        // });


    </script>
