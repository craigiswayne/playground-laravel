@php use Illuminate\Support\Facades\Route; @endphp
    <!DOCTYPE html>
<style>
    body {
        font-family: sans-serif;
    }

    .row {
        display: flex;
        padding: 1rem;
        justify-content: center;
    }

    .tile {
        --color:#0da58e;
        min-width: 150px;
        border: 1px solid transparent;
        border-radius: 5px;
        margin: 1rem;
        padding: 15px;
        background: var(--color);
        color: white;
        text-decoration: none;
        min-height: 100px;
        box-shadow: rgba(100, 100, 111, 0.2) 0 7px 29px 0;
        transition: box-shadow 0.2s ease;
    }

    .tile:nth-child(2) {
        --color: #8cc152;
    }

    .tile:nth-child(3) {
        --color: #cdda49;
    }

    .tile:nth-child(4) {
        --color: #fd9727;
    }

    .tile:hover, .tile:focus {
        outline: none;
        box-shadow: rgba(0, 0, 0, 0.2) 0 12px 28px 0, rgba(0, 0, 0, 0.1) 0 2px 4px 0, rgba(255, 255, 255, 0.05) 0 0 0 1px inset;
    }
</style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Routes</title>
</head>
<body>
<main>

    <div style="text-align: center;">
        <h1 style="margin: 0;">Routes</h1>
        <p><i>excluding the current one</i></p>
    </div>

    <div class="row">
        <?php
        $currentRoute = Route::getCurrentRoute();
        $routeCollection = Route::getRoutes();
        foreach ($routeCollection as $route) {
            if($route->uri === $currentRoute->uri){
                continue;
            }
            echo '<a class="tile" href="'.$route->uri.'">'.($route->getName()?:$route->uri).'</a>';
        }
        ?>
    </div>
</main>
</body>
</html>
