@extends('layouts.master')
@section('title',"Register")
@section('front.content')

 <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">register</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                <form class="form" novalidate action="{{ route('auth.register.post') }}" method="POST" enctype="multipart/form-data ">
                    @csrf
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                          <x-Alert key="name"/>
                                
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required>
                                                      <x-Alert key="phone"/>

                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                                                      <x-Alert key="email"/>

                        </div>

                        <div class="mb-3">
                            <label class="form-label required-label" for="image">Image</label>
                            <input type="file" class="form-controller" name="image" id="image" accept="image">
                                 <x-Alert key="image"/>



                        </div>

                        <div class="mb-3">
                            <label class="form-label required-label" for="password">password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                                                                                  <x-Alert key="password"/>

                        </div>

                        <div class="mb-3">
                            <label class="form-label required-label" for="password">password Confirmation</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password" required>
                             <x-Alert key="password_confirmation"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create account</button>
                </form>
                <div class="d-flex justify-content-center gap-2">
                    <span>already have an account?</span><a class="link" href="./login.html"> login</a>
                </div>
            </div>

        </div>


        @endsection