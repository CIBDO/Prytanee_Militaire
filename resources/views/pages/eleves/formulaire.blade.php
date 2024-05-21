@extends('layouts.master')
@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Élèves</h3>
            <ul>
                <li>
                    <a href="/">Accueil</a>
                </li>
                <li>Élève formulaire</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Ajouter un Élèves</h3>
                    </div>
                </div>
                <form class="new-added-form" enctype="multipart/form-data"
                      method="POST"
                      action="{{isset($eleve)? route('eleves.update', ['eleve'=> $eleve->id]):route('eleves.store')}}"
                >
                    @csrf
                    @if(isset($eleve))
                        @method('PUT')
                    @endif
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Prenom *</label>
                            <input
                                value=id
                                name="prenom" type="text" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Nom *</label>
                            <input
                                value="{{$eleve->nom ?? ""}}"
                                name="nom" type="text" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Genre *</label>
                            <select name="genre" class="select2">
                                <option value="">Veuillez sélectionner un genre *</option>
                                @foreach(['Garçon', 'Fille'] as $genre)
                                    <option value="{{$genre}}"
                                            {{isset($eleve) && $eleve->genre == $genre ? "selected":""}}
                                    >{{$genre}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Date de naissance *</label>
                            <input
                                value="{{isset($eleve) ? date('d/m/Y', strtotime($eleve->date_naissance)) : ""}}"
                                name="date_naissance" type="text" placeholder="dd/mm/yyyy"
                                   class="form-control air-datepicker"
                                   data-position='bottom right'>
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Groupe sanguin </label>
                            <select name="groupe_sanguin" class="select2">
                                <option value="">Veuillez sélectionner un Groupe</option>
                                @foreach(['A+', 'A-', 'B+', 'B-', 'O+', 'O-'] as $groupe)
                                    <option value="{{$groupe}}"
                                            {{isset($eleve) && $eleve->group_sanguin == $groupe ? "selected":""}}
                                    >{{$groupe}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Religion *</label>
                            <select name="religion" class="select2">
                                <option value="">Veuillez sélectionner une Religion *</option>
{{--                                fait une boucle @foreach--}}
                                @foreach(['Islam', 'Chrétien', 'Hindou', 'Bouddhiste', 'Autres'] as $religion)
                                    <option value="{{$religion}}"
                                            @if(isset($eleve)&& $eleve->religion === $religion)
                                                selected
                                            @endif
                                    >
                                        {{$religion}}
                                    </option>

                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>E-Mail</label>
                            <input
                                value="{{$eleve->email ?? ""}}"
                                name="email"
                                type="email"
                                placeholder=""
                                class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Classe *</label>
                            <select name="classe" class="select2">
                                <option value="">Veuillez sélectionner une classe *</option>
                                @foreach($classes as $classe)
                                    <option value="{{$classe->id}}"
                                            @if(isset($eleve)&& $eleve->id_classe === $classe->id)
                                                selected
                                        @endif
                                    >
                                        {{$classe->nom_classe}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Parent </label>
                            <select name="parent" class="select2">
                                <option value="">Veuillez sélectionner le parent </option>
                                @foreach($parents as $parent)
                                    <option value="{{$parent->id}}"
                                            @if(isset($eleve)&& $eleve->id_parent === $parent->id)
                                                selected
                                              @endif>
                                        {{$parent->prenom}} {{$parent->nom}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Téléphone</label>
                            <input
                                value="{{$eleve->telephone ?? ""}}"
                                name="telephone"
                                type="text"
                                placeholder=""
                                class="form-control"
                            >
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label>Biographie</label>
                            <textarea

                                class="textarea form-control" name="biographie" id="form-message" cols="10"
                                      rows="9">
                                {{$eleve->biographie ?? ""}}
                            </textarea>
                        </div>
                        <div class="col-lg-6 col-12 form-group mg-t-30">
                            @if(isset($eleve))
                                <img src="{{asset('uploads_photos/'.$eleve->photo)}}" alt="" width="200" height="300">
                                <input type="hidden" name="old_photo" value="{{$eleve->photo}}"

                            @endif
                            <label class="text-dark-medium">Joindre la photo de l'élève</label>
                            <input name="photo" type="file" class="form-control-file" accept="image/png, image/jpeg">
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Enregistrer</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Admit Form Area End Here -->
    </div>

@stop
