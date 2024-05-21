@extends('layouts.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Enseignant</h3>
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
                    <a href="{{route('enseignants.create')}}"
                       class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        <i class="fas fa-plus-circle"></i>
                        Ajouter un enseignant
                    </a>
                    <div class="item-title">
                        <h3>Renseignements relatifs aux enseignants</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Fermer</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-cogs text-dark-pastel-green"></i>Editer</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Actualiser</a>
                        </div>
                    </div>
                </div>
                <form class="mg-b-20" method="get">
                    <div class="row gutters-8">
                        <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input name="id" type="text" placeholder="Recherche par ID ..." class="form-control">
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
                        <table class="table display data-table text-nowrap dataTable no-footer"
                               id="DataTables_Table_0" role="grid">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" rowspan="1" colspan="1" aria-label="IDENTIFIANT"
                                    style="width: 85.7969px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">ID</label>
                                    </div>
                                </th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Genre</th>
                                <th>Date de Naissance</th>
                                <th>Spécialité</th>
                                <th>Contact</th>
                                <th>E-mail</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enseignants as $enseignant)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$enseignant->id}}</label>
                                        </div>
                                    </td>
                                    <td>{{$enseignant->prenom}}</td>
                                    <td>{{$enseignant->nom}}</td>
                                    <td>{{$enseignant->sexe}}</td>
                                    <td>{{date('d-m-Y',strtotime($enseignant->date_naissance))}}</td>
                                    <td>{{$enseignant->matiere->nom_matiere??'-'}}</td>
                                    <td>{{$enseignant->telephone}}</td>
                                    <td>{{$enseignant->email}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item"
                                                   href="{{route('enseignants.show',['enseignant'=>$enseignant->id])}}"><i
                                                        class="fas fa-eye text-dark-pastel-green"></i>Details</a>

                                                <a class="dropdown-item"
                                                   href="{{route('enseignants.edit',['enseignant'=>$enseignant->id])}}"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>

                                                <a class="dropdown-item"
                                                   onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')"
                                                   href="{{route('enseignants.delete',['id'=>$enseignant->id])}}"><i
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
            </div>
        </div>
        <!-- All Notice Area End Here -->
    </div>
</div>
@stop
