@extends('ptventa::layouts.master')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Inicio</a></li>
    <li class="breadcrumb-item active">Productos</li>
    <li class="breadcrumb-item active">Actualizar imagen</li>
@endsection

@section('content')
    <form action="{{ route('ptventa.admin.element.update', $element) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-success card-outline col-10 mx-auto">

            <div class="card-body pb-0">
                <div class="row">

                    <div class="col-7">
                        <div class="card card-success border-success">
                            <div class="card-header text-center h5 py-1">
                                Imagen
                            </div>
                            <div class="card-body mx-auto">
                                <img src="{{ asset($element->image) }}" id="selected_image" class="img-fluid img-thumbnail" style="max-height: 400px; max-width: 600px">
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="mb-3">
                            <label class="form-label">Producto</label>
                            <p class="form-control text-secondary">
                                {{ $element->name }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <p class="form-control text-secondary">
                                $ 3.000
                            </p>
                        </div>
                        <br><hr>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Seleccionar imagen</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-footer bg-white text-right">
                <a href="{{ route('ptventa.admin.element.index') }}" class="btn btn-sm btn-light mr-2">
                    <b>Cancelar</b>
                </a>
                <button type="submit" class="btn btn-sm btn-success">
                    <b>Actualizar</b>
                </button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(e) {
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#selected_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
