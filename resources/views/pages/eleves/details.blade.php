@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3></h3>
        <ul>
            <li>
                <a href="{{route('dashboard.admin')}}">Accueil</a>
            </li>
            <li>Élèves</li>
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
                        <h3 class="text-dark-medium font-medium">
                            <img src="{{asset('uploads_photos/'.$eleve->photo)}}" alt="" width="200" height="300">
                            <br>
                            <div class="text-center">
                                {{$eleve->prenom}} {{$eleve->nom}}
                            </div>
                        </h3>
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
                                <td>Date et lieu de naissance :</td>
                                <td class="font-medium text-dark-medium">
                                    {{\App\helpers\Helpers::formatDate($eleve->date_naissance)}}
                                    a {{$eleve->lieu_naissance??'N/A'}}
                                </td>
                            </tr>
                            <tr>
                                <td>Genre:</td>
                                <td class="font-medium text-dark-medium">{{$eleve->genre}}</td>
                            </tr>
                            <tr>
                                <td>Classe:</td>
                                <td class="font-medium text-dark-medium">{{$eleve->classe->nom??""}}</td>
                            </tr>
                            <tr>
                                <td>Groupe Sanguin:</td>
                                <td class="font-medium text-dark-medium">{{$eleve->group_sanguin}}</td>
                            </tr>
                            <tr>
                                <td>Téléphone :</td>
                                <td class="font-medium text-dark-medium">{{$eleve->telephone}}</td>
                            </tr>
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
            @if($eleve->inscription())
                <div class="border-nav-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#matieres" role="tab" aria-selected="true">Paiements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#classes" role="tab" aria-selected="false">Notes</a>
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
                                <h3 style=" position: relative !important;left: -15px !important;">Formulaire de
                                    paiement</h3>

                                <div class="row">
                                    <form class="new-added-form" enctype="multipart/form-data"
                                          method="POST"
                                          action="{{route('paiements-eleves.store')}}"
                                          style="width: 100%;"
                                    >
                                        <input type="hidden" name="id_eleve" value="{{$eleve->id}}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-3 form-group">
                                                <label>Période *</label>
                                                <select name="id_inscription" class="select2">
                                                    <option value="">Veuillez sélectionner une période *</option>
                                                    @foreach($eleve->inscriptions as $inscription)
                                                        <option value="{{$inscription->id}}">
                                                            {{$inscription->periode->nom}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3 form-group">
                                                <label>Mois *</label>
                                                <select name="mois" class="select2">
                                                    <option value="">Veuillez sélectionner le mois *</option>
                                                    @foreach($mois as $m)
                                                        <option value="{{$m}}">
                                                            {{$m}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3 form-group">
                                                <label>Date de paiement *</label>
                                                <input
                                                    name="date_paiement" type="text" placeholder="dd/mm/yyyy"
                                                    class="form-control air-datepicker"
                                                    data-position='bottom right'>
                                                <i class="far fa-calendar-alt"></i>
                                            </div>
                                            <div class="col-3 form-group">
                                                <label>Montant *</label>
                                                <input
                                                    name="montant" type="number" placeholder="" class="form-control">
                                            </div>
                                            <div class="col-3 form-group">
                                                <label>Type de paiement *</label>
                                                <select name="type_paiement" class="select2">
                                                    <option value="">Veuillez sélectionner le type de paiement *
                                                    </option>
                                                    @foreach($types as $type)
                                                        <option value="{{$type}}">
                                                            {{$type}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-12 form-group mg-t-8">
                                                <button type="submit"
                                                        class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                                    Enregistrer
                                                </button>
                                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">
                                                    Annuler
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="example3" style="width:100%" class="display">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll">
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Date</th>
                                    <th>Type de paiement</th>
                                    <th>Mois</th>
                                    <th>Période</th>
                                    <th>Montant</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($eleve->paiements??[] as $paiement)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#{{$paiement->id}}</label>
                                            </div>
                                        </td>
                                        <td>{{\App\helpers\Helpers::formatDate($paiement->date_paiement)}}</td>
                                        <td>{{$paiement->type_paiement}}</td>
                                        <td>{{$paiement->mois}}</td>
                                        <td>{{$paiement->inscription->periode->nom}}</td>
                                        <td>{{\App\helpers\Helpers::formatMontant($paiement->montant)}} F CFA</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                   aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">

                                                    <a class="dropdown-item"
                                                       onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')"
                                                       href="{{route('paiements-eleves.delete',['id'=>$paiement->id])}}"><i
                                                            class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="classes" role="tabpanel">
                        <div class="card height-auto">
                            <div class="card-body">
                                <h3 style=" position: relative !important;left: -15px !important;">Formulaire de
                                    notes</h3>

                                <div class="row">
                                    <form class="new-added-form" enctype="multipart/form-data"
                                          method="POST"
                                          action="{{route('notes.store')}}"
                                          style="width: 100%;"
                                    >
                                        <input type="hidden" name="id_eleve" value="{{$eleve->id}}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-3 form-group">
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
                                            <div class="col-3 form-group">
                                                <label>Matière *</label>
                                                <select
                                                    name="matiere"
                                                    class="select2"
                                                    required>
                                                    <option value="">Veuillez sélectionner la matière *</option>
                                                    @foreach($matieres as $m)
                                                        <option value="{{$m->id}}">
                                                            {{$m->nom_matiere}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3 form-group">
                                                <label>Note *</label>
                                                <input
                                                    name="note"
                                                    type="text"
                                                    class="form-control"
                                                    required
                                                >
                                            </div>
                                            <div class="col-3 form-group">
                                                <label>Type *</label>
                                                <select name="type" class="select2" required>
                                                    <option value="">Veuillez sélectionner le type de note *</option>
                                                    @foreach(["Devoir", "Examen"] as $type)
                                                        <option value="{{$type}}">
                                                            {{$type}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-12 form-group mg-t-8">
                                                <button type="submit"
                                                        class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                                    Enregistrer
                                                </button>
                                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">
                                                    Annuler
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                                    <th>Période</th>
                                    <th>Trimestre</th>
                                    <th>Type</th>
                                    <th>Matiere</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notes??[] as $note)
                                    {{--                                    <tr>--}}
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$note->id}}</label>
                                        </div>
                                    </td>
                                    <td>{{$note->periode->nom}}</td>
                                    <td>{{$note->trimestre}}</td>
                                    <td>{{$note->type}}</td>
                                    <td>{{$note->matiere->nom_matiere}}</td>
                                    <td>{{$note->note}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item"
                                                   onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')"
                                                   href="{{route('notes.delete',['id'=>$note->id])}}">
                                                    <i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                {{--                                                    <a class="dropdown-item" href="{{route('notes.edit',['note'=>$note->id])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>--}}
                                            </div>
                                        </div>
                                    </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bulletin" role="tabpanel">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Les bulletins</h3>
                            </div>
                        </div>
                        <div class="vertical-tab">
                            <ul class="nav nav-tabs flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#t1" role="tab"
                                       aria-selected="true"> 1e Trimestre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#t2" role="tab" aria-selected="false">2e
                                        Trimestre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#t3" role="tab" aria-selected="false">3e
                                        Trimestre</a>
                                </li>
                            </ul>
                            <div class="tab-content" style="width: 100%;">
                                <div class="tab-pane fade show active" id="t1" role="tabpanel">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Matiere</th>
                                            <th>Coefficient</th>
                                            <th>Devoir</th>
                                            <th>Examen</th>
                                            <th>La note coefficientée</th>
                                            <th>Moyenne</th>
                                            <th>Appréciation</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $total_notecoefficient = 0;
                                             $coef_total = 0;
                                        @endphp
                                        @foreach($eleve->classe->matieres??[] as $matiere)
                                            @php
                                                $etudiantNotes = $matiere->etudiantNotes($eleve->id,$eleve_periode?->id,'1e Trimestre');
                                                $total_notecoefficient += $etudiantNotes['notecoefficient'];
                                                $coef_total += $matiere->coef+1;
                                            @endphp
                                            <tr>
                                                <td>{{$matiere->nom_matiere}}</td>
                                                <td>{{$matiere->coef}}</td>
                                                <td>{{$etudiantNotes['moyenneDevoirs']}}</td>
                                                <td>{{$etudiantNotes['moyenneCompositions']}}</td>
                                                <td>{{$etudiantNotes['notecoefficient']}}</td>
                                                <td>{{$etudiantNotes['moyenne']}}</td>
                                                <td>{{$etudiantNotes['appreciation']}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tr>
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td>Total</td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}

                                                                                        <td colspan="4">Total</td>
                                                                                        <td>{{$total_notecoefficient}}</td>
                                                                                        <td>{{$total_notecoefficient/$coef_total}}</td>
                                                                                        <td></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="t2" role="tabpanel">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Matiere</th>
                                            <th>Coefficient</th>
                                            <th>Devoir</th>
                                            <th>Examen</th>
                                            <th>La note coefficientée</th>
                                            <th>Moyenne</th>
                                            <th>Appréciation</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $total_notecoefficient = 0;
                                             $coef_total = 0;
                                        @endphp
                                        @foreach($eleve->classe->matieres??[] as $matiere)
                                            @php
                                                $etudiantNotes = $matiere->etudiantNotes($eleve->id,$eleve_periode?->id,'2e Trimestre');
                                                $total_notecoefficient += $etudiantNotes['notecoefficient'];
                                                $coef_total += $matiere->coef+1;
                                            @endphp
                                            <tr>
                                                <td>{{$matiere->nom_matiere}}</td>
                                                <td>{{$matiere->coef}}</td>
                                                <td>{{$etudiantNotes['moyenneDevoirs']}}</td>
                                                <td>{{$etudiantNotes['moyenneCompositions']}}</td>
                                                <td>{{$etudiantNotes['notecoefficient']}}</td>
                                                <td>{{$etudiantNotes['moyenne']}}</td>
                                                <td>{{$etudiantNotes['appreciation']}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tr>
                                            {{--                                            <td></td>--}}
                                            {{--                                            <td></td>--}}
                                            {{--                                            <td></td>--}}
                                            {{--                                            <td>Total</td>--}}
                                            {{--                                            <td></td>--}}
                                            {{--                                            <td></td>--}}
                                            {{--                                            <td></td>--}}

                                            <td colspan="4">Total</td>
                                            <td>{{$total_notecoefficient}}</td>
                                            <td>{{$total_notecoefficient/$coef_total}}</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="t3" role="tabpanel">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Matiere</th>
                                            <th>Coefficient</th>
                                            <th>Devoir</th>
                                            <th>Examen</th>
                                            <th>La note coefficientée</th>
                                            <th>Moyenne</th>
                                            <th>Appréciation</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $total_notecoefficient = 0;
                                             $coef_total = 0;
                                        @endphp
                                        @foreach($eleve->classe->matieres??[] as $matiere)
                                            @php
                                                $etudiantNotes = $matiere->etudiantNotes($eleve->id,$eleve_periode?->id,'3e Trimestre');
                                                $total_notecoefficient += $etudiantNotes['notecoefficient'];
                                                $coef_total += $matiere->coef+1;
                                            @endphp
                                            <tr>
                                                <td>{{$matiere->nom_matiere}}</td>
                                                <td>{{$matiere->coef}}</td>
                                                <td>{{$etudiantNotes['moyenneDevoirs']}}</td>
                                                <td>{{$etudiantNotes['moyenneCompositions']}}</td>
                                                <td>{{$etudiantNotes['notecoefficient']}}</td>
                                                <td>{{$etudiantNotes['moyenne']}}</td>
                                                <td>{{$etudiantNotes['appreciation']}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tr>
                                            {{--                                            <td></td>--}}
                                            {{--                                            <td></td>--}}
                                            {{--                                            <td></td>--}}
                                            {{--                                            <td>Total</td>--}}
                                            {{--                                            <td></td>--}}
                                            {{--                                            <td></td>--}}
                                            {{--                                            <td></td>--}}

                                            <td colspan="4">Total</td>
                                            <td>{{$total_notecoefficient}}</td>
                                            <td>{{$total_notecoefficient/$coef_total}}</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{--                        <embed src="{{asset('uploads_bulletin/'.$enseignant->bulletin)}}" type="application/pdf" width="100%" height="600">--}}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

@stop
