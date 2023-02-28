@extends('admin.layouts.index')
@section('title', 'Edit Tags')
@section('content')
@include('sweetalert::alert')
<div class="section-body">
<div class="col-12 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4>Edit Tags</h4>
            <a href="{{route('tags.index')}}" class="btn btn-warning btn-sm"><i class="
                fas fa-long-arrow-alt-left"></i> Back</a>
        </div>
            <form action="{{route('tags.update', $tags_data->id)}}" method="POST">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="section-title mt-0">Name</div>
                    <div class="form-group">
                        <input type="text" value="{{$tags_data->name}}" name="name" class="form-control form-control-sm">
                    </div>
                    <button class="btn btn-primary mr-1" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection