@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2 class="text-center">Edit Blog</h2>
            </div>
        </div>
        <form action="{{route('blogs.update', $blog)}}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group row">
                <label for="title" class="col-3">Title :</label>
                <div class="col-9">
                    <input type="text" class="form-control form-control-sm" name="title" value="{{ $blog->title }}" placeholder="Enter Title here." required>
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-3">Description :</label>
                <div class="col-9">
                    <input type="text" class="form-control form-control-sm" name="description" value="{{ $blog->description }}" placeholder="Enter Description here." required>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-3 col-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>
    </div>
@endsection
