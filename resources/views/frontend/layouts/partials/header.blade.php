<header id="header-part">

    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="frontend/images/all-icon/map.png" alt="icon"><span>Kati-Mali</span></li>
                            <li><img src="frontend/images/all-icon/email.png" alt="icon"><span>contact@informatique.ml</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-opening-time text-lg-right text-center">
                        <p>
                            Horaires d'ouverture : Du lundi au Dimanche - de 8 h à 17 h
                            | <a href="{{route('dashboard.admin')}}" style="color: #fff"> Connexion</a>
                        </p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->

    <div class="header-logo-support" style="padding-bottom: 5px; padding-top: 5px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="/">
                            <img src="frontend/images/logo_p.png" alt="Logo" width="280" height="80">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="support-button d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="support d-flex align-items-center mr-3">
                                <div class="icon">
                                    <img src="frontend/images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont ml-2">
                                    <p class="m-0">Besoin d'aide ? appelez-nous au</p>
                                    <span>(+223) 78 86 20 65</span>
                                </div>
                            </div>
                            <div class="support d-flex align-items-center mr-3">
                                <div class="icon">
                                    <img src="frontend/images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont ml-2">
                                    <p class="m-0">Besoin d'aide ? appelez-nous au</p>
                                    <span>(+223) 78 86 20 65</span>
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <a href="{{ route('pre-inscription') }}" class="main-btn">S'inscrire maintenant</a>
                        </div>
                    </div>
                </div>

            </div>
        <div class="scrolling-text-container">   
        <span>Flash</span>
        <marquee behavior=""direction="left">Soyez les bienvenus sur notre plateforme </marquee>
        </div>
        </div> <!-- row -->
    </div> <!-- container -->
    </div> <!-- header logo support -->

    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="@if(Request::route()->getName()==='accueil') active @endif" href="/">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">À propos</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('presentation') }}">Mot du Commandant</a></li>
                                        <li><a href="{{ route('historique')}}">Historique</a></li>
                                        <li><a href="#">Mission et Vision </a></li>
                                        <li><a href="#">Organigramme</a></li>
                                        <li><a href="#">Installations</a></li>
                                        <li><a href="#">Partenaires</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Programmes</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Formation de Base</a></li>
                                        <li><a href="#">Catalogue de Formations</a></li>
                                        <li><a href="#">Information et Orientation</a></li>
                                        <li><a href="#">Scolarité </a></li>
                                        <li><a href="#">Calendrier Académique</a></li>
                                        <li><a href="#">Collaborations académiques</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Vie Militaire</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Discipline et Régulations</a></li>
                                        <li><a href="#">Vie en Caserne</a></li>
                                        <li><a href="#">Activités physiques et sportives</a></li>
                                        <li><a href="#">Événements et cérémonies</a></li>
                                        <li><a href="#">Code d'Honneur</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Bibliothèque</a></li>
                                        <li><a href="#">Mess et Cantine</a></li>
                                        <li><a href="#">Santé et Bien-être</a></li>
                                        <li><a href="#">Soutien psychologique</a></li>
                                        <li><a href="#">Infrastructures de sport</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Anciens élèves</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Réseau des anciens</a></li>
                                        <li><a href="#">Témoignages </a></li>
                                        <li><a href="#">Réunions et événements </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Admissions</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Procédure d'admission </a></li>
                                        <li><a href="#">Critères de sélection </a></li>
                                        <li><a href="{{route('pre-inscription')}}">Formulaire d'inscription </a></li>
                                        <li><a href="#">Résultats du Concours </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Actualités</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">évènements</a></li>
                                        <li><a href="#">Communiqués</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Médiathèque</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Photos</a></li>
                                        <li><a href="#">Vidéos</a></li>
                                        <li><a href="#">Archive document</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}">Contact</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('contact')}}">Contactez-nous</a></li>
                                        <li><a href="#">Géolocalisation</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                    <div class="right-icon text-right">
                        <ul>
                            {{-- <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>--}}
                        </ul>
                    </div> <!-- right icon -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

</header>
