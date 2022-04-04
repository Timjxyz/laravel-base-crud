{{-- Layout base per modellare le pagine --}}
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel='stylesheet' href="{{asset('css/app.css')}}">
</head>
<body>
     <!-- cercate dati Flash in documentazione -->
     @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
     @endif


 @if ($errors->any())
     <div class="aler alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{$error}}</li>
             @endforeach
         </ul>
     </div>
 @endif

    <main>
        @yield('content')
    </main>

    <script type="text/javascript" src="main.js"></script>
</body>
</html>
