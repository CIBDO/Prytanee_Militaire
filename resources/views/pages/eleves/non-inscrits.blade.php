@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Élèves</h3>
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
                <div class="card-body" style="padding-bottom: 10px;">
                    <form class="mg-b-20" method="get" action="{{route('eleves.non-inscrits')}}">
                        <div class="row gutters-8">
                            <div class="col-3 form-group">
                                <label>Classes *</label>
                                <select name="classe" class="select2">
                                    <option value="">Veuillez sélectionner une classes *</option>
                                    @foreach(\App\Models\Classe::all() as $classe)
                                        <option value="{{$classe->id}}"
                                                @if(request('classe')==$classe->id)selected @endif>
                                            {{$classe->nom_classe}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Genre *</label>
                                <select name="genre" class="select2">
                                    <option value="">Veuillez sélectionner *</option>
                                    @foreach(['Garçon', 'Fille'] as $genre)
                                        <option value="{{$genre}}"
                                                @if(request('genre')==$genre)selected @endif>
                                            {{$genre}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Matricule</label>
                                <input
                                    name="matricule" type="text" placeholder="Entrez le numero matricule"
                                    value="{{request('matricule')??''}}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="heading-layout1" style="text-align: center;display: inherit;margin-bottom: 0;">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                                <i class="fas fa-search"></i>
                                Recherche
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <a href="{{route('eleves.create')}}"
                           class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter un élève
                        </a>

                        <div class="item-title">
                            <h3>Liste des élèves non-inscrits </h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" style="width:100%" class="display">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">ID</label>
                                    </div>
                                </th>
                                <th>Photo</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Classe</th>
                                <th>Parent</th>
                                <th>Genre</th>
                                <th>Date de naissance</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($eleves as $eleve)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$eleve->id}}</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <img style="width: 100px" src="{{asset('uploads_photos/'.$eleve->photo)}}"
                                             alt="student">
                                    </td>
                                    <td>{{$eleve->prenom}}</td>
                                    <td>{{$eleve->nom}}</td>
                                    <td>{{$eleve->classe->nom_classe??''}}</td>
                                    <td>{{$eleve->parent->prenom??"-"}} {{$eleve->parent->nom??"-"}}</td>
                                    <td>{{$eleve->genre}}</td>
                                    <td>{{date("d/m/y",strtotime($eleve->date_naissance))}}</td>
                                    <td>{{$eleve->telephone}}</td>
                                    <td>{{$eleve->email}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item"
                                                   onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')"
                                                   href="{{route('eleves.delete',['id'=>$eleve->id])}}"><i
                                                        class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                <a class="dropdown-item"
                                                   href="{{route('eleves.edit',['eleve'=>$eleve->id])}}"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
                                                <a class="dropdown-item"
                                                   href="{{route('eleves.show',['eleve'=>$eleve->id])}}"><i
                                                        class="fas fa-eye text-dark-pastel-blue"></i>Details</a>
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

