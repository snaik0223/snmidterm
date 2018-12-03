@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <form role="form" id="contact-form" class="contact-form" method="POST" action="{{route('contact.store')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name= 'name' type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name='email' type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name='message' class="form-control textarea" rows="8" name="Message" id="Message" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn main-btn pull-right">Send a message</button>
                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection