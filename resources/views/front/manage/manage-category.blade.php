@extends('front.master')

@section('title')
    Manage category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-success">ALL Manage category Info </h2>
                        </div>
                        <div class="card-body">
                            <p class="text-success text-center">{{ Session::has('message') ? Session::get('message') : '' }}</p>
                           <table class="table table-hover table-bordered">
                               <thead>
                               <tr>
                                   <th>SL No</th>
                                   <th> Name</th>
                                   <th> description</th>
                                   <th>image</th>
                                   <th>Action</th>

                               </tr>
                               </thead>
                               <tbody>
                               @foreach($categories as $category)
                               <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td><img src="{{ asset($category->image) }}" alt="" width="70" height="70"></td>
                                    <td>
                                        <a href="{{ route('edit-category',['id'=>$category->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ route('delete-category',['id'=>$category->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure category Info')">Delete</a>
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


