@extends('sica::layouts.master')

@section('stylesheet')
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="card card-orange card-outline shadow col-md-12">
                <div class="card-header">
                    <h3 class="card-title">Editar Datos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body box-profile">
                    {!! Form::open(['url' => 'sica/admin/people/data/'.$people->id.'/edit']) !!}
                    @method('put')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="text-left">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('sica/images/blanco.png') }}" alt="User profile picture">
                                    <br />
                                    {!! Form::file('avatar', ['class' => 'form-control-file', ' aria-label' => 'file
                                    example'])
                                    !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <!-- Timelime example  -->

                    <div class="row">
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label>Primer nombre</label>
                                {!! Form::text('first_name', $people->first_name,
                                ['class' => 'form-control', 'placeholder' => 'Ingrese su primer nombre','required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                <label>Primer Apellido</label>
                                {!! Form::text('first_last_name', $people->first_last_name,
                                ['class' => 'form-control', 'placeholder' => 'Ingrese su primer apellido','required']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                <label>Segundo Apellido</label>
                                {!! Form::text('second_last_name', $people->second_last_name,
                                ['class' => 'form-control', 'placeholder' => 'Ingrese su segundo apellido','required']) !!}
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Tipo documento *</label>
                                {!! Form::select('document_type', getEnumValues('people', 'document_type','required'),
                                $people->document_type,['class' => 'form-control'
                                ,'placeholder' => 'Seleccione...']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                <label>Documento</label>
                                {!! Form::number('document',$people->document, ['class' => 'form-control', 'placeholder'
                                =>
                                'Documento','required'])
                                !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group" >
                                <label>Fecha de expedición</label>
                            {!! Form::date('date_of_issue',  $people->date_of_issue, ['class' => 'form-control'])
                                !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Fecha de nacimiento</label>
                                {{-- {!! Form::date('birthday',$people->birthday, ['class' => 'form-control'])
                                !!} --}}
                                {{ Form::date( 'birthday', $people->birthday, ['class' => 'form-control']) }}
                            </div>
                        </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Tipo de sangre</label>
                                {!! Form::select('blood_type',getEnumValues('people', 'blood_type'),$people->blood_type, ['class' =>
                                'form-control'])
                                !!}
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                <label>Genero</label>
                                {!! Form::select('gender',getEnumValues('people', 'gender','No registra'),$people->gender, ['class' =>
                                'form-control',
                                'placeholder' => 'Seleccione...'])
                                !!}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Eps</label>
                                {!! Form::select('eps_id',$eps, $people->eps_id,['class' => 'form-control'
                                ,'placeholder' => 'Seleccione...','required']) !!}
                                {{-- {{$people}} --}}

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Estado civil</label>
                                {!! Form::select('marital_status', getEnumValues('people', 'marital_status'),
                                $people->marital_status,['class' => 'form-control'
                                ,'placeholder' => 'Seleccione...']) !!}

                            </div>
                        </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-sm-2">

                            <div class="form-group">
                                <label>Tarjeta militar</label>
                                {!! Form::text('military_card', $people->military_card,['class' => 'form-control'
                                ]) !!}
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Estrato social</label>
                                {!! Form::select('socioeconomic_status',getEnumValues('people', 'socioeconomic_status'),
                                $people->socioeconomic_status,['class' => 'form-control'
                                ,'placeholder' => 'Seleccione...']) !!}

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Dirección</label>
                                {!! Form::text('address', $people->address,['class' => 'form-control' ,'placeholder' =>
                                'Dirección'])
                                !!}

                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="form-group">
                                <label>Celular</label>
                                {!! Form::number('telephone1',$people->telephone1, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Email</label>
                                {!! Form::email('email', $people->email,['class' => 'form-control'] ) !!}

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Misena Email</label>
                                {!! Form::email('misena_email', $people->misena_email,['class' => 'form-control'] ) !!}

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Grupo de votacion</label>
                                {!! Form::select('population_group_id', $population_groups,
                                $people->population_group_id,['class' =>
                                'form-control'
                                ,'placeholder' => 'Seleccione...']) !!}


                            </div>

                        </div>
                        {!! Form::submit('Actualizar',['class' => 'btn btn-success'] ) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(function () {

    //Date picker
    $('#reservationdate').datepicker({
        viewMode: 'years'
    });
});
 </script>
@stop