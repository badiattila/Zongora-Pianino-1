/*  
    http://www.dailycoding.com/ 
    Topbar message plugin
*/
(function ($) {
    $.fn.showTopbarMessage = function (rvsoptions) {

        var defaults = {
            background: "#6c6c6c",
            borderColor: "#000",
            foreColor: "#fff",
            height: "50px",
            fontSize: "14px",
            close: "click"
        };
        var rvsoptions = $.extend(defaults, rvsoptions);

        var barStyle = " width: 100%;position: fixed;height: " + rvsoptions.height + ";top: 0px;left: 0px;right: 0px;margin: 0px;display: none;z-index:9999";
        var overlayStyle = "height: " + rvsoptions.height + ";filter: alpha(opacity=80);-moz-opacity: 0.8;-khtml-opacity: 0.8;opacity: 0.8;background-color: " + rvsoptions.background + ";border-bottom: solid 2px " + rvsoptions.borderColor + ";";
        var messageStyle = " width: 100%;position: absolute;height: " + rvsoptions.height + ";top: 0px;left: 0px;right: 0px;margin: 0px;color: " + rvsoptions.foreColor + ";font-weight: bold;font-size: " + rvsoptions.fontSize + ";text-align: left;padding: 10px 0px";

        return this.each(function () {
            obj = $(this);

          if ($(".topbarBox").length > 0) {
                // Hide already existing bars
                $(".topbarBox").hide()
                $(".topbarBox").slideUp(200, function () {
                    $(".topbarBox").remove();
                });
            }

 var ohtml = "<div id='rvshowcookies'>"
	+	"&nbsp;This website has stored cookies to help the work better. If you're not familiar with Cookies, please check more details in the link."
	+ '<div style="float:right; margin-right:5px;"><a href="http://www.aboutcookies.org/Default.aspx?page=284" target="_blank"><font color="#fff">More Information</font></a>'
	+ '<br /><a href="javascript:void(0)" onclick="jQuery.closeTapbar()"><font color="#fff">Close</font></a></div>'
	+ "</div>";

            var htmlToolbar = ""
                + "<div class='topbarBox' style='" + barStyle + "'>"
                + "  <div style='" + overlayStyle + "'>&nbsp;</div>"
                + "  <div style='" + messageStyle + "'>" + ohtml + "</div>"
                + "</div>"

  if (!jQuery.readCookie('rvscookieconsent')) {
                	$(htmlToolbar).appendTo($('body')).slideDown(200);
                }
        });

    };
 jQuery.closeTapbar = function() {
    	jQuery.createCookie('rvscookieconsent', '1');
    	jQuery('.topbarBox').slideUp('slow');
    	
    };

jQuery.readCookie = function(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
    
     jQuery.createCookie  = function(name,value,days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime()+(days*24*60*60*1000));
            var expires = "; expires="+date.toGMTString();
        }
        else var expires = "";
        document.cookie = name+"="+value+expires+"; path=/";
    }

   // jQuery('#demo01-body').showTopbarMessage();
    
})(jQuery);

/* onload */
$(document).ready(function() {
    var htmldata = "<div id='rvshowcookies' style='display:none'>"
        + "&nbsp;This website has stored cookies to help the work better."
        + "</div>";
    /* append html data after <body> */
    $(htmldata).appendTo($('body'));
    /* call show topbar message */
    $('#rvshowcookies').showTopbarMessage();
});
