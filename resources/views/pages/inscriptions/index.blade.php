@extends('layouts.master')
@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Élèves</h3>
            <ul>
                <li>
                    <a href="/">Accueil</a>
                </li>
                <li>Inscription</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <h3 style=" position: relative !important;left: -15px !important;">Formulaire d'inscription</h3>

                <div class="row">
                    <form class="new-added-form" enctype="multipart/form-data"
                          method="POST"
                          action="{{route('inscriptions.store')}}"
                          style="width: 100%;"
                    >
                        @csrf

                        <div class="row">
                            <div class="col-3 form-group">
                                <label>Eleves *</label>
                                <select name="eleve" class="select2">
                                    <option value="">Veuillez sélectionner un élève *</option>
                                    @foreach($eleves as $eleve)
                                        <option value="{{$eleve->id}}" >
                                            {{$eleve->prenom}} {{$eleve->nom}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Classes *</label>
                                <select name="classe" class="select2">
                                    <option value="">Veuillez sélectionner une classes *</option>
                                    @foreach($classes as $classe)
                                        <option value="{{$classe->id}}" >
                                            {{$classe->nom_classe}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Période *</label>
                                <select name="periode" class="select2">
                                    <option value="">Veuillez sélectionner une période *</option>
                                    @foreach($periodes as $periode)
                                        <option value="{{$periode->id}}" >
                                            {{$periode->nom}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Date d'inscription *</label>
                                <input
                                    name="date_inscription" type="text" placeholder="dd/mm/yyyy"
                                    class="form-control air-datepicker"
                                    data-position='bottom right'>
                                <i class="far fa-calendar-alt"></i>
                            </div>
                            <div class="col-3 form-group">
                                <label>Frais d'inscription *</label>
                                <input
                                    name="frais" type="number" placeholder="" class="form-control">
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
        <div class="card height-auto">
            <div class="card-body">

                <div class="row">
                    <div class="table-responsive">
                        <hr>
                        <h3>Liste des élèves inscrits</h3>
                        <table  id="example" style="width:100%" class="display">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">ID</label>
                                    </div>
                                </th>
                                <th>Date</th>
                                <th>Periode</th>
                                <th>Eleve</th>
                                <th>Classe</th>
                                <th>Frais</th>
                                <th>Etat</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($inscriptions??[] as $inscription)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$inscription->id}}</label>
                                        </div>
                                    </td>
                                    <td>{{date('d/m/Y',strtotime($inscription->date_inscription))}}</td>
                                    <td>{{$inscription->periode->nom}}</td>
                                    <td>{{$inscription->eleve->prenom}} {{$inscription->eleve->nom}}</td>
                                    <td>{{$inscription->classe->nom_classe}}</td>
                                    <td>{{\App\helpers\Helpers::formatMontant($inscription->frais_inscription)}} F CFA</td>
                                    <td>
                                        @if($inscription->etat == 1)
                                            <span class="badge badge-success">Actif</span>
                                        @else
                                            <span class="badge badge-danger">Inactif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="dropdown-item"
                                               onclick=" return confirm('Voulez-vous vraiment annuler cette ligne ?')"
                                               href="{{route('inscriptions.delete',['id'=>$inscription->id])}}">
                                                <i class="fas fa-times text-orange-red"></i>
                                                Annuler
                                            </a>
{{--                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">--}}
{{--                                                <span class="flaticon-more-button-of-three-dots"></span>--}}
{{--                                            </a>--}}
                                            <div class="dropdown-menu dropdown-menu-right">


{{--                                                <a class="dropdown-item" href="{{route('periodes.edit',['periode'=>$inscription->id])}}">--}}
{{--                                                    <i class="fas fa-cogs text-dark-pastel-green"></i>--}}
{{--                                                    Modifier--}}
{{--                                                </a>--}}
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
        <!-- Admit Form Area End Here -->
    </div>

@endsection
