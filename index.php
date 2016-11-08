<?php
$output="";
$error = "";
  $errorMessage = "";
  $outputMessage = "";
  if ($_POST) {
    
    
    
    if (!$_POST["email"]) {
      
      $error .= "Email<br>";
      
    }
    if (!$_POST["subject"]) {
      
      $error .= "Subject<br>";
      
    }
    if (!$_POST["content"]) {
      
      $error .= "Content<br>";
      
    }
    if ($error != "") {
      
      $errorMessage = '<p><strong>The following field(s) are missing:</strong></p>'. $error;
      
    }
    if ($errorMessage != "") {
    
      $outputMessage ='<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p id="errorMessage">'. $errorMessage .'<p></div>';
      
    } else {
    
      $to = "post@goodies.no";
      $subject = $_POST['subject'];
      $txt = $_POST['content'];
      $headers = "From: ".$_POST['email'];
      
      if(mail($to,$subject,$txt,$headers)) {
      
        $outputMessage ='<div class="alert alert-success alert-dismissible fade in" id="success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p id="successMessage"><strong>Sent!</strong> We\'ll get back to you ASAP!<p></div>';
      } else {
        
        $outputMessage = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p id="errorMessage"><strong>There was an error.</strong> Please try again<p></div>';
        
        
        
      }
    }
    
  }

?>




<html lang="en">

<head>
<title>Goodies Kode og Design. Webdesign, app utvikling, webhotell, SEO og markedsføring</title>

  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
 
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  <link rel="shortcut icon" href="">

  <link rel="stylesheet" type="text/css" href="style.css">

  <meta name="description" content="Webdesign og mobil applikasjons utvikling for iPhone iOs og android. Design av nettsider, webhotell, søkemotoroptimalisering og SEO og markedsføring via Google AdWords, Facebook, Snapchat, Instagram og Twitter. Design av app prototyper.">
<meta name="keywords" content="webdesign, design av nettsider, app utvikling, app programmering, iphone app utvikling, android utvikling, markedsføring, seo, søkemotoroptimalisering, webhotell, hosting, SSL sertifikater, VPS servere, rimelig utvikling, rimelig web design, vektor grafikk">
<meta name="robots" content="index, follow">
<meta name="web_author" content="Goodies AS, Goodies Kode og Design">
<meta name="language" content="Norwegian">



</head>

<body   data-spy="scroll" data-target="#navbar-example" data-offset="50">

  <nav class="navbar navbar-light bg-faded navbar-fixed-top navbar-right nav-down" id="navbar-example">

    <button  class="navbar-toggler hidden-xl-up pull-right" type="button" onclick="myFunction()">
      &#9776;
    </button>
    <a class="navbar-brand pull-xs-left" href="#" id="logo"><h1>Goodies</h1></a>



  </nav>
   <div id="loader-wrapper" class="loader-wrapper">
       <div id="loader" class="loader"></div>
       <div class="loader-section section-left"></div>
       <div class="loader-section section-right"></div>
  </div>


  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4" style="padding-left:25px;">
                  <div class="atitle">
                    <h1>Ta kontakt!</h1>
                  </div>
                </div>
              </div>
              <div id="error"><? echo $outputMessage; ?></div>   
              <form method="post" class="flp">
                <fieldset class="form-group">
                  <input type="email" id="email" name="email" class="form-control">
                  <label for="email">E-post adresse</label>
                  <small class="text-muted">Vi deler ingen epostadresser.</small>
                </fieldset>

                <fieldset class="form-group">
                  <input type="text" id="subject" name="subject" class="form-control">
                  <label for="subject">Emne</label>
                </fieldset>
                
                <fieldset class="form-group">
                  <textarea class="form-control" type="text" id="content" name="content" rows="3"></textarea>
                  <label for="content">Hva lurer du på?</label>
                </fieldset>

                <button type="submit" id ="submitButton" class="btn btn-primary">Send</button>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>



  

  <div id="home" onclick="lukkMeny()" data-type="" data-speed="0" class="pages">     
    <article>

      <div id="logo1">
        <ul id="scene" >
          <li class="layer" data-type="background" data-speed="-0.4" data-depth="0"><div class="fire"></div></li>
   
          
          <li class="layer" data-type="background" data-speed="-0.4" data-depth="0"><div class="front1"></div></li>

          <li class="layer" data-type="background" data-speed="0.1" data-depth="2"><div class="to"><img src="img/grafikk/header/apple_watch__gold_goodies_logo.png" alt="Vektor grafikk" title="Vektor Grafikk" class="curve2" id="vektorAni2" ></div></li>
        
        </ul>
      </div>
    </article>
  </div>   


  <div id="about" data-type="background" data-speed="1" class="pages">
    <article>
    
      <div class="fixedbackground menu-slide" >
        <div id="nothing"></div>
        <div class="cog2"  onclick="myFunction2()">
          <div class="vertical" ><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div> 
       <div class="contactbut"  data-toggle="modal" data-target=".bd-example-modal-lg">
          <div class="vertical" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
      </div> 
          
        <div class="sidebar-wrapper">
          <div  class="logo">
             <svg width="254px" height="150px" viewBox="0 0 254 150" version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
              <desc>Created with Sketch.</desc>
              <defs>
                <rect id="path-1" x="0" y="0" width="253.051948" height="125"></rect>
                <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="253.051948" height="125" fill="white">
                  <use xlink:href="#path-1"></use>
                </mask>
              </defs>
              <text id="Goodies" stroke="none" fill="none" font-family="GreatVibes-Regular, Great Vibes" font-size="100"
              font-weight="normal" letter-spacing="0.0590274632">
              <tspan x="5" y="100" fill="#FFFFFF">Goodies</tspan>
              </text>

              <text id="Kode-&amp;-Design" stroke="none" fill="none"
              font-family="GreatVibes-Regular, Great Vibes" font-size="21"
              font-weight="normal" letter-spacing="1.4690789">
              <tspan x="80" y="120" fill="#FFFFFF">Kode &amp; Design</tspan>
              </text>
            </svg>
        </div>
        <div class="wrapper">
          <div class="field-wrap" id="wayWeb">
            <div class="checkbox"></div>
            <p>Nettside
            </p>
            <div class=verticaLine></div>
          </div>
          <div class="field-wrap" id="wayWeb5">
            <div class="checkbox"></div>
            <p>Apputvikling
            </p>
            <div class=verticaLine></div>
          </div>
           <div class="field-wrap" id="wayWeb4">
            <div class="checkbox"></div>
            <p>Markedsføring
            </p>
            <div class=verticaLine></div>
          </div>
          <div class="field-wrap" id="wayWeb6">
            <div class="checkbox"></div>
            <p>Prototype
            </p>
            <div class=verticaLine></div>
          </div>
          <div class="field-wrap" id="wayWeb2">
            <div class="checkbox"></div>
            <p>Webhotell
            </p>
            <div class=verticaLine></div>
          </div>
          <div class="field-wrap" id="wayWeb3">
            <div class="checkbox"></div>
            <p>Drift
            </p>
            <div class=verticaLine></div>
          </div>
           <div class="field-wrap" id="wayWeb7">
            <div class="checkbox"></div>
            <p>SEO
            </p>
            <div class=verticaLine></div>
          </div>
          <div class="field-wrap" id="wayWeb8">
            <div class="checkbox"></div>
            <p>Om oss
            </p>
          </div>
        </div>
        <div class="kommunikasjon">   
          <a href="https://www.facebook.com/Goodies-810071142462032/?ref=bookmarks"><i class="fa fa-facebook-square green" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/goodiesdesign/"><i class="fa fa-instagram green" aria-hidden="true"></i></a>
          <a href="https://twitter.com/goodiesdesign"><i class="fa fa-twitter-square green" aria-hidden="true"></i></a>
          <a href="mailto:post@goodies.no"><i class="fa fa-envelope green" aria-hidden="true"></i></a>
          <a href="tel:45479920"><i class="fa fa-phone-square green" aria-hidden="true"></i></a>
          <a href="" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square green" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div id="page-content-wrapper" class="menu-slide" onclick="lukkMeny()">
      <div class="page-content">
        <div class="products font" id= "kodedesign">
          <div class="container">
            <div class="row forside">
              <div class="col-md-4">
                <div class="center" id="wa1">
                  <div class="atitle">
                    <h1>Kode &#38 design</h1>
                  </div>
                </div>
              </div>
            </div>


            <div class="row forside hidden" id="skredder" data-type="test2" data-speed="0">
              <div id="circle-shape-example"  >
                <img src="img/Kode.jpg" alt="Skreddersydd webdesign og app utvikling" title="Skreddersydd webdesign og app utvikling" class="curve" id="skredderAni2"  >
                <div class="para">
                  <h1>Skreddersøm</h1>
                  <p>Våre webdesign- og app utviklingstjenester kan skreddersys helt ned til den minste detalj for å etterkomme spesifikke behov. Vi foretrekker å ha en unik tilnærming til alle prosjekter vi påtar oss.</p>
                </div>
              </div>
            </div>
            <div class="row forside hidden" id="respons" data-type="test2" data-speed="0">
              <div id="circle-shape-example">
              <img src="img/grafikk/Responsiv.png" alt="Responsive nettsider" title="Responsive nettsider" class="curve1" id="speiletsirkel">
                 <div class="para" id="responsAni2">
                  <h1>Responsive nettsider</h1>
                  <p>At en nettside tar seg bra ut, uavhengig av om den åpnes på mobil, nettbrett eller PC er avgjørende for hvordan den enkelte besøkende oppfatter opplevelsen.</p>
                  <p>Goodies vektlegger å utvikle funksjonelle og responsive nettsider som tilpasser seg størrelsen på skjermen, slik at brukeropplevelsen føles kjent ut på tvers av alle plattformer.</p>
                </div>
              </div>
            </div>
            <div class="row forside hidden" id="vektor" data-type="test2" data-speed="0">
              <div id="circle-shape-example"  >
                <img src="img/grafikk/VektorGrafikk.png" alt="Vektor grafikk" title="Vektor Grafikk" class="curve2" id="vektorAni2" >
                <div class="para">
                  <h1>Vektor grafikk</h1>
                  <p>Vi skaper mesteparten av  grafikken til våre web design og app utviklingsprosjekter i et vektorbasert format.  Dette betyr at man kan zoome inn til det uendelige uten å støte på pikseleringen man ofte gjør ved bruk av filformater som er best egnet til fotografier.</p>
                  <p>Derfor vil grafikken vi skaper holde seg  sylskarp uavhengig av hvor stor skjerm den vises på, samtidig som den skalerer ned til en fornuftig størrelse på mindre skjermer.</p>
                </div>
              </div>
            </div>
                <div class="row forside">
                <div class="col-md-12 font" id="way13"><p style="text-align:center;">Nedenfor kan du lese mer om de ulike produktene vil tilbyr.</p></div>
              </div>
            </div>
          </div>


          <div class="products way" id="nettside">
            <div class="container">   
               <div class="row" >
                  <div class="col-md-12 hidden left" id="nettAni">
                    <div class="font" >
                      <div class="row">
                        <div class="col-md-4" style="padding-left:15px;">
                          <div class="atitle">
                            <h1>Webdesign</h1>
                          </div>
                        </div>
                      </div>
                      <h3>Pakkeløsninger tilpasset ethvert behov</h3>
                      <p>Vi tilbyr en hel rekke webdesign løsninger. <br>Er du på jakt etter en rask og rimelig måte å fronte din nye virksomhet eller produktkonsept? Har du et ønske om å lansere en nettbutikk eller blogg?</p>
                      <p>Vi tilbyr løsninger som dekker de fleste behov, men vi tar også gjerne i mot spesialbestillinger for å tilpasse våre webdesign tjenester nøyaktig til dine behov.  <a href="/webdesign/webdesign.html"> Les mer om våre tjenester for webdesign ved å klikke på denne lenken. <a> </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="">
                    <div class="col-md-12 hidden right image no-padding" id="nettAni2">
                    <img  src="img/grafikk/iMacBlog.png" alt="Webdesign" title="Webdesign">
                    <div class="carouselle">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                              <img src="img/grafikk/BlogNy.svg" alt="Webdesign Blog">
                            </div>
                            <div class="carousel-item">
                              <img src="img/grafikk/OnePager.svg" alt="Webdesign Landingsside">
                            </div>
                            <div class="carousel-item">
                              <img src="img/grafikk/BlogNy.svg" alt="Webdesign Nettbutikk">
                            </div>
                          </div>
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          

          <div class="products" id ="app">
            <div class="container">
              <div class="font">
                <div class="row">
                  <div class="col-lg-7 vcenter col-lg-push-4 hidden bottom" id="appAni">
                     <div class="row">
                      <div class="col-md-7">
                        <div class="atitle">
                          <h1>App utvikling og app prototyper</h1>
                        </div>
                      </div>
                    </div>
                    <h3>Applikasjoner og prototyper utviklet med de nyeste metodene.</h3>
                    <p>Å utvikle mobilapplikasjoner betyr at man må holde seg oppdatert på alle endringer og nye trender innen fagfeltet. Heldigvis er det noe vi er svært glade i å gjøre.</p><p>Vi er lidenskapelig opptatt av å kunne utnytte de nyeste funksjoner som iOS og Android tilbyr, men på en fornuftig måte. Er du ikke helt klar for å få en idé produsert men trenger en god prototype du kan sende ut til mulige investorer vil vi kunne bistå med profesjonelt utformede prototyper som garantert vil vekke oppsikt.</p><p> <a href="app_utvikling/minimal/app_utvikling.html"> Les mer om våre tjenester for utvikling av Android og iOS applikasjoner ved å klikke på denne lenken. <a></p>
                  </div>
                   <div class="col-lg-4 vcenter col-lg-pull-7 hidden top" id="appAni2">
                   <div class="appimg">
                     <img src="img/grafikk/iPhoneHvitMotHoyre.png" alt="App utvikling, iOs app, Android app" title="App utvikling">
                   </div>
                   </div>
                 
                </div>
                
              </div>
            </div>
          </div>


          <div class="products" id ="marked">
            <div class="container">
              <div class="font" id="fading-i">
                <div class="row">
                  <div class="graf"><img src="img/grafikk/SocialGraf.svg" alt="Markedsføring, digital markerdsføring" title="Markedsføring"></div>
                  <div class="col-md-4 hidden left" id="markedAni">
                    <div class="atitle">
                      <h1>Markedsføring og SEO</h1>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-7 vcenter hidden left z-index" id="markedAni2">
                    <h3>Ta din merkevare til nye høyder.</h3>
                    <p>Digital markedsføring er i dag et omfattende fag, å vite hvilke kanaler som er best og mest lønnsomt å markedsføre dine nettsider via er avgjørende for å nå et bredest mulig publikum.</p><p>Søkemotor optimalisering (SEO) er et like viktig verktøy for å sikre at dine nettsider er synliggjort på best mulig måte. </p><p><a href="markedsforing_og_seo/markedsforing_og_seo.html"> Les mer om våre markedsføring- og søkemotoroptimaliseringstjenester ved å klikke på denne lenken. <a></p>
                  </div>
                  <div class="col-lg-4 vcenter"></div>
                </div>
                <div class="row">
                  <div class="col-md-12"><div class="rakett2" id="rakett2"><img src="img/grafikk/Røyk.svg" alt="Markedsføring, digital markerdsføring" title=""></div></div>
                    <div class="rakett" id="rakett" data-type="test2" data-speed="1.1"><img src="img/grafikk/Rakett.svg" alt="Markedsføring, digital markerdsføring" title=""></div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="products matte2" id ="proto">
            <div class="container">
              <div class="font" id="fading-i">
                <div class="row hey">
                  <div class="col-lg-7 vcenter col-lg-push-4 hidden top" id="protoAni">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="atitle">
                          <h1>App prototyper</h1>
                        </div>
                      </div>
                   </div>
                    <h3>Få kunder og investorer på din side.</h3>
                    <p>Om du har en spennende idé til en mobilapplikasjon så er det  viktig å starte produksjon så fort som mulig. Men å legge mye penger i et utviklingsløp uten investorer på laget medfører høy risiko.</p>
                    <p>En pent designet prototype som virker på Android og iPhone telefoner vil ta dager å utvikle. Dette kan gi deg store fordeler når konseptet skal presenteres videre.</p>
                    <p>Ta kontakt for mer informasjon om denne hvordan vi kan lage protyper av dine ideer, og våre priser knyttet til dette.</p>
                  </div>
                  <div class="col-lg-4 vcenter col-lg-pull-7 hidden bottom" id="protoAni2" >
                    <div class="proimg">
                      <img src="img/grafikk/prototype1.png" id="cards" alt="App prototyper, ios app prototype, android app prototype, iphone app prototype" title="App prototyper">
                      <img src="img/grafikk/prototype2.png" id="cards" alt="App prototyper, ios app prototype, android app prototype, iphone app prototype" title="App prototyper">
                      <img src="img/grafikk/prototype3.png" id="cards" alt="App prototyper, ios app prototype, android app prototype, iphone app prototype" title="App prototyper">
                      <img src="img/grafikk/prototype4.png" id="cards" alt="App prototyper, ios app prototype, android app prototype, iphone app prototype" title="App prototyper">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        


          <div class="products way" id ="hotell" >
            <div class="container">
              <div class="font">
                <div class="row">
                  <div class="col-lg-6 vcenter hidden left" id="hotellAni">
                    <div class="row">
                      <div class="col-md-8" style="padding-left:15px;">
                        <div class="atitle">
                          <h1>Webhotell </h1><div id="mob"><img src="img/grafikk/Plante.svg" alt="Webhotell, Hosting, hostingpakker" title="Webhotell"></div>
                        </div>
                      </div>
                    </div>
                    <h3>Markedsledende priser, et stabilt hostingmiljø og karbonnøytral serverdrift.</h3>
                    <p>IT bransjen har i dag et karbonavtrykk som tilsvarer utslippene for hele flybransjen, og måten bedrifter utnytter IT systemer har stor betydning for hvor mye energi de konsumerer.</p>
                    <p>Goodies, og våre samarbeidspartnere og underleverandører, har som mål å minimere vårt karbonavtrykk ved å bruke energibesparende tiltak for våre servere og datahaller.</p>
                    <p>Dette, i kombinasjon med å bidra til planting av trær som absorberer karbon, betyr at vår virksomhet bidrar til å redusere mer enn tre ganger så mye karbon som energiproduksjonen for å drive vår virksomhet genererer. <a href="markedsforing_og_seo/markedsforing_og_seo.html"> Les mer om webhotellet vårt og driftstjenestene vår ved å klikke på denne lenken. <a></p>
                  </div>
                  <div class="col-lg-5 vcenter hidden right" id="hotellAni2">
                    <div class="box5 display2" >

                      <h3 style="color:black"> <span id="lines" style="padding-left: 25px; font-size: 2em; color:black">0</span></h3>
                      <div id="startpic">
                      </div>
                    </div>
                  </div>
                  </div>
              </div>
            </div>
          </div>



          <div class="products way" id ="drift">
            <div class="container">
              <div class="row">

                <div class="col-lg-5 vcenter col-lg-push-6 hidden bottom" id="driftAni">
                  <div class="font">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="atitle">
                          <h1>Drift</h1>
                        </div>
                      </div>
                    </div>
                    <h3>Automatiske oppdateringer, så du kan fokusere på innhold</h3>
                    <p>Våre driftstjenester sparer deg for tid, og gir deg tryggheten av å ha solide mekanismer som overvåker, sikrer, oppdaterer og tar backup av dine nettsider i henhold til beste praksis. <br><br>På denne måten vil du kunne bruke all din oppmerksomhet på sidens innhold for å oppnå best mulig resultat enten du vil promotere et firma eller drive nettbutikk.</p>
                  </div>
                </div>
                <div class="col-lg-6 vcenter col-lg-pull-5 hidden top" id="driftAni2">
                  <div class="row">
                    <div class="col-xs-6 no-padding"><img src="img/produkter/drift/Oppdateringer.svg" alt="Softwareoppdateringer" title="Softwareoppdateringer"></div>
                    <div class="col-xs-6 no-padding"><img src="img/produkter/drift/Overvåking.svg" alt="Sikkerhetsovervåkning" title="Sikkerhetsovervåkning"></div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6 no-padding"><img src="img/produkter/drift/Patching.svg" alt="Sikkerhetspatching" title="Sikkerhetspatching"></div>
                    <div class="col-xs-6 no-padding"><img src="img/produkter/drift/SSL.svg" alt="SSL Sertifikater" title="SSL Sertifikater"></div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6 no-padding"><img src="img/produkter/drift/MSSQL.svg" alt="MSSQL Database" title="MSSQL Database"></div>
                    <div class="col-xs-6 no-padding"><img src="img/produkter/drift/Backup.svg" alt="Backup" title="Backup"></div>
                  </div>
                </div>
              </div>  
            </div>
            <i class="fa fa-cog slow-spin fa-3x fa-fw" aria-hidden="true" id="cog"></i>
            <span class="sr-only">Saving. Hang tight!</span>

            <i class="fa fa-cog slow-spin fa-3x fa-fw" aria-hidden="true" id="cog2"></i>
            <span class="sr-only">Saving. Hang tight!</span>
         </div>

         
         <div class="products" id ="seo">
          <div class="container">
            <div class="font" id="fading-i">

              <div class="row">
                <div class="col-lg-6 vcenter hidden left" id="seoAni">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="atitle">
                        <h1 id="change">Søkemotoroptimalisering / SEO</h1>
                      </div>
                    </div>
                  </div>
                  <h3>Bli det naturlige førstevalget.</h3>
                   <p>Å optimalisere egne nettsider for optimal synlighet hos de store søkemotorene kan være en utfordring, samtidig vil nettsideeiere fort merke at antall besøkende daler hvis man ikke prioriterer dette.</p><p> De som derimot investerer litt i å sørge for at sidene ikke bare ser pene ut men også er lette å finne, at de fremstilles korrekt i søkeresultater og at siden havner blant de øverste resultatene vil kunne hente ut stor gevinst i form av økt volum.</p><p> Vi ønsker å hjelpe deg med å oppnå best mulig profilering og flest mulig besøkende til din nettside, kontakt oss for en uforpliktende prat om våre SEO tjenester og priser.</p>
                </div>
                <div class="col-lg-5 vcenter hidden right" id="seoAni2">
                  <div class="images">
                    <img src="img/grafikk/ForstorrelsesGlass.svg" id="fg" alt="SEO, Søkemotoroptimalisering" title="SEO">
                    <img src="img/grafikk/paralax/SynsprovePlakat.png" id="sp" alt="SEO, Søkemotoroptimalisering" title="SEO">
                  </div>
                </div>
              </div>
                <div class="row display">
                  <div class="col-md-11">
                   <div class="box8">
                      <div class="row">
                        <div class="col-md-4">
                          <p>Første treff på google får:</p>
                        </div>
                        <div class="col-md-4">
                         <p>Andre treff på google får:</p>
                        </div>
                        <div class="col-md-4">
                          <p>De ti første treffene på google får i gjennomsnitt:</p>
                        </div>
                      </div>
                      <canvas id="canvas" width="1000" height="300"></canvas>
                      <div class="row">
                        <div class="col-md-12">
                          <p style="text-align: center;">Av all gjennomklikking trafikk</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

       

          <div class="products way" id ="omoss">
            <div class="container">
              <div class="row">
                <div class="col-md-12 font">
                  <div class="row">
                    <div class="col-md-4" style="padding-left:15px;">
                      <div class="atitle">
                        <h1>Om oss</h1>
                      </div>
                    </div>
                  </div>
                  <p>Goodies er et firma med hovedfokus på Web Design samt web- og mobilapplikasjonsutvikling. 
                  Vårt mål er å levere kosteffektive, elegante og funksjonelle løsninger.</p>
                  <p>Vi er et lite og nyopprettet firma, og det gjør vi til vår styrke ved å tilby et høyt nivå av fleksibilitet.
                  Kapasitetsmessig er vi i stand til å håndtere både små oppdrag - som gjerne er unnagjort på en uke, eller to, - så vel som større oppdrag som går over flere uker og måneder. </p>
                  <p>Ved å benytte vårt kontaktnett av erfarne frilansere kan vi lett øke kapasitet ved behov, uten at det påvirker kvaliteten i våre leveranser. Kundetilfredshet er avgjørende for oss og vi vil strekke oss langt for å sørge for at våre kunder sitter igjen med en følelse av å ha fått mer enn hva man har betalt for.</p>
                </div>
              </div>
            </div>
          </div>

         
      </div>
    </article>
  </div>

  <div id="contact" data-type="background" data-speed="0.9" class="pages">
    <article> 
     
    </article>
  </div>

<div id="footer" data-type="background" data-speed="0.9" class="pages" onclick="lukkMeny()"> 
  <article>
    <div class="container menu-slide"> 

      <div class="col-xl-5">
        <div class="frame font">
          <div class="atitle"><h2>Om oss</h2></div>
          <p>Goodies er et nyopprettet firma med hovedfokus på Web Design og App utvikling. Vi har som ambisjon å levere kosteffektive og elegante løsninger til fornuftige priser. </p>
        </div>
      </div>

      <div class="col-xl-3">
        <div class="frame font">
          <div class="atitle"><h2>Kontakt</h2></div>
          <p><a href="tel:45479920"><i class="fa fa-phone-square green" aria-hidden="true"> </i></a> 45479920</p>
          <p><a href="mailto:post@goodies.no"><i class="fa fa-envelope-o green" aria-hidden="true"> </i></a> post@goodies.no</p>

        </div>
      </div>

      <div class="col-xl-2">
        <div class="frame font">
          <div class="atitle"><h2>Åpningstider</h2></div>
          <p>Vi er tilgjengelige på telefon man - fre fra 09-17 og 24/7 på e-post.</p>
        </div>
      </div>

      <div class="col-xl-2">
        <div class="frame font">
          <div class="atitle"><h2>Social</h2></div>
          <p><a href="https://www.instagram.com/goodiesdesign/"><i class="fa fa-instagram green" aria-hidden="true"></i></a>
            <a href="https://twitter.com/goodiesdesign"><i class="fa fa-twitter-square green" aria-hidden="true"> </i></a>
            <a href="https://www.facebook.com/Goodies-810071142462032/?ref=bookmarks"><i class="fa fa-facebook-square green" aria-hidden="true"></i></a></p>
         </div>
      </div>
    </div>
  </article>  
</div>



<ul class="notifications"></ul>

<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous">
</script>
<script type="text/javascript" src="instafeed.min.js"></script>

<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>

<script src="jquery.animateNumber.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js">
</script>
<script src="jquery.waypoints.js"></script>
<script src="jquery.parallax.js"></script>

<script type="text/javascript" src="scripts.js" ></script>
<script>








</script>

</body>

</html>