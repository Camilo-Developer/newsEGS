@extends('layouts.app')
@section('title', 'Lista de Noticias')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista de Noticias</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Inicio</a></li>
                        <li class="breadcrumb-item active">Lista de Noticias</li>
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
                        <div class="col-12 mb-3">
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    @can('admin.news.create')
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_crear_noticia"><i class="fa fa-check"></i> Crear Noticia</button>
                                    @endcan
                                </div>
                            </div>
                        </div>
                       <div class="col-12">
                           <div class="row">
                               @foreach($news as $new)
                                   <a href="#" class="text-white">
                                       <div class="col-md-12 col-lg-6 col-xl-4">
                                           <div class="card mb-2 bg-gradient-dark">
                                               <img class="card-img-top" src="{{asset('storage/' . $new->imagen)}}" alt="imagen_principal_noticia">
                                               <div class="card-img-overlay d-flex flex-column justify-content-end">
                                                   <h5 class="card-title text-primary text-white">{{$new->title}}</h5>
                                                   <p class="card-text text-white pb-2 pt-1">{{$new->pre_description}}</p>
                                                   <div><i class="fa fa-clock"></i> {{$new->created_at->format('M d, Y')}}</div>
                                               </div>
                                           </div>
                                       </div>
                                   </a>
                               @endforeach
                           </div>
                       </div>
                        <div class="col-12">
                            <div class="d-flex justify-items-center">
                                {!! $news->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @can('admin.news.create')
            <div class="modal fade" id="modal_crear_noticia"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="fa fa-check-circle"></i> Nueva Noticia</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="modal-body">
                                <div style="max-height: 365px; overflow-y: scroll; overflow-x: hidden">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-danger mt-1">* </span><span>Campo requerido.</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="imagen"><span class="text-danger">*</span> Imagen principal:</label>
                                        <input type="file" name="imagen" required class="form-control form-control-border" id="imagen">
                                    </div>

                                    <div class="form-group">
                                        <label for="title"><span class="text-danger">*</span> Titulo de la noticia:</label>
                                        <input type="text" name="title" required class="form-control form-control-border" id="title" placeholder="Título">
                                    </div>
                                    <div class="form-group">
                                        <label for="pre_description"><span class="text-danger">*</span> Pre description:</label>
                                        <input type="text" name="pre_description" required class="form-control form-control-border" id="pre_description" placeholder="pre_description">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripcion:</label>
                                        <input type="text" name="description" required class="form-control form-control-border" id="description" placeholder="description">
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_imagen">Imagen o video secundario:</label>
                                        <input type="file" name="sub_imagen" required class="form-control form-control-border" id="sub_imagen">
                                    </div>
                                    <div class="form-group">
                                        <label for="document">Documento:</label>
                                        <input type="file" name="document" required class="form-control form-control-border" id="document">
                                    </div>

                                    <div class="form-group">
                                        <label for="document">state_id:</label>
                                        <input type="text" name="state_id" required class="form-control form-control-border" id="document">
                                    </div>

                                    <div class="form-group">
                                        <label for="document">category_id:</label>
                                        <input type="text" name="category_id" required class="form-control form-control-border" id="document">
                                    </div>

                                    <div class="form-group">
                                        <label for="document">user_id:</label>
                                        <input type="text" name="user_id" required class="form-control form-control-border" id="document">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan
    </section>
@endsection
