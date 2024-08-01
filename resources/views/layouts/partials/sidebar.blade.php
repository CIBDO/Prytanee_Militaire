@php
    use App\Helpers\Helpers;
@endphp
<!-- Sidebar Area Start Here -->
<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color" style="height: 100%;">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            <a href="/"><img src="img/logo1.png" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item sidebar-nav-item @if(Helpers::isMatchingRoute(['dashboard.','articles.']))active @endif">
                <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Gestion de Portail</span></a>
                <ul class="nav sub-group-menu"  @if(Helpers::isMatchingRoute(['dashboard.','articles.','categories.']))
                    style="display: block;"
                    @endif>
                    <li class="nav-item">
                        <a href="{{route('dashboard.admin')}}" class="nav-link @if(Request::route()->getName()=='dashboard.admin') menu-active @endif"><i class="fas fa-angle-right"></i>Administrateur</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('articles.index')}}" class="nav-link @if(Helpers::isMatchingRoute(['articles.'])) menu-active @endif"><i class="fas fa-angle-right"></i>Gestion des articles</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('categories.index')}}" class="nav-link
                         @if(Helpers::isMatchingRoute(['categories.'])) menu-active @endif
                        ">
                            <i class="fas fa-angle-right"></i>
                            Les Categories
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item @if(Helpers::isMatchingRoute(['eleves.','inscriptions.']))active @endif">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Gestion des Élèves</span></a>
                <ul class="nav sub-group-menu" @if(Helpers::isMatchingRoute(['eleves.','inscriptions.']))
                    style="display: block;"
                    @endif>
                    <li class="nav-item">
                        <a href="{{route('eleves.index')}}" class="nav-link @if(Helpers::isMatchingRoute(['eleves.'])) menu-active @endif">
                            <i class="fas fa-angle-right"></i>Liste des inscrits
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('eleves.non-inscrits')}}" class="nav-link @if(Helpers::isMatchingRoute(['eleves.non-inscrits'])) menu-active @endif">
                            <i class="fas fa-angle-right"></i>Liste des non inscrits
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('eleves.pre-inscrits')}}" class="nav-link @if(Helpers::isMatchingRoute(['eleves.pre-inscrits'])) menu-active @endif">
                            <i class="fas fa-angle-right"></i>Transfert des élèves
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('eleves.create')}}" class="nav-link @if(Helpers::isMatchingRoute(['eleves.'])) menu-active @endif">--}}
{{--                            <i class="fas fa-angle-right"></i>--}}
{{--                            Formulaire d'Admission--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a href="{{route('inscriptions.index')}}" class="nav-link @if(Helpers::isMatchingRoute(['inscriptions.'])) menu-active @endif">
                            <i class="fas fa-angle-right"></i>Inscription
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('eleves.paiement')}}" class="nav-link @if(Request::route()->getName()=='eleves.paiement') menu-active @endif">--}}
{{--                            <i class="fas fa-angle-right"></i>--}}
{{--                            Paiement--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </li>
{{--            <li class="nav-item sidebar-nav-item  @if(in_array(Request::route()->getName(),['enseignants.index','enseignants.create','enseignants.show']))active @endif">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                        class="flaticon-multiple-users-silhouette"></i><span>Enseignants</span></a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(in_array(Request::route()->getName(),['enseignants.index','enseignants.create','enseignants.show']))--}}
{{--                        style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('enseignants.index')}}" class="nav-link--}}
{{--                         @if((Request::route()->getName()=='enseignants.index' )||( Request::route()->getName()=='enseignants.show')) menu-active @endif--}}
{{--                        "><i class="fas fa-angle-right"></i>Tous les--}}
{{--                            Enseignants</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('enseignants.create')}}" class="nav-link--}}
{{--                        @if(Request::route()->getName()=='enseignants.create') menu-active @endif--}}
{{--                        "><i class="fas fa-angle-right"></i>Ajouter--}}
{{--                         un Enseignant</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('paiement-enseignant.index')}}" class="nav-link"><i--}}
{{--                                class="fas fa-angle-right"></i>Paiement</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item sidebar-nav-item @if(in_array(Request::route()->getName(),['classes.index','classes.create','classes.show']))active @endif">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                        class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Classes</span></a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(in_array(Request::route()->getName(),['classes.index','classes.create','classes.show']))--}}
{{--                        style="display: block;"--}}
{{--                    @endif>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('classes.index')}}" class="nav-link--}}
{{--                         @if(Request::route()->getName()=='classes.index') menu-active @endif--}}
{{--                        "><i class="fas fa-angle-right"></i>Les--}}
{{--                            Classes</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('classes.create')}}" class="nav-link--}}
{{--                         @if(Request::route()->getName()=='classes.create') menu-active @endif--}}
{{--                        "><i class="fas fa-angle-right"></i>Nouvelle--}}
{{--                            Classe</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item sidebar-nav-item @if(in_array(Request::route()->getName(),['matieres.index','matieres.create','matieres.show']))active @endif">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                        class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Matières</span></a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(in_array(Request::route()->getName(),['matieres.index','matieres.create','matieres.show']))--}}
{{--                        style="display: block;"--}}
{{--                    @endif--}}
{{--                >--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('matieres.index')}}" class="nav-link--}}
{{--                         @if(Request::route()->getName()=='matieres.index') menu-active @endif--}}
{{--                        "><i class="fas fa-angle-right"></i>Les--}}
{{--                            Matières</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('matieres.create')}}" class="nav-link--}}
{{--                         @if(Request::route()->getName()=='matieres.create') menu-active @endif--}}
{{--                        "><i class="fas fa-angle-right"></i>Nouvelle--}}
{{--                            Matière</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                        class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Notes</span></a>--}}
{{--                        <ul class="nav sub-group-menu">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('notes.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>Les--}}
{{--                            Notes</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('notes.create')}}" class="nav-link"><i class="fas fa-angle-right"></i>Nouvelle--}}
{{--                            Note</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                        class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Session</span></a>--}}
{{--                        <ul class="nav sub-group-menu">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('classes.create')}}" class="nav-link"><i class="fas fa-angle-right"></i>Les--}}
{{--                            Sessions</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('classes.create')}}" class="nav-link"><i class="fas fa-angle-right"></i>Nouvelle--}}
{{--                            Session</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Bibliothèque</span></a>--}}
{{--                <ul class="nav sub-group-menu">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('livres.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>Etat des--}}
{{--                            Livres</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('livres.create')}}" class="nav-link"><i class="fas fa-angle-right"></i>Nouveeu--}}
{{--                            Livre</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li class="nav-item sidebar-nav-item @if(in_array(Request::route()->getName(),['examens.index','examens.create','examens.show']))active @endif">
                <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Gestion des Notes</span></a>
                <ul class="nav sub-group-menu"
                    @if(in_array(Request::route()->getName(),['examens.index','examens.create','examens.show']))
                        style="display: block;"
                    @endif
                >
                    <li class="nav-item">
                        <a href="{{route('notes.index')}}" class="nav-link
                          @if(Request::route()->getName()=='notes.index') menu-active @endif
                        "><i class="fas fa-angle-right"></i>Affecter des notes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('notes.index')}}" class="nav-link
                          @if(Request::route()->getName()=='notes.index') menu-active @endif
                        "><i class="fas fa-angle-right"></i>Affecter des moyennes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('notes.index')}}" class="nav-link
                          @if(Request::route()->getName()=='notes.index') menu-active @endif
                        "><i class="fas fa-angle-right"></i>Bulletins</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('examens.index')}}" class="nav-link
                          @if(Request::route()->getName()=='examens.index') menu-active @endif
                        "><i class="fas fa-angle-right"></i>Calendrier
                            des Examens</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="exam-grade.html" class="nav-link"><i class="fas fa-angle-right"></i>Notes--}}
{{--                            Examen</a>--}}
{{--                    </li>--}}
                </ul>
            </li>
{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>--}}
{{--                <ul class="nav sub-group-menu">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('parents.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>Tous les--}}
{{--                            Parents</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('parents.create')}}" class="nav-link"><i class="fas fa-angle-right"></i>Ajouter--}}
{{--                            un Parent</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item sidebar-nav-item @if(in_array(Request::route()->getName(),['categories.index','articles.index','articles.create']))active @endif" >--}}

{{--                <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Blog</span></a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(in_array(Request::route()->getName(),['categories.index','articles.index','articles.create']))--}}
{{--                        style="display: block;"--}}
{{--                    @endif--}}
{{--                >--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('categories.index')}}" class="nav-link--}}
{{--                         @if(Request::route()->getName()=='categories.index') menu-active @endif--}}
{{--                        ">--}}
{{--                            <i class="fas fa-angle-right"></i>--}}
{{--                           Les Categories--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('articles.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>--}}
{{--                            Liste des Articles--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('articles.create')}}" class="nav-link"><i class="fas fa-angle-right"></i>--}}
{{--                            Nouvel Article--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item @if(in_array(Request::route()->getName(),['bons.index','depenses.index','bons.create','depenses.create']))active @endif">--}}
{{--                <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Trésorerie</span></a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(in_array(Request::route()->getName(),['bons.index','depenses.index','bons.create','depenses.create']))--}}
{{--                        style="display: block;"--}}
{{--                    @endif--}}
{{--                >--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('bons.index')}}" class="nav-link--}}
{{--                         @if(Request::route()->getName()=='bons.index') menu-active @endif--}}
{{--                        "><i class="fas fa-angle-right"></i>Bons</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('depenses.index')}}" class="nav-link--}}
{{--                            @if(Request::route()->getName()=='depenses.index') menu-active @endif--}}
{{--                        "><i--}}
{{--                                class="fas fa-angle-right"></i>Dépenses</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Nouvelle--}}
{{--                            Dépense</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li class="nav-item">
                <a href="#" class="nav-link"><i
                        class="flaticon-checklist"></i><span>Présence</span></a>
            </li>

{{--            <li class="nav-item">--}}
{{--                <a href=#" class="nav-link"><i class="flaticon-bed"></i><span>Auberge</span></a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="messaging.html" class="nav-link"><i--}}
{{--                        class="flaticon-chat"></i><span>Messeage</span></a>--}}
{{--            </li>--}}
            <li class="nav-item sidebar-nav-item @if(in_array(Request::route()->getName(),['messages.reception','messages.envoi','messages.create']))active @endif">
                <a href="#" class="nav-link"><i class="flaticon-chat"></i><span>Messages</span></a>
                <ul class="nav sub-group-menu"
                    @if(in_array(Request::route()->getName(),['messages.reception','messages.envoi','messages.create']))
                        style="display: block;"
                    @endif
                >
                    <li class="nav-item">
                        <a href="{{route('messages.reception')}}" class="nav-link
                         @if(Request::route()->getName()=='messages.reception') menu-active @endif
                        "
                        ><i class="fas fa-angle-right"></i>Boite de reception</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('messages.envoi')}}" class="nav-link
                        @if(Request::route()->getName()=='messages.envoi') menu-active @endif
                        "><i
                                class="fas fa-angle-right"></i>Boite d'envoi</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('messages.create')}}" class="nav-link
                        @if(Request::route()->getName()=='messages.create') menu-active @endif
                        "><i
                                class="fas fa-angle-right"></i>Nouveau message</a>
                    </li>
                </ul>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a href="map.html" class="nav-link"><i--}}
{{--                        class="flaticon-planet-earth"></i><span>Carte</span></a>--}}
{{--            </li>--}}
            <li class="nav-item sidebar-nav-item @if(Helpers::isMatchingRoute(['comptes.', 'enseignants.']))active @endif">
                <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Gestion des utilisateurs</span></a>
                <ul class="nav sub-group-menu"
                    @if(Helpers::isMatchingRoute(['comptes.', 'enseignants.']))
                                                   style="display: block;"
                @endif>

                    <li class="nav-item">
                        <a href="{{route('comptes.index')}}" class="nav-link  @if(Helpers::isMatchingRoute(['comptes.'])) menu-active @endif">
                            <i class="fas fa-angle-right"></i>Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('parents.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>Les parents d'élèves</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('enseignants.index')}}" class="nav-link
                         @if(Helpers::isMatchingRoute(['enseignants.'])) menu-active @endif
                        "><i class="fas fa-angle-right"></i>Les enseignants</a>
                    </li>


                </ul>
            </li>
            <li class="nav-item sidebar-nav-item @if(Helpers::isMatchingRoute(['profils.','periodes.', 'matieres.', 'classes.']))active @endif">
                <a href="#" class="nav-link"><i class="flaticon-settings"></i><span>Divers</span></a>
                <ul class="nav sub-group-menu"
                    @if(Helpers::isMatchingRoute(['profils.','periodes.', 'matieres.', 'classes.']))
                                                   style="display: block;"
                @endif>
                    <li class="nav-item">
                        <a href="{{route('profils.index')}}" class="nav-link @if(Helpers::isMatchingRoute(['profils.'])) menu-active @endif">
                            <i class="fas fa-angle-right"></i>Profils</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('periodes.index')}}" class="nav-link  @if(Helpers::isMatchingRoute(['periodes.'])) menu-active @endif">
                            <i class="fas fa-angle-right"></i>Périodes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('classes.index')}}" class="nav-link
                         @if(Helpers::isMatchingRoute(['classes.'])) menu-active @endif
                        "><i class="fas fa-angle-right"></i>Les Classes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('matieres.index')}}" class="nav-link
                         @if(Helpers::isMatchingRoute(['matieres.'])) menu-active @endif
                        "><i class="fas fa-angle-right"></i>Les
                            Matières</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Sidebar Area End Here -->
