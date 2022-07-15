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
        <h3 class="py-5">Company Group</h3>
        <x-alert/>
        <div class="row  d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route ('company.group') }}">
                    @csrf
                    <x-forms.card>
                            <x-slot name="element">
                                <x-forms.input-text name="companyName" placeholder="Company Name" />
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
                                @foreach ($companies as $company)
                                <tr>
                                    <td>
                                        {{ $company->company_group_name }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>