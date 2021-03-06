@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-list"></i>Network Visitor</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Network Visitor</a></li>
        </ul>
      </div>
      @if($message = Session::get('message'))
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Visitor Name</th>
                    <th>Visitor Contact</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                	@php 
                	$s_no =0 ;
                	@endphp
                @foreach($visitor as $netvisit)	
                 
                  <tr>
                    <td>{{ ++$s_no }}</td>
                    <td>{{ $netvisit->name }}</td>
                    <td>{{ $netvisit->contact }}</td>
                    <td>
                    	<a href="{{ route('admin.removenet',$netvisit->id) }}" class="btn btn-danger">Delete</a></td>
                  </tr>
               @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection