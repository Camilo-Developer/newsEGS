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
                                   <div class="col-md-12 col-lg-6 col-xl-4 ">
                                       <div class="card mb-2 bg-gradient-dark">
                                           <img class="card-img-top" src="{{asset('storage/' . $new->imagen)}}" alt="imagen_principal_noticia">
                                           <div class="card-img-overlay d-flex flex-column ">
                                               <div class="d-flex justify-content-end">
                                                   @can('admin.news.edit')
                                                   <a href="{{route('admin.news.edit',$new)}}"  class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i></a>
                                                   @endcan
                                                   <a href="{{route('admin.news.show',$new)}}" style="margin-left: 5px;" class="btn btn-sm btn-success">
                                                       <i class="fa fa-eye"></i>
                                                   </a>
                                               </div>
                                               <h5 class="card-title text-primary text-white">{{$new->title}}</h5>
                                               <p class="card-text text-white pb-2 pt-1">{!! $new->pre_description !!}</p>
                                               <div><i class="fa fa-clock"></i> {{$new->created_at->format('M d, Y')}}</div>
                                           </div>
                                       </div>
                                   </div>
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
                <div class="modal-dialog modal-lg">
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
                                <div class="container-fluid">
                                    <div style="max-height: 365px; overflow-y: scroll; overflow-x: hidden">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-danger mt-1">* </span><span>Campo requerido.</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="imagen"><span class="text-danger">*</span> Imagen principal:</label>
                                            <input type="file" name="imagen"  class="form-control form-control-border" id="imagen">
                                        </div>

                                        <div class="form-group">
                                            <label for="title"><span class="text-danger">*</span> Titulo de la noticia:</label>
                                            <input type="text" name="title"  class="form-control form-control-border" id="title" placeholder="Título">
                                        </div>
                                        <div class="form-group">
                                            <label for="pre_description"><span class="text-danger">*</span> Pre description:</label>
                                            <textarea id="pre_description" name="pre_description"  class="form-control" style="height: 500px!important;">
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Descripcion:</label>
                                            <textarea id="description" name="description"  class="form-control" style="height: 500px!important;">
                                        </textarea>
                                        </div>


                                        <div class="form-group">
                                            <label for="sub_imagen">Imagen o video secundario:</label>
                                            <input type="file" name="sub_imagen"  class="form-control form-control-border" id="sub_imagen">
                                        </div>
                                        <div class="form-group">
                                            <label for="document">Documento:</label>
                                            <input type="file" name="document"  class="form-control form-control-border" id="document">
                                        </div>

                                        <div class="form-group">
                                            <label for="state_id"><span class="text-danger mt-1">* </span>  Estado de la noticia:</label>
                                            <select class="custom-select form-control-border" name="state_id" id="state_id">
                                                <option >--Seleccionar Estado--</option>
                                                @foreach($states as $state)
                                                    <option value="{{$state->id}}" {{ old('state_id') == $state->id ? 'selected' : '' }}>{{$state->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('state_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <div class="form-group">
                                            <label for="category_id"><span class="text-danger mt-1">* </span>  Categoria de la noticia:</label>
                                            <select class="custom-select form-control-border" name="category_id" id="category_id">
                                                <option >--Seleccionar categoria--</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <div class="form-group">
                                            <label for="user_id"><span class="text-danger mt-1">* </span>  Usuario de la noticia:</label>
                                            <select class="custom-select form-control-border" name="user_id" id="user_id">
                                                <option >--Seleccionar Usuario--</option>
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{$user->email}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('user_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
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
@section('js')
    <script>
        $(function () {
            //Add text editor
            $('#pre_description').summernote(
                {
                    tabsize: 2,
                    height: 200
                }
            );
        });
        $(function () {
            //Add text editor
            $('#description').summernote(
                {
                    tabsize: 2,
                    height: 200
                }
            );
        });
    </script>

@endsection
