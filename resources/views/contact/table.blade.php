@extends('layouts/dashboard')

@section('contact-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Contact Messages Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Contact Messages Table</h1>
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
              <div class="panel-heading">Next Event List:{{ App\Contact::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered mytable">
                    <thead>
                      <th>SL.No</th>
                      <th>Contact Person</th>
                      <th>Contact Email</th>
                      <th>Contact Messages</th>
                      <th>Createed at</th>
                      <th>Action</th>
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($contacts as $contact)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{ $contact->contact_name }}</td>
                      <td>{{ $contact->contact_email }}</td>
                      <td>{{ $contact->contact_message }}</td>
                      <td>{{$contact->created_at}}</td>
                      <td>
                        {{-- <a href="{{ url('/contact/delete') }}/{{ $contact->id }}" class="btn btn-danger" data-id="{{ $contact->id }}">Delete</a> --}}
                        <button class="btn btn-danger sweet-delete" value="{{ url('/contact/delete') }}/{{ $contact->id }}">Delete</button> </br>
                        {{-- <a style="margin-top:5px" class="btn btn-info" href="{{ url('/contact/edit') }}/{{ $contact->id }}">Edit</a> --}}
                      </td>
                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>

@endsection
