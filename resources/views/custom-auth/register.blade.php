
@extends('front.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">register</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" placeholder="enter your name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" placeholder="enter your email" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" placeholder="enter your password" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">confirm password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password_confirmation" placeholder="enter your password" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="form-control btn btn-success" value="register form">
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

