@extends('admin.master')
@section('title', "Post Create | Tech news")
@section('pageTitle')
    <h4 class="pull-left page-title text-uppercase">Post Create</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('admin.posts.index')}}">Post</a></li>
        <li class="active">Slider Create</li>
    </ol>
@endsection

@section('mainContent')
    <div class="panel-heading">
        <h3 class="panel-title text-uppercase">Post Create</h3>
    </div>
    <div class="panel-body">
        <form role="form" action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Post title">
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror



            @php
                if (old('category')){
                    $tag = old('category');
                }else {
                    $tag = '';
                }
            @endphp


            <div class="form-group">
                <label>Category Select</label>
                <div>
                    <select class="form-control" for="category" name="category_id">
                        <option value="">-- Select One --</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{$tag == 2 ? 'selected': ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="form-group">
                <label for="is_featured">Is Featured</label>
                <div class="checkbox checkbox-success">
                    <input id="checkbox3" name="is_featured" value="one" type="checkbox">
                    <label for="checkbox3"> Yes </label>
                </div>
            </div>
            @error('is_featured')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            @php
                if (old('tag')){
                    $tag = old('tag_id');
                }else {
                    $tag = '';
                }
            @endphp
            <div class="form-group">
                <label for="tag_id">Select tag</label>
                <div>
                    @foreach($tags as $tag)
                        <div class="radio radio-success">
                            <input type="radio" name="tag_id" id="radio1" value="{{$tag->id}}">
                            <label for="radio1"> {{$tag->name}} </label>
                        </div>
                    @endforeach
                </div>
            </div>
            @error('tag_id')
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

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror">
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="form-group">
                <label for="description">Post description</label>
                <div class="form-line">
                    <textarea id="tinymce" class="form-control @error('description') is-invalid @enderror" name="description">
                        {{old('description')}}
                    </textarea>
                </div>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
            <a href="{{route('admin.posts.index')}}" class="btn btn-info waves-effect waves-light">Back</a>
        </form>
    </div>
@endsection

@push('js')
    <script src="{{asset('assets/admin/plugins/tinymce/tinymce.js')}}"></script>
    <script>
        $(function () {
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{asset("assets/admin/plugins/tinymce")}}';
        });
    </script>
@endpush
