@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Profils Utilisateurs</h3>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>Pays</li>
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
                            <h3>Ajouter un pays</h3>
                        </div>
                    </div>
                    <form class="new-added-form" method="POST" action="{{isset($p)? route('pays.update',['pay'=> $p->id]):route('pays.store')}}">
                        @csrf
                        @if(isset($p))
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
                                    name="name"
                                    value="{{$p->name ?? ""}}"
                                    required
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
        </div>
        <!-- Add Notice Area End Here -->
        <!-- All Notice Area Start Here -->
        <div class="col-8-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <a href="{{route('pays.create')}}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-plus-circle"></i>
                            Ajouter un pays
                        </a>

                        <div class="item-title">
                            <h3>Liste des pays </h3>
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
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pays as $p)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$p->id}}</label>
                                        </div>
                                    </td>
                                    <td>{{$p->name}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <form action="{{ route('pays.destroy', ['pay' => $p->id]) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce pays ?');" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fas fa-times text-orange-red"></i> Supprimer
                                                    </button>
                                                </form>
                                                <a class="dropdown-item" href="{{route('pays.edit',['pay'=>$p])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
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
