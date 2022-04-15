<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مشاريعي</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--JS-->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body dir="rtl">
    <!--header-->
    <div class="d-flex flex-columen justify-content-center align-items-end" style="height: 50vh;width:100vw;">
        <a href="/projects" class="disply-1">
            <h1>مشاريعي</h1>
        </a>
    </div>
    <div class="d-flex flex-columen justify-content-center align-items-start" style="height: 50vh;width:100vw;">
        <nav class="btn-group">
            <a class="btn btn-primary" href="/projects">الرئيسية - للمشاريع</a>
            @guest
                @if (Route::has('login'))
                    <a class="btn btn-primary" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <a class="btn btn-primary" href="{{ route('register') }}">{{ __('تسجيل جديد') }}</a>
                    </li>
                @endif
            @else
                <a class="btn btn-primary " href="/profile">
                    {{ Auth::user()->name }}
                    <img src="{{ asset('/storage/' . auth()->user()->image) }}" alt="" class="user_image">
                </a>             
                <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('تسجيل الخروج') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </nav>
    </div>
</body>

</html>
