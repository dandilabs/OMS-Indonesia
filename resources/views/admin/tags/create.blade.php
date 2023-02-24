@extends('admin.layouts.index')
@section('title', 'Add Category')
@section('content')
<div class="section-body">
<div class="col-12 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4>Add Tags</h4>
        </div>
            <form action="{{route('tags.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="section-title mt-0">Name</div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-sm">
                    </div>
                    <button class="btn btn-primary mr-1" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection