@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('blogs.create') }}" class="text-right">Add a Blog</a>
                <h2 class="text-center">Blogs Lists</h2>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                    <th>S.No.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                    </thead>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($blogs as $blog_data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $blog_data->title }}</td>
                            <td>{{ $blog_data->description }}</td>
                            <td>
                                <a href="{{ route('blogs.edit', $blog_data) }}">Edit</a>,
                                <form action="{{ route('blogs.destroy', $blog_data) }}" method="POST" enctype="multipart/form-data">
                                    @method('delete')
                                    @csrf
                                    <button type="submit">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
