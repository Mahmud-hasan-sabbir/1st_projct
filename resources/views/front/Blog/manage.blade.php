@extends('front.master')

@section('title')
    Manage Blog
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-success">ALL  Blog Information </h2>
                        </div>
                        <div class="card-body">
                            <p class="text-success text-center">{{ Session::has('message') ? Session::get('message') : '' }}</p>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th> blog title</th>
                                    <th> Category Name</th>
                                    <th>image</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->category->name }}</td>
                                        <td><img src="{{ asset($blog->image) }}" alt="" width="70" height="70"></td>
                                        <td>{{ $blog->status == 1 ? 'published':'unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('edit-blog',['id'=>$blog->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="" class="btn btn-primary btn-sm">Detail</a>
                                            <a href="{{ route('delete-blog',['id'=>$blog->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure category Info')">Delete</a>
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
    </section>
@endsection



