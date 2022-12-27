@extends('front.master')

@section('title')
    Add Blog
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-primary">Add Blog form </h2>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::has('message') ? Session::get('message') : '' }}</p>
                            <form action="{{ route('store-blog') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="" class="">--select category--</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Title</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="category_name" placeholder="Blog Title">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description"  cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="Long_description"  cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Image</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="blog_image" >
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="form-control btn btn-success" value="Create New Blog">
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

