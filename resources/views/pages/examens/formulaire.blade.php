@extends('layouts.master')
@section('content')
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Programmation d'examen</h3>
                <ul>
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                    <li>Programmer un examen</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Add Class Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter un nouvel examen</h3>
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
                    <form class="new-added-form" method="POST" action="{{isset($examen)? route('examens.update', ['examen'=> $examen->id]):route('examens.store')}}" >
                        @csrf
                        @if(isset($examen))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date</label>
                                <input
                                    name="date"
                                    type="date"
                                    placeholder="Entrez la note"
                                    class="form-control"
                                    required
                                    value="{{$examen->date ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Titre</label>
                                <input
                                    name="title"
                                    type="text"
                                    placeholder="Entrez l'intitulé"
                                    class="form-control"
                                    required
                                    value="{{$examen->title ?? ""}}"
                                >
                            </div>

                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Type </label>
                                <select class="select2" name="type">
                                    <option value="">sélectionner le type</option>
                                    @foreach(['controle', 'partiel', 'final'] as $type_examen)
                                        <option value="{{$type_examen}}"
                                                @if(isset($examen)&& $examen->type === $type_examen)
                                                    selected
                                                @endif>
                                            {{ucfirst($type_examen)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Classe </label>
                                <select class="select2" name="id_classe">
                                    <option value="">sélectionner une classe</option>
                                    @foreach($classes as $classe)
                                        <option value="{{$classe->id}}"
                                                @if(isset($examen)&& $examen->id_classe === $classe->id)
                                                    selected
                                                @endif>
                                            {{$classe->nom_classe}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Période </label>
                                <select class="select2" name="id_periode">
                                    <option value="">sélectionner une période </option>
                                    @foreach($periodes as $periode)
                                        <option value="{{$periode->id}}"
                                                @if(isset($examen)&& $examen->id_periode === $periode->id)
                                                    selected
                                                @endif>
                                            {{$periode->nom}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 form-group"></div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Enregistrer</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@stop
