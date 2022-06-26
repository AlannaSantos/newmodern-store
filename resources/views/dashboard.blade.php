@extends('frontend.main_master')
@section('content')
<!-- query Builder -->
@php
    $user = DB::table('users')->where('id',Auth::user()->id)->first();
@endphp
<!-- /query builder-->
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"><br><br>
                    <img class="card-img-top" style="border-radius: 50%"
                        src="{{ !empty($user->profile_photo_path)
                            ? url('upload/user_images/' . $user->profile_photo_path)
                            : url('upload/no-image.png') }}"
                        style=" width: 100px; height: 100px;"><br><br>
                    <!-- bootstrap class list-group e list-group-flush -->
                    <ul class="list-group list-group-flush">
                        <!-- botão primário pequeno -->
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                        <a href="{{ route('user.profile') }}"" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                        <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>

                    </ul>


                </div><!-- /col -->

                <div class="col-md-2">


                </div><!-- /col -->

                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Olá...</span><strong>
                                {{ Auth::user()->name }}</strong> Bem vindo à NewModern Loja Virtual</h3>
                    </div>


                </div><!-- /col -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /content -->
@endsection
