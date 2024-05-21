@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Utilisateurs </h3>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>Liste</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="row">

        <!-- Add Notice Area End Here -->
        <!-- All Notice Area Start Here -->
        <div class="col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <a href="{{route('comptes.create')}}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter un administrateur
                        </a>

                        <div class="item-title">
                            <h3>Liste des utilisateurs </h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">ID</label>
                                    </div>
                                </th>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Profil</th>
                                <th>Telephone </th>
                                <th>Email </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comptes as $compte)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$compte->id}}</label>
                                        </div>
                                    </td>
                                    <td>{{$compte->infos->prenom??'-'}}</td>
                                    <td>{{$compte->infos->nom??'-'}}</td>
                                    <td>{{$compte->type_compte}}</td>
                                    <td>{{$compte->infos->telephone??'-'}}</td>
                                    <td>{{$compte->infos->email??'-'}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @if($compte->type_compte == 'administrateur')
                                                    <a class="dropdown-item" onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')" href="{{route('comptes.delete',['id'=>$compte->id])}}"><i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                    <a class="dropdown-item" href="{{route('comptes.edit',['compte'=>$compte->id])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
                                                @elseif($compte->type_compte == 'etudiant')
                                                    <a class="dropdown-item" onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')" href="{{route('eleves.delete',['id'=>$compte->id_utilisateur])}}"><i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                    <a class="dropdown-item" href="{{route('eleves.edit',['eleve'=>$compte->id_utilisateur])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
                                                @elseif($compte->type_compte =='enseignant')
                                                    <a class="dropdown-item" onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')" href="{{route('enseignants.delete',['id'=>$compte->id_utilisateur])}}"><i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                    <a class="dropdown-item" href="{{route('enseignants.edit',['enseignant'=>$compte->id_utilisateur])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
                                                @endif

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Notice Area End Here -->
    </div>
@stop
