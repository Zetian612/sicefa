@extends('radiocefa::layouts.master')

<div class="wrapper">
@include('radiocefa::layouts/partials/hero')

@include('radiocefa::layouts/partials/navbar')

@section('content')

<div class="row">
	<div class="col-6">
		
  <iframe src="https://zeno.fm/player/radio-cefa" width="768" height="600" frameborder="0" scrolling="no"></iframe><a href="https://zeno.fm/" target="_blank" style="display: block; font-size: 0.9em; line-height: 10px;">A Zeno.FM Station</a>
	</div>
</div>

 
@endsection

</div>