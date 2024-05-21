@extends('layouts.master')
@section('add-css')
    <style>
        .message_title {
            font-size: 20px !important;
            background-color: #ffae01 !important;
            color: #ffffff;
            width: 100% !important;
        }

        .title_date {
            text-align: right;
        }

        .sous_message_title {
            font-size: 20px !important;
            background-color: #0f3c63 !important;
            color: #ffffff;
            width: 100% !important;
        }
    </style>
@stop
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3> - </h3>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>Details</li>
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
                        <div class="item-title">
                            <h3>Liste des Messages </h3>
                        </div>
                    </div>
                    <hr>
                    <div class="notice-board-wrap">
                        <div class="notice-list">
                            <div class="post-date bg-skyblue message_title">
                                <div class="row">
                                    <div class="col-md-6">
                                        {{$message->objet}}
                                    </div>
                                    <div
                                        class="col-md-6 title_date"> {{\App\helpers\Helpers::formatDateV2($message->date_envoi)}} </div>
                                </div>
                            </div>
                            <h6 class="notice-title">
                                <a href="#">
                                    {{$message->contenu}}
                                </a></h6>
                            <div class="entry-meta">
                                {{$message->expediteur->infos->nomComplet}} /
                                <span> {{\App\helpers\Helpers::formatTimeAgo($message->date_envoi)}}</span>
                            </div>
                        </div>
                        <div style="margin-left: 100px">
                            @foreach($message->details as $detail)
                                <div class="notice-list">
                                    <div class="post-date bg-skyblue sous_message_title">
                                        <div class="row">
                                            <div
                                                class="col-md-6 title_date"> {{\App\helpers\Helpers::formatDateV2($detail->created_at)}}
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="notice-title">
                                        {!!nl2br(htmlspecialchars_decode($detail->contenu))!!}
                                    </h6>

                                    <div class="entry-meta">  {{$detail->compte->infos->nomComplet}} /
                                        <span> {{\App\helpers\Helpers::formatTimeAgo($detail->created_at)}}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Répondre </h3>
                        </div>
                    </div>
                    <hr>
                    <form class="new-added-form" method="POST" action="{{route('messages.response.store')}}" >
                        @csrf
                        <input type="hidden" name="id_message" value="{{$message->id}}">
                        <div class="row mt-5">
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
        </div>
        <!-- All Notice Area End Here -->
    </div>
@stop
@section('add-js')
    <script>
        tinymce.init({
            selector: '#message'
        });
    </script>
@stop
