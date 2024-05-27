@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>depenses</h3>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>depenses</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="row">
        <!-- Add depense Area Start Here -->
        <div class="col-4-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter un depense</h3>
                        </div>
                    </div>
                    <form class="new-added-form" method="POST" action="{{ isset($depense)?route('depenses.update',$depense->id):route('depenses.store') }}">
                        @csrf
                        @if(isset($depense))
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
                                    value="{{isset($depense)? $depense->description:old('description')}}"
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
                                    value="{{ isset($depense)? (int)$depense->montant:old('montant') }}"
                                >
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label for="date">Date</label>
                                <input
                                    id="date"
                                    type="date"
                                    placeholder=""
                                    class="form-control"
                                    name="date_depense"
                                    value="{{ isset($depense)? $depense->date_depense:old('date_depense') }}"
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
        <!-- Add depense Area End Here -->
        <!-- All depenses Area Start Here -->
        <div class="col-8-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <a href="{{ route('depenses.create') }}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter un depense
                        </a>
                        <div class="item-title">
                            <h3>Liste des depenses</h3>
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
                            @foreach($depenses as $depense)
                                <tr>
                                    <td>{{ $depense->id }}</td>
                                    <td>{{ date('d-m-Y', strtotime($depense->date_depense)) }}</td>
                                    <td>{{ $depense->description }}</td>
                                    <td>{{ \App\helpers\Helpers::formatMontant($depense->montant) }} FCFA</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('depenses.edit', ['depense' => $depense->id]) }}">
                                                    <i class="fas fa-cogs text-dark-pastel-green"></i>
                                                    Modifier
                                                </a>
                                                <a class="dropdown-item" href="{{ route('depenses.delete', ['id' => $depense->id]) }}" onclick="return confirm('Voulez-vous supprimer cet element?')" >
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
        <!-- All depenses Area End Here -->
    </div>
@stop
