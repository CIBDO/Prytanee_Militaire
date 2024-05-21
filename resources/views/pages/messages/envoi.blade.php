@extends('layouts.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Messages Envoyer</h3>
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
                        <a href="{{route('messages.create')}}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                            <i class="fas fa-edit"></i>
                            Ecrire un nouveau message
                        </a>

                        <div class="item-title">
                            <h3>Liste des Envois </h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                            <tr>
                                <th>
                                    Date
                                </th>
                                <th>Objet</th>
                                <th>Contenus</th>
                                <th>Destinataire</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\Illuminate\Support\Facades\Auth::user()->envois() as $message)
                                <tr>
                                    <td>
                                        <a href="{{route('messages.show', $message->id)}}">
                                            {{date('d/m/y H:i',strtotime($message->date_envoi))}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('messages.show', $message->id)}}">
                                            {{$message->objet}}
                                        </a>

                                    </td>
                                    <td> {!!nl2br(htmlspecialchars_decode($message->details->first()->contenu??''))!!}</td>
                                    <td>{{$message->destinataire->infos?->prenom.' '.$message->destinataire->infos?->nom}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" onclick=" return confirm('Voulez-vous vraiment supprimer cette ligne ?')" href="{{route('classes.delete',['id'=>$message->id])}}"><i class="fas fa-times text-orange-red"></i>Supprimer</a>
                                                <a class="dropdown-item" href="{{route('classes.edit',['class'=>$message->id])}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Modifier</a>
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
