
//set up API

var JSONvote;
if (!JSONvote) {
    JSONvote = {};
}
var eventtimes = null
,	gz_qs_url = "/wp-content/plugins/gz-quick-subscribe/subscribe-ajax.php?"
,	emailPattern 	 	= /^\s*[\w-]+(\.[\w-]+)*@([\w-]+\.)+[A-Za-z]{2,7}\s*$/
,	gz_sub_succeed = "Subscribe succeed!"
,	gz_sub_succeed_un = "Unsubscribe succeed!"
,	gz_sub_error = "Please check your e-mail address ad try again. Thank you.";

function postSubscribe(postTpye,postItem) {
	/*
	type = subscribe
	~/wp-content/plugins/gz-quick-subscribe/subscribe-ajax.php?do=subscribe&email=erew@eeq.%20com
	type = unsubscribe
	~/wp-content/plugins/gz-quick-subscribe/subscribe-ajax.php?do=unsubscribe&email=erew@eeq.%20com
	*/
	jQuery( '.gz_quick_subscribe_status').html("Sending...");

	var postdate = "do=" + postTpye + "&email=" + postItem 
	,	newUrl = gz_qs_url 
	,	succeeInfo = gz_sub_succeed;

	if ( postTpye == "unsubscribe" ) { succeeInfo = gz_sub_succeed_un}
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
				jQuery( '.gz_quick_subscribe_status').html(succeeInfo);
				//alert(html);
			},300);
		}
		if ( JSONvote.result == "error" ){
			eventtimes = setTimeout(function(){
				jQuery( '.gz_quick_subscribe_status').html(gz_sub_error);
				//alert(html);
			},300);
		}
	});
}

jQuery(document).ready(function() {

  jQuery("#tophead .carousel").each(function(){
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
    	jQuery( '.gz_quick_subscribe_status').html(gz_sub_error);
    	return ;
 	}
	if( !emailPattern.test( subItem ) ){ 
		jQuery( '.gz_quick_subscribe_status').html(gz_sub_error);
    	return ;
	}
    if (subItem !== ""){
      postSubscribe(subtType,subItem);
    }
    //return false;
  });

  jQuery(".carousel-inner .item").die().live('hover', function() {
  	//
    var $this = $(this)
    ,	$linkItem = $this.find(".carousel-caption");
    $linkItem.fadeIn();
  });
  jQuery(".carousel-inner").die().live('mouseout', function() {
  	//
  	var $this = $(this)
    ,	$linkItem = $this.find(".carousel-caption");
    $linkItem.fadeOut();
  });


  jQuery(".postbody .slide").clone(true).appendTo(".fullsilderbox");
  setTimeout(function () {
    jQuery(".postbody .slide").remove();
  }, 200); // 
  
  setTimeout(function () {
    jQuery(".fullsilderbox .slide").each(function(){
      jQuery(this).carousel({
          interval: 2200
      });
    });
  }, 100); // 
  jQuery(".fullsilderbox .slide .right").die().live('click', function() {
    jQuery(".fullsilderbox .slide").carousel('next');
  });
  jQuery(".fullsilderbox .slide .left").die().live('click', function() {
    jQuery(".fullsilderbox .slide").carousel('prev');
  });
})









