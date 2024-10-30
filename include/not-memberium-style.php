<?php
/*
    file        :  not-memberium-style.php
    Description :  This file for styling a default login page (wp-login.php)
    Version     :  V1.0
    Author      :  BTN
*/
global $redux_demo;
$img1 = BG_IMG_1;
$img2 = BG_IMG_2;
$img3 = BG_IMG_3;


?>
<style type="text/css">
      #main {
          height: 100vh;
      }
      /*================================================
                      General option starts off 0(colo) on 1(back)
      ==================================================*/
        /* Back ground*/
        body.login.login-action-login{

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
        /* typography */
        body.login #login p label {
          text-align: left;
              display: block;
    line-height: 30px;
        }
        body.login #login *{
          background: none;
          text-align: center;
          <?php if(!empty($redux_demo['opt-typography']['font-style'])){ ?>
            font-weight: <?php echo $redux_demo['opt-typography']['font-style']; ?>;
          <?php }else{ ?>
            font-style:normal;
          <?php } ?>
          <?php if(!empty($redux_demo['opt-typography']['font-family'])){ ?>
            font-family: <?php echo $redux_demo['opt-typography']['font-family'];  ?>;
          <?php }else{ ?>
            font-family: Arial;
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
        /* typography */
        body.login #login {
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
            transform: translate(-50%,-50%);
            <?php if(!empty($redux_demo['opt-form-border-radius'])){ ?>
              border-radius: <?php echo $redux_demo['opt-form-border-radius'];  ?>;
            <?php }else{ ?>
              border-radius: 20px;
            <?php } ?>

            padding-top: 0 !important;
        }

        body.login #login h1 {
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
          margin-bottom: 17px;
          position: relative;

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

        body.login #login h1:before {
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

        form#loginform {
            padding: 20px;
        }

        body.login #login h1 a {
            height: 100px!important;
            <?php if(!empty($redux_demo['opt-logo-1']['url'])){ ?>
              background-image: url("<?php echo $redux_demo['opt-logo-1']['url']; ?>");
            <?php }else{ ?>
              background-image: url("https://res.cloudinary.com/dbw0ag11w/image/upload/v1520785009/wp-logo.png");
            <?php } ?>
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            margin: 0 auto;
            display: block!important;
            height: 100px !important;
            background-position: 1px;
            max-width: 300px !important;
            background-position: center;
        }

        p.forgetmenot {
          margin: 15px 0;
        }
        .login form .forgetmenot input[type="checkbox"]:checked + strong:before, body.login #login form p.submit input {
          <?php if(!empty($redux_demo['opt-button-color-rgba-k']['rgba'])){ ?>
            background: <?php echo $redux_demo['opt-button-color-rgba-k']['rgba'];  ?>!important;
        <?php }else{ ?>
            background: #9c9e9b!important;
        <?php } ?>
        /* <?php if(!empty($redux_demo['opt-primary-color-rgba']['rgba'])){ ?>
            background: <?php echo $redux_demo['opt-primary-color-rgba']['rgba'];  ?>;
        <?php }else{ ?>
            background: #9c9e9b;
        <?php } ?> */
        box-shadow: none !important;
        <?php if($redux_demo['opt-button-color-rgba-k']['rgba']=="#fff" || $redux_demo['opt-button-color-rgba-k']['rgba']=="#ffffff" ){ ?>
                color: #000!important;
            <?php }else{?>
                color: #fff!important;
            <?php } ?>
            height: 35px;

        }
        body.login #login form p.submit input{
          color:#000;
          text-shadow : none;
          height : 44px !important;
        }
        body.login form {
          box-shadow: none!important;
          margin-top: 0!important;
          padding: 9px 43px!important;
        }
        .login div#login #backtoblog a,
        .login div#login #nav a{
          <?php if(!empty($redux_demo['opt-link-color']['regular'])){ ?>
            color: <?php echo $redux_demo['opt-link-color']['regular'];  ?>!important;
          <?php }else{ ?>
            color: #000!important;
          <?php } ?>
        }
        .login div#login #backtoblog a:visited,
        .login div#login #nav a:visited {
          <?php if(!empty($redux_demo['opt-link-color']['visited'])){ ?>
            color: <?php echo $redux_demo['opt-link-color']['visited'];  ?>!important;
          <?php }else{ ?>
            color: #000!important;
          <?php } ?>
        }

        /* mouse over link */
        .login div#login #backtoblog a:hover,
        .login div#login #nav a:hover {
          <?php if(!empty($redux_demo['opt-link-color']['hover'])){ ?>
            color: <?php echo $redux_demo['opt-link-color']['hover'];  ?>!important;
          <?php }else{ ?>
            color: #000!important;
          <?php } ?>
        }

        /* selected link */
        .login div#login #backtoblog a:active,
        .login div#login #nav a:active {
          <?php if(!empty($redux_demo['opt-link-color']['active'])){ ?>
            color: <?php echo $redux_demo['opt-link-color']['active'];  ?>!important;
          <?php }else{ ?>
            color: #000!important;
          <?php } ?>
        }
        body.login #login form p.submit input {
						border: 0;
            background: none;
            text-shadow: none;
            box-shadow: none;
            display: block;
            <?php if(!empty($redux_demo['opt_dimensions_button']['width'])){ ?>
              width: 30px<?php echo $redux_demo['opt_dimensions_button']['width'];  ?><?php echo $redux_demo['opt_dimensions_button']['units'];  ?> 0 0;
            <?php }else{ ?>
              width: 100%;
            <?php } ?>
            margin-top: 15px;
            font-weight: 100!important;
            text-transform: none!important;
            <?php if(!empty($redux_demo['opt-button-border-raduias'])){ ?>
              border-radius: <?php echo $redux_demo['opt-button-border-raduias'];  ?>;
            <?php }else{ ?>
              border-radius: 5px;
            <?php } ?>
					}

          .login form .forgetmenot input[type="checkbox"] + strong:before {
            content: '';
            position: absolute;
            padding: 0px;
            -webkit-border-radius: 15px;
            border-radius: 15px;
            -webkit-box-shadow: 0px 0px 0px 2px rgba(255,255,255,.8);
            box-shadow: 0px 0px 0px 2px rgba(255,255,255,.8);
            top: 2px;
            left: -24px;
            z-index: 0;
          }
          .login form#loginform .forgetmenot input[type="checkbox"]:checked + strong:before {
                border: #fff 2px solid !important;

            <?php if(!empty($redux_demo['opt-primary-color-rgba']['rgba'])){ ?>
                background-color: <?php echo $redux_demo['opt-primary-color-rgba']['rgba'];  ?> !important;
            <?php }else{ ?>
                background-color: #9c9e9b !important;
            <?php } ?>
            padding: 3px !important;

          }
          .login form#loginform .forgetmenot input[type="checkbox"] + strong:before {
                border: #fff 5px solid !important;
                box-shadow:none;
          }
          body.login form .input, body.login form input[type=checkbox], body.login input[type=text] {
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
            padding: 10px;

          }

          body.login input[type=text],body.login input[type=password] {
            margin-bottom: 20px !important;
            <?php if(!empty($redux_demo['text-background-color'])){ ?>
              background-color: <?php echo $redux_demo['text-background-color'];  ?>!important;

            <?php }else{ ?>
              background-color : #9c9e9b!important;

            <?php } ?>
          }

          body.login input[type=text]::-webkit-input-placeholder,
          body.login input[type=password]::-webkit-input-placeholder {
              /* Chrome/Opera/Safari */
              color: #000;

              font-size: 15px;
              text-align: center;

          }

          body.login input[type=text]::-moz-placeholder,
          body.login input[type=password]::-moz-placeholder {
              /* Firefox 19+ */
              color: #000;

              font-size: 15px;
              text-align: center;

          }

          body.login input[type=text]:-ms-input-placeholder,
          body.login input[type=password]:-ms-input-placeholder {
              /* IE 10+ */
              color: #000;

              font-size: 15px;
              text-align: center;

          }

          body.login input[type=text]:-moz-placeholder,
          body.login input[type=password]:-moz-placeholder {
              /* Firefox 18- */
              color: #000;

              font-size: 15px;
              text-align: center;

          }

          @media screen and (max-width: 720px) {

              body.login #login{
                  width: 90%!important;
                  left :50% !important;
              }
              body.login #login h1:before {
                  border-width: 30px 304px 0 0 !important;
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
    document.addEventListener('DOMContentLoaded', function() {
        var s = document.querySelector("body.login #login h1 a");
        console.log(s);
        s.setAttribute("href", "<?php echo esc_url( home_url( '/' ) ); ?>");

    }, false);



    </script>

<?php ?>
