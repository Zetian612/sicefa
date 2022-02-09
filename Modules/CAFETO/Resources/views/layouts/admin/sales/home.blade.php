@extends('cafeto::layouts.master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">{{ __('Sales')}}</a></li>
@endsection
@section('content')
<div id="example">

      
            {{-- <div class="card card-outline shadow">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Sales')}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            {!! Form::open(['url' => 'gymstorm/admin/gym/users/search']) !!}
                            {{csrf_field()}}



                            {!! Form::search('search', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el
                            documento.', 'required']) !!}
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!} --}}

          

           
</div>
 
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => 'gymstorm/admin/gym/users/search']) !!}
                {{csrf_field()}}



                {!! Form::search('search', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el
                documento.', 'required']) !!}
            </div>
       
        
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Close')}}</button>
                <button type="button"  class="btn btn-primary">{{ __('Register')}}</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@endsection
@section('js')
<script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

})
</script>
@endsection

