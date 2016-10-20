
$(document).ready(function(){

var $window = $(window); //You forgot this line in the above example

$('li[data-type="background"]').each(function(){
var $bgobj = $(this); // assigning the object
$(window).scroll(function() {
var yPos = ($window.scrollTop()*$bgobj.data('speed'));
// Put together our final background position
var coords = yPos + 'px';

$bgobj.css({ top: coords });
});
});
});

$(document).ready(function(){
 $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 300) {
                $('#fixed').animate({ top: 0, width:'100%',}, 1000 );
                $("#fade-out").fadeOut(500);
                $("#fade-out1").fadeOut(500);
                $("#fade-out2").fadeOut(500);
                $("#fade-in2").fadeIn(500);
                $('#changetext').html('<i class="fa fa-info" aria-hidden="true" "></i> Siden er under konstruksjon!');
            } else {
                
            }
        });
    });
 });

$(document).ready(function(){

var $window = $(window); //You forgot this line in the above example

$('div[data-type="test2"]').each(function(){
var $bgobj = $(this); // assigning the object
var offset = $('#way4').offset();

$(window).scroll(function() {

var yPos = (((offset.top-$window.scrollTop())*$bgobj.data('speed')));


var coords = yPos + 'px';

$bgobj.css({ bottom: coords });
});
});
});



var lastScrollTop = 0;

window.addEventListener("scroll", function(){ 
   var st = window.pageYOffset || document.documentElement.scrollTop; 
   $("#cog").css("-animation-play-state", "running");
  $("#cog2").css("-animation-play-state", "running");
    var obj = $("#cog")
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {
        $("#cog").css("-animation-play-state", "paused");
        $("#cog2").css("-animation-play-state", "paused");
       // var rotate = getRotationDegrees(obj);
                
    }, 250));

   if (st > lastScrollTop){
        $('#cog')
         .addClass('spin-clockwise')
         .removeClass('spin-counter-clockwise');
         $('#cog2')
         .addClass('spin-counter-clockwise')
         .removeClass('spin-clockwise');
       } else {
        $('#cog')
         .addClass('spin-counter-clockwise')
         .removeClass('spin-clockwise');
         $('#cog2')
          .addClass('spin-clockwise')
         .removeClass('spin-counter-clockwise');
   }

   lastScrollTop = st;
}, false);

function getRotationDegrees(obj) {
    var matrix = obj.css("-webkit-transform") ||
    obj.css("-moz-transform")    ||
    obj.css("-ms-transform")     ||
    obj.css("-o-transform")      ||
    obj.css("transform");
    if(matrix !== 'none') {
        var values = matrix.split('(')[1].split(')')[0].split(',');
        var a = values[0];
        var b = values[1];
        var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
    } else { var angle = 0; }

    if(angle < 0) angle +=360;
    console.log(angle);
    return angle;

}




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

	



  var waypoint10 = new Waypoint({
    element: document.getElementById('way10'),
    handler: function() {
     $('#way10').animate({ opacity: 1, },{ duration: 2000,  queue: false });
     $('#wa111').animate({ marginRight: "2rem", },{ duration: 1000,  queue: false });
    
      }, offset: '80%'
  })
   var waypoint11 = new Waypoint({
    element: document.getElementById('way11'),
    handler: function() {
      $('#way11').animate({ opacity: 1,  }, 2000 );
     $('#way1112').animate({ marginLeft: "2rem", },{ duration: 1000,  queue: false });
      }, offset: '80%'
  })
    var waypoint12 = new Waypoint({
    element: document.getElementById('way12'),
    handler: function() {
     $('#way12').animate({ opacity: 1,  }, 2000 );
     $('#wa113').animate({ marginRight: "2rem", },{ duration: 1000,  queue: false });
      }, offset: '80%'
  })

     var waypoint13 = new Waypoint({
    element: document.getElementById('way13'),
    handler: function() {
      var $window = $(window);

       // $('#logo1').followTo($window.scrollTop());
        //$('.gradient').css('opacity', '0');
        
        
      }, offset: 400
  })

	var waypoint2 = new Waypoint({
		element: document.getElementById('way'),
		handler: function() {
			$('#wayWeb').children('.verticaLine').toggleClass('checked');
			$('#wayWeb').children('.checkbox').toggleClass('checked');
      //$('#way').animate({ backgroundColor: "#94ad90", }, 1000 );
      
      
		}
	})

   var waypoint21 = new Waypoint({
    element: document.getElementById('way'),
    handler: function() {
     
      
      $('#fading-in3').animate({ opacity: 1, },{ duration: 1000,  queue: false });
      $('#fading-in31').animate({ left: 0, },{ duration: 1000,  queue: false });
      $('#fading-in32').animate({ top: 0, },{ duration: 1000,  queue: false });
      $('#fading-in33').animate({ right: 0,},{ duration: 1000,  queue: false });

    }, offset: '100%'
  })



	var waypoint3 = new Waypoint({
		element: document.getElementById('way2'),
		handler: function() {
			$('#wayWeb2').children('.verticaLine').toggleClass('checked');
			$('#wayWeb2').children('.checkbox').toggleClass('checked');
			//$('#way2').animate({ backgroundColor: "#446CB3", }, 1000 );
      
      
		}
	})

  var waypoint31 = new Waypoint({
    element: document.getElementById('way2'),
    handler: function() {
      $('#opacity').animate({ opacity: 1, },{ duration: 1000,  queue: false });
      $('#opacity').animate({ left: 0, },{ duration: 1000,  queue: false });
      $('#opacity2').animate({ opacity: 1, },{ duration: 1000,  queue: false });
      $('#opacity2').animate({ left: 0, },{ duration: 1000,  queue: false });
      
    }, offset: '100%'
  })

 var waypoint32 = new Waypoint({
    element: document.getElementById('way2'),
    handler: function() {
      pictures();
      numbers();
      this.destroy();
    }, offset: '100%'
  })

	var waypoint4 = new Waypoint({
		element: document.getElementById('way3'),
		handler: function() {
			$('#wayWeb3').children('.verticaLine').toggleClass('checked');
			$('#wayWeb3').children('.checkbox').toggleClass('checked');
			//$('#way3').animate({ backgroundColor: "#049372", }, 1000 );
    }
	})
  var waypoint4 = new Waypoint({
    element: document.getElementById('way3'),
    handler: function() {
      $('#fading-in').animate({ opacity: 1, right: 0, }, 1000 );
      $('#fading-in2').animate({ opacity: 1, left: 0, }, 1000 );
    }, offset: '100%'
  })
	var waypoint5 = new Waypoint({
		element: document.getElementById('way4'),
		handler: function() {
      $('#wayWeb4').children('.verticaLine').toggleClass('checked');
			$('#wayWeb4').children('.checkbox').toggleClass('checked');
      //$('#way4').animate({ backgroundColor: "#F4D03F", }, 1000 );
			
		}
	})
	/*var waypoint6 = new Waypoint({
		element: document.getElementById('way5'),
		handler: function() {
			$('#wayWeb5').children('.verticaLine').toggleClass('checked');
			$('#wayWeb5').children('.checkbox').toggleClass('checked');
			//$('#way5').animate({ backgroundColor: "#E87E04", }, 1000 );
     
		}
	})*/
	var waypoint7 = new Waypoint({
		element: document.getElementById('way6'),
		handler: function() {
			$('#wayWeb6').children('.verticaLine').toggleClass('checked');
			$('#wayWeb6').children('.checkbox').toggleClass('checked');
		  //$('#way6').animate({ backgroundColor: "#C0392B", }, 1000 );
      
		}
	})

	var waypoint8 = new Waypoint({
  element: document.getElementById('footer'),
  handler: function(direction) {
    
    $('.kommunikasjon').toggleClass('test');
    
    
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

    $('#fixed').css( "top", "0" );
    $('#fixed').css( "width", "100%");
    $('#fixed').css( "paddingTop", "50px" );
                $("#fade-out").hide();
                $("#fade-out1").hide();
                $("#fade-out2").hide();
                $("#fade-in2").show();
                $('#changetext').html('<i class="fa fa-info" aria-hidden="true" "></i> Siden er under konstruksjon!');
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
      
      $('#fixed').animate({ "margin-left": "280px" }, { duration: 400, queue: false } );
      $('#sand').animate({ "padding-right": "280px" }, { duration: 400, queue: false } );
      });

    } else {
      $(function () {
      m.show()
      e.animate({ "padding-left": "0px" }, { duration: 400, queue: false });
      $('#fixed').animate({ "margin-left": "0px" }, { duration: 400, queue: false } );
      $('#sand').animate({ "padding-right": "0px" }, { duration: 400, queue: false } );
     // p.animate({ "padding-left": "280px" }, { duration: 400, queue: false } );
      });
    }
  }



 



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



   


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-84720422-1', 'auto');
  ga('send', 'pageview');

  $('.matchHeight').matchHeight();
/*

$.fn.followTo = function (pos) {
    var $this = this,
        $window = $(window);

    $window.scroll(function (e) {
        if ($window.scrollTop() > pos) {
            $this.css({
                position: 'absolute',
                top: pos,
                
            });
        } else {
            $this.css({
                position: 'fixed',
                top: 0,
            });
        }
    });
};

*/
$("form").submit(function (e) {
      
      
                       
          var errorMessage = "";
          var fieldsMissing = "";
        
          if ($("#email").val() == "") {
            
            fieldsMissing += "Email<br>";
            
          }
          if ($("#subject").val() == "") {
            
            fieldsMissing += "Subject<br>";
            
          }
          if ($("#content").val() == "") {
            
            fieldsMissing += "Question<br>";
            
          }
          if (fieldsMissing != "") {
            
            errorMessage += "<p><strong>The following field(s) are missing:</strong></p>" + fieldsMissing;
            
          }
        
          if (errorMessage != "") {
            
            $("#error").html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p id="errorMessage">' + errorMessage + '<p></div>');
            return false;
            
          } else {
            return true;
            
            
            
            
          }
          
          
      });


//breakdown the labels into single character spans
$(".flp label").each(function(){
  var sop = '<span class="ch">'; //span opening
  var scl = '</span>'; //span closing
  //split the label into single letters and inject span tags around them
  $(this).html(sop + $(this).html().split("").join(scl+sop) + scl);
  //to prevent space-only spans from collapsing
  $(".ch:contains(' ')").html("&nbsp;");
})

var d;
//animation time
$(".flp input").focus(function(){
  //calculate movement for .ch = half of input height
  var tm = $(this).outerHeight()/2 *-1 + "px";
  console.log(tm);
  //label = next sibling of input
  //to prevent multiple animation trigger by mistake we will use .stop() before animating any character and clear any animation queued by .delay()
  $(this).next().addClass("focussed").children().stop(true).each(function(i){
    d = i*50;//delay
    $(this).delay(d).animate({top: tm}, 200, 'easeOutBack');
  })
})

$(".flp textarea").focus(function(){
  //calculate movement for .ch = half of input height
  var tm = $(this).outerHeight()/6 *-1 + "px";
  console.log(tm);
  //label = next sibling of input
  //to prevent multiple animation trigger by mistake we will use .stop() before animating any character and clear any animation queued by .delay()
  $(this).next().addClass("focussed").children().stop(true).each(function(i){
    d = i*50;//delay
    $(this).delay(d).animate({top: tm}, 200, 'easeOutBack');
  })
})

$(".flp input, .flp textarea").blur(function(){
  //animate the label down if content of the input is empty
  if($(this).val() == "")
  {
    $(this).next().removeClass("focussed").children().stop(true).each(function(i){
      d = i*50;
      $(this).delay(d).animate({top: 0}, 500, 'easeInOutBack');
    })
  }
})


  function numbers() {
$('#lines').animateNumber(
  {
    number: 300,
    

    easing: 'easeInQuad', // require jquery.easing

    // optional custom step function
    // using here to keep '%' sign after number
    numberStep: function(now, tween) {
      var floored_number = Math.floor(now),
          target = $(tween.elem);

      target.text(floored_number);
    }
  },
  1800
);

}
  function pictures() {
    var e = $(".fixedbackground");
    var x=0;
    var planteArray = new Array();
    var number = 300/10;//$("#lines")
      for (i = 0; i < 3 ; i++) { 
        $("#startpic").append( '<div class="row" id="hmmm'+i+'">');
          for (y = 0; y < 12 ; y++) {
              $("#hmmm"+i).append( '<div class="col-md-1 no-padding usynlig" id="plantefade'+x+'"><img src="img/grafikk/Plante.svg"></div>');
              planteArray.push(x);
              
            x++;
            if (x > number)  {
              var z = 0;
              shuffle(planteArray);
              i++;
              var display = function() {
                  e = $("#plantefade"+planteArray[z++]);
                  e.animate({ opacity: 1 }, 3000 );
                  if (z < 31) {
                      
                      setTimeout(display, 100);
                  }
              };

              display();
             break;
            }
         }
      }
    
     
  
 } 



    

    



 function shuffle(a) {
    for (let i = a.length; i; i--) {
        let j = parseInt(Math.random() * i, 10);
        [a[i - 1], a[j]] = [a[j], a[i - 1]];
    }
}

window.onload = function(){
  //canvas initialization
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  //dimensions
  var W = canvas.width;
  var H = canvas.height;
  //Variables
  var degrees = 0;
  var new_degrees = 0;
  var difference = 0;
  var color = "#CF8164"; //green looks better to me
  var bgcolor = "#222";
  var text;
  var text2;
  var animation_loop, redraw_loop;
  var i = 0;
  var degreesArray = [66, 37, 26, 146, 189];
  var textArray = ["Første treff på google får", "Andre treff på google får", "Tredje treff på google får", "De første 4 får", "De ti første får"];
  
  function init()
  {
    //Clear the canvas everytime a chart is drawn
    ctx.clearRect(0, 0, W, H);
    
    //Background 360 degree arc
    ctx.beginPath();
    ctx.strokeStyle = bgcolor;
    ctx.lineWidth = 30;
    ctx.arc(W/2, H/2, 100, 0, Math.PI*2, false); //you can see the arc now
    ctx.stroke();
    
    //gauge will be a simple arc
    //Angle in radians = angle in degrees * PI / 180
    var radians = degrees * Math.PI / 180;
    ctx.beginPath();
    ctx.strokeStyle = color;
    ctx.lineWidth = 30;
    //The arc starts from the rightmost end. If we deduct 90 degrees from the angles
    //the arc will start from the topmost end
    ctx.arc(W/2, H/2, 100, 0 - 90*Math.PI/180, radians - 90*Math.PI/180, false); 
    //you can see the arc now
    ctx.stroke();
    
    //Lets add the text
    ctx.fillStyle = color;
    ctx.font = "24px Arial Black";
    text = Math.floor(degrees/360*100) + "%";
    text2 = "av  all trafikken";
    //Lets center the text
    //deducting half of text width from position x
    text_width = ctx.measureText(text).width;
    //adding manual value to position y since the height of the text cannot
    //be measured easily. There are hacks but we will keep it manual for now.
    ctx.fillText(text, W/2 - text_width/2, H/2 + 15);
    ctx.fillText(text2, 20, 350);
    ctx.fillText(text3, 20, 50);
  }
  
  function draw()
  {
    //Cancel any movement animation if a new chart is requested
    if(typeof animation_loop != undefined) clearInterval(animation_loop);
    
    if (i < 5) {
        new_degrees = degreesArray[i];
        text3 = textArray[i];
        i++;
        
        
        
      } else {
        i = 0

      }
    //random degree from 0 to 360
    
    difference = new_degrees - degrees;
    //This will animate the gauge to new positions
    //The animation will take 1 second
    //time for each frame is 1sec / difference in degrees
    animation_loop = setInterval(animate_to, 1000/difference);
  }
  
  //function to make the chart move to new degrees
  function animate_to()
  {
    //clear animation loop if degrees reaches to new_degrees
    if(degrees == new_degrees) 
      clearInterval(animation_loop);
    
    if(degrees < new_degrees)
      degrees++;
    else
      degrees--;
      
    init();
  }
  
  //Lets add some animation for fun
  draw();
  redraw_loop = setInterval(draw, 2000); //Draw a new chart every 2 seconds
  
  
  
  
}