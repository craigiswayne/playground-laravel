@php use Illuminate\Support\Facades\Route; @endphp
    <!DOCTYPE html>
<style>
    body {
        font-family: sans-serif;
    }
</style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authenticated Content</title>
</head>
<body>
<main>
    <div style="text-align: center;">
        <h1 style="margin: 0;">Authenticated Content</h1>
        <p><i>show different content for authenticated users</i></p>
    </div>

    <div class="row">
        @unless (Auth::check())
            <p>You are not signed in.</p>
            <p>see: https://laravel.com/docs/11.x/blade</p>
        @endunless
    </div>

    <div class="row">
        <p>here we use the @verbatim @auth and @guest @endverbatim tags</p>
        @auth
            // The user is authenticated...
        @endauth

        @guest
            // The user is not authenticated...
        @endguest
    </div>
    <div>
        references:<br/>
        see: https://laravel.com/docs/11.x/blade
    </div>
</main>
</body>
</html>
