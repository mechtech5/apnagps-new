@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i>Renewable Services</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Renewable Services</a></li>
        </ul>
      </div>
      @if($message= Session::get('success'))
      <div class="alert alert-success">{{ $message }}
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
                    <th>Device</th>
                    <th>Plain Expiry Date</th>
                    <th>Renew On Date</th>
                    <th>Address</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                	@php
                	$s_no=0;
                	@endphp
                	@foreach($renew as $newable)
                  <tr>
                    <td>{{ ++$s_no}}</td>
                    <td>{{ $newable->cust_name }}</td>
                    <td>{{ $newable->contact_no }}</td>
                    <td>{{ $newable->devicename }}</td>
                    <td>{{ $newable->ondate }}</td>
                    <td>{{ $newable->dateto }}</td>
                    <td>{{ $newable->address }}</td>
                    <td><a href="{{ route('admin.rrenew',$newable->id )}}" class="btn btn-danger">Delete</a></td>
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