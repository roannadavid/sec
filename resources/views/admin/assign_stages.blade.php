@extends('default')
<!-- User Sidebar -->
@include('admin/_sidebar')

@section('header')
<div>
	<div style="float:left">Assign Stages</div>

	<div>
		<form action="#" method="get">
			<div class="input-group" style="padding-left:550px">
				<input class="form-control" id="system-search" name="q" placeholder="Search for" required>
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				</span>
			</div>
		</form>
	</div>
</div>
@stop

@section('javascript')
<script src="/js/match.js" type="text/javascript"></script>
@stop

@section('content')

<div class="container">
	<div class="row">
        
		<div class="col-md-9">
    	 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Entry</th>
                            <th>Entry</th>
                            <th>Entry</th>
                            <th>Entry</th>
                            <th>Entry</th>
                            <th>Entry</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sample</td>
                            <td>Filter</td>
                            <td>12-11-2011 11:11</td>
                            <td>OK</td>
                            <td>123</td>
                            <td>Do some other</td>
                        </tr>
                        <tr>
                            <td>Try</td>
                            <td>It</td>
                            <td>11-20-2013 08:56</td>
                            <td>It</td>
                            <td>Works</td>
                            <td>Do some FILTERME</td>
                        </tr>
                        <tr>
                            <td>§</td>
                            <td>$</td>
                            <td>%</td>
                            <td>&</td>
                            <td>/</td>
                            <td>!</td>
                        </tr>
                    </tbody>
                </table>   
		</div>
	</div>
</div>

 
@stop
