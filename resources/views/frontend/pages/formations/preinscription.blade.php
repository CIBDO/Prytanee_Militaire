@extends('frontend.layouts.master')
@section('content')
    <!--====== PAGE BANNER PART START ======-->
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
             style="background-image: url('{{asset('frontend/images/contact.jpg')}}');background-size: contain;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Pré-Inscription</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pré-Inscription</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="contact-from mt-30">
                <div class="section-title">
                    <h5>Pré-Installation</h5>
                    <h2></h2>
                    <hr>
                </div> <!-- section title -->
                <form class="new-added-form" enctype="multipart/form-data"
                      method="POST"
                      action="{{route('pre-inscription.store')}}"
                >
                    @csrf
                    @if(isset($eleve))
                        @method('PUT')
                    @endif
                    <div class="row">
                        <div class="singel-form col-xl-4 col-lg-6 col-12 form-group">
                            <label>Numéro Matricule DEF *</label>
                            <input
                                required
                                value="{{$eleve->numero_matricule ?? ""}}"
                                name="numero_matricule" type="text" placeholder="" class="form-control">
                        </div>
                        <div class="singel-form col-xl-4 col-lg-6 col-12 form-group">
                            <label>Prénom *</label>
                            <input
                                required
                                value="{{$eleve->prenom ?? ""}}"
                                name="prenom" type="text" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Nom *</label>
                            <input
                                required
                                value="{{$eleve->nom ?? ""}}"
                                name="nom" type="text" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Genre *</label><br>
                            <select required name="genre" class="form-control">
                                <option value="">Veuillez sélectionner un genre</option>
                                @foreach(['Garçon', 'Fille'] as $genre)
                                    <option value="{{$genre}}"
                                        {{isset($eleve) && $eleve->genre == $genre ? "selected":""}}
                                    >{{$genre}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Date de naissance *</label>
                            <input
                                required
                                value="{{isset($eleve) ? date('d/m/Y', strtotime($eleve->date_naissance)) : ""}}"
                                name="date_naissance" type="date" placeholder="dd/mm/yyyy"
                                class="form-control air-datepicker"
                                data-position='bottom right'>
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Lieu de naissance *</label>
                            <input
                                required
                                value="{{$eleve->lieu_naissance ?? ""}}"
                                name="lieu_naissance"
                                type="text"
                                placeholder=""
                                class="form-control">
                        </div>
                        @include('frontend.pages.formations.select_nationality')
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>E-Mail</label>
                            <input
                                value="{{$eleve->email ?? ""}}"
                                name="email"
                                type="email"
                                placeholder=""
                                class="form-control">
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Classe *</label>
                            <select required name="classe" class="form-control">
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
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Période *</label>
                            <select required name="periode" class="form-control">
                                <option value="">Veuillez sélectionner une période *</option>
                                @foreach(\App\Models\Periode::all() as $periode)
                                    <option value="{{$periode->id}}"
                                    >
                                        {{$periode->nom}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Téléphone *</label>
                            <input
                                required
                                value="{{$eleve->telephone ?? ""}}"
                                name="telephone"
                                type="text"
                                placeholder="+22370000000"
                                class="form-control"
                            >
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Parent / Tuteur *</label>
                            <input
                                required
                                value="{{$eleve->contact ?? ""}}"
                                name="contact"
                                type="text"
                                placeholder=""
                                class="form-control"
                            >
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Contact Parent / Tuteur *</label>
                            <input
                                required
                                value="{{$eleve->numero_contact ?? ""}}"
                                name="numero_contact"
                                type="text"
                                placeholder="+22370000000"
                                class="form-control"
                            >
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Adresse</label>
                            <input
                                required
                                value="{{$eleve->adresse ?? ""}}"
                                name="adresse"
                                type="text"
                                placeholder=""
                                class="form-control"
                            >
                        </div>
                        <div class="col-lg-6 col-12 form-group mg-t-30">
                            @if(isset($eleve))
                                <img src="{{asset('uploads_photos/'.$eleve->photo)}}" alt="" width="200" height="300">
                                <input type="hidden" name="old_photo" value="{{$eleve->photo}}"

                            @endif
                            <label class="text-dark-medium"> Photo d'identité</label>
                            <input name="photo" type="file" class="form-control-file" accept="image/png, image/jpeg">
                        </div>
                        <div class="col-lg-6 col-12 form-group mg-t-30">
                            @if(isset($eleve))
                                <img src="{{asset('uploads_diplomes/'.$eleve->diplome)}}" alt="" width="200"
                                     height="300">
                                <input type="hidden" name="old_diplome" value="{{$eleve->diplome}}"

                            @endif
                            <label class="text-dark-medium"> Attestation du DEF</label>
                            <input name="diplome" type="file" class="form-control-file"
                                   accept="image/png, image/jpeg,application/pdf">
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="button-21 btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                Enregistrer
                            </button>
                            <button type="reset"
                                    class="button-21-red btn_perso btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
@stop

@section('add-js')
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@stop
