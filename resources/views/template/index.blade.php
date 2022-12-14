<!DOCTYPE HTML>
<html>

    <head>
        @include('template.partials._head')
    </head>

    <body>

        <a name="ancre"></a>

        <!-- CACHE -->
        <div class="cache"></div>

        @include('template.partials._header')

        @include('template.partials._primaryNavBar')

        @include('template.partials._filter')


        <!-- PORTFOLIO -->

        <div id="wrapper-container">

            @yield('content')

            @include('template.partials._name')

            @include('template.partials._footer')

            @include('template.partials._copyright')

        </div>

        @include('template.partials._scripts')

    </body>
    
</html>
