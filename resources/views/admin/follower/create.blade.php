@extends('admin.master')
@section('title', "tags Edit | Tech news")
@section('pageTitle')
    <h4 class="pull-left page-title text-uppercase">tags Create</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('admin.tags.index')}}">Tag</a></li>
        <li class="active">Tag Create</li>
    </ol>
@endsection

@section('mainContent')
    <div class="panel-heading">
        <h3 class="panel-title text-uppercase">Tag Create</h3>
    </div>
    <div class="panel-body">
        <form role="form" action="{{route('admin.tags.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Tag Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="ex1" placeholder="Enter Role Name">
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="form-group">
                <label for="status">Status</label>
                <br>
                @php
                if (old('status')){
                    $status = old('status');
                }else {
                        $status = 1;
                }
                @endphp
                <div class="radio radio-info radio-inline">
                    <input type="radio" id="inlineRadio1" value="1" name="status" @if($status==1) {{'checked'}}@endif>
                    <label for="inlineRadio1">Active</label>
                </div>
                <div class="radio radio-info radio-inline">
                    <input type="radio" id="inlineRadio1" value="0" name="status"@if($status==0) {{'checked'}}@endif>
                    <label for="inlineRadio1">Inactive</label>
                </div>
            </div>
            @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
            <a href="{{route('admin.tags.index')}}" class="btn btn-info waves-effect waves-light">Back</a>
        </form>
    </div>
@endsection
