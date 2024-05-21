@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3></h3>
        <ul>
            <li>
                <a href="{{route('dashboard.admin')}}">Accueil</a>
            </li>
            <li>Classe {{$classe->nom_classe}}</li>
            @php
                $eleves = $classe->elevesInscris()->get();
            @endphp
            <li>Détails</li>
        </ul>
    </div>

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
            </div>
            <div class="single-info-details">
                <div class="item-content">
                    <div class="header-inline item-header">
{{--                        <h3 class="text-dark-medium font-medium">--}}
{{--                            <img src="{{asset('uploads_photos/'.$eleve->photo)}}" alt="" width="200" height="300">--}}
{{--                            <br>--}}
{{--                            <div class="text-center">--}}
{{--                                {{$eleve->prenom}} {{$eleve->nom}}--}}
{{--                            </div>--}}
{{--                        </h3>--}}
                        <div class="header-elements">
                            <ul>
                                <li><a href="#"><i class="far fa-edit"></i></a></li>
                                <li><a href="#"><i class="fas fa-print"></i></a></li>
                                <li><a href="#"><i class="fas fa-download"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                            <tr>
                                <td>Nombre d'élèves :</td>
                                <td class="font-medium text-dark-medium">
                                    {{ $eleves->count() }}
                                </td>
                            </tr>
                            <tr>
                                <td>Niveau:</td>
                                <td class="font-medium text-dark-medium">{{$classe->niveau}}</td>
                            </tr>
{{--                            <tr>--}}
{{--                                <td>Classe:</td>--}}
{{--                                <td class="font-medium text-dark-medium">{{$eleve->classe->nom??""}}</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Groupe Sanguin:</td>--}}
{{--                                <td class="font-medium text-dark-medium">{{$eleve->group_sanguin}}</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Téléphone :</td>--}}
{{--                                <td class="font-medium text-dark-medium">{{$eleve->telephone}}</td>--}}
{{--                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="card ui-tab-card">
        <div class="card-body">
            <div class="heading-layout1 mg-b-25">
                <div class="item-title">
                    <h3>Details</h3>
                </div>
            </div>
                <div class="border-nav-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#matieres" role="tab" aria-selected="true">Matières</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#eleves" role="tab" aria-selected="false">Élèves</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#bulletin" role="tab"
                           aria-selected="false">Bulletin</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="matieres" role="tabpanel">
                        <div class="card height-auto">
                            <div class="card-body">
                                <h3 style=" position: relative !important;left: -15px !important;">Formulaire d'ajout de Matière</h3>

                                <div class="row">
                                    <form class="new-added-form" method="POST" action="{{isset($matiere)? route('matieres.update', ['matiere'=> $matiere->id]):route('save-classe-matiere')}}" >
                                        @csrf
                                        @if(isset($matiere))
                                            @method('PUT')
                                        @endif
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>Nom de la Matière</label>
                                                <input
                                                    name="nom_matiere"
                                                    type="varchar"
                                                    placeholder="Entrez le nom de la matière"
                                                    class="form-control"
                                                    required
                                                    value="{{$matiere->nom_matiere ?? ""}}"
                                                >
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>Coéfficient</label>
                                                <input
                                                    name="coef"
                                                    type="number"
                                                    placeholder="Entrez le Coéfficient"
                                                    class="form-control"
                                                    required
                                                    value="{{$matiere->coef ?? ""}}"
                                                >
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>Classe : {{$classe->nom_classe}} </label>
                                                <input name="classe_id" type="hidden" readonly value="{{$classe->id}}">
                                            </div>

                                            <div class="col-md-6 form-group"></div>
                                            <div class="col-12 form-group mg-t-8">
                                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Enregistrer</button>
                                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>

                            </div>
                        </div>

                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Liste des matières </h3>
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
                                    <th>Dénomination</th>
                                    <th>Coéfficient</th>
                                    <th>Classe</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($classe->matieres as $matiere)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#{{$matiere->id}}</label>
                                            </div>
                                        </td>
                                        <td>{{$matiere->nom_matiere}}</td>
                                        <td>{{$matiere->coef}}</td>
                                        <td>{{$matiere->classe->nom_classe??''}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">

                                                    <a class="dropdown-item" onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')" href="{{route('matieres.delete',['id'=>$matiere->id])}}"><i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                    <a class="dropdown-item" href="{{route('matieres.edit',['matiere'=>$matiere->id])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="eleves" role="tabpanel">
                        <div class="card height-auto">
                            <div class="card-body">
                                <h3 style=" position: relative !important;left: -15px !important;"> </h3>

                                <div class="row">
                                    <div class="table-responsive">
                                        <table id="example" style="width:100%" class="display">
                                            <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input checkAll">
                                                        <label class="form-check-label">Matricule</label>
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
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($eleves??[] as $eleve)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">{{$eleve->numero_matricule}}</label>
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

                    </div>
                    <div class="tab-pane fade" id="bulletin" role="tabpanel">
                        <form
                            action="{{route('save-eleve-notes')}}"
                            class="new-added-form"
                            enctype="multipart/form-data"
                            method="post"
                            style="width: 100%">
                            @csrf

                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3> Enregistrement des notes</h3>
                            </div>
                        </div>
                        <div class="card height-auto">
                            <div class="card-body">
                                <h3 style=" position: relative !important;left: -15px !important;"> </h3>

                                <div class="row">
                                    <input type="hidden" name="classe_id", value="{{$classe->id}}">

                                        <div class="col-md-3 form-group">
                                            <label>Trimestre *</label>
                                            <select
                                                name="trimestre"
                                                class="select2"
                                                required
                                            >
                                                <option value="">Veuillez sélectionner le trimestre *</option>
                                                @foreach(["1e Trimestre","2e Trimestre", "3e Trimestre"] as $trimestre)
                                                    <option value="{{$trimestre}}">
                                                        {{$trimestre}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>Élève *</label>
                                            <select
                                                name="eleve"
                                                class="select2"
                                                required
                                            >
                                                <option value="">Veuillez sélectionner le trimestre *</option>
                                                @foreach($eleves as $eleve)
                                                    <option value="{{$eleve->id}}">
                                                        {{$eleve->nom}} {{$eleve->prenom}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>Période *</label>
                                            <select
                                                name="periode"
                                                class="select2"
                                                required
                                            >
                                                <option value="">Veuillez sélectionner une periode *</option>
                                                @foreach(\App\Models\Periode::all() as $periode)
                                                    <option value="{{$periode->id}}">
                                                        {{$periode->nom}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                <tr>
                                    <th>Matières</th>
                                    <th>Coéfficient</th>
                                    <th>Notes de classe</th>
                                    <th>Notes d'Examen</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($classe->matieres as $matiere)
                                    <tr>
                                        <td>{{$matiere->nom_matiere}}</td>
                                        <td>{{$matiere->coef}}</td>
                                        <td>
                                            <input type="number" max="20" name="note_classe[{{$matiere->id}}]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="number" max="20" name="note_examen[{{$matiere->id}}]" class="form-control">
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                            <button type="submit"
                                    class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                Enregistrer
                            </button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">
                                Annuler
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
