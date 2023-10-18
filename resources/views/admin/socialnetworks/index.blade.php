@extends('layouts.app')
@section('title', 'Lista de redes sociales')
@section('content')
    <style>
        .select2-container{
            width: 100%!important;
        }
        .select2-container--default .select2-selection--single{
            padding-bottom: 25px!important;
        }
    </style>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista de redes sociales</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Inicio</a></li>
                        <li class="breadcrumb-item active">Lista de redes sociales</li>
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
                                    @can('admin.socialnetworks.create')
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_crear_red_social"><i class="fa fa-check"></i> Crear Estado</button>
                                    @endcan
                                </div>
                                <div class="col-12 col-md-9 d-flex justify-content-end">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <form action="{{ route('admin.socialnetworks.index') }}" method="GET">
                                            <div class="input-group input-group-sm buq-menu" >
                                                <input value="{{$search}}"   type="search" name="search" class="form-control float-right" placeholder="Buscar Estado">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Icono</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Fecha Creación</th>
                                        <th scope="col">Fecha Edición</th>
                                        <th scope="col">Accion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                    $count_numb_socialnetworks = 1;
                                    @endphp
                                    @foreach($socialnetworks as $socialnetwork)
                                        <tr class="text-center">
                                            <th scope="row" style="width: 50px;">{{$count_numb_socialnetworks}}</th>
                                            <td>{{$socialnetwork->icon}}</td>
                                            <td>{{$socialnetwork->name}}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($socialnetwork->url, 25) }}</td>
                                            <td>{{$socialnetwork->state->name}}</td>
                                            <td>{{ $socialnetwork->created_at->format('Y-m-d')  }}</td>
                                            <td>{{$socialnetwork->updated_at->format('Y-m-d')}}</td>
                                            <td style="width: 100px;">
                                                <div class="btn-group">
                                                    @can('admin.socialnetworks.edit')
                                                        <button type="button" data-toggle="modal" data-target="#modal_edit_red_social_{{$loop->iteration}}" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    @endcan
                                                    @can('admin.socialnetworks.destroy')
                                                        <a style="margin-left: 5px" title="Eliminar" onclick="document.getElementById('eliminarRedSocial_{{ $loop->iteration }}').submit()" class="btn btn-danger ">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                        @can('admin.socialnetworks.destroy')
                                            <form action="{{route('admin.socialnetworks.destroy',$socialnetwork)}}"  method="POST" id="eliminarRedSocial_{{ $loop->iteration }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        @endcan
                                        @php
                                            $count_numb_socialnetworks++;
                                        @endphp
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if(!empty($search) && !$socialnetworks->isEmpty())
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.socialnetworks.index') }}" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar búsqueda</a>
                                    </div>
                                </div>
                            @endif
                            @if($socialnetworks->isEmpty())
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center mt-4">No hay resultados para tu búsqueda.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.socialnetworks.index') }}" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar búsqueda</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {!! $socialnetworks->links() !!}
                </div>
            </div>
        </div>
        @can('admin.socialnetworks.create')
            <div class="modal fade" id="modal_crear_red_social"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="fa fa-check-circle"></i> Nuevo Red Social</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="{{route('admin.socialnetworks.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="modal-body">
                                <div style="max-height: 365px; overflow-y: scroll; overflow-x: hidden">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-danger mt-1">* </span><span>Campo requerido.</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"><span class="text-danger">*</span> Nombre:</label>
                                        <input type="text" name="name" required class="form-control form-control-border" id="name" placeholder="Nombre de la red social">
                                    </div>
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="url"><span class="text-danger">*</span> Url:</label>
                                        <input type="url" name="url" required class="form-control form-control-border" id="url" placeholder="Url del la red social">
                                    </div>
                                    @error('url')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="icon"><span class="text-danger">*</span> Icono:</label>
                                        <input type="text" name="icon" required class="form-control form-control-border" id="icon">
                                    </div>
                                    @error('icon')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="state_id"><span class="text-danger mt-1">* </span> Estado de la red social:</label>
                                        <select class="custom-select form-control-border" name="state_id" id="state_id">
                                            <option value="">--Seleccionar Estado--</option>
                                            @foreach($states as $state)
                                                <option value="{{$state->id}}" {{ old('state_id') == $state->id ? 'selected' : '' }}>{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('state_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="state_id"><span class="text-danger mt-1">* </span> Usuario de la red social:</label>
                                        <style>
                                            .select2-container{
                                                width: 100%!important;
                                            }
                                            .select2-container--default .select2-selection--single{
                                                padding-bottom: 25px!important;
                                            }
                                        </style>
                                        <div class="row">
                                            <div class="col-12">
                                                <select id="userSelect" name="user_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{$user->email}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    @error('user_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

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

        @can('admin.socialnetworks.edit')
            @foreach($socialnetworks as $socialnetwork)

            <div class="modal fade" id="modal_edit_red_social_{{$loop->iteration}}"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="fa fa-edit"></i> Editar Red Social</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="{{route('admin.socialnetworks.update',$socialnetwork)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div style="max-height: 365px; overflow-y: scroll; overflow-x: hidden">
                                    <div class="d-flex justify-content-end">
                                        <span class="text-danger mt-1">* </span><span>Campo requerido.</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"><span class="text-danger">*</span> Nombre:</label>
                                        <input type="text" value="{{$socialnetwork->name}}" name="name" required class="form-control form-control-border" id="name" placeholder="Nombre de la red social">
                                    </div>
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="url"><span class="text-danger">*</span> Url:</label>
                                        <input type="url" name="url" value="{{$socialnetwork->url}}" required class="form-control form-control-border" id="url" placeholder="Url del la red social">
                                    </div>
                                    @error('url')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="icon"><span class="text-danger">*</span> Icono:</label>
                                        <input type="text" name="icon" value="{{$socialnetwork->icon}}" required class="form-control form-control-border" id="icon">
                                    </div>
                                    @error('icon')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                    <div class="form-group">
                                        <label for="state_id"><span class="text-danger mt-1">* </span> Estado de la red social:</label>
                                        <select class="custom-select form-control-border" name="state_id" id="state_id">
                                            <option value="">--Seleccionar Estado--</option>
                                            @foreach($states as $state)
                                                <option value="{{$state->id}}"  {{ $state->id == $socialnetwork->state_id ? 'selected' : '' }} {{ old('state_id') == $state->id ? 'selected' : '' }}>{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('state_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="state_id"><span class="text-danger mt-1">* </span> Usuario de la red social:</label>
                                        <div class="row">
                                            <div class="col-12">
                                                <select id="userSelect_{{$loop->iteration}}" name="user_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}"  {{ $user->id == $socialnetwork->user_id ? 'selected' : '' }} {{ old('user_id') == $user->id ? 'selected' : '' }}>{{$user->email}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @error('user_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                                <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        @endcan
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#userSelect').select2({
                minimumInputLength: 1,
                placeholder: "Buscar usuario..."
            });
        });
    </script>
    @foreach($socialnetworks as $socialnetwork)
        <script>
            $(document).ready(function() {
                $('#userSelect_{{$loop->iteration}}').select2({
                    minimumInputLength: 1,
                    placeholder: "Buscar usuario..."
                });
            });
        </script>
    @endforeach
@endsection
