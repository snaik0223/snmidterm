@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Welcome to the website!
                </div>
                    <p>
                        <a href="http://localhost:8000/about" class="btn btn-primary my-2">About</a>
                        <a href="#" class="btn btn-secondary my-2">Shamix Midterm</a>
                    </p>

            </div>
        </div>
    </div>
@endsection
