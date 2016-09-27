$(document).ready(function(){

var $window = $(window); //You forgot this line in the above example

$('div[data-type="background"]').each(function(){
var $bgobj = $(this); // assigning the object
$(window).scroll(function() {
var yPos = ($window.scrollTop()*$bgobj.data('speed'));
// Put together our final background position
var coords = 'left '+ yPos + 'px';
// Move the background
$bgobj.css({ backgroundPosition: coords });
});
});
});


$(document).ready(function(){

var $window = $(window); //You forgot this line in the above example

$('div[data-type="test2"]').each(function(){
var $bgobj = $(this); // assigning the object
$(window).scroll(function() {
var yPos = ($window.scrollTop()*$bgobj.data('speed'));

var coords = yPos + 'px';
// Move the background
$bgobj.css({ top: coords });
});
});
});




	function notify(text, category, delay) {
    var $category=category;
    var $input ='<div class="alert alert-'+$category+'" role="alert">'+text+'</div>';
    var $delay = delay;
    var $notification = $('<li />').html($input).css({
      left: 320
    })
    $notifications = $('.notifications')
    $notifications.append($notification)
    $notification.animate({
      left: 0
    }, 300, function() {
      $(this).delay($delay).animate({
        left: 320
      }, 200, function() {
        $(this).slideUp(100, function() {
          $(this).remove()
        })
      })
    })
  }

	

  var waypoint15 = new Waypoint({
    element: document.getElementById('wa1'),
    handler: function() {
     // $('#way10').animate({ opacity: 1, }, 1000 );
     // $('#way11').animate({ opacity: 1, }, 1000 );
     // $('#way12').animate({ opacity: 1, }, 1000 );
      
      }, offset: -1
  })


  var waypoint10 = new Waypoint({
    element: document.getElementById('way10'),
    handler: function() {
     $('#way10').animate({ opacity: 1, },{ duration: 2500,  queue: false });
     $('#wa111').animate({ marginRight: "2rem", },{ duration: 2500,  queue: false });
     
      }, offset: 'bottom-in-view'
  })
   var waypoint11 = new Waypoint({
    element: document.getElementById('way11'),
    handler: function() {
      $('#way11').animate({ opacity: 1, left: 0, }, 2500 );
      }, offset: 'bottom-in-view'
  })
    var waypoint12 = new Waypoint({
    element: document.getElementById('way12'),
    handler: function() {
     $('#way12').animate({ opacity: 1, left: 0, }, 2500 );
      }, offset: 'bottom-in-view'
  })

     var waypoint13 = new Waypoint({
    element: document.getElementById('way13'),
    handler: function() {
      var $window = $(window);

        $('#logo1').followTo($window.scrollTop());
        
        
      }, offset: 350
  })

	var waypoint2 = new Waypoint({
		element: document.getElementById('way'),
		handler: function() {
			$('#wayWeb').children('.verticaLine').toggleClass('checked');
			$('#wayWeb').children('.checkbox').toggleClass('checked');
      //$('#way').animate({ backgroundColor: "#94ad90", }, 1000 );
      $('#opacity').animate({ opacity: 1, }, 2500 );
      notify('<i class="fa fa-info-circle" style="font-size:1.5em; vertical-align: middle;" aria-hidden="true"></i><strong> Webside</strong>', 'info', '2000');
		}
	})

   var waypoint21 = new Waypoint({
    element: document.getElementById('way'),
    handler: function() {
     
      
      $('#fading-in3').animate({ opacity: 1, },{ duration: 2500,  queue: false });

    }, offset: '50%'
  })



	var waypoint3 = new Waypoint({
		element: document.getElementById('way2'),
		handler: function() {
			$('#wayWeb2').children('.verticaLine').toggleClass('checked');
			$('#wayWeb2').children('.checkbox').toggleClass('checked');
			//$('#way2').animate({ backgroundColor: "#446CB3", }, 1000 );
      $('#fading-in').animate({ opacity: 1, left: 0, }, 2500 );
      $('#fading-in2').animate({ opacity: 1, right: 0, }, 2500 );
      notify('<i class="fa fa-info-circle" style="font-size:1.5em; vertical-align: middle;" aria-hidden="true"></i><strong> Webhotell</strong>', 'info', '2000');
		}
	})

  var waypoint31 = new Waypoint({
    element: document.getElementById('way2'),
    handler: function() {
      $('#opacity').animate({ opacity: 1, }, 2500 );
    }, offset: '50%'
  })

	var waypoint4 = new Waypoint({
		element: document.getElementById('way3'),
		handler: function() {
			$('#wayWeb3').children('.verticaLine').toggleClass('checked');
			$('#wayWeb3').children('.checkbox').toggleClass('checked');
			//$('#way3').animate({ backgroundColor: "#049372", }, 1000 );
      notify('<i class="fa fa-info-circle" style="font-size:1.5em; vertical-align: middle;" aria-hidden="true"></i><strong> Drift</strong>', 'info', '2000');
		}
	})
	var waypoint5 = new Waypoint({
		element: document.getElementById('way4'),
		handler: function() {
      $('#wayWeb4').children('.verticaLine').toggleClass('checked');
			$('#wayWeb4').children('.checkbox').toggleClass('checked');
      //$('#way4').animate({ backgroundColor: "#F4D03F", }, 1000 );
			notify('<i class="fa fa-info-circle" style="font-size:1.5em; vertical-align: middle;" aria-hidden="true"></i><strong> Markedsføring</strong>', 'info', '2000');
		}
	})
	var waypoint6 = new Waypoint({
		element: document.getElementById('way5'),
		handler: function() {
			$('#wayWeb5').children('.verticaLine').toggleClass('checked');
			$('#wayWeb5').children('.checkbox').toggleClass('checked');
			//$('#way5').animate({ backgroundColor: "#E87E04", }, 1000 );
      notify('<i class="fa fa-info-circle" style="font-size:1.5em; vertical-align: middle;" aria-hidden="true"></i><strong> Om oss</strong>', 'info', '2000');
		}
	})
	var waypoint7 = new Waypoint({
		element: document.getElementById('way6'),
		handler: function() {
			$('#wayWeb6').children('.verticaLine').toggleClass('checked');
			$('#wayWeb6').children('.checkbox').toggleClass('checked');
		  //$('#way6').animate({ backgroundColor: "#C0392B", }, 1000 );
      notify('<i class="fa fa-info-circle" style="font-size:1.5em; vertical-align: middle;"  aria-hidden="true"></i><strong> Prisliste</strong>', 'info', '2000');
		}
	})

	var waypoint8 = new Waypoint({
  element: document.getElementById('footer'),
  handler: function(direction) {
    
    $('.kommunikasjon').toggleClass('test');
    
    notify('Bottom of element hit bottom of viewport', 'info', '200')
  },
  offset: 'bottom-in-view'
})




$("#scroll").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top    }, 2000);
    return false;
});
$("#wayWeb").click(function() {
    $('html, body').animate({
        scrollTop: $("#way").offset().top    }, 2000);
        
    return false;
});
$("#wayWeb2").click(function() {
    $('html, body').animate({
        scrollTop: $("#way2").offset().top    }, 2000);
    return false;
});
$("#wayWeb3").click(function() {
    $('html, body').animate({
        scrollTop: $("#way3").offset().top    }, 2000);
    return false;
});
$("#wayWeb4").click(function() {
    $('html, body').animate({
        scrollTop: $("#way4").offset().top    }, 2000);
    return false;
});
$("#wayWeb5").click(function() {
    $('html, body').animate({
        scrollTop: $("#way5").offset().top    }, 2000);
    return false;
});
$("#wayWeb6").click(function() {
    $('html, body').animate({
        scrollTop: $("#way6").offset().top    }, 2000);
    return false;
});

$("#buy").click(function() {
    notify('Added to cart','success','10000'); 
    return false;
});

$("#meny2").click(function() {
    $("#way2").toggleClass( "tilt" );

    return false;
});

/*$('.field-wrap').click(function(){
	$(this).children('.checkbox').toggleClass('checked');
	$(this).children('.verticaLine').toggleClass('checked');
});*/

/*$('#box1').change(function () {
    $("#wayWeb").show();
    $("#way").animate({ visibility: "visible" });


 });
*/
  if (matchMedia) {
  var mq = window.matchMedia("(min-width: 770px)");
  mq.addListener(WidthChange);
  WidthChange(mq);
}

// media query change
function WidthChange(mq) {
  if (mq.matches) {
    // window width is at least 500px
  } else {
      $(document).ready(function(){

    // hide .navbar first
    $(".navbar").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 100) {
                $('.navbar').fadeIn();
            } else {
                $('.navbar').fadeOut();
            }
        });
    });

});
  }

}

  
  function myFunction() {
    var e = $(".fixedbackground");
    if(e.is(':visible')) {
      e.hide();
    } else {
      e.show();
      $(".logo").hide()
      

    }
  }

    function myFunction2() {
    var e = $(".slide");
    var p = $("#page-content-wrapper");
    var m = $("#nothing")

    
    if(m.is(':visible')) {
      $(function () {
      m.hide()
      e.animate({ "padding-left": "280px" }, { duration: 400, queue: false } );
      //p.animate({ "padding-left": "0px" }, { duration: 400, queue: false } );
      
      });
    } else {
      $(function () {
      m.show()
      e.animate({ "padding-left": "0px" }, { duration: 400, queue: false });
      
     // p.animate({ "padding-left": "280px" }, { duration: 400, queue: false } );
      });
    }
  }



 

/*

$('#scene').parallax({
  calibrateX: true,
  calibrateY: true,
  invertX: true,
  invertY: true,
  limitX: false,
  limitY: 10,
  scalarX: 2,
  scalarY: 8,
  frictionX: 0.2,
  frictionY: 0.8,
  originX: 0.0,
  originY: 1.0
});

var $scene = $('#scene').parallax();
$scene.parallax('enable');

*/

   


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-84720422-1', 'auto');
  ga('send', 'pageview');

  $('.matchHeight').matchHeight();



$.fn.followTo = function (pos) {
    var $this = this,
        $window = $(window);

    $window.scroll(function (e) {
        if ($window.scrollTop() > pos) {
            $this.css({
                position: 'absolute',
                top: pos,
                width: '100%',
            });
        } else {
            $this.css({
                position: 'fixed',
                top: 0,
            });
        }
    });
};


