@extends('layouts.app')

@section('content')

    <h1>Thank you:{{$name}}</h1>


    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1>Thank you: {{$name}}</h1>
            <p class="lead my-3"> We will investigate this further and get back to you as soon as possible. If you urgently have any questions or concerns, please reach out at 800-555-5555 for a direct agent</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold"> Hope you have enjoy Shamix Website</a></p>
        </div>
    </div>

@endsection
