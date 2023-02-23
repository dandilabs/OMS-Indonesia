@extends('admin.layouts.index')
@section('title', 'Category')
@section('content')
@include('sweetalert::alert')
<div class="section-body">
<div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h4>Data Category</h4>
            <a href="{{route('category.create')}}" class="btn btn-outline-success btn-sm"><i class="fas fa-plus"></i>Add Category</a>
            </div>
            <div class="table-responsive">
                <div class="card-body">
                <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $result => $hasil)
                    <tr>
                        <td>{{$result + $categories->firstitem()}}</td>
                        <td>{{$hasil->name}}</td>
                        <td>{{$hasil->slug}}</td>
                        <td class="text-center">
                            <form action="{{route('category.destroy', $hasil->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="{{route('category.edit', $hasil->id)}}" class="btn btn-outline-primary btn-sm"> <i class="fas fa-edit"></i> Edit</a>
                                <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin delete data?')">
                                    <i class="fas fa-trash-alt"> Delete</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection