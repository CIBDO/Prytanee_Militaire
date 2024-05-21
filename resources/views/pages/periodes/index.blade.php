@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Période</h3>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>Liste</li>
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
                            <h3>Ajouter une période</h3>
                        </div>
                    </div>
                    <form class="new-added-form" method="POST" action="{{isset($periode)? route('periodes.update', $periode->id):route('periodes.store')}}">
                        @csrf
                        @if(isset($periode))
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
                                    value="{{$periode->nom ?? ""}}"
                                >
                            </div>
                            <div class="col-12 form-group">
                                <label>Date de debut *</label>
                                <input
                                    value="{{isset($periode) ? date('d/m/Y', strtotime($periode->date_debut)) : ""}}"
                                    name="date_debut" type="text" placeholder="dd/mm/yyyy"
                                    class="form-control air-datepicker"
                                    data-position='bottom right'>
                                <i class="far fa-calendar-alt"></i>
                            </div>
                            <div class="col-12 form-group">
                                <label>Date de Fin *</label>
                                <input
                                    value="{{isset($periode) ? date('d/m/Y', strtotime($periode->date_fin)) : ""}}"
                                    name="date_fin" type="text" placeholder="dd/mm/yyyy"
                                    class="form-control air-datepicker"
                                    data-position='bottom right'>
                                <i class="far fa-calendar-alt"></i>
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
                        <a href="{{route('periodes.create')}}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter une periode
                        </a>

                        <div class="item-title">
                            <h3>Liste des periodes </h3>
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
                                <th>Nom</th>
                                <th>Début</th>
                                <th>Fin</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($periodes as $periode)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$periode->id}}</label>
                                        </div>
                                    </td>
                                    <td>{{$periode->nom}}</td>
                                    <td>{{date('d/m/Y',strtotime($periode->date_debut))}}</td>
                                    <td>{{date('d/m/Y',strtotime($periode->date_fin))}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item"
                                                   onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')"
                                                   href="{{route('periodes.delete',['id'=>$periode->id])}}">
                                                    <i class="fas fa-times text-orange-red"></i>
                                                    Supprimer
                                                </a>
                                                <a class="dropdown-item" href="{{route('periodes.edit',['periode'=>$periode->id])}}">
                                                    <i class="fas fa-cogs text-dark-pastel-green"></i>
                                                    Modifier
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
        <!-- All Notice Area End Here -->
    </div>
@stop
