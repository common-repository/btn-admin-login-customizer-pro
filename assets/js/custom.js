jQuery(document).ready(function () {

    var kk = jQuery("input#user_login").parent().html();
    var jj =  kk.split("<br>")
    jQuery("input#user_login").parent().html(jj[1]);

      

});

jQuery(document).ready(function () {

  var kk = jQuery("input#user_pass").parent().html();
var jj =  kk.split("<br>")
jQuery("input#user_pass").parent().html(jj[1]);

  

});
