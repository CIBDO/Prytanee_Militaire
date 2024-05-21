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

            <form enctype="multipart/form-data" class="new-added-form" method="POST"
                  action="{{isset($article)? route('articles.update', ['article'=> $article->id]):route('articles.store')}}" runat="server" >
                @csrf
                @if(isset($article))
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="col-12 form-group">
                        <select class="select2" name="id_categorie">
                            <option value="">Veuillez choisir une categorie</option>
                                @foreach($categories??[] as $category)
                                    <option value="{{$category->id}} "
                                        {{isset($article) && $article->id_categorie == $category->id ? "selected":""}}>
                                        {{$category->nom_categorie}}
                                    </option>
                                @endforeach
                        </select>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-12 form-group">
                        <label>Titre : </label>
                        <input
                            name="titre"
                            type="text"
                            value="{{$article->titre??''}}"
                            placeholder="Entrez le titre de l'article"
                            class="form-control"
                            required
                        >
                    </div>
                    <div class="col-12 form-group">
                        <label>Image : </label>
                        <input
                            id="imgInp"
                            name="image"
                            type="file"
                            placeholder="Entrez le titre de l'article"
                            class="form-control"
                            accept="image/*"
                        >
                        <img id="blah" src="/articles_images/{{$article->image??''}}" alt="your image" width="400px" height=""/>
                    </div>

                    <div class="col-12 form-group mt-5">
                        <label>Contenu</label>
                        <textarea id="contenu" name="contenu">
                            {{$article->contenu??''}}
                        </textarea>

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
        {{--tinymce.get('contenu').getBody().innerHTML({{{$article->contenu ?? ''}}})--}}

        tinymce.init({
            selector: '#contenu'
        });
        $(document).ready(function() {
                let imgInp = $('#imgInp')
            imgInp.on('change', function () {
                const [file] = this.files
                if (file) {
                    $('#blah').attr('src', URL.createObjectURL(file));
                }
            })
        }
        );
    </script>
@stop
