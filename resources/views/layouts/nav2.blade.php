<style>

    /*
     * Masthead for nav
     */

    .blog-masthead {
        background-color: #428bca;
        -webkit-box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
        box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
    }

    /* Nav links */
    .blog-nav-item {
        position: relative;
        display: inline-block;
        padding: 10px;
        font-weight: 500;
        color: #cdddeb;
    }
    .blog-nav-item:hover,
    .blog-nav-item:focus {
        color: #fff;
        text-decoration: none;
    }

    /* Active state gets a caret at the bottom */
    .blog-nav .active {
        color: #fff;
    }
    .blog-nav .active:after {
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 0;
        margin-left: -5px;
        vertical-align: middle;
        content: " ";
        border-right: 5px solid transparent;
        border-bottom: 5px solid;
        border-left: 5px solid transparent;
    }
</style>

<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="blog-nav-item" href="/">Welcome</a>
            <a class="blog-nav-item" href="/timeline">Tijdlijn</a>
            <a class="blog-nav-item" href="/main1">Main1</a>
            <a class="blog-nav-item" href="/profiel">profiel</a>
            <a class="blog-nav-item" href="/about">About</a>

            {{--<a class="blog-nav-item ml-auto" href="#">{{ Auth::user()->name }}</a>--}}
        </nav>


        {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
        {{--@if (Auth::check())--}}
        {{--<a href="{{ url('/home') }}">Home</a>--}}
        {{--@else--}}
        {{--<a href="{{ url('/login') }}">Login</a>--}}
        {{--<a href="{{ url('/register') }}">Register</a>--}}
        {{--@endif--}}
        {{--</div>--}}
        {{--@endif--}}
    </div>
</div>