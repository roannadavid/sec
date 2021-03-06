@extends('default')
<!-- User Sidebar -->
{!! View::make('processor/_sidebar', array('authuser' => $authuser))->render() !!}

@section('header')
Transaction Successfully Created
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-11">
      <div class="panel">
        <div class="panel-body">
          <div class="col-lg-6">
            @include('forms/_created_transaction')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
