// JavaScript Document
(function ($) {

$(document).ready(function() {

	b3_create_submenus();

	//nav menu drop downs
	function addMenu() {
		if ($(window).width() > 767) {
			var $this = $(this);
			var rel = parseInt($this.attr('data-submenu'));
			$('.b3-submenu').removeClass('over').css('display','none');

			if ( rel > -1 ) {
				if (!$('.submenu-'+rel).hasClass('over')) {
					if ($('#submenu').is(':visible')) {
						$('#submenu').slideUp('fast', function () {
							$('.b3-submenu.over').removeClass('over').css('display','none');
							$('.submenu-'+rel).addClass('over').css('display','block');
							$('#submenu').slideDown();
						});
					} else {
						$('.submenu-'+rel).removeClass('over').css('display','block');
						$('#submenu').slideDown();
					}
				}
			} else {
				if ($('#submenu').is(':visible')) {
					$('#submenu').slideUp('fast', function () {
						$('.b3-submenu.over').removeClass('over').css('display','none');
					});
				} else {
					
				}
			}
		}

		$(this).removeClass('close').addClass('over');
  	}

	function removeMenu() {
		$(this).removeClass('over').addClass('close');
		//$('#submenu .b3-submenu').removeAttr('style');
	}

	//assign hovers
	$("#menu .the-menu > li").hoverIntent(addMenu, removeMenu);

	//additional hovers
	$("#submenu").on('mouseleave',function () {
		b3_stuff();
	});

	//mobile submenu
	$('#menu li .fa-plus').click(function () {
		if ($(window).width() < 768) {
			$(this).hide();
			var $parent = $(this).parent();

			$parent.find('i.fa-minus').show();
			$parent.find('ul').slideDown();
		}
	});
	$('#menu li .fa-minus').click(function () {
		if ($(window).width() < 768) {
			$(this).hide();
			var $parent = $(this).parent();

			$parent.find('i.fa-solid').removeAttr('style');
			$parent.find('ul').slideUp();
		}
	});

	//hamburger menu
	$('.hamburger-icon').click(function () {
		if (!$('#menu').hasClass('open')) {
			$('#menu').addClass('open');
		}
	});
	$('.menu-close').click(function () {
		if ($('#menu').hasClass('open')) {
			$('#menu').removeClass('open');
		}
	});

});

function b3_stuff() {
	if ($(window).width() > 950) {
		if ($('#submenu .keep-alive').length) {
			if (!$('#submenu .keep-alive').hasClass('over')) {
				$('#submenu').slideUp('fast', function () {
					$('.submenu.over').removeClass('over').removeAttr('style');
					$('#submenu .keep-alive').addClass('over').removeAttr('style');
					$('#submenu').slideDown('fast');
				});
			}
		} else {
			$('#submenu').slideUp('fast', function () {
				if ($('#president-button').length) {
					$('#president-button').slideDown();
				}
			});
			$('.submenu.over').removeClass('over').removeAttr('style');
		}
	}
}

function b3_create_submenus() {
	var count = 0;
  var pad = $('.page-current-title').innerWidth() + 50;
  //console.log(pad);

	$('#menu .the-menu > li').each(function(index, element) {
    var ul = $(element).find('> ul');
		if (ul.length) {
			$('#submenu section').append('<div class="b3-submenu submenu-'+count+'"></div>');

			//copy ul.children to submenu area
			$(element).attr('data-submenu', count).addClass('has-submenu').append('<i class="fa-solid fa-plus"></i><i class="fa-solid fa-minus"></i>');
			$(element).find('> ul').clone().appendTo('.submenu-'+count);

			count++;
		}
  });
}

function b3_calculateLIsInRow() {
    var lisInRow = 0;
    $('.the-submenu li').each(function(index, element) {
        var $this = $(element);

        $this.removeClass("end-of-row").attr('data-top', $this.position().top);
        //console.log($this.offset());

        if($this.prev().length > 0) {
            if($this.position().top != $this.prev().position().top) {
               $this.prev().addClass("end-of-row");
               // return false;
            }
            lisInRow++;
        } else {
            lisInRow++;
        }
        if($this.next().length > 0) {

        } else {
            $this.addClass("end-of-row");
        }
    });
}

})(jQuery);// JavaScript Document
