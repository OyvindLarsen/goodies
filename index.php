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
      $subject = $_POST['kontaktskjema:' . 'subject'];
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
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Great+Vibes|Meddon|League+Script|Monsieur+La+Doulaise|Miss+Fajardose' rel='stylesheet' type='text/css'>

  <link rel="shortcut icon" href="">

  <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body data-spy="scroll" data-target="#navbar-example" data-offset="50">

  <nav class="navbar navbar-light bg-faded navbar-fixed-top navbar-right nav-down" id="navbar-example">

    <button  class="navbar-toggler hidden-xl-up pull-right" type="button" onclick="myFunction()">
      &#9776;
    </button>
    <a class="navbar-brand pull-xs-left" href="#" id="logo"><h1>Goodies</h1></a>



  </nav>




  <div id="home" data-type="" data-speed="0" class="pages">     
    <article>

      <div id="logo1">
        <ul id="scene" >
          <li class="layer" data-type="background" data-speed="0.7" data-depth="0.05"><div class="backgroundh"><img src="img/grafikk/paralax/HimmelHeader.svg"></div></li>
          <li class="layer" data-type="background" data-speed="0.7" data-depth="0.10"><div class="mane"><img src="img/grafikk/paralax/Måne.svg" ></div></li>
          <li class="layer" data-type="background" data-speed="0.1" data-depth="0.30"><div class="bakerst"><img src="img/grafikk/paralax/BakerstArk.svg"></div></li>
          <li class="layer" data-type="background" data-speed="0.2" data-depth="0.40"><div class="opera"><img src="img/grafikk/paralax/Operabygget.svg"></div></li>
          <li class="layer" data-type="background" data-speed="-0.2" data-depth="0.55"><div class="midt"><img src="img/grafikk/paralax/MidtArk.svg"></div></li>
          <li class="layer" data-type="background" data-speed="0.5" data-depth="0.60"><div class="logo1"><img id="logo5" src="LogoHvitUtenBakgrunn.svg"></div></li>
          <li class="layer" data-type="background" data-speed="0" data-depth="0.7"><div class="rakett3"><img src="img/grafikk/paralax/Rakett.svg"></div></li>
          <li class="layer" data-type="background" data-speed="-0.4" data-depth="0.80"><div class="front"><img src="img/grafikk/paralax/FrontArk.svg"></div></li>
        </ul>
      </div>
    </article>
  </div>   


  <div id="about" data-type="background" data-speed="1" class="pages">
    <article>
      <div id="fixed">
      <div class="alert alert-info alert-dismissible fade in" role="alert" style="opacity:0.9;">
      <button id="sand" type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="font" style="color:inherit;">
      <h1 class="alert-heading" id="changetext"><i class="fa fa-info" aria-hidden="true" "></i> Heisann!</h1>
      <p style="color:inherit;" id="fade-out"><strong>Hvordan fant du veien hit?</strong> Det er hyggelig at du stikker innom altså, men bare så du vet det så er goodies.no fortsatt under konstruksjon.</p>
      <p style="color:inherit;" id="fade-out1">  Det meste av informasjonen om våre produkter og tjenester er riktig så ta gjerne en titt. Men vi jobber fortsatt med koden <i class="fa fa-file-code-o" aria-hidden="true" style="font-size:1.2em;"></i> og presentasjonen <i class="fa fa-cubes aria-hidden="true" style="font-size:1.2em;"></i>.</p>
      <p style="color:inherit;">Så da er du advart, nettsidene kan både se litt rare ut og oppføre seg litt merkelig, men vi er på saken ;)</p>
      <p style="color:inherit;" id="fade-in2">Har du noen spørsmål, ta gjerne kontakt <a href="mailto:post@goodies.no" class="alert-link">post@goodies.no</a></p>
      <p style="color:inherit;" id="fade-out2">Vi er derimot operative og tar imot kunder, så om du ønsker mer informasjon om noen av produktene våre er bare å sende en mail <i class="fa fa-envelope-o" aria-hidden="true" style="font-size:1.2em;"></i> til <a href="mailto:post@goodies.no" class="alert-link">post@goodies.no</a></p>
      

      </div>
    </div>
    </div>
      <div class="fixedbackground slide" >
        <div id="nothing"></div>
        <div class="cog2"  onclick="myFunction2()">
          <div class="vertical" ><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div> 
        <div class="sidebar-wrapper">
          <div  class="logo">
            <svg width="386px" height="210px" viewBox="0 0 386 210" version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
              <desc>Created with Sketch.</desc>
              <defs>
                <rect id="path-1" x="0" y="0" width="376.051948" height="210"></rect>
                <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="376.051948" height="210" fill="white">
                  <use xlink:href="#path-1"></use>
                </mask>
              </defs>
              <text id="Goodies" stroke="none" fill="none" font-family="GreatVibes-Regular, Great Vibes" font-size="100"
              font-weight="normal" letter-spacing="0.0590274632">
              <tspan x="5" y="130" fill="#FFFFFF">Goodies</tspan>
              </text>

              <text id="Kode-&amp;-Design" stroke="none" fill="none"
              font-family="GreatVibes-Regular, Great Vibes" font-size="21"
              font-weight="normal" letter-spacing="1.4690789">
              <tspan x="80" y="150" fill="#FFFFFF">Kode &amp; Design</tspan>
              </text>
            </svg>
        </div>
        <div class="wrapper">
          <div class="field-wrap" id="wayWeb">
            <div class="checkbox"></div>
            <p>Webside
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
          <div class="field-wrap" id="wayWeb4">
            <div class="checkbox"></div>
            <p>Markedsføring
            </p>
            <div class=verticaLine></div>
          </div>
           <div class="field-wrap" id="wayWeb6">
            <div class="checkbox"></div>
            <p>Om oss
            </p>
          </div>
        </div>
        <div class="kommunikasjon">   
          <a href="https://www.facebook.com/Goodies-810071142462032/?ref=bookmarks"><i class="fa fa-facebook-square green" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/goodiesdesign/"><i class="fa fa-instagram green" aria-hidden="true"></i></a>
          <a href="https://twitter.com/goodiesdesign"><i class="fa fa-twitter-square green" aria-hidden="true"></i></a>
          <a href="mailto:post@goodies.no"><i class="fa fa-envelope-o green" aria-hidden="true"></i></a>
          <a href="tel:45479920"><i class="fa fa-phone-square green" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div id="page-content-wrapper" class="slide">
      <div class="page-content">
        <div class="products font" id= "wa">
          <div class="container">
            <div class="table1 center" id="wa1">
              <div class="atitle">
                <h1>Kode &#38 design</h1>
              </div>
            </div>  
            <div class="row" id="way10" data-type="test2" data-speed="0">
              <div id="circle-shape-example"  >
                <img src="img/Kode.jpg"  class="curve" id="wa111" >
                <div class="para">
                  <h1>Skreddersøm</h1>
                  <p>Våre designløsninger vil kunne skreddersys helt ned til den minste detalj for å etterkomme kunders ønsker, og vi er svært fleksible når det kommer til å håndtere endringsønsker som måtte oppstå underveis.</p>
                </div>
              </div>
            </div>
            <div class="row" id="way11" data-type="test2" data-speed="0">
              <div id="circle-shape-example">
              <img src="img/grafikk/Responsiv.png"  class="curve1" id="wa112" >
                 <div class="para" id="way1112">
                  <h1>Responsive nettsider</h1>
                  <p>At en nettside tar seg bra ut, uavhengig av om den åpnes på mobil, nettbrett eller PC er avgjørende for hvordan den enkelte besøkende oppfatter opplevelsen.</p>
                  <p>Goodies vektlegger å utvikle funksjonelle og responsive nettsider som tilpasser seg størrelsen på skjermen.</p>
                </div>
              </div>
            </div>
            <div class="row" id="way12" data-type="test2" data-speed="0">
              <div id="circle-shape-example"  >
                <img src="img/grafikk/VektorGrafikk.png"  class="curve" id="wa113" >
                <div class="para">
                  <h1>Vektor grafikk for sylskarpe og dynamiske bilder</h1>
                  <p>Vi skaper mesteparten av vår grafikk til websider og app’er i et vektorbasert format.  Dette betyr at man kan zoome inn til det uendelige uten å støte på pikseleringen man ofte gjør ved bruk av filformater som er best egnet til fotografier.</p>
                  <p>Derfor vil grafikken vi skaper holde seg like sylskarp uavhengig av hvor stor skjerm den vises på.</p>
                </div>
              </div>
            </div>
                <div class="row padding-top padding-bottom">
                <div class="col-md-12 font" id="way13"><p style="text-align:center;">Nedenfor kan du lese mer om de ulike produktene vil tilbyr.</p></div>
              </div>
            </div>
          </div>


          <div class="products way" id= "way">
            <div class="container">   
              <div id="fading-in3">
                <div class="row padding-top padding-bottom">
                  <div class="col-md-12" id="">
                    <div class="font" >
                      <div class="row">
                        <div class="col-md-4" style="padding-left:15px;">
                          <div class="atitle">
                            <h1>Nettsider</h1>
                          </div>
                        </div>
                      </div>
                      <h3>Pakkeløsninger tilpasset ethvert behov</h3>
                      <p>Vi tilbyr en hel rekke skreddersydde og egenproduserte nettsideløsninger. <br>Er du på jakt etter en rask og rimelig måte å fronte din nye virksomhet eller produktkonsept? Har du et ønske om å lansere en nettbutikk eller blogg?</p>
                      <p>Vi har pakkeløsninger som vil tilfredsstille de aller fleste behov, men vi tar også gjerne i mot spesalbestillinger for å skreddersy våre leveranser i henhold til dine ønsker.</p>
                    </div>
                  </div>
                </div>
                <div class="row padding-bottom">
                  <div class="padding-top">
                
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="products way" id ="way2" >
            <div class="container">
            <div class="sus"><img src="img/grafikk/sustainable.svg"></div>
              <div class="font">
               
                  <div class="row">
                    <div class="col-md-4" style="padding-left:15px;">
                      <div class="atitle">
                        <h1>Webhotell</h1>
                      </div>
                    </div>
                  </div>
                  <div class="row padding-bottom">
                    <div class="col-md-6 vcenter" id="opacity">
                      <h3>Markedsledende priser, et stabilt hostingmiljø og karbonnøytral serverdrift.</h3>
                      
                      <p>IT bransjen har i dag et karbonavtrykk som tilsvarer utslippene for hele flybransjen, og måten bedrifter utnytter IT systemer har stor betydning for hvor mye energi de konsumerer.</p>
                      <p>Goodies, og våre samarbeidspartnere og underleverandører, har som mål å minimere vårt karbonavtrykk ved å bruke energibesparende tiltak for våre servere og datahaller.</p>
                      <p>Dette, i kombinasjon med å bidra til planting av trær som absorberer karbon, betyr at vår virksomhet bidrar til å redusere mer enn tre ganger så mye karbon som energiproduksjonen for å drive vår virksomhet genererer.</p>
                    </div>
                    <div class="col-md-5 vcenter" id="opacity2">
                      <div class="box5" >
                        <h3 style="color:black"> <span id="lines" style="font-size: 2em; color:black">0</span>Trær plantet</h3>
                        <div id="startpic">
                        </div>
                      </div>
                    </div>

                  </div>
              </div>
            </div>
          </div>

          <div class="products way" id ="way3">
            <div class="container">
              <div class="row">
                <div class="col-md-6 vcenter">
                  <div id="fading-in2">
                    <div class="row">
                      <div class="col-md-6 no-padding"><img src="img/produkter/drift/Oppdateringer.svg"></div>
                      <div class="col-md-6 no-padding"><img src="img/produkter/drift/Overvåking.svg"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 no-padding"><img src="img/produkter/drift/Patching.svg"></div>
                      <div class="col-md-6 no-padding"><img src="img/produkter/drift/SSL.svg"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 no-padding"><img src="img/produkter/drift/MSSQL.svg"></div>
                      <div class="col-md-6 no-padding"><img src="img/produkter/drift/Backup.svg"></div>
                    </div>
                  </div>
                </div>

                <div class="col-md-5 vcenter">
                  <div class="font" id="fading-in">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="atitle">
                          <h1>Drift</h1>
                        </div>
                      </div>
                    </div>
                    <h3>Automatiske oppdateringer, så du kan fokusere på innhold</h3>
                    <p>Våre driftstjenester sparer deg for tid, og gir deg tryggheten av å ha solide mekanismer som overvåker, sikrer, oppdaterer og tar backup av dine nettsider i henhold til beste praksis. <br><br>På denne måten vil du kunne bruke all din oppmerksomhet på sidens innhold for å oppnå best mulig resultat enten du vil promotere et firma, drive nettbutikk,</p>
                  </div>
                </div>
                
              </div>
            
            </div>
              <i class="fa fa-cog slow-spin fa-3x fa-fw" aria-hidden="true" id="cog"></i>
              <span class="sr-only">Saving. Hang tight!</span>

              <i class="fa fa-cog slow-spin fa-3x fa-fw" aria-hidden="true" id="cog2"></i>
              <span class="sr-only">Saving. Hang tight!</span>
          </div>

          <div class="products" id ="way4">
            <div class="container">
              <div class="font" id="fading-i">
                <div class="row padding-top">
                  <div class="graf"><img src="img/grafikk/SocialGraf.svg"></div>
                  <div class="col-md-4">
                    <div class="atitle">
                      <h1>Markedsføring</h1>
                    </div>
                  </div>
                </div>
                <div class="row padding-bottom">
                  <div class="col-md-7 matchHeight padding-bottom">
                    <h3>Ta din merkevare til nye høyder.</h3>
                    <p>Digital markedsføring er i dag et omfattende fag, å vite hvilke kanaler som er best og mest lønnsomt å markedsføre dine nettsider via er avgjørende for å nå et bredest mulig publikum.</p><p>Vi har god erfaring med de største annonseplattformer og vil hjelpe deg hvert steg på veien i en markedsføringskampanje for å sikre at du oppnår best mulig resultat.</p><p> Kontakt oss for en uforpliktende prat hvor vi kan fortelle deg om våre markedsføringstjenester og priser.</p>

                  </div>
                  <div class="col-md-5 matchHeight padding-bottom">
                    
                  </div>
                </div>
                <div class="row padding-top">
                  <div class="col-md-12"><div class="rakett2" id="rakett2"><img src="img/grafikk/Røyk.svg"></div></div>
                </div>
                <div class="rakett" id="rakett" data-type="test2" data-speed="-1.1"><img src="img/grafikk/Rakett.svg"></div>
              </div>
            </div>
          </div>


             <div class="products" id ="way5">
            <div class="container">
              <div class="font" id="fading-i">
                <div class="row padding-top">
                 
                  <div class="col-md-4">
                    <div class="atitle">
                      <h1>App utvikling</h1>
                    </div>
                  </div>
                </div>
                <div class="row padding-bottom">
                  <div class="col-md-7 matchHeight padding-bottom">
                    <h3>Vi elsker å leke med digitale byggeklosser.</h3>
                    <p>Å utvikle mobilapplikasjoner betyr at man må holde seg oppdatert på alle endringer og nye trender innen fagfeltet. Heldigvis er det noe vi er svært glade i å gjøre.</p><p>Her i Goodies er vi lidenskapelig opptatt av å kunne utnytte de nyeste funksjoner som iOS og Android tilbyr på en fornuftig måte. Vi finner de rette rammeverk og designtilnærminger til dine prosjekter og bistår deg med arkitekturavgjørelser underveis for å sørge for at du får alle ønskede funksjoner utviklet på en robust måte. </p><p> Kontakt oss for en uforpliktende prat hvor vi kan fortelle deg om hvordan vi kan bistå deg med å utvikle mobile applikasjoner.</p>

                  </div>
                 
                </div>
                
              </div>
            </div>
          </div>


             <div class="products" id ="way6">
            <div class="container">

              <div class="font" id="fading-i">
                <div class="row padding-top">
                  
                  <div class="col-md-4">
                    <div class="atitle">
                      <h1>Prototyping</h1>
                    </div>
                  </div>
                </div>
                <div class="row padding-bottom">
                  <div class="col-md-7 matchHeight padding-bottom">
                    <h3>Få kunder og investorer på din side.</h3>

                    <p>Om du har en spennende idé til en mobilapplikasjon så er det  viktig å starte produksjon så fort som mulig. Men å legge mye penger i et utviklingsløp uten investorer på laget medfører høy risiko.</p>

                    <p>En pent designet prototype som virker på Android og iPhone telefoner vil ta dager å utvikle. Dette kan gi deg store fordeler når konseptet skal presenteres videre.</p>


                    <p>Ta kontakt for mer informasjon om denne hvordan vi kan lage protyper av dine ideer, og våre priser knyttet til dette.</p>

                  </div>
                  
                </div>
               
                
              </div>
            </div>
          </div>

          
             <div class="products" id ="way7">
            <div class="container">
              <div class="font" id="fading-i">
                <div class="row padding-top">
                 
                  <div class="col-md-4">
                    <div class="atitle">
                      <h1>Søkemotoroptimalisering</h1>
                    </div>
                  </div>
                </div>
                <div class="row padding-bottom">
                  <div class="col-md-7 matchHeight padding-bottom">
                    <h3>Bli det naturlige førstevalget.</h3>
                     <p>Å optimalisere egne nettsider for optimal synlighet hos de store søkemotorene kan være en utfordring, samtidig vil nettsideeiere fort merke at antall besøkende daler hvis man ikke prioriterer dette.</p><p> De som derimot investerer litt i å sørge for at sidene ikke bare ser pene ut men også er lette å finne, at de fremstilles korrekt i søkeresultater og at siden havner blant de øverste resultatene vil kunne hente ut stor gevinst i form av økt volum.</p><p> Vi ønsker å hjelpe deg med å oppnå best mulig profilering og flest mulig besøkende til din nettside, kontakt oss for en uforpliktende prat om våre SEO tjenester og priser.</p>

                  </div>
                  <canvas id="canvas" width="300" height="300">
                </div>
               
               
              </div>
            </div>
          </div>

       

          <div class="products way" id ="way8">
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
          <div class="products way font" id ="way9">
            <div class="container">
          <div class="row padding-bottom">
            <div class="col-md-12" id="">
              <div class="row">
                <div class="col-md-4" style="padding-left:25px;">
                  <div class="atitle">
                    <h1>Kontaktskjema</h1>
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
    </article>
  </div>

  <div id="contact" data-type="background" data-speed="0.9" class="pages">
    <article> 
     
    </article>
  </div>

<div id="footer" data-type="background" data-speed="0.9" class="pages">
  <article>
    <div class="container"> 

      <div class="col-md-5">
        <div class="frame font">
          <div class="atitle"><h2>Om oss</h2></div>
          <p>Goodies er et nyopprettet firma med hovedfokus på Web Design og App utvikling. Vi har som ambisjon å levere kosteffektive og elegante løsninger til fornuftige priser. </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="frame font">
          <div class="atitle"><h2>Kontakt</h2></div>
          <p><a href="tel:45479920"><i class="fa fa-phone-square green" aria-hidden="true"> </i></a> 45479920</p>
          <p><a href="mailto:post@goodies.no"><i class="fa fa-envelope-o green" aria-hidden="true"> </i></a> post@goodies.no</p>

        </div>
      </div>

      <div class="col-md-2">
        <div class="frame font">
          <div class="atitle"><h2>Åpningstider</h2></div>
          <p>Vi er tilgjengelige på telefon man - fre fra 09-17 og 24/7 på e-post.</p>
        </div>
      </div>

      <div class="col-md-2">
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>


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