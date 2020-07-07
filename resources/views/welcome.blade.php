<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Metro 4 -->
        <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        
    <aside class="sidebar pos-absolute z-2"
       data-role="sidebar"
       data-toggle="#sidebar-toggle-3"
       id="sb3"
       data-shift=".shifted-content">
    <div class="sidebar-header" data-image="images/sb-bg-1.jpg">
        <div class="avatar">
            <img data-role="gravatar" data-email="sergey@pimenov.com.ua">
        </div>
        <span class="title fg-white">Metro 4 Components Library</span>
        <span class="subtitle fg-white"> 2018 © Sergey Pimenov</span>
    </div>
    <ul class="sidebar-menu">
        <li><a><span class="mif-home icon"></span>Home</a></li>
        <li><a><span class="mif-books icon"></span>Guide</a></li>
        <li><a><span class="mif-files-empty icon"></span>Examples</a></li>
        <li class="divider"></li>
        <li><a><span class="mif-images icon"></span>Icons</a></li>
    </ul>
</aside>
<div class="shifted-content h-100 p-ab">
    <div class="app-bar pos-absolute bg-red z-1" data-role="appbar">
        <button class="app-bar-item c-pointer" id="sidebar-toggle-3">
            <span class="mif-menu fg-white"></span>
        </button>
    </div>

    <div class="h-100 p-4">
        <p class="h1">What is Lorem Ipsum?</p>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            ...
        </p>
    </div>
    <div>
            <form action="#">
                <input type="text" placeholder="Ingrese numero" id="n1">
                <input type="text" placeholder="Ingrese numero" id="n2">
                <div>
                    <button class="button info" type="submit">Calcular</button>
                </div>
            </form>
        </div>
        <div id="rpts">

        </div>
        <div class="fixed-bottom" >
    <div style="height: 50px; background-color:red;">
        <div class=container>
            <div>aqui va el texto</div>
        </div>
    </div>
</div>
</div>


    <br>


        <script src="{{asset('js/jac.js')}}"></script>
        <!-- Metro 4 -->
        <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
    </body>
</html>
