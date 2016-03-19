$(function() {
	
	$('.carousel').carousel({
		interval: false
	})

});


	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

$(document).ready(function() {
 
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var sync3 = $("#sync3");
  var sync4 = $("#sync4");
 
  sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,    
    navigation: true,
    pagination:false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
    autoHeight : false,
  });
 
  sync2.owlCarousel({
    items : 5,
    itemsDesktop      : [1199,5],
    itemsDesktopSmall : [979,4],
    itemsTablet       : [768,3],
    itemsMobile       : [479,2],
    pagination        :false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });

    sync3.owlCarousel({
    items : 7,
    itemsDesktop      : [1199,5],
    itemsDesktopSmall : [979,4],
    itemsTablet       : [768,3],
    itemsMobile       : [479,2],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });

    sync4.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,    
    navigation: true,
    pagination:false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
    autoHeight : true,
  });
 
  function syncPosition(el){
    var current = this.currentItem;
    $("#sync2, #sync3")
      .find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if($("#sync2, #sync3").data("owlCarousel") !== undefined){
      center(current)
    }
  }
 
  $("#sync2, #sync3").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
  });
 
  function center(number){
    var sync2visible = $("#sync2, #sync3").data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
      if(num === sync2visible[i]){
        var found = true;
      }
    }
 
    if(found===false){
      if(num>sync2visible[sync2visible.length-1]){
        $("#sync2, #sync3").trigger("owl.goTo", num - sync2visible.length+2)
      }else{
        if(num - 1 === -1){
          num = 0;
        }
        $("#sync2, #sync3").trigger("owl.goTo", num);
      }
    } else if(num === sync2visible[sync2visible.length-1]){
      $("#sync2, #sync3").trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
      $("#sync2, #sync3").trigger("owl.goTo", num-1)
    }
    
  }

  $("#feedback-slider").owlCarousel({
    autoPlay : 3000,
    stopOnHover : true,
    pagination : false,
    navigation:true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,      
  }); 
});

   $("#main-slider").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      pagination : true,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

   $("#our-pride-1").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

    $("#our-pride-2").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
    $("#our-pride-3").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

   

 $(function(){

    var obj = $('.name');
    obj.bind('keyup', function(){
    this.value = this.value.replace (/[0-9]/, '');

    });
}); 