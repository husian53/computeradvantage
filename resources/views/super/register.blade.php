<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CA-APP Company Group</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
    <h3 class="py-5">Register User </h3>
        <div class="row  d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route ('register.user') }}">
                    @csrf
                    <x-forms.card>
                        <x-slot name="element">
                        <x-forms.input-text name="name" placeholder="Name" />
                            <x-forms.input-text name="userName" placeholder="User Name" />
                            <x-forms.input-text name="password" type="password" placeholder="Password" />
                            <x-forms.select name="companyGroupId" id="companyGroupId">
                                <x-slot name="options">
                                    <option hidden>Select Company Group</option>
                                    @foreach($options as $option)
                                    <option value='{{ $option->id }}'>{{ $option->company_group_name }}</option>
                                    @endforeach
                                </x-slot>
                            </x-forms.select>
                            <x-forms.select name="companyId[]" id="companyId" multiple="multiple">
                                <x-slot name="options">
                                </x-slot>
                            </x-forms.select>
                            <x-forms.button id="submit" />
                        </x-slot>
                    </x-forms.card>
                </form>
            </div>
        </div>
</body>
<script src="{{ mix('js/app.js') }}"></script>
<script type="module" src="{{ asset('modules/register.js') }}"></script>
</html>