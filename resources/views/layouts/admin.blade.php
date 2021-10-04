<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ config('app.name', 'Shoes, Sneaker, Clothes &amp; Clothing') }}</title>

    @livewireStyles

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"

          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/uptown.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/responsive.css') }}">

    <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>
    
  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="{{ URL::asset('/js/main.js') }}'"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

</head>

<body class='admin_site'>



<livewire:admin.header/>

<div class="admin_panel_wraper">

    <livewire:admin.nav/>

    <div class="panel_content" style="position: relative;" >

        <main>

            {{ $slot }}

        </main>

    </div>

</div>


@livewireScripts

</body>

</html>

