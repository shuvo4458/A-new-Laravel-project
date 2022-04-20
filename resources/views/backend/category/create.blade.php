@extends('backend.layout.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Add Category</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <span class="h2">Add Category</span>
                <a href="{{route('category.index')}}" class="btn btn-primary float-right">Category List</a>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('category.index')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name"><strong>Name <sup class="text-danger">*</sup></strong></label>
                      <input type="text" class="form-control" placeholder="Enter your name" name="name">
                    </div>
      
                    <div class="form-group">
                      <label for="slug"><strong>Slug<sup class="text-danger">*</sup></strong></label>
                      <input type="text" class="form-control" name="slug">
                    </div>
      
                    <div class="form-group">
                      <label for="image"><strong>Image</strong></label>
                      <input type="file" class="form-control" name="image">
                    </div>
                  </form>
            </div>
        </div>

    </div>
</section>
@endsection