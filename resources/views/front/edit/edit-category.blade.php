@extends('front.master')

@section('title')
    Edit category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-success">Edit category form </h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-category',['id'=>$category->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ $category->name }}" class="form-control" name="category_name" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Description</label>
                                    <div class="col-md-8">
                                        <textarea name="category_description" cols="30" rows="10" class="form-control">{{ $category->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Image</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="category_image" >
                                        <img src="{{ asset($category->image) }}" alt="" height="90" width="120">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="form-control btn btn-success" value="Update Category">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

