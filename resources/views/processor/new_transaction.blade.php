@extends('default')
<!-- User Sidebar -->
@include('processor/_sidebar')

@section('header')
Create New Transaction
@stop

@section('content')
  <div class="row">
    <div class="col-lg-7">
      <div class="jumbotron_admin">
        <div class="over container body-content">
          <div class="row">
            <div class="col-lg-6">

              <div class="form-group">
                @include('forms/_new_transaction')
                <div class="row" >
                  <br/>
                  <a href="processor_success"><button type="submit" class="btn btn-default"> Create Transaction </button></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
