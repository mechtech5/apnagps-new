@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i>Installation Request</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Installation Request</a></li>
        </ul>
      </div>
      @if($message= Session::get('success'))
      <div class='alert alert-success'>{{$message}}
      </div>
      @endif
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Custmore</th>
                    <th>Contact At</th>
                    <th>On Date</th>
                    <th>Device</th>
                    <th>Address</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                	@php 
                	$s_no=0;
                	@endphp 
                @foreach($install as $ins)	
                  <tr>
                    <td>{{ ++$s_no }}</td>
                    <td>{{ $ins->cust_name }}</td>
                    <td>{{ $ins->contact_no }}</td>
                    <td>{{ $ins->ondate }}</td>
                    <td>{{ $ins->devicename }}</td>
                    <td>{{ $ins->address }}</td>
                    <td><a href="{{ route('admin.rinstall',$ins->id) }}" class="btn btn-danger">Delete</a></td>
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