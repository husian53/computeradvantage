<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<style>
html,body{height:100%}</style>
<body>
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-md-4 mx-auto">
                <div class="card h-100 justify-content-center">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route ('user.access')}}">
                            @csrf
                            <x-forms.input-text name="email" id="email" placeholder="Email Address"  autofocus/>
                            @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <x-forms.input-text name="password" id="password" placeholder="Password" type="password"/>
                            @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <x-forms.button id="login" class="form-control" value="login" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>