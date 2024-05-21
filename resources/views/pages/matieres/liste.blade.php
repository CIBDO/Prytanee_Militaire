@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Matière</h3>
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
                        <a href="{{route('matieres.create')}}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter une matière
                        </a>

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
                            @foreach($matieres as $matiere)
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
            </div>
        </div>
        <!-- All Notice Area End Here -->
    </div>
@stop
