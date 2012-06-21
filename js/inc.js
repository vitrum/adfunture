
//set up API

var JSONvote;
if (!JSONvote) {
    JSONvote = {};
}
var eventtimes = null
,	gz_qs_url = "/wp-content/plugins/gz-quick-subscribe/subscribe-ajax.php?"
,	emailPattern 	 	= /^\s*[\w-]+(\.[\w-]+)*@([\w-]+\.)+[A-Za-z]{2,7}\s*$/;

function postSubscribe(postTpye,postItem) {
	/*
	type = subscribe
	~/wp-content/plugins/gz-quick-subscribe/subscribe-ajax.php?do=subscribe&email=erew@eeq.%20com
	type = unsubscribe
	~/wp-content/plugins/gz-quick-subscribe/subscribe-ajax.php?do=unsubscribe&email=erew@eeq.%20com
	*/
	jQuery( '.gz_quick_subscribe_status').html("loading...");

	var postdate = "do=" + postTpye + "&email=" + postItem 
	, newUrl = gz_qs_url ;
	var request = jQuery.ajax({
	  type: "GET",
	  url: newUrl ,
	  data:  postdate 
	});
	request.done(function(msg) {
		var eventtimes = null;
		JSONvote = eval('(' + msg + ')');
		if ( JSONvote.result == "success") {
			eventtimes = setTimeout(function(){
				jQuery( '.gz_quick_subscribe_status').html(JSONvote.result);
				//alert(html);
			},300);
		}
	});
}

jQuery(document).ready(function() {

  jQuery(".carousel").each(function(){
    jQuery(this).carousel({
        interval: 2200
    });
  });

  jQuery(".topsliderbanner .widget_gz-banner-slider-widget:odd").css("margin","0 10px");

  jQuery(".gz_qs_btn").die().live('click', function() {
    var subItem = jQuery("#gz_quick_subscribe input").val()
    ,	$this = jQuery(this)
    ,	subtType = $this.attr("data-ref") ;
    if (subItem =="") { 
    	jQuery( '.gz_quick_subscribe_status').html("请输入您的邮件地址~");
    	return ;
 	}
	if( !emailPattern.test( subItem ) ){ 
		jQuery( '.gz_quick_subscribe_status').html("邮件地址格式不正确~");
    	return ;
	}
    if (subItem !== ""){
      postSubscribe(subtType,subItem);
    }
    //return false;
  });

})