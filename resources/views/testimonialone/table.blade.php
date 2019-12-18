@extends('layouts/dashboard')

@section('testimonialone-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Testimonialone Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Main Testimonialone Table</h1>
    </div>
  </div><!--/.row-->
{{-- Alert Message After Deleted Item------------------------------------}}
          <div class="page-info">
            @if(session('deletesuccess'))
            <div class="alert alert-info">
              <h3>{{session('deletesuccess')}}</h3>
            </div>
            @endif
          </div>
  <!---                    Banner table                     -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="panel panel-success">
              <div class="panel-heading">Testimonialone List:{{ App\Testimonialone::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <th>SL.No</th>
                      <th>Testimonialone Comments</th>
                      <th>Testimonialone Name</th>
                      <th>testimonialone Details</th>
                      <th>Createed at</th>
                      <th>Action</th>
                      <th>Testimonialone Image</th>
                      {{-- <th>Status</th> --}}
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($testimonialones as $testimonialone)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$testimonialone->testimonialone_comments}}</td>
                      <td>{{$testimonialone->testimonialone_name}}</td>
                      <td>{{$testimonialone->testimonialone_details}}</td>
                      <td>{{$testimonialone->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/testimonialone/delete') }}/{{ $testimonialone->id }}">Delete</a> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/testimonialone/edit') }}/{{ $testimonialone->id }}">Edit</a>
                      </td>
                      {{-- <td>{{$mainslider->updated_at ? $mainslider->updated_at->format('d-m-Y h:i:s A'):"Not Updated"}}</td> --}}
                      {{-- <td>
                        @if($mainslider->status == 1)
            <span style="background:green; color:white; padding:5px; border-radius:3px;">Active</span>
                        @else
            <span style="background:red; color:white; padding:5px; border-radius:3px;">Deactive</span>
                        @endif
                      </td> --}}

                      <td> <a href="#"><img width="80px" src="{{ asset($testimonialone->testimonialone_image) }}" alt="featured-product-img" class="img-responsive"></a> </td>
                      {{-- <td>
                        <a class="btn btn-sm btn-info" href="{{url('change/status/category')}}/{{$category->id}}"><span style="color:white">Change Status</span></a>
                     </td> --}}

                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

{{-- {{ print_r($mainslider) }} --}}

@endsection
