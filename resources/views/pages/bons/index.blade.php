@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Bons</h3>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>Bons</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="row">
        <!-- Add Bon Area Start Here -->
        <div class="col-4-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter un bon</h3>
                        </div>
                    </div>
                    <form class="new-added-form" method="POST" action="{{ isset($bon)?route('bons.update',$bon->id):route('bons.store') }}">
                        @csrf
                        @if(isset($bon))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label for="description">Description</label>
                                <input
                                    id="description"
                                    type="text"
                                    placeholder=""
                                    class="form-control"
                                    name="description"
                                    value="{{isset($bon)? $bon->description:old('description')}}"
                                >
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label for="montant">Montant</label>
                                <input
                                    id="montant"
                                    type="number"
                                    placeholder=""
                                    class="form-control"
                                    name="montant"
                                    value="{{ isset($bon)? (int)$bon->montant:old('montant') }}"
                                >
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label for="date">Date</label>
                                <input
                                    id="date"
                                    type="date"
                                    placeholder=""
                                    class="form-control"
                                    name="date_reception"
                                    value="{{ isset($bon)? $bon->date_reception:old('date_reception') }}"
                                >
                            </div>
                            <div class="col-12 form-group">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Enregistrer</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add Bon Area End Here -->
        <!-- All Bons Area Start Here -->
        <div class="col-8-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <a href="{{ route('bons.create') }}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter un bon
                        </a>
                        <div class="item-title">
                            <h3>Liste des bons</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Montant</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bons as $bon)
                                <tr>
                                    <td>{{ $bon->id }}</td>
                                    <td>{{ date('d-m-Y', strtotime($bon->date_reception)) }}</td>
                                    <td>{{ $bon->description }}</td>
                                    <td>{{ \App\helpers\Helpers::formatMontant($bon->montant) }} FCFA</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('bons.edit', ['bon' => $bon->id]) }}">
                                                    <i class="fas fa-cogs text-dark-pastel-green"></i>
                                                    Modifier
                                                </a>
                                                <a class="dropdown-item" href="{{ route('bons.delete', ['id' => $bon->id]) }}" onclick="return confirm('Voulez-vous supprimer cet element?')" >
                                                    <i class="fas fa-times text-orange-red"></i>
                                                    Supprimer
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
        </div>
        <!-- All Bons Area End Here -->
    </div>
@stop
