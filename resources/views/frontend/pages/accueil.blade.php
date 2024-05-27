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

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/s-1.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Ouvrez les portes de votre avenir ! </h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Un enseignement général, technique et professionnel qui ouvre la voie à des métiers d’avenir.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="{{route('pre-inscription')}}">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/s-2.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Des métiers d’avenir, une école à vivre</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt  Sed fringilla mauri amet nibh.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'incrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/s-3.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Notre challenge : votre avenir</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt  Sed fringilla mauri amet nibh.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">En savoir ...</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">s'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url(frontend/images/slider/s-4.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">L’avenir est dans nos classes</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt  Sed fringilla mauri amet nibh.</p>
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
                            <h2>1° Lycée Informatique au Mali</h2>
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
                                            <span>Informatique</span>
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
                                            <span>Electronique</span>
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
                                            <span>web Marketing</span>
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
                                            <span>Programmation</span>
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
                                            <span>Télécom</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="frontend/images/all-icon/ctg-3.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Conseil</span>
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

    <!--====== ABOUT PART START ======-->

    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>À propos de nous</h5>
                        <h2>Bienvenue au Lycée Informatique et Internet de Bamako </h2>
                    </div> <!-- section title -->
                    <div class="about-cont" style="text-align: justify">
                        <p>Le Lycée informatique et internet Bill Gates de Bamako (LIIBIGA) accueille les meilleurs filles et garçons titulaires du Diplôme de fin d’Etudes Fondamentales (DEF)
                            ou d’un diplôme équivalent désireux de préparer un baccalauréat professionnel en trois ans spécialisé
                            en informatique et internet dans les conditions d’études les meilleures sur la base d’un test d’entrée. <br> <br>
                            Les différents domaines de formation couvrent les besoins du marché croissant des technologies de l’information et
                            de la communication à travers des filières innovantes : une 10ème commune, quatre filières en 11ème et 12ème représentant les spécialités en informatique
                            aujourd’hui disponibles dans les écoles supérieures d’informatique à Bamako,
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
        <div class="about-bg">
            <img src="frontend/images/groupe-etude-du-peuple-africain.jpg" alt="About">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APPLY PART START ======-->

    <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1" style="height: 100%;">
                            <h3>Candidature pour la rentrée 2023-2024</h3>
                            <p style="text-align: justify">
                                Avec une formation académique solide dans le domaine de l'informatique et une passion ardente pour cette discipline, vous serez persuadé(e) que cette opportunité d'apprentissage constitue un tremplin indispensable pour votre développement professionnel.

                            </p>
                            <a href="{{route('pre-inscription')}}" class="main-btn" style="position: relative;top: 60px;">
                                Postuler maintenant</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2" style="height: 100%;">
                            <h3>Demander une Bourse d'Etudes</h3>
                            <p style="text-align: justify">
                                ette opportunité exceptionnelle offre un soutien financier essentiel pour vous permettre de poursuivre vos études supérieures dans votre domaine d'intérêt. En présentant une demande de bourse d'études, vous ouvrez la porte à des opportunités éducatives enrichissantes et à une plus grande accessibilité à l'éducation de qualité.                            </p>
                            <a href="#" class="main-btn">Postuler maintenant</a>
                        </div> <!-- apply cont -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== APPLY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Nos Cours</h5>
                        <h2>Cours Recommandés</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="frontend/images/course/cu-1.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Libre</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Apprendre les bases de Javascript</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="frontend/images/course/cu-2.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Libre</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Apprenez À Coder En Python Avec InstaCode</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="frontend/images/course/cu-3.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Libre</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Les bases de l'informatique et de la programmation</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="frontend/images/course/cu-4.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Libre</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Cours de bases de données</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-5.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Libre</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Réseau Communautaire de Développeurs en Électronique</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>

    <!--====== COURSE PART ENDS ======-->

    <!--====== VIDEO FEATURE PART START ======-->

    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(images/bg-1.jpg)">
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
                            <h3>Nos Installations</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('frontend/images/all-icon/f-1.png')}}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Nos Certifications</h4>
                                        <p style="text-align: justify">
                                            Découvrez nos certifications reconnues qui témoignent de notre expertise et de notre engagement envers nos clients et nos partenaires.
                                        </p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('frontend/images/all-icon/f-2.png')}}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Soutien aux élèves</h4>
                                        <p>
                                            L'objectif principal du soutien aux élèves est d'améliorer leurs performances scolaires, de favoriser leur développement personnel et de les accompagner vers la réussite.                                         </p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('frontend/images/all-icon/f-3.png')}}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Bibliothèque</h4>
                                        <p>
                                            Nous mettons à disposition des élèves un espace dédié à la lecture.                                        </p>
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

    <!--====== VIDEO FEATURE PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->


    <!--====== TEACHERS PART ENDS ======-->

    <!--====== PUBLICATION PART START ======-->


    <!--====== PUBLICATION PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->

{{--    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row patnar-slied">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="singel-patnar text-center mt-40">--}}
{{--                        <img src="images/logo.jpg" alt="Logo">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="singel-patnar text-center mt-40">--}}
{{--                        <img src="images/patnar-logo/p-2.png" alt="Logo">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="singel-patnar text-center mt-40">--}}
{{--                        <img src="images/patnar-logo/p-3.png" alt="Logo">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="singel-patnar text-center mt-40">--}}
{{--                        <img src="images/patnar-logo/p-4.png" alt="Logo">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="singel-patnar text-center mt-40">--}}
{{--                        <img src="images/patnar-logo/p-2.png" alt="Logo">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="singel-patnar text-center mt-40">--}}
{{--                        <img src="images/patnar-logo/p-3.png" alt="Logo">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}
{{--        </div> <!-- container -->--}}
{{--    </div>--}}

    <!--====== PATNAR LOGO PART ENDS ======-->
@stop
