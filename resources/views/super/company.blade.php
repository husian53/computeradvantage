<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CA-APP Company</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <h3 class="py-5">Company </h3>
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="row  d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route ('company')}}">
                    @csrf
                    <x-forms.card>
                            <x-slot name="element">
                                <x-forms.select name="companyGroupId" id="companyGroupId">
                                    <x-slot name="options">
                                        @foreach($options as $option)
                                        <option value='{{ $option->company_group_id }}'>{{ $option->company_group_name }}</option>
                                        @endforeach
                                    </x-slot>
                                </x-forms.select>
                                <x-forms.input-text name="companyName" placeholder="Company Name" />
                                <div class="row">
                                    <div class="col">
                                        <x-forms.datepicker />
                                    </div>
                                    <div class="col">
                                        <x-forms.datepicker id="end" />
                                    </div>
                                </div>
                                <x-forms.button id="submit" />
                            </x-slot>
                    </x-forms.card>
                </form>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table id="product-table" class="table table-sm table-bordered">
                            <thead>
                                <th>Company Name</th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script type="module" src="{{ asset('modules/companygroupmaster.js') }}"></script>

</body>

</html>