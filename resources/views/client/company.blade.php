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
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">Company Name</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li  class="list-group-item bg-secondary active text-white">Financial Year (1-1-2022 to 12-12-2022)</li>
                            <li  class="list-group-item bg-secondary text-white">Financial Year (1-1-2022 to 12-12-2022)</li>
                        </ul>
                        <div class="card-body">
                        <button type="button" class="btn btn-success">Select</button>
                        <button type="button" class="btn btn-primary">EDIT</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">Company Name</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li  class="list-group-item bg-secondary active text-white">Financial Year (1-1-2022 to 12-12-2022)</li>
                            <li  class="list-group-item bg-secondary text-white">Financial Year (1-1-2022 to 12-12-2022)</li>
                        </ul>
                        <div class="card-body">
                        <button type="button" class="btn btn-success">Select</button>
                        <button type="button" class="btn btn-primary">EDIT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    .active{
        background-color: #28a745 !important;
        border:0px;
    }
    .list-group-item:hover{
        cursor: pointer;
    }
</style>
<script>
 $('.list-group-item').dblclick((e)=>{
            $(e.currentTarget).siblings().removeClass('active');
            $(e.currentTarget).addClass("active");
        });
</script>
</html>