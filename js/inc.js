jQuery(document).ready(function() {

  jQuery(".carousel").each(function(){
    jQuery(this).carousel({
        interval: 2200
    });
  });
  jQuery(".topsliderbanner .widget_gz-banner-slider-widget:last").css("margin","0");

})