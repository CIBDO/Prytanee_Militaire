@extends('layouts.master')
@section('content')
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Classes</h3>
                <ul>
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                    <li>Ajouter une classe</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Add Class Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter une nouvelle classe</h3>
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
                    <form class="new-added-form" method="POST" action="{{isset($classe)? route('classes.update', ['class'=> $classe->id]):route('classes.store')}}" >
                        @csrf
                        @if(isset($classe))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Nom de la classe</label>
                                <input
                                    name="nom"
                                    type="text"
                                    placeholder="Entrez le nom de la classe"
                                    class="form-control"
                                    required
                                    value="{{$classe->nom_classe ?? ""}}"
                                >
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Enregistrer</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
