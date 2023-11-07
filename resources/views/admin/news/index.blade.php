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
                <div class="modal-dialog modal-xl">
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
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-end">
                                                <span class="text-danger mt-1">* </span><span>Campo requerido.</span>
                                            </div>
                                        </div>

                                        <div class="col-12">

                                            <div class="card">
                                                <div class="card-header d-flex p-0">
                                                    <h3 class="card-title p-3">Tabs</h3>
                                                    <ul class="nav nav-pills ml-auto p-2">
                                                        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                                                Dropdown <span class="caret"></span>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                                                                <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                                                                <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab_1">
                                                            A wonderful serenity has taken possession of my entire soul,
                                                            like these sweet mornings of spring which I enjoy with my whole heart.
                                                            I am alone, and feel the charm of existence in this spot,
                                                            which was created for the bliss of souls like mine. I am so happy,
                                                            my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                                            that I neglect my talents. I should be incapable of drawing a single stroke
                                                            at the present moment; and yet I feel that I never was a greater artist than now.
                                                        </div>

                                                        <div class="tab-pane" id="tab_2">
                                                            The European languages are members of the same family. Their separate existence is a myth.
                                                            For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                                                            in their grammar, their pronunciation and their most common words. Everyone realizes why a
                                                            new common language would be desirable: one could refuse to pay expensive translators. To
                                                            achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                                                            words. If several languages coalesce, the grammar of the resulting language is more simple
                                                            and regular than that of the individual languages.
                                                        </div>

                                                        <div class="tab-pane" id="tab_3">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                            It has survived not only five centuries, but also the leap into electronic typesetting,
                                                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                                                            like Aldus PageMaker including versions of Lorem Ipsum.
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div style="max-height: 365px; overflow-y: scroll; overflow-x: hidden">

                                                <div class="form-group">
                                                    <label for="imagen"><span class="text-danger">*</span> Imagen principal de la noticia:</label>
                                                    <input type="file" name="imagen"  class="form-control form-control-border" id="imagen">
                                                </div>
                                                @error('imagen')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="title"><span class="text-danger">*</span> Titulo de la noticia:</label>
                                                    <input type="text" name="title"  class="form-control form-control-border" id="title" placeholder="Título">
                                                </div>
                                                @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="pre_description_limited">Pre descripción de la noticia:</label>
                                                    <textarea class="form-control form-control-border" name="pre_description" id="pre_description_limited" cols="30" rows="10"></textarea>
                                                    <label id="result_pre_description_limited"></label>
                                                </div>
                                                @error('pre_description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror

                                                <div class="form-group">
                                                    <label for="description">Descripción general de la noticia:</label>
                                                    <textarea id="description" name="description"  class="form-control" style="height: 500px!important;">
                                                    </textarea>
                                                </div>
                                                @error('description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                                <div class="row">
                                                    <div class="col-12" id="tipo_archivo">
                                                        <label>Seleccione el tipo del sub archivo que desea subir</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="imagensd"  type="radio" value="1" name="type_file">
                                                            <label class="form-check-label" for="imagensd">Imagen</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="video"  type="radio" value="2" name="type_file">
                                                            <label class="form-check-label" for="video">Video</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="audio" type="radio" value="3" name="type_file">
                                                            <label class="form-check-label" for="audio">Audio</label>
                                                        </div>
                                                    </div>
                                                    @error('type_file')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror

                                                    <div class="col-12" id="direccion_archivo">
                                                        <label>Dirección de la imagen o video</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="vertical"  type="radio" value="1" name="direction_file">
                                                            <label class="form-check-label" for="vertical">Vertical</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="horinzontal"  type="radio" value="2" name="direction_file">
                                                            <label class="form-check-label" for="horinzontal">Horinzontal</label>
                                                        </div>
                                                    </div>
                                                    @error('direction_file')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                    <div class="col-12" id="subir_archivo">
                                                        <div class="form-group">
                                                            <input type="file" name="sub_imagen"  class="form-control form-control-border" id="sub_imagen">
                                                        </div>
                                                        @error('sub_imagen')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="document">Documento de la noticia (Opcional):</label>
                                                    <input type="file" name="document"  class="form-control form-control-border" id="document">
                                                </div>
                                                @error('document')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                                <div class="row">
                                                    <div class="col-6">
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
                                                    </div>
                                                    <div class="col-6">
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
                                                    </div>
                                                    <div class="col-12">
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
                                        </div>
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


    <script>
        $(document).ready(function() {
            // Ocultar los campos iniciales
            $('#direccion_archivo').hide();
            $('#subir_archivo').hide();

            // Escuchar cambios en el campo type_file
            $('input[name="type_file"]').change(function() {
                var selectedType = $('input[name="type_file"]:checked').val();

                if (selectedType == 1 || selectedType == 2) {
                    // Mostrar el campo direction_file si es una imagen o video
                    $('#direccion_archivo').show();
                    $('#subir_archivo').hide();
                } else if (selectedType == 3) {
                    // Mostrar solo el campo sub_imagen si es audio
                    $('#direccion_archivo').hide();
                    $('#subir_archivo').show();
                }
            });

            // Escuchar cambios en el campo direction_file
            $('input[name="direction_file"]').change(function() {
                var selectedDirection = $('input[name="direction_file"]:checked').val();

                if (selectedDirection == 1 || selectedDirection == 2) {
                    // Mostrar el campo subir_archivo si se selecciona una dirección
                    $('#subir_archivo').show();
                }
            });
        });
    </script>

    <script>
        var preDescriptionLimited = document.getElementById('pre_description_limited');
        var ResultPreDescriptionLimited = document.getElementById('result_pre_description_limited');
        var limit = 110;
        ResultPreDescriptionLimited.textContent = 0 + "/" + limit;
        preDescriptionLimited.addEventListener("input", function () {
            textLength = preDescriptionLimited.value.length;
            if (textLength > limit) {
                preDescriptionLimited.value = preDescriptionLimited.value.substring(0, limit); // Truncate text to the limit
                textLength = limit; // Actualiza la longitud al límite
            }
            ResultPreDescriptionLimited.textContent = textLength + "/" + limit;

            if (textLength > limit) {
                preDescriptionLimited.style.borderColor = "#ff2851";
                ResultPreDescriptionLimited.style.color = "#ff2851";
            } else {
                preDescriptionLimited.style.borderColor = "#b2b2b2";
                ResultPreDescriptionLimited.style.color = "#737373";
            }
        });
    </script>




@endsection
