
$('body').imagesLoaded( function() {
  $('body').addClass('loaded');
  var $window = $(window); //You forgot this line in the above example

  $('div[data-type="test2"]').each(function(){
  var $bgobj = $(this); // assigning the object
  var offset = $('#marked').offset();
  var top = offset.top-130;
  $(window).scroll(function() {

  var yPos = ($window.scrollTop()-top);

  
  var coords = yPos + 'px';

  $bgobj.css({ bottom: coords });
  });
  });

});
/*
//parallax Ycors
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
*/
//Parallax funskjon for bevegelse i skjermen
$('#scene').parallax({
  calibrateX: true,
  calibrateY: true,
  invertX: true,
  invertY: true,
  limitX: false,
  limitY: false,
  scalarX: 5,
  scalarY: 5,
  frictionX: 1,
  frictionY: 1,
  originX: 0.0,
  originY: 0.0
});

var $scene = $('#scene').parallax();
$scene.parallax('enable');



// rakettanimasjon markedsføring





//scrollanimasjoner tannhjul
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


//beskjeder


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


  // Meny animasjoner
  //mobilmeny animasjon
  

//meny-slide animasjon
    function myFunction2() {
    var e = $(".menu-slide");
    
    
    var m = $("#nothing")

    
    if(m.is(':visible')) {
      $(function () {
      m.hide()
      e.animate({ "padding-left": "280px" }, { duration: 400, queue: false } );
      $('.cog2').html('<div class="vertical" ><i class="fa fa-times" aria-hidden="true"></i></div>');


      });

    } else {
      $(function () {
      m.show()
      e.animate({ "padding-left": "0px" }, { duration: 400, queue: false });
      $('.cog2').html('<div class="vertical" ><i class="fa fa-bars" aria-hidden="true"></i></div>');

      });
    }
  }

  function lukkMeny() {
    var e = $(".menu-slide");
    var m = $("#nothing")
     $(function () {
      m.show()
      e.animate({ "padding-left": "0px" }, { duration: 400, queue: false });
      $('.cog2').html('<div class="vertical" ><i class="fa fa-bars" aria-hidden="true"></i></div>');
   
      });
  }



    function myFunction() {
    var e = $(".fixedbackground");
    if(e.is(':visible')) {
      e.hide();
      $(".navbar").addClass("navbar1");
    } else {
      e.show();
      $(".logo").hide();
      $(".navbar").removeClass("navbar1");
      

    }
  }

  //Markertemeny merker


  var waypoint = new Waypoint({
    element: document.getElementById('nettside'),
    handler: function() {
      $('#wayWeb').children('.verticaLine').toggleClass('checked');
      $('#wayWeb').children('.checkbox').toggleClass('checked');
      //$('#way').animate({ backgroundColor: "#94ad90", }, 1000 );
       

      
    }, offset: '100px'
  })

 var waypoint = new Waypoint({
    element: document.getElementById('app'),
    handler: function() {
      $('#wayWeb5').children('.verticaLine').toggleClass('checked');
      $('#wayWeb5').children('.checkbox').toggleClass('checked');
    
      }, offset: '100px' 
  })

  var waypoint = new Waypoint({
    element: document.getElementById('marked'),
    handler: function() {
      $('#wayWeb4').children('.verticaLine').toggleClass('checked');
      $('#wayWeb4').children('.checkbox').toggleClass('checked');
      //$('#marked').animate({ backgroundColor: "#F4D03F", }, 1000 );
      
    }, offset: '100px'
  })




  var waypoint = new Waypoint({
    element: document.getElementById('drift'),
    handler: function() {
      $('#wayWeb3').children('.verticaLine').toggleClass('checked');
      $('#wayWeb3').children('.checkbox').toggleClass('checked');
      //$('#drift').animate({ backgroundColor: "#049372", }, 1000 );
    }, offset: '100px'
  })




   var waypoint = new Waypoint({
    element: document.getElementById('omoss'),
    handler: function() {
      $('#wayWeb8').children('.verticaLine').toggleClass('checked');
      $('#wayWeb8').children('.checkbox').toggleClass('checked');
    
      }, offset: '100px'
  })

//Scroll klikke funksjon

$("#scroll").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top  }, 2000);
    return false;
});
$("#wayWeb").click(function() {
    $('html, body').animate({
        scrollTop: $("#nettside").offset().top    }, 2000);
        
    return false;
});
$("#wayWeb5").click(function() {
    $('html, body').animate({
        scrollTop: $("#app").offset().top    }, 2000);
    return false;
});
$("#wayWeb4").click(function() {
    $('html, body').animate({
        scrollTop: $("#marked").offset().top    }, 2000);
    return false;
});
$("#wayWeb6").click(function() {
    $('html, body').animate({
        scrollTop: $("#proto").offset().top    }, 2000);
    return false;
});

$("#wayWeb3").click(function() {
    $('html, body').animate({
        scrollTop: $("#drift").offset().top    }, 2000);
    return false;
});


$("#wayWeb8").click(function() {
    $('html, body').animate({
        scrollTop: $("#omoss").offset().top    }, 2000);
    return false;
});

//hvilke animasjoner som skal fyra av ift til skjermstørrelse
if (matchMedia) {
var mq = window.matchMedia("(min-width: 770px)");
var mq2 = window.matchMedia("(min-width: 544px)");
mq.addListener(WidthChange);
WidthChange(mq);
}

// media query change
function WidthChange(mq) {
  height();
  if (mq2.matches) {
        //KUN FULLBREDDE ANIMASJONER OVER 770px. Alle andre enheter enn telefoner.


          //SKREDDERSØM
          var waypoint = new Waypoint({
            element: document.getElementById('skredder'),
            handler: function() {
             $('#skredder').animate({ opacity: 1, },{ duration: 2000,  queue: false });
             $('#skredderAni2').animate({ marginRight: "2rem", },{ duration: 1000,  queue: false });
            
              }, offset: '80%'
          })
          //VEKTOR
           var waypoint = new Waypoint({
            element: document.getElementById('respons'),
            handler: function() {
              $('#respons').animate({ opacity: 1,  }, 2000 );
             $('#responsAni2').animate({ marginLeft: "2rem", },{ duration: 1000,  queue: false });
              }, offset: '80%'
          })
           //RESPONSIV
           var waypoint = new Waypoint({
            element: document.getElementById('vektor'),
            handler: function() {
             $('#vektor').animate({ opacity: 1,  }, 2000 );
             $('#vektorAni2').animate({ marginRight: "2rem", },{ duration: 1000,  queue: false });
              }, offset: '80%'
          })

           //NETTSIDE
           var waypoint = new Waypoint({
            element: document.getElementById('nettside'),
            handler: function() {
                     
              $('#nettAni').animate({ opacity: 1, },{ duration: 1000,  queue: false });
              $('#nettAni').animate({ left: 0, },{ duration: 1000,  queue: false });
              $('#nettAni2').animate({ opacity: 1, },{ duration: 1000,  queue: false });
              $('#nettAni2').animate({ left: 0, },{ duration: 1000,  queue: false });
        
            }, offset: '80%'
          })
           
           //APP

            var waypoint = new Waypoint({
            element: document.getElementById('app'),
            handler: function() {
       
              
              $('#appAni').animate({ opacity: 1, },{ duration: 1000,  queue: false });
              $('#appAni').animate({ top: 0, },{ duration: 1000,  queue: false });
              $('#appAni2').animate({ opacity: 1, },{ duration: 1000,  queue: false });
              $('#appAni2').animate({ top: 0,},{ duration: 1000,  queue: false });

            }, offset: '80%'
          })
          
           //MARKEDSFØRING
          var waypoint = new Waypoint({
            element: document.getElementById('marked'),
            handler: function() {
       
              
              $('#markedAni').animate({ opacity: 1, },{ duration: 1000,  queue: false });
              $('#markedAni').animate({ left: 0, },{ duration: 1000,  queue: false });
              $('#markedAni2').animate({ opacity: 1, },{ duration: 1000,  queue: false });
              $('#markedAni2').animate({ left: 0,},{ duration: 1000,  queue: false });

            }, offset: '80%'
          })
          
          
          //Webhotell
           var waypoint = new Waypoint({
            element: document.getElementById('drift'),
            handler: function() {
              $('#driftAni').animate({ opacity: 1, },{ duration: 1000,  queue: false });
              $('#driftAni').animate({ top: 0, },{ duration: 1000,  queue: false });
              $('#driftAni2').animate({ opacity: 1, },{ duration: 1000,  queue: false });
              $('#driftAni2').animate({ top: 0, },{ duration: 1000,  queue: false });
            }, offset: '80%'
          })

          //SØKEMOTOROPTIMALISERING

           /*
           var waypoint = new Waypoint({
          element: document.getElementById('seo'),
          handler: function(direction) {
            
           canvas(); 
           this.destroy();
           //notify('Added to cart','success','10000'); 
            
          },
          offset: '50%'
        })
      */
         
  } else {
    //Animasjonerkun til telefon

    //menyanimasjon
      $(document).ready(function(){
        // hide .navbar first
        $(".navbar").hide();    
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.navbar').fadeIn();
                } else {
                    $('.navbar').fadeOut();
                }
            });
      });

     

  }

}




   
//google analytics

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-84720422-1', 'auto');
  ga('send', 'pageview');


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

// Kontaktskjema
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

//Planteanimasjon


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

//Seksjonsanimasjoner

//trær plantet animasjon tall
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
//trær plantet animasjon bilde

/*
//Canvas animasjon SEO
function canvas () {
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
  var color = "lightgreen"; //green looks better to me
  var bgcolor = "#222";
  var text;
  var text2;
  var animation_loop, redraw_loop;
  var i = 0;
  var degreesArray = [66, 37, 189];
  var textArray = ["Første treff på google får", "Andre treff på google får", "De ti første får"];
  var widthArray = [W/6, W/2, W/6*5]
  var x= 0;
  var width =0;

  function init()
  {
    text = Math.floor(degrees/360*100) + "%";
    //Clear the canvas everytime a chart is drawn
    text_width = ctx.measureText(text).width;
    ctx.clearRect(width - text_width/2-10, H/2-10, text_width + 100, 100);
   

    //Background 360 degree arc
    ctx.beginPath();
    ctx.strokeStyle = bgcolor;
    ctx.lineWidth = 30;
    ctx.arc(width, H/2, 100, 0, Math.PI*2, false); //you can see the arc now
    ctx.stroke();
    

    //gauge will be a simple arc
    //Angle in radians = angle in degrees * PI / 180
    var radians = degrees * Math.PI / 180;
    ctx.beginPath();
    ctx.strokeStyle = color;
    ctx.lineWidth = 30;
    //The arc starts from the rightmost end. If we deduct 90 degrees from the angles
    //the arc will start from the topmost end
    ctx.arc(width, H/2, 100, 0 - 90*Math.PI/180, radians - 90*Math.PI/180, false); 
    //you can see the arc now
    ctx.stroke();
    
    //Lets add the text
    ctx.fillStyle = color;
    ctx.font = "24px Arial Black";
    
    text2 = "av all trafikken";
    //Lets center the text
    //deducting half of text width from position x
    
    text_width2 = ctx.measureText(text2).width;
    text_width3 = ctx.measureText(text3).width;
    //adding manual value to position y since the height of the text cannot
    //be measured easily. There are hacks but we will keep it manual for now.
    ctx.fillText(text, width - text_width/2, H/2 + 15);
    //ctx.fillText(text2, width - text_width2/2, 350);
    //ctx.fillText(text3, width - text_width3/2, 50);
  }
  
  function draw()
  {
    //Cancel any movement animation if a new chart is requested
   // if(typeof animation_loop != undefined) clearInterval(animation_loop);
    degrees = 0;

    if (i < 3) {
        new_degrees = degreesArray[i];
        text3 = textArray[i];
        width = widthArray[i];
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
  //draw();
  
  var z = 0;
  var intervalID = setInterval(function () {

  redraw_loop = draw();
   if (++x === 3) {
       window.clearInterval(intervalID);
   }
}, 1500);
  
  
  
}

*/

function height() {
  var divHeight = $(".jumbo").height();
  $('#kodedesign').css("padding-top", divHeight);

}