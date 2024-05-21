@extends('layouts.master')
@section('content')
<link rel="stylesheet"  type="text/css" href="style.css">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Parent</h3>
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
        <div class="col-8-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <a href="{{route('parents.create')}}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter un parent
                        </a>
                        <div class="item-title">
                                <h3>Renseignements relatifs aux parents</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Fermer</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Editer</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Actualiser</a>
                                </div>
                            </div>
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Recherche par ID ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Recherche par Nom ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Recherche par contact ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">RECHERCHE</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                        <table class="table display data-table text-nowrap dataTable no-footer" id="DataTables_Table_0" role="grid">
                        <thead>
                        <tr role="row">
                        <th class="sorting_asc" rowspan="1" colspan="1" aria-label="IDENTIFIANT" style="width: 85.7969px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">Roll</label>
                                    </div>
                                </th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Genre</th>
                                <th>Fonction</th>
                                <th>Adresse</th>
                                <th>Contact</th>
                                <th>E-mail</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($parents as $parent)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$parent->id}}</label>
                                        </div>
                                    </td>
                                    <td>{{$parent->nom}}</td>
                                    <td>{{$parent->prenom}}</td>
                                    <td>{{$parent->sexe}}</td>
                                    <td>{{$parent->occupation}}</td>
                                    <td>{{$parent->adresse}}</td>
                                    <td>{{$parent->telephone}}</td>
                                    <td>{{$parent->email}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')" href="{{route('parents.delete',['id'=>$parent->id])}}"><i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                <a class="dropdown-item" href="{{route('parents.edit',['parent'=>$parent->id])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
                                            </div>
                                        </div>
                                    </td>
                                    </th>
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
