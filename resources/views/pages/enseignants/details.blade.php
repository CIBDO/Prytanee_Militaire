@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3></h3>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>Enseignant</li>
            <li>Détails</li>
        </ul>
    </div>

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
{{--                <div class="item-title">--}}
{{--                    <h3>{{$enseignant->prenom}} {{$enseignant->nom}}</h3>--}}
{{--                </div>--}}
{{--                <div class="dropdown">--}}
{{--                    <a class="dropdown-toggle" href="#" role="button"--}}
{{--                       data-toggle="dropdown" aria-expanded="false">...</a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right">--}}
{{--                        <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>--}}
{{--                        <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>--}}
{{--                        <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="single-info-details">
{{--                <div class="item-img">--}}
{{--                    <img src="img/figure/teacher.jpg" alt="teacher">--}}
{{--                </div>--}}
                <div class="item-content">
                    <div class="header-inline item-header">
                        <h3 class="text-dark-medium font-medium">{{$enseignant->prenom}} {{$enseignant->nom}}</h3>
                        <div class="header-elements">
                            <ul>
                                <li><a href="#"><i class="far fa-edit"></i></a></li>
                                <li><a href="#"><i class="fas fa-print"></i></a></li>
                                <li><a href="#"><i class="fas fa-download"></i></a></li>
                            </ul>
                        </div>
                    </div>
{{--                    <p>Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale--}}
{{--                        word moun taiery.Aliquam erat volutpaturabiene natis massa sedde  sodale--}}
{{--                        word moun taiery.</p>--}}
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                            <tr>
                                <td>Genre:</td>
                                <td class="font-medium text-dark-medium">{{$enseignant->sexe}}</td>
                            </tr>
                            <tr>
                                <td>Contact:</td>
                                <td class="font-medium text-dark-medium">{{sprintf("%s-%s-%s-%s", substr($enseignant->telephone, 0, 2), substr($enseignant->telephone, 2, 2), substr($enseignant->telephone, 4, 2), substr($enseignant->telephone, 6, 2))}}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td class="font-medium text-dark-medium">{{$enseignant->email}}</td>
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
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    </div>
                </div>
            </div>
            <div class="border-nav-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#matieres" role="tab" aria-selected="true">Matières</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#classes" role="tab" aria-selected="false">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#cv" role="tab" aria-selected="false">CV</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="matieres" role="tabpanel">
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
                                    <th>Dénomination</th>
                                    <th>Coéfficient</th>
                                    <th>Appréciation</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($enseignant->matieres as $matiere)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#{{$matiere->id}}</label>
                                            </div>
                                        </td>
                                        <td>{{$matiere->nom_matiere}}</td>
                                        <td>{{$matiere->coef}}</td>
                                        <td>{{$matiere->appreciation}}</td>
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
                    <div class="tab-pane fade" id="classes" role="tabpanel">
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
                                    <th>Nombre Eleves</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($enseignant->classes as $classe)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#{{$classe->id}}</label>
                                            </div>
                                        </td>
                                        <td>{{$classe->nom_classe}}</td>
                                        <td>{{count($classe->eleves??[])}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">

                                                    <a class="dropdown-item" onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')" href="{{route('classes.delete',['id'=>$classe->id])}}"><i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                    <a class="dropdown-item" href="{{route('classes.edit',['class'=>$classe->id])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cv" role="tabpanel">
                        <embed src="{{asset('uploads_cv/'.$enseignant->cv)}}" type="application/pdf" width="100%" height="600">
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
