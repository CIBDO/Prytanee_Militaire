@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3> Nouveau message <i class="fas fa-pen"></i></h3>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>Ecrire un message</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Add Class Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">

            <form class="new-added-form" method="POST" action="{{route('messages.store')}}" >
                @csrf
                <div class="row">
                    <div class="col-12 form-group">
                        <select class="select2" name="destinataire" placeholder="Envoyer a...">
                            <option value="">Envoyer a..</option>
                            <optgroup label="Parents">
                                @foreach($destinataires['parents']??[] as $destinataire)
                                    <option value="{{$destinataire->id_utilisateur}}">
                                        {{$destinataire->infos->nomComplet}}
                                    </option>
                                @endforeach
                            </optgroup>
                            <optgroup label="Administrateurs">
                                @foreach($destinataires['administrateurs']??[] as $destinataire)
                                    <option value="{{$destinataire->id_utilisateur}}">
                                        {{$destinataire->infos->nomComplet}}
                                    </option>
                                @endforeach
                            </optgroup>
                            <optgroup label="Enseignants">
                                @foreach($destinataires['enseignants']??[] as $destinataire)
                                    <option value="{{$destinataire->id_utilisateur}}">
                                        {{$destinataire->infos->nomComplet}}
                                    </option>
                                @endforeach
                            </optgroup>

                        </select>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-12 form-group">
                        <label>Objet : </label>
                        <input
                            name="objet"
                            type="text"
                            placeholder="Entrez le nom de la classe"
                            class="form-control"
                            required
                            value="{{$classe->nom_classe ?? ""}}"
                        >
                    </div>
                    <div class="col-12 form-group mt-5">
                        <label>Message</label>
                        <textarea id="message" name="message"></textarea>

                    </div>

                    <div class="col-md-6 form-group"></div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                            Envoyer <i class="fas fa-paper-plane" style="position: relative;
top: 0;
right: 0;
color: white;"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
@section('add-js')
    <script>
        tinymce.init({
            selector: '#message'
        });
    </script>
@stop
