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
                <li>Inscription</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h3 style=" position: relative !important;left: -15px !important;">Formulaire d'inscription</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Nouvel élève
                    </label>
                </div>
                <hr>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="row">
                    <form class="new-added-form" enctype="multipart/form-data" method="POST"
                          action="{{ route('inscriptions.store') }}" style="width: 100%;">
                        @csrf
                        <div class="row mg-b-10" id="choix_eleve">
                            <div class="col-3 form-group">
                                <label>Eleves *</label>
                                <select name="eleve" class="select2" required>
                                    <option value="">Veuillez sélectionner un élève *</option>
                                    @foreach($eleves as $eleve)
                                        <option value="{{ $eleve->id }}">{{ $eleve->prenom }} {{ $eleve->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row" id="eleve_info">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Prenom *</label>
                                <input value="{{ old('prenom') }}" name="prenom" type="text" class="form-control"
                                       required>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Nom *</label>
                                <input value="{{ old('nom') }}" name="nom" type="text" class="form-control" required>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Genre *</label>
                                <select name="genre" class="select2" required>
                                    <option value="">Veuillez sélectionner un genre *</option>
                                    @foreach(['Garçon', 'Fille'] as $genre)
                                        <option
                                            value="{{ $genre }}" {{ old('genre') == $genre ? 'selected' : '' }}>{{ $genre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date de naissance *</label>
                                <input value="{{ old('date_naissance') }}" name="date_naissance" type="text"
                                       class="form-control air-datepicker" data-position='bottom right' required>
                                <i class="far fa-calendar-alt"></i>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Pays *</label>
                                <select name="pays" class="select2" required>
                                    <option value="">Veuillez sélectionner un pays *</option>
                                    @foreach($pays ?? [] as $p)
                                        <option
                                            value="{{ $p->id }}" {{ old('pays') == $p->id ? 'selected' : '' }}>{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Groupe sanguin *</label>
                                <select name="groupe_sanguin" class="select2" required>
                                    <option value="">Veuillez sélectionner un groupe sanguin *</option>
                                    @foreach(['A+', 'A-', 'B+', 'B-', 'O+', 'O-'] as $groupe)
                                        <option
                                            value="{{ $groupe }}" {{ old('groupe_sanguin') == $groupe ? 'selected' : '' }}>{{ $groupe }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Religion *</label>
                                <select name="religion" class="select2" required>
                                    <option value="">Veuillez sélectionner une religion *</option>
                                    @foreach(['Islam', 'Chrétien', 'Hindou', 'Bouddhiste', 'Autres'] as $religion)
                                        <option
                                            value="{{ $religion }}" {{ old('religion') == $religion ? 'selected' : '' }}>{{ $religion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Parent *</label>
                                <select name="parent" class="select2" required>
                                    <option value="">Veuillez sélectionner un parent *</option>
                                    @foreach($parents as $parent)
                                        <option
                                            value="{{ $parent->id }}" {{ old('parent') == $parent->id ? 'selected' : '' }}>{{ $parent->prenom }} {{ $parent->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>E-Mail *</label>
                                <input value="{{ old('email') }}" name="email" type="email" class="form-control"
                                       required>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Téléphone *</label>
                                <input value="{{ old('telephone') }}" name="telephone" type="text" class="form-control"
                                       required>
                            </div>
                            <div class="col-lg-6 col-12 form-group">
                                <label>Biographie *</label>
                                <textarea class="textarea form-control" name="biographie" id="form-message" cols="10"
                                          rows="9" required>{{ old('biographie') }}</textarea>
                            </div>
                            <div class="col-lg-6 col-12 form-group mg-t-30">
                                @if(isset($eleve))
                                    <img src="{{ asset('uploads_photos/'.$eleve->photo) }}" alt="" width="200"
                                         height="300">
                                    <input type="hidden" name="old_photo" value="{{ $eleve->photo }}">
                                @endif
                                <label class="text-dark-medium">Joindre la photo de l'élève *</label>
                                <img id="photo-preview" src="#" alt="Image Preview"
                                     style="display: none; margin-top: 10px; width: 200px; height: 200px;">
                                <input name="photo" type="file" class="form-control-file" accept="image/png, image/jpeg"
                                       required>
                            </div>
                        </div>

                        <hr style="margin-top: 25px!important;">
                        <div class="row mg-t-15">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Classe *</label>
                                <select name="classe" class="select2" required>
                                    <option value="">Veuillez sélectionner une classe *</option>
                                    @foreach($classes as $classe)
                                        <option
                                            value="{{ $classe->id }}" {{ old('classe') == $classe->id ? 'selected' : '' }}>{{ $classe->nom_classe }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Période *</label>
                                <select name="periode" class="select2">
                                    <option value="">Veuillez sélectionner une période *</option>
                                    @foreach($periodes as $periode)
                                        <option value="{{$periode->id}}">
                                            {{$periode->nom}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Date d'inscription *</label>
                                <input
                                    name="date_inscription" type="text" placeholder="dd/mm/yyyy"
                                    class="form-control air-datepicker"
                                    data-position='bottom right'>
                                <i class="far fa-calendar-alt"></i>
                            </div>
                            <div class="col-3 form-group">
                                <label>Frais d'inscription *</label>
                                <input
                                    name="frais" type="number" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                            <div class="col-12 form-group mg-t-27">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Enregistrer
                                </button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="card height-auto">
            <div class="card-body">

                <div class="row">
                    <div class="table-responsive">
                        <hr>
                        <h3>Liste des élèves inscrits</h3>
                        <table id="example" style="width:100%" class="display">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">ID</label>
                                    </div>
                                </th>
                                <th>Date</th>
                                <th>Periode</th>
                                <th>Eleve</th>
                                <th>Classe</th>
                                <th>Frais</th>
                                <th>Etat</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($inscriptions??[] as $inscription)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#{{$inscription->id}}</label>
                                        </div>
                                    </td>
                                    <td>{{date('d/m/Y',strtotime($inscription->date_inscription))}}</td>
                                    <td>{{$inscription->periode->nom}}</td>
                                    <td>{{$inscription->eleve->prenom}} {{$inscription->eleve->nom}}</td>
                                    <td>{{$inscription->classe->nom_classe}}</td>
                                    <td>{{\App\helpers\Helpers::formatMontant($inscription->frais_inscription)}} F CFA
                                    </td>
                                    <td>
                                        @if($inscription->etat == 1)
                                            <span class="badge badge-success">Actif</span>
                                        @else
                                            <span class="badge badge-danger">Inactif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="dropdown-item"
                                               onclick=" return confirm('Voulez-vous vraiment annuler cette ligne ?')"
                                               href="{{route('inscriptions.delete',['id'=>$inscription->id])}}">
                                                <i class="fas fa-times text-orange-red"></i>
                                                Annuler
                                            </a>
                                            {{--                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">--}}
                                            {{--                                                <span class="flaticon-more-button-of-three-dots"></span>--}}
                                            {{--                                            </a>--}}
                                            <div class="dropdown-menu dropdown-menu-right">


                                                {{--                                                <a class="dropdown-item" href="{{route('periodes.edit',['periode'=>$inscription->id])}}">--}}
                                                {{--                                                    <i class="fas fa-cogs text-dark-pastel-green"></i>--}}
                                                {{--                                                    Modifier--}}
                                                {{--                                                </a>--}}
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
        <!-- Admit Form Area End Here -->
    </div>

@endsection
@section('add-js')
    <script>
        $(document).ready(function () {
            // Function to toggle visibility based on the checkbox state
            function toggleEleveInfo() {
                if ($('#flexCheckChecked').is(':checked')) {
                    $('#eleve_info').show();
                    $('#choix_eleve').hide();
                } else {
                    $('#eleve_info').hide();
                    $('#choix_eleve').show();
                }
            }

            // Initially call the function to set the correct visibility on page load
            toggleEleveInfo();

            // Attach change event listener to the checkbox
            $('#flexCheckChecked').change(function () {
                toggleEleveInfo();
            });

            // Function to preview the selected image
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#photo-preview').attr('src', e.target.result);
                        $('#photo-preview').show();
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            // Attach change event listener to the file input
            $('input[name="photo"]').change(function () {
                readURL(this);
            });

        });
    </script>
@stop
