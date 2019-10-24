@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i>Customer Services</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Customer Services</a></li>
        </ul>
      </div>
      @if($message = Session::get('success'))
      <div class="alert alert-success">{{$message}}
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
                    <th>For</th>
                    <th>Fencing</th>
                    <th>Plain</th>
                    <th>Route Assign</th>
                    <th>Cut_off</th>
                    <th>Msg</th>
                    <th>Email</th>
                    <th>Over speed</th>
                    <th>Theft</th>
                    <th>Event</th>
                    <th>Fulesensor</th>
                    <th>Datatime</th>
                    <th>Device Need</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                	@php 
                	$s_no=0;
                	@endphp
               @foreach( $service as $serv) 
                  <tr>
                    <td>{{ ++$s_no }}</td>
                    <td>{{ $serv->cust_name }}</td>
                    <td>{{ $serv->contact_no }}</td>
                    <td>{{ $serv->need_devices }}</td>
                    <td>{{ $serv->fencing }}</td>
                    <td>{{ $serv->period }}</td>
                    <td>{{ $serv->assign_route }}</td>
                    <td>{{ $serv->cut_off }}</td>
                    <td>{{ $serv->mgs_alert }}</td>
                    <td>{{ $serv->email_alert }}</td>
                    <td>{{ $serv->over_speed }}</td>
                    <td>{{ $serv->theft }}</td>
                    <td>{{ $serv->event }}</td>
                    <td>{{ $serv->fulesensor }}</td>
                    <td>{{ $serv->datatime }}</td>
                    <td>{{ $serv->total }}</td>
                    <td><a href="{{ route('admin.rservices',$serv->id) }}" class="btn btn-danger">Delete</a></td>
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