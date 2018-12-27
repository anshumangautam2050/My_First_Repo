@extends('templates.veilingburo.master')

@section('title', 'Online veilingen voor kopers & verkopers')
@section('description', 'Veilingburo heeft de ambitie de perfecte schakel te zijn tussen koper en verkoper en dit op een betrouwbare, snelle en eenvoudige manier.')

@include('partials.nlpopup')
@include('partials.commonpopup')
@section('content')

        <div class="pw fwtitle">
            <h1 class="text-center">Veiling<span class="orange">buro</span>: Snel, transparant en toegankelijk.</h1>
        </div>
        <div class="pw features-row">
            <div class="row">
                <div class="d-flex flex-column col-lg-3">
                    <img src="images/snel.svg" class="m-4">
                    <h3 class="text-center">Snel</h3> 
                    <p class="text-center">Zet overstock en faillissementsgoederen in een mum van tijd om in cash.</p>
                    <p class="text-center">Wij garanderen u de beste marktprijs.</p> 
                </div>
                <div class="d-flex flex-column col-lg-3">
                    <img src="images/transparant.svg" class="m-4">
                    <h3 class="text-center">Transparant</h3> 
                    <p class="text-center">Volg je goederen via het innovatief en gebruiksvriendelijk platform van Veilingburo.</p>
                    <p class="text-center">Ook op kijkdagen kan je bij Veilingburo terecht voor bezichtiging.</p> 
                </div>
                <div class="d-flex flex-column col-lg-3">
                    <img src="images/toegankelijk.svg" class="m-4">
                    <h3 class="text-center">Toegankelijk</h3> 
                    <p class="text-center">Volg alles in real time vanaf je smartphone, tablet of zelfs pc en blijf instant op de hoogte</p> 
                    <p class="text-center">Blijf real time in contact via Veilingburo.</p>
                </div>
                <div class="d-flex flex-column col-lg-3">
                    <img src="images/eenvoudig.svg" class="m-4">
                    <h3 class="text-center">Eenvoudig</h3> 
                    <p class="text-center">Geen eindeloze verkoopsafspraken meer die op niks uitdraaien.</p>
                    <p class="text-center">Veilingburo reikt je alle tools aan voor een zorgeloze en correcte afhandeling.</p> 
                </div>
            </div>
        </div>
        <div class="mb-5 mt-5 pw">
            <h1 class="text-center">Deze kavels mag u <br>binnenkort verwachten.</h1>
        </div>
        <div class="items-row pw">
            <div class="front-category">
                <img src="images/keukenapparatuur.png" alt="Keukenapparatuur" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="p-2">Keukenapparatuur</h3>
                    <p>mixers / robots / ijsmakers / toasters / koffieapparaten / wafelbakker broodmachine / microgolfovens / ...</p>
                </div>
            </div>
            <div class="front-category">
                <img src="images/huishoudelektro.png" alt="huishoudelektro" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="pt-2 pb-2 ">Huishoudelektro</h3>
                    <p>wasmachines / droogkasten / strijkijzers / afwasmachines / stofzuigers / robots / was-droog combinaties / ...</p>
                </div>
            </div>
            <div class="front-category">
                <img src="images/keukenmateriaal.png" alt="Keukenmateriaal" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="p-2">Keukenmateriaal</h3>
                    <p>bestek / potten &amp; pannen / mokken &amp; tassen / snijplankjes / stofzuigers / koksmessen / ...</p>
                </div>
            </div>
            <div class="front-category">
                <img src="images/vervoersmiddelen.png" alt="Vervoersmiddelen" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="p-2">Vervoersmiddelen</h3>
                    <p>oldtimers / newtimers / SUV / terreinwagen / electrische fietsen / koersfietsen / minivans /...</p>
                </div>
            </div>
            <div class="front-category">
                <img src="images/wearables.png" alt="Wearables" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="pt-2 pb-2">Wearables</h3>
                    <p>smartphones / tablets / smartwatches / fitnesstrackers / iOS / Android / laptop-tablet combinaties /...</p>
                </div>
            </div>
            <div class="front-category">
                <img src="images/fitness.png" alt="Vervoersmiddelen" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="p-2">Fitness</h3>
                    <p>loopbanden / roeiers / spinners / halters / gewichten / fitnessboxen / bokszakken /...</p>
                </div>
            </div>
            
            <div class="front-category">
                <img src="images/sporten.png" alt="Sporten" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="p-2">Sporten</h3>
                    <p>sportmatten / springtouwen / spinners / hometrainers / loopbanden / fitnesstrackers / yogakussen / hartslagmeters / oefenbal / ...</p>
                </div>
            </div>
          <div class="front-category cta-orange">
                <div class="d-flex flex-column justify-content-around text-left h-100">
                    <h3 class="p-2 text-white">Jouw kavel hier? Meld jouw kavel aan en kom bij de eerste kavels van VeilingBuro te staan.</h3>
                    <p class="text-black-50 font-weight-bold">Meld je aan en laat ons weten welke kavels jij zou willen verkopen.</p>
                    <a class="btn btn-light btn-block" href="kavel-aanmelden"> <i class="fa fa-plus text-muted"></i> Voeg je kavel toe </a>
                </div>
            </div>
            <div class="front-category">
                <img src="images/foto-video.png" alt="Foto & video" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="p-2">Foto &amp; video</h3>
                    <p>lenzen / digitalecamera’s / spiegelreflexcamera’s / draagtassen / tripods / dronecamera’s / ...</p>
                </div>
            </div>
            <div class="front-category">
                <img src="images/goedinjevel.png" alt="Goed in je vel" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="pt-2 pb-2 ">Goed in je vel</h3>
                    <p>zenstenen / massagematten / massagetafels / yogamatten / onesies / oversized kussens / massageolie / aromakaarsen / Bongobonnen / ...</p>
                </div>
            </div>
            <div class="front-category">
                <img src="images/computer.png" alt="Computer" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="p-2">Computer</h3>
                    <p>monitors / grafische kaarten  / 144hz schermen / gebogen schermen / RAM / laptops / koeling /...</p>
                </div>
            </div>
            <div class="front-category">
                <img src="images/multimedia.png" alt="Multimedia" class="w-100 h-auto">
                <div class="front-cat-txt">
                    <h3 class="p-2">Multimedia</h3>
                    <p>speakers / homecinema / OLED televisies / gebogen televies / Playstation / Switch / Xbox /...</p>
                </div>
            </div>
        </div>
        <div class="grey-bg pw">
            <div class="mt-xl-5 p-xl-4">
                <h1 class="text-center">Graag jouw kavel alvast aangemeld op <br>Veilingburo om te verkopen?</h1>
                <p class="text-center">Binnenkort kan je hier registreren als koper of verkoper.</p>
                <p class="cta-orange-cnt" style="text-align: center;"><a href="kavel-aanmelden">Meld alvast je kavels aan.</a></p>
                <div class="kopers-verkopers mt-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="voor-div">
                                <h2>Voor kopers!</h2>
                                <ul class="list-unstyled"> 
                                    <li>
                                        <div class="vinkje d-inline-block">
                                            <img src="images/vink.svg">
                                        </div>                                                                                                                                Koop aan ongeziene prijzen.
                                    </li>
                                    <li>
                                        <div class="vinkje d-inline-block">
                                            <img src="images/vink.svg">
                                        </div>                                                                                                                                Blijf op de hoogte van unieke koopkansen.
                                    </li>
                                    <li>
                                        <div class="vinkje d-inline-block">
                                            <img src="images/vink.svg">
                                        </div>                                                                                                                                Eerlijke en transparante transacties
                                    </li>
                                    <li>
                                        <div class="vinkje d-inline-block">
                                            <img src="images/vink.svg">
                                        </div>                                                                                                                                Snelle respons bij eventuele vragen
                                    </li>                                     
                                </ul>
                            </div>                             
                        </div>
                        <div class="voor-verkopers col-lg-6">
                            <div class="voor-div">
                                <h2>Voor verkopers!</h2>
                                <ul class="list-unstyled"> 
                                    <li>
                                        <div class="vinkje d-inline-block">
                                            <img src="images/vink.svg">
                                        </div>                                                                                                                                Eerlijke en transparante uitbetalingen
                                    </li>
                                    <li>
                                        <div class="vinkje d-inline-block">
                                            <img src="images/vink.svg">
                                        </div>                                                                                                                                Bereik ongezien snel kopers
                                    </li>
                                    <li>
                                        <div class="vinkje d-inline-block">
                                            <img src="images/vink.svg">
                                        </div>                                                                                                                                Biedt producten aan in vele verschillende kavels
                                    </li>
                                    <li>
                                        <div class="vinkje d-inline-block">
                                            <img src="images/vink.svg">
                                        </div>                                                                                                                                Persoonlijk contact en begeleiding
                                    </li>                                     
                                </ul>
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="orange-bg p-4">
                      <div class="row">
                          <div class="col-lg-8">
                              <h3>Jouw kavel hier? Meld jouw kavel aan en kom bij de eerste kavels van Veilingburo te staan.</h3> 
                          </div>
                          <div class="col-lg-4">
                              <a class="btn btn-light kavelplus" href="kavel-aanmelden"> <i class="fa fa-plus text-muted"></i> Voeg je kavel toe! </a> 
                          </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="w-50 orange-line"></div>
                <div class="w-50 black-line"></div>
            </div>
        </div>
        <div class="pw overveilingburo text-xl-center">
            <h2 class="orange m-xl-4">Over Veilingburo</h2>
            <h3 class="m-xl-4">Onze missie bestaat erin uw waardevolle goederen zo snel en transparant mogelijk om te zetten in nieuwe liquide middelen.</h3>
            <p>Het ultieme doel hierbij is zowel koper als verkoper een onvergetelijke ervaring te bezorgen.In een wereld waarin we met z’n allen door het internet verbonden zijn, zou dit toch ook met onze kostbare spullen kunnen, niet?</p>
            <p>Met Veilingburo willen we de ideale schakel zijn tussen koper en verkoper en dit op een persoonlijke en transparante manier. Ervaar het binnenkort zelf en <a href="kavel-aanmelden">meld alvast jouw kavel aan</a>.</p>
           <!-- <button type="button" class="btn bekijkfilmbtn">
                <i class="fa fa-play ml-1 mr-3"></i> Bekijk het filmpje
            </button> -->
        </div>

<!-- Add Script to load subscription modal after 10 sec -->
<script>
    $(document).ready(function(){
        
        // to use this script you have to include partials.commonpopup.blade.php
        
        // Set title and content of the modal
        var titledata = 'My New Title';

        var contentdata = 'Main New  Content';
        
        // Set time delay interval
        var popuptime = 2000;

        // append title in common modal
        $('#commonTitle').html(titledata);
        
        // append content data in coman modal
        $('#commonData').html(contentdata);
        
        setTimeout(function() {

            $('#commonModal').modal();
        
        },popuptime);
        
    });

    $(document).ready(function(){

        setTimeout(function(){
            $('#newsletterModal').modal();
            
        },10000);

        // Get all input value sfter click on subscribe and update into database using ajax
        $("#subscribe").click(function(){
            var uid = $('#uid').val();
            var firstName = $('#firstName').val();
            var email = $('#email').val();
                
                // Email Validation
                var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i

                if(pattern.test(email)){
                    // Check Checkbox is checked or not
                if($("#agreeprivacy").prop('checked') == true){
                    var agreeprivacy = true;
                    // Add subscriber to database

                    $.ajax({
                        
                        type: "POST",
                        
                        url: '/admin/mailingListSubscribers',
                    
                        data: {list_uid: uid, first_name : firstName, email : email, opt_in : '0', _token: '{{csrf_token()}}'},
                    
                        success: function (result) {
                    
                            $('#subscriber_status').html(result);

                            setTimeout(function(){
                                
                                $('#newsletterModal').modal('hide');
                            
                            }, 5000); 
                        }
                    });

                }else{

                    $(".form-check-input").css({"border" : "red"});
                    $('#errorPrivacyAgree').html('Please agree privacy');
                }
            }else{
             
                $('#errorEmail').html('please enter valid email');
              
            }    
 

           

        });
    });

</script>

@endsection



