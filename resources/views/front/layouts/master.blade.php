<!doctype html>
<html data-n-head-ssr lang="en-US" data-n-head="%7B%22lang%22:%7B%22ssr%22:%22en-US%22%7D%7D">
<head>
    <title>@yield('web_title') | {{ _config('web_title', 'NFTListing' ,'Tiêu đề website') }}</title>

    @yield('head')
</head>
<body>
<div data-server-rendered="true" id="__nuxt"><!---->
    <div id="__layout">
        @yield('content')
    </div>
</div>

@include('front.partial.js')
</body>
</html>
