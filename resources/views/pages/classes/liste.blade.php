@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Classe</h3>
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
                        <a href="{{route('classes.create')}}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter une classe
                        </a>

                        <div class="item-title">
                            <h3>Liste des classes </h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">Roll</label>
                                    </div>
                                </th>
                                <th>Nom</th>
                                <th>Eleves</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classes as $classe)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$classe->id}}</label>
                                        </div>
                                    </td>
                                    <td>{{$classe->nom_classe}}</td>
                                    <td>
                                        {{$classe->elevesInscris()->get()->count()}}
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')" href="{{route('classes.delete',['id'=>$classe->id])}}"><i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                <a class="dropdown-item" href="{{route('classes.edit',['class'=>$classe->id])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
                                                <a class="dropdown-item"
                                                   href="{{route('classes.show',['class'=>$classe->id])}}"><i
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
