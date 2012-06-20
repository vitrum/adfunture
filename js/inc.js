
//set up API

var JSONvote;
if (!JSONvote) {
    JSONvote = {};
}
var eventtimes = null
//, url = "vote.php";
, gz_qs_url = "/wp-content/plugins/gz-quick-subscribe/subscribe-ajax.php?";

function postSubscribe(postTpye,postItem) {
	//alert(voteitemId);
	/*
	type = subscribe
	~/wp-content/plugins/gz-quick-subscribe/subscribe-ajax.php?do=subscribe&email=erew@eeq.%20com
	type = unsubscribe
	~/wp-content/plugins/gz-quick-subscribe/subscribe-ajax.php?do=unsubscribe&email=erew@eeq.%20com
	*/
	
	var postdate = "do=" + postTpye + "&email=" + postItem 
	, newUrl = gz_qs_url ;
	var request = jQuery.ajax({
	  type: "GET",
	  url: newUrl ,
	  data:  postdate 
	});
	//alert(newUrl);
	request.done(function(msg) {
		var eventtimes = null;
		JSONvote = eval('(' + msg + ')');
		//alert(JSONvote.result);
		//{"result":"success"}


		if ( JSONvote.result == "success") {
			alert("yes!");
		}

		/*
		var tempjsonvote = JSONvote.answers
		,	html = '<span class="resulinfo title">结果</span>'
		//,	tempjson = JSON.answers
		,	spanclassName = "left";

		jQuery.each(tempjsonvote,function(i){
			//alert(this.id + "," + this.text + "," + this.image_url);
			//<span class="resulinfo title">结果</span><span class="resulinfo left winner note">70%</span><span class="resulinfo right note">30%</span>
			if (i == '1') { spanclassName = "left" ;} else { spanclassName = "right";}
			html = html + '<span class="resulinfo '+ spanclassName +' note">'+ this.rate +'</span>';
		});
		jQuery( '#'+ voteitemId +' .voteresult .resultbox').html(html);
		eventtimes = setTimeout(function(){
			//jQuery( '#'+ voteitemId +' .votebody').find('.loading').hide();
			alert(html);
		},300);
		*/
	});
}

jQuery(document).ready(function() {

  jQuery(".carousel").each(function(){
    jQuery(this).carousel({
        interval: 2200
    });
  });
  jQuery(".topsliderbanner .widget_gz-banner-slider-widget:odd").css("margin","0 10px");
  
  

  jQuery(".gz_quick_subscribe_btn").die().live('click', function() {
    var subItem = jQuery("#gz_quick_subscribe input").val()
    ,	subtType = "subscribe" ;
    //alert(linkInfo);
    if (subItem !== ""){
      postSubscribe(subtType,subItem);
    }
    //return false;
  });

  jQuery(".gz_quick_unsubscribe_btn").die().live('click', function() {
    var subItem = jQuery("#gz_quick_subscribe input").val()
    ,	subtType = "unsubscribe" ;
    //alert(linkInfo);
    if (subItem !== ""){
      postSubscribe(subtType,subItem);
    }
    //return false;
  });

})