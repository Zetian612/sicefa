@extends('cafeto::layouts.master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#"> {{ trans('cafeto::menu.Sales') }}</a></li>
@endsection
@section('content')
<div id="example">
     
           
</div>


@translations
@endsection
@section('js')
<script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

})
</script>
@endsection

