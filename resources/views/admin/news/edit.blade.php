@extends('layouts.app')
@section('title', 'Editar Noticia')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Noticia</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.news.index')}}">Lista de Noticias</a></li>
                        <li class="breadcrumb-item active">Editar Noticia</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid" >
            <div class="card card-default color-palette-box">
                <div class="card-body " >
                    @can('admin.news.edit')
                        <form action="{{route('admin.news.update',$news)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="container-fluid">
                                <div class="d-flex justify-content-end">
                                    <span class="text-danger mt-1">* </span><span>Campo requerido.</span>
                                </div>
                                <div class="form-group">
                                    <label for="imagen"><span class="text-danger">*</span> Imagen principal:</label>
                                    <input type="file" name="imagen" value="{{$news->imagen}}"  class="form-control form-control-border" id="imagen">
                                </div>
                                @error('imagen')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="title"><span class="text-danger">*</span> Titulo de la noticia:</label>
                                    <input type="text" name="title" value="{{$news->title}}" class="form-control form-control-border" id="title" placeholder="Título">
                                </div>
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="pre_description_{{$news->id}}"><span class="text-danger">*</span> Pre description:</label>
                                    <textarea id="pre_description_{{$news->id}}" name="pre_description"  class="form-control" style="height: 500px!important;">
                                                {{ $news->pre_description }}
                                            </textarea>
                                </div>
                                @error('pre_description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="description_{{$news->id}}">Descripcion:</label>
                                    <textarea id="description_{{$news->id}}" name="description"  class="form-control" style="height: 500px!important;">
                                                {{$news->description }}
                                            </textarea>
                                </div>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="sub_imagen">Imagen o video secundario:</label>
                                    <input type="file" name="sub_imagen" value="{{$news->sub_imagen}}" class="form-control form-control-border" id="sub_imagen">
                                </div>
                                @error('sub_imagen')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="document">Documento:</label>
                                    <input type="file" name="document" value="{{$news->document}}" class="form-control form-control-border" id="document">
                                </div>
                                @error('document')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="state_id"><span class="text-danger mt-1">* </span>  Estado de la noticia:</label>
                                    <select class="custom-select form-control-border" name="state_id" id="state_id">
                                        <option >--Seleccionar Estado--</option>
                                        @foreach($states as $state)
                                            <option value="{{$state->id}}" {{ $state->id == $news->state_id ? 'selected' : '' }} {{ old('state_id') == $state->id ? 'selected' : '' }}>{{$state->name}}</option>
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
                                            <option value="{{$category->id}}" {{ $category->id == $news->category_id ? 'selected' : '' }} {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
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
                                            <option value="{{$user->id}}" {{ $user->id == $news->user_id ? 'selected' : '' }} {{ old('user_id') == $user->id ? 'selected' : '' }}>{{$user->email}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('user_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-warning "><i class="fa fa-edit"></i> Editar</button>
                        </form>

                    @endcan
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
@can('admin.news.edit')
        <script>
            $(function () {
                //Add text editor
                $('#pre_description_{{$news->id}}').summernote(
                    {
                        tabsize: 2,
                        height: 200
                    }
                );
            });
            $(function () {
                //Add text editor
                $('#description_{{$news->id}}').summernote(
                    {
                        tabsize: 2,
                        height: 200
                    }
                );
            });
        </script>
@endcan
@endsection
