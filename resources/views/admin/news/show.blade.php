@extends('layouts.app')
@section('title','Detalle de la Noticia')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detalle de la Noticia</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.news.index')}}">Lista de Noticias</a></li>
                        <li class="breadcrumb-item active">Detalle de la Noticia</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid" >
            <div class="card card-default color-palette-box">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-widget">
                                <div class="card-header">
                                    <div class="user-block">
                                        <img class="img-circle" src="https://ui-avatars.com/api/?name={{ substr($news->user->name, 0, 1) . substr($news->user->lastname, 0, 1) }}&color=7F9CF5&background=EBF4FF" alt="User Image">
                                        <span class="username"><a href="#">{{$news->user->name}} {{$news->user->lastname}}</a></span>
                                        <span class="description">{{$news->created_at->format('M d, Y')}} | {{$news->state->name}}</span>
                                    </div>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-body" style="display: block;">

                                    <div class="row">
                                        <div class="col-12">
                                            <h4>{{$news->category->name}}</h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="card mb-2 bg-gradient-dark">
                                                <img style="width: 100%; height: 200px;" class="card-img-top" src="{{asset('storage/'.$news->imagen)}}" alt="Dist Photo 1">
                                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                                    <div class="card-text text-white pb-2 pt-1">
                                                        {!! $news->pre_description !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 pb-2 pt-2 text-center">
                                            <h4>{{$news->title}}</h4>
                                        </div>
                                        <div class="col-12">
                                            {!! $news->description !!}
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <img style="width: 100%; height: 200px;" class="card-img-top" src="{{asset('storage/'.$news->sub_imagen)}}" alt="Dist Photo 1">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <a class="btn btn-primary" href="{{asset('storage/'.$news->document)}}" download="">Descargar documento</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
