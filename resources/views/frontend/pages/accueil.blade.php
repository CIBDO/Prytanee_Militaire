@extends('frontend.layouts.master')
@section('content')
    <!--====== HEADER PART ENDS ======-->

    <!--====== SEARCH BOX PART START ======-->

    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Recherche par mot-clé">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
<!--====== SLIDER PART START ======-->
    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/S1.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Forgeons l'excellence </h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Parce que chaque élève est un artisan de son propre avenir.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="{{route('pre-inscription')}}">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/S2.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Discipline et savoir</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">La rigueur militaire au service de la connaissance.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/S3.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Préparons les leaders de demain</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Former des esprits brillants pour un monde en perpétuel changement.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
         <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/S4.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Valeur et dévouement</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Cultiver la bravoure et l'engagement dans toutes nos actions.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/S6.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Ensemble pour l'honneur</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Unir nos forces pour bâtir une communauté de respect et d'intégrité.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/S7.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Vers le sommet, ensemble</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Chacun de nous est une partie d'un tout puissant.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/S9.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">L'excellence au quotidien</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Chaque jour, un pas de plus vers l'accomplissement.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/S10.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Courage et persévérance</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Face à l'adversité, nous avançons avec détermination.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/S11.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">En avant pour la patrie</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Nous servons notre nation avec fierté et honneur.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/S12.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Le futur entre nos mains</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Nous préparons aujourd'hui les bâtisseurs de demain.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>
    <!--====== SLIDER PART ENDS ======-->
    <!--====== CATEGORY PART START ======-->

    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2>Prytanée Militaire de Kati</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="frontend/images/all-icon/ctg-1.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Instruction Militaire</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="frontend/images/all-icon/elec.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Instruction Générale</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="frontend/images/all-icon/mak.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>La pratique du sport</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="frontend/images/all-icon/prog2.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Commandement de l’École</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="frontend/images/all-icon/telecom.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Administration – Santé</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                        </div> <!-- category slied -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>

    <!--====== CATEGORY PART ENDS ======-->
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>À propos de nous</h5>
                        <h2>Bienvenue au Prytanée Militaire  de Kati </h2>
                    </div> <!-- section title -->
                    <div class="about-cont" style="text-align: justify">
                        <p>Le Prytanée Militaire de Kati est un établissement militaire. Il a pour mission de forger des futurs cadres militaires
                            et civils nationaux et internationaux des deux sexes, à travers un enseignement fondamental, secondaire (général et technique),
                            une instruction militaire, une formation physique et morale. Cependant, pour atteindre ses objectifs, l’école emploie des personnels
                            militaires nationaux en internationaux et du personnel civil compétent.. <br> <br>
                            Le Prytanée Militaire de Kati est commandé par un Officier Supérieur des Forces Armées nommé par décret du Président de la République
                            sur proposi- tion du Ministre chargé des Forces Armées.
                            Il est responsable de l’ensemble du fonctionnement administratif, pédagogique, du respect de la discipline dans tous les domaines et
                            à tous les niveaux.Il est placé sous l’autorité du Directeur des Écoles Militaires et porte le titre de Commandant de l’école.
                        </p>
                        <a href="#" class="main-btn mt-55">En Savoir ...</a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Evènements à venir </h3>
                        </div> <!-- event title -->
                        <ul>
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> 02 Décembre la rentrée 2024</span>
                                    <a href="events-singel.html"><h4>Porte Ouverte</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 h - 17:00 Pm</span>
                                    <span><i class="fa fa-map-marker"></i>Administration Scolaire</span>
                                </div>
                            </li>
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> 05 December 2024</span>
                                    <a href="events-singel.html"><h4>Conseil d'Orientation</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 h - 14:00 h</span>
                                    <span><i class="fa fa-map-marker"></i>Les Enseignants</span>
                                </div>
                            </li>
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> 05 janvier 2024</span>
                                    <a href="events-singel.html"><h4> conference sur les TIC</h4></a>
                                    <span><i class="fa fa-clock-o"></i> 10:00 h - 12:00 h</span>
                                    <span><i class="fa fa-map-marker"></i> AGETIC</span>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg"::before>
            <img src="frontend/images/about/bg-11.jpg" alt="À propos">        
        </div> 
    </section>
<section id="apply-aprt" class="pb-120">
    <div class="container">
        <div class="apply">
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <div class="apply-cont apply-color-1">
                        <h3>Discipline</h3>
                        <p>La discipline est au cœur de notre formation. Nous croyons que la rigueur et l'organisation sont..{{--  essentielles pour atteindre l'excellence personnelle et professionnelle. Chaque élève apprend à respecter des normes élevées, à gérer son temps efficacement, et à faire preuve de détermination dans tous ses engagements --}}.</p>
                        <a href="#" class="main-btn">lire..</a>
                    </div> <!-- apply cont -->
                </div>
                <div class="col-lg-3">
                    <div class="apply-cont apply-color-2">
                        <h3>Engagement</h3>
                        <p>Nous valorisons l'engagement envers nos élèves, notre mission, et notre communauté..{{--  Chaque membre de notre école est dévoué à la réussite des élèves et au développement d'une culture de respect, de responsabilité et de solidarité --}}.</p>
                        <a href="#" class="main-btn">lire..</a>
                    </div> <!-- apply cont -->
                </div>
                <div class="col-lg-3">
                    <div class="apply-cont apply-color-3">
                       <h3>Leadership</h3>
                        <p>Nous formons des leaders capables de prendre des décisions éclairées et de guider les autres..{{--  avec intégrité et vision. Notre approche éducative encourage les élèves à développer leurs compétences en leadership, à prendre des initiatives, et à inspirer ceux qui les entourent --}}.</p>
                        <a href="#" class="main-btn">lire..</a>
                    </div> <!-- apply cont -->
                </div>
                <div class="col-lg-3">
                    <div class="apply-cont apply-color-4">
                        <h3>Excellence</h3>
                        <p>L'excellence est notre objectif constant. Nous nous engageons à fournir une éducation..{{--  de premier ordre qui prépare nos élèves à exceller dans leurs carrières futures et à contribuer positivement à la société. Nous visons à dépasser les attentes à chaque étape de leur parcours --}}.</p>
                        <a href="#" class="main-btn">lire..</a>
                    </div> <!-- core value cont -->                      
                    </div> <!-- apply cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- apply -->
    </div> <!-- container -->
</section>
<div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(frontend/images/bg-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NaN</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Étudiants inscrits</font></font></p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NaN</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cours téléchargés</font></font></p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NaN</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Les gens certifient</font></font></p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NaN</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enseignants du monde entier</font></font></p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <br>
    
<section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(frontend/images/bg-1.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=bRRtdzJH1oE"><i class="fa fa-play"></i></a>
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos infrastructures</font></font></h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="frontend/images/all-icon/f-1.png" alt="icône">
                                    </div>
                                    <div class="cont">
                                        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Certificat mondial</font></font></h4>
                                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gravida nibh vel velit auctor aliquetn auci elit contre solliazcitudirem sem quibibendum sem nibhutis.</font></font></p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="frontend/images/all-icon/f-2.png" alt="icône">
                                    </div>
                                    <div class="cont">
                                        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soutien aux anciens élèves</font></font></h4>
                                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gravida nibh vel velit auctor aliquetn auci elit contre solliazcitudirem sem quibibendum sem nibhutis.</font></font></p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="frontend/images/all-icon/f-3.png" alt="icône">
                                    </div>
                                    <div class="cont">
                                        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Livres et bibliothèque</font></font></h4>
                                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gravida nibh vel velit auctor aliquetn auci elit contre solliazcitudirem sem quibibendum sem nibhutis.</font></font></p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
</section>
     <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dernières nouvelles</font></font></h5>
                        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D'après les nouvelles</font></font></h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="singel-news mt-30">
                        <div class="news-thum pb-25">
                            <img src="frontend/images/news/n-1.jpg" alt="Nouvelles">
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 décembre 2018</font></font></a></li>
                                <li><a href="#"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Par</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adam Linn</font></font></a></li>
                            </ul>
                            <a href="blog-singel.html"><h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conseils pour obtenir une moyenne générale élevée à l'université</font></font></h3></a>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit contre equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</font></font></p>
                        </div>
                    </div> <!-- singel news -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="frontend/images/news/ns-1.jpg" alt="Nouvelles">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 décembre 2018</font></font></a></li>
                                        <li><a href="#"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Par</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adam Linn</font></font></a></li>
                                    </ul>
                                    <a href="blog-singel.html"><h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Communication intellectuelle</font></font></h3></a>
                                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit contre vel.</font></font></p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="frontend/images/news/ns-2.jpg" alt="Nouvelles">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 décembre 2018</font></font></a></li>
                                        <li><a href="#"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Par</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adam Linn</font></font></a></li>
                                    </ul>
                                    <a href="blog-singel.html"><h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L'étude vous rend parfait</font></font></h3></a>
                                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit contre vel.</font></font></p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="frontend/images/news/ns-3.jpg" alt="Nouvelles">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 décembre 2018</font></font></a></li>
                                        <li><a href="#"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Par</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adam Linn</font></font></a></li>
                                    </ul>
                                    <a href="blog-singel.html"><h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L'éducation technologique est désormais...</font></font></h3></a>
                                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit contre vel.</font></font></p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
<section class="partners-section bg-light py-5">
    <div class="container">
        <div class="section-title text-center">
            <h2>Nos Partenaires</h2>
            <p>Nous collaborons avec des institutions renommées pour offrir le meilleur à nos élèves.</p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="partner-logo">
                    <img src="frontend/images/patnar-logo/p-1.png" alt="Partenaire 1" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3">
                <div class="partner-logo">
                    <img src="frontend/images/patnar-logo/p-2.png" alt="Partenaire 2" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3">
                <div class="partner-logo">
                    <img src="frontend/images/patnar-logo/p-3.png" alt="Partenaire 3" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3">
                <div class="partner-logo">
                    <img src="frontend/images/patnar-logo/p-4.png" alt="Partenaire 4" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

@stop
