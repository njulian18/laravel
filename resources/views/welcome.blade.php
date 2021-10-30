<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <div class="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, reiciendis nostrum doloremque eum nisi aut voluptas autem explicabo eaque et quasi similique animi veniam porro voluptates mollitia vel sint debitis? Molestias enim similique suscipit quam in non, consequatur ullam, aspernatur corrupti itaque facilis fuga optio magni consequuntur voluptatibus incidunt nostrum voluptates ea expedita dicta. Officia id similique nemo ipsam, quibusdam culpa pariatur perferendis. Nulla, cupiditate eligendi facere doloremque expedita sit iste sed beatae praesentium corrupti eveniet ipsa. Autem quod quos quasi eligendi quidem beatae blanditiis accusamus ipsam illum consequuntur totam expedita, quaerat velit fugit accusantium reprehenderit dolorum amet aut veniam a, eaque, quibusdam labore tempore! Quam laborum obcaecati dolore voluptate assumenda quibusdam sequi asperiores iure ducimus facere? Quo ipsam adipisci alias nihil, distinctio velit cumque perferendis natus quam amet et odio autem deserunt ut dolores repellendus temporibus quidem aliquam dolor repellat vitae. Dolorum cum ad assumenda voluptatibus mollitia ea nihil.</p>
                </div>
            </div>
        </div>
    </body>
</html>
