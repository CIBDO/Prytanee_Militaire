@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Profils Utilisateurs</h3>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>Profils</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="row">
        <!-- Add Notice Area Start Here -->
        <div class="col-4-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter un profil</h3>
                        </div>
                    </div>
                    <form class="new-added-form" method="POST" action="{{isset($profil)? route('profils.update', $profil->id):route('profils.store')}}">
                        @csrf
                        @if(isset($profil))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label for="nom">Nom</label>
                                <input
                                    id="nom"
                                    type="text"
                                    placeholder=""
                                    class="form-control"
                                    name="nom"
                                    value="{{$profil->nom ?? ""}}"
                                >
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Enregistrer</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add Notice Area End Here -->
        <!-- All Notice Area Start Here -->
        <div class="col-8-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <a href="{{route('profils.create')}}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter un profil
                        </a>

                        <div class="item-title">
                            <h3>Liste des profils </h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">Roll</label>
                                    </div>
                                </th>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($profils as $profil)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$profil->id}}</label>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                    <td>{{$profil->nom}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                    <a class="dropdown-item" href="{{route('profils.delete',['id'=>$profil->id])}}"><i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                <a class="dropdown-item" href="{{route('profils.edit',['profil'=>$profil->id])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
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
