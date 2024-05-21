@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Paiements - Enseignant</h3>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li></li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="row">
        <!-- Add Notice Area End Here -->
        <!-- All Notice Area Start Here -->
        <div class="col-12">
            <div class="card height-auto">
                <div class="card-body">

                    <h3 style=" position: relative !important;left: -15px !important;">Formulaire de
                        paiement</h3>

                    <div class="row">
                        <form class="new-added-form" enctype="multipart/form-data"
                              method="POST"
                              action="{{route('paiement-enseignant.store')}}"
                              style="width: 100%;"
                        >
                            @csrf

                            <div class="row">
                                <div class="col-3 form-group">
                                    <label>Enseignant *</label>
                                    <select
                                        name="id_enseignant"
                                        class="select2"
                                        required>
                                        <option value="">Veuillez sélectionner la matière *</option>
                                        @foreach($enseignants as $enseignant)
                                            <option value="{{$enseignant->id}}">
                                                {{$enseignant->prenom}} {{$enseignant->nom}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3 form-group">
                                    <label>Motif *</label>
                                    <input
                                        name="motif" type="text"
                                        class="form-control">
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

            <div class="card height-auto">
                <div class="card-body">
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
                                <th>Date</th>
                                <th>Enseignant</th>
                                <th>Motif de paiement</th>
                                <th>Montant</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paiements??[] as $paiement)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$paiement->id}}</label>
                                        </div>
                                    </td>
                                    <td>{{\App\helpers\Helpers::formatDate($paiement->date_paiement)}}</td>
                                    <td>
                                        @php
                                            $enseignant = \App\Models\Enseignant::find($paiement->id_enseignant);
                                            $paiement->enseignant = $enseignant->prenom.' '.$enseignant->nom;
                                        @endphp
                                        {{$paiement->enseignant}}
                                    </td>
                                    <td>{{$paiement->motif}}</td>
                                    <td>{{\App\helpers\Helpers::formatMontant($paiement->montant)}} F CFA</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                   onclick=" return confirm('Voulez-vous vraiment supprimer ' +
                                                    'cette ligne ?')"
                                                   href="{{route('paiement-enseignant.delete',['id'=>$paiement->id])}}">
                                                    <i
                                                        class="fas fa-times text-orange-red"></i>Supprimer
                                                </a>
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

            <!-- All Notice Area End Here -->
        </div>
    </div>
@stop
