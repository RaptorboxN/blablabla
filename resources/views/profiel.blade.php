<!DOCTYPE html>
<html lang="en">
@include('head.headprofiel')

<body>
    <div>
        @include('layouts.nav2')
    </div>

    <div>
        @include('layouts.profiel2')
    </div>
    {{--hier komt de profiel page modules/frames--}}
    <div class="container">
        @include('layouts.blog')
        @include('layouts.blog')
        @include('layouts.gallery')
    </div>

    <div>
        @include('layouts.footer2')
    </div>

</body>
</html>