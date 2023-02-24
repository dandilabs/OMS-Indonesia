@extends('admin.layouts.index')
@section('title', 'Edit Category')
@section('content')
@include('sweetalert::alert')
<div class="section-body">
<div class="col-12 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
            <a href="{{route('category.index')}}" class="btn btn-warning btn-sm"><i class="
                fas fa-long-arrow-alt-left"></i> Back</a>
        </div>
            <form action="{{route('category.update', $category_data->id)}}" method="POST">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="section-title mt-0">Name</div>
                    <div class="form-group">
                        <input type="text" value="{{$category_data->name}}" name="name" class="form-control form-control-sm">
                    </div>
                    <button class="btn btn-primary mr-1" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection