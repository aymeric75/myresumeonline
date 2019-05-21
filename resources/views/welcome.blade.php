@extends('layout')


@section('title', 'Home')


@section('content')




    <div id="top" class="jumbotron" style="height: 347px;">
        <div class="container">
            
            <h1>Aymeric BARBIN</h1>
            <p class="lead" style="color:white;">Curriculum vitae intéractif</p>
        </div>
        
        <div class="overlay"></div>
        
        <a href="#profile" class="scroll-down"> 
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
    </div>


    <div id="app2">
        <navbar-component></navbar-component>
    </div>



    <div class="background-white">

        <div id="profile" class="container">



            <h2>Profile</h2>
            <p class="lead">Je suis un développeur Web plein de ressources</p>

            <hr>

            <div class="row">
                <div class="col-md-4">
                    <h3>À propos</h3>
                    <p>


                        Je suis un développeur touche à tout. Expert en développement Web, je parle couramment le Php, Html, Css et Javascript et connais sur le bout des doigts pleins de frameworks et CMS (Prestashop/Laravel/Vues).
                        J'aime que le travail soit structuré et de qualité. J'adore passer mon temps à régler les derniers petits détails et à optimiser mes applications Web.
                        Enfin, j'aime travailler en équipe, on y apprend mieux et plus vite. Comme le dit le dicton: <i>Il y a plus d’idées dans deux têtes que dans une.</i>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="images/moureze_fond.jpg" alt=Aymeric BARBIN" width="100%" height="auto">
                </div>

                <div class="col-md-4">
                    <h3>Détails</h3>
                        <p>
                            <strong>Nom:</strong><br>
                            Aymeric BARBIN<br>
                            <strong>Âge:</strong><br>
                            31 ans<br>
                            <strong>Lieux de résidence:</strong><br>
                            Lyon, France
                        </p>
                </div>
            </div>

            <div class="text-center">
                <p>
                    Vous êtes inspirés par mon profil ? Ou vous aimez simplement mon site ? Pas de soucis, achetez moi une bière et je serais content !
                </p>

                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="QQNPJ7SWMQZBS" />
                    <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_SM.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Bouton Faites un don avec PayPal" />
                    <img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1" />
                </form>


            </div> <!--  .text-center -->


        </div> <!--  #profile -->


    </div> <!-- .background-white  -->


    <div id="experiences" class="container">
        
        <h2>Expériences</h2>


        <p class="lead">
            “Protons give an atom its identity, electrons its personality.”<br>- Bill Bryson, A short history of nearly everything
        </p>


        <hr>


        <div class="experiences">
            
            @foreach ($cvs as $cv)

                <div class="experience row">
                    <div class="col-md-4">
                        <h4>{{ $cv->company }}</h4>
                        <p class="experience-period">
                           {{ $cv->date }}           </p>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <strong>{{ $cv->title }}</strong>
                            <span class="hidden-phone">
                                {!! $cv->desc !!}     </span>
                            <span class="experience-details">
                                <span class="location">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                    {{ $cv->place }}                  </span>
                            </span>
                            </p>
                    </div>
                </div>

            @endforeach

        </div> <!--  .experiences -->

    </div> <!--  # experiences -->



    <div class="background-white">
        <div id="abilities" class="container">
            <h2>Aptitudes</h2>
            <p class="lead">
                "La vie sans connaissance c'est la mort déguisée"<br>- Talib Kweli
            </p>

            <hr>

            <h3>Compétences techniques</h3>

            <div class="row">
            
                <div class="col-md-6">
                    <ul class="no-bullets">
            
                        @foreach ($skills as $k => $skill)


                            @if ($k > 6)
                                @continue
                            @else


                                <li>
                                    <span class="ability-title">{{ $skill->title }}</span>
                                    <span class="ability-score">

                                        @for ($i = 0; $i < $skill->number; $i++)

                                            <span class="glyphicon glyphicon-star filled"></span>
                                        
                                        @endfor


                                        @for ($i = $skill->number; $i < 5; $i++)

                                            <span class="glyphicon glyphicon-star"></span>

                                        @endfor
                                                        
                                    </span>
                                </li>
                                

                            @endif

                        @endforeach
                        
                    </ul>

                </div> <!--  .col-md-6 -->

        



                <div class="col-md-6">
                    <ul class="no-bullets">
            
                        @foreach ($skills as $k => $skill)


                            @if ($k < 6)
                                @continue
                            @else


                                <li>
                                    <span class="ability-title">{{ $skill->title }}</span>
                                    <span class="ability-score">

                                        @for ($i = 0; $i < $skill->number; $i++)

                                            <span class="glyphicon glyphicon-star filled"></span>
                                        
                                        @endfor


                                        @for ($i = $skill->number; $i < 5; $i++)

                                            <span class="glyphicon glyphicon-star"></span>

                                        @endfor
                                                        
                                    </span>
                                </li>
                                

                            @endif

                        @endforeach
                        
                    </ul>

                </div> <!--  .col-md-6 -->


            </div>  <!--  .row -->






            <hr>

            <h3>Langues</h3>

            <div class="row">
            
                <div class="col-md-6">
                    <ul class="no-bullets">
            
                        @foreach ($languages as $k => $language)


                            @if ($k > 1)
                                @continue
                            @else


                                <li>
                                    <span class="ability-title">{{ $language->title }}</span>
                                    <span class="ability-score">

                                        @for ($i = 0; $i < $language->number; $i++)

                                            <span class="glyphicon glyphicon-star filled"></span>
                                        
                                        @endfor


                                        @for ($i = $language->number; $i < 5; $i++)

                                            <span class="glyphicon glyphicon-star"></span>

                                        @endfor
                                                        
                                    </span>
                                </li>
                                

                            @endif

                        @endforeach
                        
                    </ul>

                </div> <!--  .col-md-6 -->



                <div class="col-md-6">
                    <ul class="no-bullets">
            
                        @foreach ($languages as $k => $language)


                            @if ($k < 2)
                                @continue
                            @else


                                <li>
                                    <span class="ability-title">{{ $language->title }}</span>
                                    <span class="ability-score">

                                        @for ($i = 0; $i < $language->number; $i++)

                                            <span class="glyphicon glyphicon-star filled"></span>
                                        
                                        @endfor


                                        @for ($i = $language->number; $i < 5; $i++)

                                            <span class="glyphicon glyphicon-star"></span>

                                        @endfor
                                                        
                                    </span>
                                </li>
                                

                            @endif

                        @endforeach
                        
                    </ul>

                </div> <!--  .col-md-6 -->


        
            </div> <!--  row -->







            <div class="text-center project-referal">
                <p>Ce projet est construit à partir de Laravel + Vue.js + Bootstrap</p>
                <a href="https://github.com/pascalvgemert/resume" class="btn btn-primary" target="_blank">Voir le projet sur Github</a>
            </div>

        </div> <!-- #abilities -->


    </div> <!-- .background-white -->





    <div id="projects" class="container">
        <h2>Projets</h2>
        <p class="lead">
            “You can do anything you set your mind to.”<br>- Benjamin Franklin
        </p>

        <hr>


        <div class="row">

                
            <div class="col-md-6 col-sm-12 col-xs-12">
                <figure class="effect">
                    <img src="images/project_mals.jpg" alt="Mals">
                    
                    <figcaption>
                        <h3>Mals</h3>
                        <p>Mals, a creative agency located in Rotterdam.</p>
                        <p><strong>Tags:</strong> <br>Development, Wordpress, Bootstrap</p>
                        <a href="http://studiomals.com" target="_blank">View more</a>
                        <span class="icon">
                            <span class="glyphicon glyphicon-new-window"></span>
                        </span>
                    </figcaption> 
                </figure>
            </div>

                
            <div class="col-md-6 col-sm-12 col-xs-12">
                <figure class="effect">
                    <img src="images/project_mals.jpg" alt="SOAP - Den Bosch">
                    
                    <figcaption>
                        <h3>SOAP - Den Bosch</h3>
                        <p>Build the website of the local barbershop.</p>
                        <p><strong>Tags:</strong> <br>Design, Development, Bootstrap, Wordpress</p>
                        <a href="http://soaphair.nl" target="_blank">View more</a>
                        <span class="icon">
                            <span class="glyphicon glyphicon-new-window"></span>
                        </span>
                    </figcaption> 
                </figure>
            </div>

                
            <div class="col-md-6 col-sm-12 col-xs-12">
                <figure class="effect">
                    <img src="images/project_mals.jpg" alt="Oranjebitter Rotterdam">
                    
                    <figcaption>
                        <h3>Oranjebitter Rotterdam</h3>
                        <p>Build a website for the Oranjebitter Festival in Rotterdam (3 years in a row)</p>
                        <p><strong>Tags:</strong> <br>Development, Bootstrap, Wordpress</p>
                        <a href="http://oranjebitter-rotterdam.nl" target="_blank">View more</a>
                        <span class="icon">
                            <span class="glyphicon glyphicon-new-window"></span>
                        </span>
                    </figcaption> 
                </figure>
            </div>

                
            <div class="col-md-6 col-sm-12 col-xs-12">
                <figure class="effect">
                    <img src="images/project_mals.jpg" alt="Oetelspel">
                    
                    <figcaption>
                        <h3>Oetelspel</h3>
                        <p>An online game specially for Carneval at 's-Hertogenbosch.</p>
                        <p><strong>Tags:</strong> <br>Development, Concept, Founder</p>
                        <a href="http://oetelspel.nl" target="_blank">View more</a>
                        <span class="icon">
                            <span class="glyphicon glyphicon-new-window"></span>
                        </span>
                    </figcaption> 
                </figure>
            </div>

                
        </div>
    
    </div> <!-- #projects -->




    <div class="background-gray">
        <div id="contact" class="container">
            <h2>Contact</h2>
            <p class="lead">
                “If I had asked people what they wanted, they would have said faster horses. ”<br>- Henry Ford
            </p>

            <hr>

            <div class="row">
                <div class="col-md-6">
                    <ul class="no-bullets">
                        <li>
                            <a href="http://twitter.com/pascalvgemert" target="_blank">
                                <span class="icon icon-twitter"></span>
                                http://twitter.com/pascalvgemert                </a>
                        </li>
                        <li>
                            <a href="http://linkedin.nl/in/pascalvgemert/" target="_blank">
                                <span class="icon icon-linkedin"></span>
                                http://linkedin.nl/in/pascalvgemert/                </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="no-bullets">
                        <!--<li>
                            <a href="javascript:void(0);">
                                <span class="icon icon-skype"></span>
                                pascalvgemert               </a>
                        </li>-->
                        <li>
                            <a href="mailto:ln.tremegnavlacsap@lacsap">
                                <span class="icon icon-email"></span>
                                <span style="unicode-bidi:bidi-override; direction: rtl;">
                                    ln.tremegnavlacsap@lacsap                   </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <hr>
<!-- 
            <div class="text-center">
                <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="http://platform.twitter.com/widgets/tweet_button.c633b87376883931e7436b93bb46a699.en.html#_=1452458429192&amp;dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;original_referer=http%3A%2F%2Fwebcache.googleusercontent.com%2Fsearch%3Fq%3Dcache%3AcRExpd3vwGsJ%3Awww.pascalvangemert.nl%2F%2B%26cd%3D1%26hl%3Den%26ct%3Dclnk%26gl%3Dnl%26lr%3Dlang_nl%257Clang_en&amp;size=m&amp;text=Pascal%20van%20Gemert%20-%20Web%20Developer%20-%20Interactive%20Resume&amp;type=share&amp;url=http%3A%2F%2Fpascalvangemert.nl%2F%3Fref%3Dtwitter&amp;via=pascalvgemert" style="position: static; visibility: visible; width: 62px; height: 20px;" data-url="http://pascalvangemert.nl/?ref=twitter"></iframe>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

                <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fpascalvangemert.nl%3Fref%3Dfacebook&amp;width=120&amp;height=21&amp;colorscheme=dark&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=143175172374579" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowtransparency="true"></iframe>
            </div>  -->        

        </div> <!--  #contact -->
    
    </div> <!-- .background-gray -->


@endsection