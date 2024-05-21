@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Examens</h3>
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
                        <a href="{{route('examens.create')}}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Programmer un examen
                        </a>

                        <div class="item-title">
                            <h3>Liste des examens </h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Classe</th>
                                <th>Période</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($examens as $examen)
                                <tr>

                                    <td>{{$examen->date}}</td>
                                     <td>{{$examen->title}}</td>
                                     <td>{{$examen->type}}</td>
                                     <td>{{$examen->classe->nom_classe}}</td>
                                    <td>{{$examen->periode->nom}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')" href="{{route('notes.delete',['id'=>$examen->id])}}"><i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                <a class="dropdown-item" href="{{route('examens.edit',['examen'=>$examen->id])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
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
