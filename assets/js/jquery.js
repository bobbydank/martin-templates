(function ($) {

  $(window).load(function() {

  });

  $(document).ready(function() {
    //video slider
    if ($('.b3-video-slider').length) {
      $('.b3-video-slider').each(function (i,e) {
        var $this = $(e);
        var $container = $this.find('.children');
        var show = parseInt( $this.attr('data-show') );

        //init
        if (show) {
          //container setup
          $this.attr('data-page', 1);
          
          //children setup
          var $children = $container.children();
          $children.fadeOut('fast');
          for (let i = 0; i < show; i++) {
            $children.eq(i).fadeIn('fast');
          }

          //nav setup
          $('<div class="video-nav"></div>').insertAfter($container);
          var count = Math.ceil( $children.length / show );
          $this.attr('data-count', 1);
          var e = 'active';
          for (let i = 1; i <= count; i++) {
            $('<span class="'+e+'" onclick="b3_videoRotator(this)">'+i+'</span>').appendTo('.video-nav');
            e = '';
          }
        }
      });
    }

    //controls brand window on the home page
    if ($('#brand-window').length) {
    	$('#brand-window.zooming-mark').each(function (i,e) {
    		$(e).removeClass('zooming-mark').addClass('zooming');
    	});

      var time = parseInt( $('#brand-window').attr('data-time') );

  		if ($('#brand-window .container > div').length > 1) {
  			window.timer = window.setInterval(function() {
  				b3_brandRotatorLoop('+');
  			}, time);
  		}
  	}

    //search icons
    $('.search-icon').click(function () {
      if (!$('#search-form-overlay').is(':visible')) {
        $('#search-form-overlay').fadeIn();
      }
    });
    $('.icon-cancel').click(function () {
      if ($('#search-form-overlay').is(':visible')) {
        $('#search-form-overlay').fadeOut();
      }
    });

    //list-dropper
    $('.list-dropper').click(function (e) {
      var $this = $(this);
      var $list = $this.find('.downloads-list');
      if ($list.is(':visible')) {
        $list.slideUp();
        $this.removeClass('up');
      } else {
        $list.slideDown();
        $this.addClass('up');
      }
    });
  });

  //functions
  function b3_brandRotatorLoop(direction) {
    var count = $("#brand-window .container").children(".brand-image").length;
  	var active = $('#brand-window .active').index();
  	var next;

  	if (direction == '+') {
  		if (active < count - 1) {
  			next = active + 1;
  		} else {
  			next = 0;
  		}
  	} else {
  		next = direction;
  	}

  	$("#brand-window .active").fadeOut(1000, function () {
  		$(this).removeClass('active');
  	});
      $("#brand-window").find(".brand-image").eq(next).fadeIn(1000, function () {
  		$(this).addClass('active');
  	});
  }

})(jQuery);

function b3_videoRotator(param) {
  //handle paging
  var page = parseInt( param.innerHTML );
  var $parent = jQuery(param).parent().parent();
  var $container = $parent.find('.children');
  var show = parseInt( $parent.attr('data-show') );
   
  //set the page (do I need this?)
  $parent.attr('data-page', page)
  var h = $container.height();
  $container.css({
    'height' : h,
    'overflow' : 'hidden'
  });

  //fade it all out and bring back the relevant
  var $children = $container.children();
  $children.css('display', 'none');
  for (let i = (show * (page - 1)); i < (show * page); i++) {
    $children.eq(i).fadeIn('fast');
  }

  //handle active
  jQuery(param).parent().find('.active').removeClass('active');
  param.classList.add('active');

  //remove container height
  $container.removeAttr('style');
}
