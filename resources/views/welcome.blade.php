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

<body>
    <div class="container-fluid">

        <div class="row vw-100 vh-100 d-flex justify-content-center align-items-center">
            <x-forms.button id="showForm"/>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table id="product-table" class="table table-sm table-bordered">
                            <thead>

                                <th>Company Name</th>

                            </thead>
                            <tbody>
                                @foreach ($data as $company)

                                <tr>
                                    <td>{{ $company->company_group_name }}</td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-forms.modal>
        <x-slot name="heading">Add New Company</x-slot>
        <x-slot name="element">
        <x-forms.input-text name="companyName" placeholder="Company Name"/>
        </x-slot>
    </x-forms.modal>
    <script src="{{ mix('js/app.js') }}"></script>
    <script type="module" src="{{ asset('modules/companygroupmaster.js') }}"></script>
    <script>
       
    </script>
</body>

</html>