@guest
@else
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    @if (Auth::check()) 
      <meta name="user" content="{{ Auth::user() }}">
    @endif 

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div id="app">
        @php $locale = session()->get('locale'); @endphp
        {{-- <nav class="container-header">
            <div class="site-header">
                <!---------------- header et icons -------------->
                <div class="site-header-container">
                    <a href="">
                        <svg class="logo-vino" width="35pt" height="35pt" version="1.1" viewBox="0 0 600 700"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="t" overflow="visible">
                                    <path
                                        d="m2.2188-0.125c-0.11719 0.054688-0.23438 0.09375-0.35938 0.125s-0.25781 0.046875-0.39062 0.046875c-0.39844 0-0.71484-0.10938-0.95312-0.32812-0.23047-0.22656-0.34375-0.53516-0.34375-0.92188 0-0.38281 0.11328-0.6875 0.34375-0.90625 0.23828-0.22656 0.55469-0.34375 0.95312-0.34375 0.13281 0 0.26562 0.015625 0.39062 0.046875 0.125 0.023438 0.24219 0.0625 0.35938 0.125v0.5c-0.11719-0.070312-0.23047-0.125-0.34375-0.15625-0.11719-0.039062-0.23047-0.0625-0.34375-0.0625-0.23047 0-0.40625 0.074219-0.53125 0.21875-0.125 0.13672-0.1875 0.32812-0.1875 0.57812s0.0625 0.44922 0.1875 0.59375c0.125 0.13672 0.30078 0.20312 0.53125 0.20312 0.11328 0 0.22656-0.015625 0.34375-0.046875 0.11328-0.039063 0.22656-0.097656 0.34375-0.17188z" />
                                </symbol>
                                <symbol id="c" overflow="visible">
                                    <path
                                        d="m1.625-1.3125c-0.054688-0.03125-0.10547-0.050781-0.15625-0.0625-0.054688-0.007812-0.10156-0.015625-0.14062-0.015625-0.15625 0-0.27734 0.054687-0.35938 0.15625-0.074219 0.09375-0.10938 0.23047-0.10938 0.40625v0.82812h-0.57812v-1.8125h0.57812v0.29688c0.070313-0.11328 0.15625-0.19531 0.25-0.25 0.10156-0.0625 0.21875-0.09375 0.34375-0.09375 0.019531 0 0.039063 0.007813 0.0625 0.015625h0.10938z" />
                                </symbol>
                                <symbol id="a" overflow="visible">
                                    <path
                                        d="m2.0938-0.90625v0.15625h-1.3594c0.007813 0.13672 0.054687 0.24219 0.14062 0.3125 0.082031 0.0625 0.20312 0.09375 0.35938 0.09375 0.125 0 0.25-0.015625 0.375-0.046875 0.125-0.039063 0.25391-0.097656 0.39062-0.17188v0.45312c-0.13672 0.054688-0.27344 0.089844-0.40625 0.10938-0.13672 0.03125-0.27734 0.046875-0.42188 0.046875-0.32422 0-0.57812-0.082031-0.76562-0.25-0.17969-0.16406-0.26562-0.39844-0.26562-0.70312 0-0.28906 0.085937-0.51953 0.26562-0.6875 0.17578-0.17578 0.42188-0.26562 0.73438-0.26562 0.28906 0 0.51953 0.089844 0.6875 0.26562 0.17578 0.16797 0.26562 0.39844 0.26562 0.6875zm-0.60938-0.20312c0-0.10156-0.03125-0.1875-0.09375-0.25-0.0625-0.070313-0.14844-0.10938-0.25-0.10938-0.11719 0-0.21094 0.03125-0.28125 0.09375-0.0625 0.0625-0.10547 0.15234-0.125 0.26562z" />
                                </symbol>
                                <symbol id="j" overflow="visible">
                                    <path
                                        d="m1.0938-0.8125c-0.125 0-0.21875 0.023438-0.28125 0.0625-0.0625 0.042969-0.09375 0.10156-0.09375 0.17188 0 0.074219 0.023438 0.13281 0.078125 0.17188 0.050781 0.042969 0.11719 0.0625 0.20312 0.0625 0.11328 0 0.20703-0.035156 0.28125-0.10938 0.070312-0.082031 0.10938-0.17969 0.10938-0.29688v-0.0625zm0.875-0.21875v1.0312h-0.57812v-0.26562c-0.074219 0.10547-0.16406 0.18359-0.26562 0.23438-0.09375 0.050781-0.21094 0.078125-0.34375 0.078125-0.1875 0-0.34375-0.050781-0.46875-0.15625-0.11719-0.11328-0.17188-0.25781-0.17188-0.4375 0-0.20703 0.070313-0.35938 0.21875-0.45312 0.14453-0.10156 0.375-0.15625 0.6875-0.15625h0.34375v-0.046875c0-0.09375-0.039063-0.16016-0.10938-0.20312-0.074219-0.039062-0.1875-0.0625-0.34375-0.0625-0.11719 0-0.23047 0.015625-0.34375 0.046875-0.10547 0.023437-0.20312 0.054687-0.29688 0.09375v-0.4375c0.125-0.03125 0.25-0.050781 0.375-0.0625 0.125-0.019531 0.25-0.03125 0.375-0.03125 0.33203 0 0.56641 0.070313 0.70312 0.20312 0.14453 0.125 0.21875 0.33594 0.21875 0.625z" />
                                </symbol>
                                <symbol id="b" overflow="visible">
                                    <path
                                        d="m0.90625-2.3281v0.51562h0.59375v0.42188h-0.59375v0.76562c0 0.085938 0.015625 0.14062 0.046875 0.17188 0.039063 0.023437 0.10938 0.03125 0.20312 0.03125h0.29688v0.42188h-0.5c-0.21875 0-0.38281-0.046875-0.48438-0.14062-0.09375-0.09375-0.14062-0.25391-0.14062-0.48438v-0.76562h-0.28125v-0.42188h0.28125v-0.51562z" />
                                </symbol>
                                <symbol id="i" overflow="visible">
                                    <path
                                        d="m1.5156-1.5469v-0.96875h0.57812v2.5156h-0.57812v-0.26562c-0.085937 0.10547-0.17188 0.18359-0.26562 0.23438s-0.21094 0.078125-0.34375 0.078125c-0.21875 0-0.40234-0.085938-0.54688-0.26562-0.13672-0.17578-0.20312-0.40625-0.20312-0.6875s0.066406-0.50781 0.20312-0.6875c0.14453-0.17578 0.32812-0.26562 0.54688-0.26562 0.125 0 0.23438 0.027344 0.32812 0.078125 0.10156 0.054688 0.19531 0.13281 0.28125 0.23438zm-0.39062 1.1719c0.125 0 0.21875-0.039062 0.28125-0.125 0.070312-0.09375 0.10938-0.22656 0.10938-0.40625 0-0.16406-0.039063-0.29688-0.10938-0.39062-0.0625-0.09375-0.15625-0.14062-0.28125-0.14062s-0.21875 0.046875-0.28125 0.14062-0.09375 0.22656-0.09375 0.39062c0 0.17969 0.03125 0.3125 0.09375 0.40625 0.0625 0.085938 0.15625 0.125 0.28125 0.125z" />
                                </symbol>
                                <symbol id="h" overflow="visible">
                                    <path
                                        d="m1.25-0.375c0.11328 0 0.20312-0.039062 0.26562-0.125 0.070313-0.09375 0.10938-0.22656 0.10938-0.40625 0-0.16406-0.039062-0.29688-0.10938-0.39062-0.0625-0.09375-0.15234-0.14062-0.26562-0.14062-0.125 0-0.22656 0.046875-0.29688 0.14062-0.0625 0.09375-0.09375 0.22656-0.09375 0.39062 0 0.17969 0.03125 0.3125 0.09375 0.40625 0.070313 0.085938 0.17188 0.125 0.29688 0.125zm-0.39062-1.1719c0.082031-0.10156 0.17188-0.17969 0.26562-0.23438 0.09375-0.050781 0.20312-0.078125 0.32812-0.078125 0.22656 0 0.41016 0.089844 0.54688 0.26562 0.14453 0.17969 0.21875 0.40625 0.21875 0.6875s-0.074219 0.51172-0.21875 0.6875c-0.13672 0.17969-0.32031 0.26562-0.54688 0.26562-0.125 0-0.23438-0.027344-0.32812-0.078125s-0.18359-0.12891-0.26562-0.23438v0.26562h-0.57812v-2.5156h0.57812z" />
                                </symbol>
                                <symbol id="g" overflow="visible">
                                    <path
                                        d="m0.046875-1.8125h0.57812l0.48438 1.2344 0.40625-1.2344h0.57812l-0.75 1.9844c-0.085938 0.19531-0.17969 0.33594-0.28125 0.42188-0.09375 0.082031-0.22656 0.125-0.39062 0.125h-0.34375v-0.39062h0.1875c0.09375 0 0.16016-0.015625 0.20312-0.046875 0.050781-0.03125 0.085938-0.085938 0.10938-0.15625l0.015625-0.0625z" />
                                </symbol>
                                <symbol id="f" overflow="visible">
                                    <path
                                        d="m0.29688-2.4219h1.6875v0.48438h-1.0625v0.4375h1v0.46875h-1v0.5625h1.0938v0.46875h-1.7188z" />
                                </symbol>
                                <symbol id="e" overflow="visible">
                                    <path d="m0.28125-2.5156h0.57812v2.5156h-0.57812z" />
                                </symbol>
                                <symbol id="s" overflow="visible">
                                    <path
                                        d="m1.4688-2.5156v0.375h-0.3125c-0.085938 0-0.14062 0.015625-0.17188 0.046875s-0.046875 0.085938-0.046875 0.15625v0.125h0.48438v0.42188h-0.48438v1.3906h-0.59375v-1.3906h-0.28125v-0.42188h0.28125v-0.125c0-0.19531 0.054688-0.34375 0.17188-0.4375 0.11328-0.09375 0.28516-0.14062 0.51562-0.14062z" />
                                </symbol>
                                <symbol id="d" overflow="visible">
                                    <path
                                        d="m1.1406-1.4375c-0.125 0-0.22656 0.046875-0.29688 0.14062-0.0625 0.085937-0.09375 0.21484-0.09375 0.39062 0 0.17969 0.03125 0.3125 0.09375 0.40625 0.070312 0.09375 0.17188 0.14062 0.29688 0.14062s0.21875-0.046875 0.28125-0.14062c0.070313-0.09375 0.10938-0.22656 0.10938-0.40625 0-0.17578-0.039062-0.30469-0.10938-0.39062-0.0625-0.09375-0.15625-0.14062-0.28125-0.14062zm0-0.42188c0.3125 0 0.55469 0.089844 0.73438 0.26562 0.17578 0.16797 0.26562 0.39844 0.26562 0.6875 0 0.30469-0.089844 0.53906-0.26562 0.70312-0.17969 0.16797-0.42188 0.25-0.73438 0.25s-0.55859-0.082031-0.73438-0.25c-0.17969-0.16406-0.26562-0.39844-0.26562-0.70312 0-0.28906 0.085937-0.51953 0.26562-0.6875 0.17578-0.17578 0.42188-0.26562 0.73438-0.26562z" />
                                </symbol>
                                <symbol id="r" overflow="visible">
                                    <path
                                        d="m1.9531-1.5156c0.070313-0.10156 0.16016-0.1875 0.26562-0.25 0.10156-0.0625 0.21094-0.09375 0.32812-0.09375 0.20703 0 0.36328 0.070313 0.46875 0.20312 0.11328 0.125 0.17188 0.30859 0.17188 0.54688v1.1094h-0.57812v-0.9375-0.046875-0.0625c0-0.13281-0.023437-0.22656-0.0625-0.28125-0.03125-0.0625-0.089844-0.09375-0.17188-0.09375-0.11719 0-0.20312 0.046875-0.26562 0.14062-0.054687 0.09375-0.085937 0.22656-0.09375 0.39062v0.89062h-0.57812v-0.9375c0-0.20703-0.015625-0.33594-0.046875-0.39062-0.03125-0.0625-0.09375-0.09375-0.1875-0.09375-0.11719 0-0.20312 0.046875-0.26562 0.14062-0.054688 0.09375-0.078125 0.22656-0.078125 0.39062v0.89062h-0.57812v-1.8125h0.57812v0.26562c0.070313-0.10156 0.14844-0.17969 0.23438-0.23438 0.09375-0.050781 0.19531-0.078125 0.3125-0.078125 0.125 0 0.23438 0.03125 0.32812 0.09375s0.16406 0.14844 0.21875 0.25z" />
                                </symbol>
                                <symbol id="q" overflow="visible">
                                    <path
                                        d="m2.0938-1.1094v1.1094h-0.57812v-0.84375c0-0.15625-0.007813-0.25781-0.015625-0.3125 0-0.0625-0.011719-0.10938-0.03125-0.14062-0.023438-0.039063-0.054688-0.070313-0.09375-0.09375-0.042969-0.019531-0.085938-0.03125-0.125-0.03125-0.125 0-0.22656 0.046875-0.29688 0.14062-0.0625 0.09375-0.09375 0.22656-0.09375 0.39062v0.89062h-0.57812v-2.5156h0.57812v0.96875c0.082031-0.10156 0.17188-0.17969 0.26562-0.23438 0.10156-0.050781 0.21094-0.078125 0.32812-0.078125 0.21875 0 0.37891 0.070313 0.48438 0.20312 0.10156 0.125 0.15625 0.30859 0.15625 0.54688z" />
                                </symbol>
                                <symbol id="p" overflow="visible">
                                    <path
                                        d="m0.29688-2.4219h0.70312l0.875 1.6562v-1.6562h0.59375v2.4219h-0.70312l-0.875-1.6562v1.6562h-0.59375z" />
                                </symbol>
                                <symbol id="o" overflow="visible">
                                    <path
                                        d="m0.26562-0.70312v-1.1094h0.57812v0.1875 0.375 0.28125 0.32812c0.007812 0.0625 0.023438 0.10547 0.046875 0.125 0.019531 0.042969 0.046875 0.074219 0.078125 0.09375 0.039062 0.023437 0.085938 0.03125 0.14062 0.03125 0.125 0 0.21875-0.046875 0.28125-0.14062 0.070313-0.09375 0.10938-0.22266 0.10938-0.39062v-0.89062h0.57812v1.8125h-0.57812v-0.26562c-0.085938 0.10547-0.17969 0.18359-0.28125 0.23438-0.09375 0.050781-0.19922 0.078125-0.3125 0.078125-0.21094 0-0.37109-0.0625-0.48438-0.1875-0.10547-0.13281-0.15625-0.32031-0.15625-0.5625z" />
                                </symbol>
                                <symbol id="n" overflow="visible">
                                    <path
                                        d="m2.0938-1.1094v1.1094h-0.57812v-0.84375c0-0.15625-0.007813-0.25781-0.015625-0.3125 0-0.0625-0.011719-0.10938-0.03125-0.14062-0.023438-0.039063-0.054688-0.070313-0.09375-0.09375-0.042969-0.019531-0.085938-0.03125-0.125-0.03125-0.125 0-0.22656 0.046875-0.29688 0.14062-0.0625 0.09375-0.09375 0.22656-0.09375 0.39062v0.89062h-0.57812v-1.8125h0.57812v0.26562c0.082031-0.10156 0.17188-0.17969 0.26562-0.23438 0.10156-0.050781 0.21094-0.078125 0.32812-0.078125 0.21875 0 0.37891 0.070313 0.48438 0.20312 0.10156 0.125 0.15625 0.30859 0.15625 0.54688z" />
                                </symbol>
                                <symbol id="m" overflow="visible">
                                    <path
                                        d="m0.29688-2.4219h1.0469c0.30078 0 0.53516 0.074219 0.70312 0.21875 0.16406 0.13672 0.25 0.32812 0.25 0.57812s-0.085937 0.44531-0.25 0.57812c-0.16797 0.13672-0.40234 0.20312-0.70312 0.20312h-0.42188v0.84375h-0.625zm0.625 0.45312v0.67188h0.34375c0.125 0 0.21875-0.023437 0.28125-0.078125 0.070313-0.0625 0.10938-0.14453 0.10938-0.25 0-0.10156-0.039062-0.1875-0.10938-0.25-0.0625-0.0625-0.15625-0.09375-0.28125-0.09375z" />
                                </symbol>
                                <symbol id="l" overflow="visible">
                                    <path
                                        d="m0.28125-1.8125h0.57812v1.7812c0 0.23828-0.058594 0.42188-0.17188 0.54688-0.11719 0.13281-0.28906 0.20312-0.51562 0.20312h-0.28125v-0.39062h0.09375c0.11328 0 0.19141-0.027344 0.23438-0.078125 0.039062-0.042969 0.0625-0.13672 0.0625-0.28125zm0-0.70312h0.57812v0.46875h-0.57812z" />
                                </symbol>
                                <symbol id="k" overflow="visible">
                                    <path
                                        d="m1.7344-1.75v0.46875c-0.074219-0.050781-0.15234-0.085938-0.23438-0.10938-0.074219-0.03125-0.15234-0.046875-0.23438-0.046875-0.16797 0-0.29688 0.046875-0.39062 0.14062-0.085938 0.09375-0.125 0.22656-0.125 0.39062 0 0.16797 0.039062 0.30469 0.125 0.40625 0.09375 0.09375 0.22266 0.14062 0.39062 0.14062 0.082031 0 0.16406-0.015625 0.25-0.046875 0.082031-0.03125 0.15625-0.070312 0.21875-0.125v0.48438c-0.085937 0.03125-0.17188 0.050781-0.26562 0.0625-0.09375 0.019531-0.1875 0.03125-0.28125 0.03125-0.32422 0-0.57812-0.082031-0.76562-0.25-0.1875-0.16406-0.28125-0.39844-0.28125-0.70312 0-0.30078 0.09375-0.53516 0.28125-0.70312 0.1875-0.16406 0.44141-0.25 0.76562-0.25 0.09375 0 0.1875 0.011719 0.28125 0.03125 0.09375 0.011719 0.17969 0.039063 0.26562 0.078125z" />
                                </symbol>
                            </defs>
                            <g>
                                <path
                                    d="m227.03 203.75c29.023 0 52.551 23.527 52.551 52.551 0 29.016-23.527 52.551-52.551 52.551-29.016 0-52.551-23.535-52.551-52.551 0-29.023 23.535-52.551 52.551-52.551zm236.77-183.77s18.309 139.11-118.49 123.04c0 0-9.3398-120.39 118.49-123.04zm-260.28 14.262c0.37109-0.097657 107.16-30.844 142.7 123.77h257.18v15.172h-254.02c1.7773 9.5859 3.3008 19.809 4.5391 30.711 27.191 2.0039 48.633 24.699 48.633 52.406 0 29.016-23.527 52.551-52.551 52.551s-52.551-23.535-52.551-52.551c0-25.168 17.691-46.195 41.32-51.34-1.3086-11.383-2.9375-21.953-4.8398-31.773h-237.32v-15.172h234.02c-32.812-135.25-122.88-109.23-123.19-109.14l-3.9141-14.629zm269.46 400.68c29.023 0 52.551 23.527 52.551 52.551 0 29.016-23.527 52.543-52.551 52.543-29.023 0-52.551-23.527-52.551-52.543 0-29.023 23.527-52.551 52.551-52.551zm-122.97 0c29.023 0 52.551 23.527 52.551 52.551 0 29.016-23.527 52.543-52.551 52.543s-52.551-23.527-52.551-52.543c0-29.023 23.527-52.551 52.551-52.551zm-122.97 0c29.023 0 52.551 23.527 52.551 52.551 0 29.016-23.527 52.543-52.551 52.543-29.016 0-52.551-23.527-52.551-52.543 0-29.023 23.535-52.551 52.551-52.551zm307.43-115.58c29.016 0 52.543 23.527 52.543 52.543 0 29.023-23.527 52.551-52.543 52.551-29.023 0-52.551-23.527-52.551-52.551 0-29.016 23.527-52.543 52.551-52.543zm-122.97 0c29.016 0 52.543 23.527 52.543 52.543 0 29.023-23.527 52.551-52.543 52.551-29.023 0-52.551-23.527-52.551-52.551 0-29.016 23.527-52.543 52.551-52.543zm-122.97 0c29.023 0 52.551 23.527 52.551 52.543 0 29.023-23.527 52.551-52.551 52.551-29.023 0-52.551-23.527-52.551-52.551 0-29.016 23.527-52.543 52.551-52.543zm-122.97 0c29.023 0 52.551 23.527 52.551 52.543 0 29.023-23.527 52.551-52.551 52.551-29.023 0-52.551-23.527-52.551-52.551 0-29.016 23.527-52.543 52.551-52.543zm307.43-115.59c29.023 0 52.551 23.527 52.551 52.551 0 29.016-23.527 52.551-52.551 52.551s-52.551-23.535-52.551-52.551c0-29.023 23.527-52.551 52.551-52.551z"
                                    fill-rule="evenodd" />
                                <use x="70" y="569.921875" xlink:href="#t" />
                                <use x="72.425781" y="569.921875" xlink:href="#c" />
                                <use x="74.058594" y="569.921875" xlink:href="#a" />
                                <use x="76.300781" y="569.921875" xlink:href="#j" />
                                <use x="78.53125" y="569.921875" xlink:href="#b" />
                                <use x="80.113281" y="569.921875" xlink:href="#a" />
                                <use x="82.355469" y="569.921875" xlink:href="#i" />
                                <use x="85.875" y="569.921875" xlink:href="#h" />
                                <use x="88.242188" y="569.921875" xlink:href="#g" />
                                <use x="91.550781" y="569.921875" xlink:href="#f" />
                                <use x="93.808594" y="569.921875" xlink:href="#e" />
                                <use x="94.941406" y="569.921875" xlink:href="#e" />
                                <use x="70" y="573.226562" xlink:href="#s" />
                                <use x="71.4375" y="573.226562" xlink:href="#c" />
                                <use x="73.070312" y="573.226562" xlink:href="#d" />
                                <use x="75.339844" y="573.226562" xlink:href="#r" />
                                <use x="79.9375" y="573.226562" xlink:href="#b" />
                                <use x="81.519531" y="573.226562" xlink:href="#q" />
                                <use x="83.875" y="573.226562" xlink:href="#a" />
                                <use x="87.269531" y="573.226562" xlink:href="#p" />
                                <use x="90.035156" y="573.226562" xlink:href="#d" />
                                <use x="92.308594" y="573.226562" xlink:href="#o" />
                                <use x="94.664062" y="573.226562" xlink:href="#n" />
                                <use x="98.167969" y="573.226562" xlink:href="#m" />
                                <use x="100.59375" y="573.226562" xlink:href="#c" />
                                <use x="102.222656" y="573.226562" xlink:href="#d" />
                                <use x="104.496094" y="573.226562" xlink:href="#l" />
                                <use x="105.628906" y="573.226562" xlink:href="#a" />
                                <use x="107.871094" y="573.226562" xlink:href="#k" />
                                <use x="109.832031" y="573.226562" xlink:href="#b" />
                            </g>
                        </svg>
                    </a>
                    <div class="header-icon-container">

                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}">{{ __('Login') }}
                                    <svg width="35pt" height="35pt" version="1.1" viewBox="0 0 600 500"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m350 160.91c19.941 0 38.031 8.1094 51.129 21.199 13.129 13.137 21.238 31.227 21.238 51.168s-8.1094 38.031-21.199 51.129c-13.137 13.129-31.227 21.238-51.168 21.238s-38.031-8.1094-51.129-21.199c-13.129-13.137-21.238-31.227-21.238-51.168s8.1094-38.031 21.199-51.129c13.137-13.129 31.227-21.238 51.168-21.238zm0-85.086c56.371 0 107.42 22.859 144.37 59.805 36.945 36.945 59.805 87.996 59.805 144.37s-22.859 107.42-59.805 144.37c-36.945 36.945-87.996 59.805-144.37 59.805s-107.42-22.859-144.37-59.805c-36.945-36.945-59.805-87.996-59.805-144.37s22.859-107.42 59.805-144.37c36.945-36.945 87.996-59.805 144.37-59.805zm128.54 75.641c-32.887-32.887-78.332-53.23-128.54-53.23s-95.648 20.344-128.54 53.23c-32.887 32.887-53.23 78.332-53.23 128.54s20.344 95.648 53.23 128.54c2.7109 2.7109 5.5078 5.3359 8.3945 7.8789v-5.5742c0-25.285 10.344-48.277 27-64.934s39.645-27 64.934-27h56.426c25.281 0 48.27 10.344 64.926 27 16.66 16.66 27.008 39.664 27.008 64.934v5.5703c2.8789-2.5352 5.6758-5.1602 8.3867-7.8711 32.887-32.887 53.23-78.332 53.23-128.54s-20.344-95.648-53.23-128.54zm-226.27 281.82c28.215 18.023 61.75 28.48 97.73 28.48s69.516-10.449 97.738-28.48v-22.449c0-19.102-7.832-36.496-20.43-49.098-12.594-12.594-29.98-20.426-49.09-20.426h-56.426c-19.113 0-36.504 7.832-49.098 20.426s-20.426 29.98-20.426 49.098zm133.09-235.36c-9.0352-9.0156-21.535-14.605-35.352-14.605s-26.316 5.5898-35.352 14.605c-9.0156 9.0352-14.605 21.535-14.605 35.352 0 13.809 5.5898 26.316 14.605 35.352 9.0352 9.0156 21.535 14.605 35.352 14.605s26.316-5.5898 35.352-14.605c9.0156-9.0352 14.605-21.543 14.605-35.352 0-13.816-5.5898-26.316-14.605-35.352z" />
                                    </svg>
                                </a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">{{ __('Register') }}
                                    <svg width="35pt" height="35pt" version="1.1" viewBox="0 0 600 500"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m350 160.91c19.941 0 38.031 8.1094 51.129 21.199 13.129 13.137 21.238 31.227 21.238 51.168s-8.1094 38.031-21.199 51.129c-13.137 13.129-31.227 21.238-51.168 21.238s-38.031-8.1094-51.129-21.199c-13.129-13.137-21.238-31.227-21.238-51.168s8.1094-38.031 21.199-51.129c13.137-13.129 31.227-21.238 51.168-21.238zm0-85.086c56.371 0 107.42 22.859 144.37 59.805 36.945 36.945 59.805 87.996 59.805 144.37s-22.859 107.42-59.805 144.37c-36.945 36.945-87.996 59.805-144.37 59.805s-107.42-22.859-144.37-59.805c-36.945-36.945-59.805-87.996-59.805-144.37s22.859-107.42 59.805-144.37c36.945-36.945 87.996-59.805 144.37-59.805zm128.54 75.641c-32.887-32.887-78.332-53.23-128.54-53.23s-95.648 20.344-128.54 53.23c-32.887 32.887-53.23 78.332-53.23 128.54s20.344 95.648 53.23 128.54c2.7109 2.7109 5.5078 5.3359 8.3945 7.8789v-5.5742c0-25.285 10.344-48.277 27-64.934s39.645-27 64.934-27h56.426c25.281 0 48.27 10.344 64.926 27 16.66 16.66 27.008 39.664 27.008 64.934v5.5703c2.8789-2.5352 5.6758-5.1602 8.3867-7.8711 32.887-32.887 53.23-78.332 53.23-128.54s-20.344-95.648-53.23-128.54zm-226.27 281.82c28.215 18.023 61.75 28.48 97.73 28.48s69.516-10.449 97.738-28.48v-22.449c0-19.102-7.832-36.496-20.43-49.098-12.594-12.594-29.98-20.426-49.09-20.426h-56.426c-19.113 0-36.504 7.832-49.098 20.426s-20.426 29.98-20.426 49.098zm133.09-235.36c-9.0352-9.0156-21.535-14.605-35.352-14.605s-26.316 5.5898-35.352 14.605c-9.0156 9.0352-14.605 21.535-14.605 35.352 0 13.809 5.5898 26.316 14.605 35.352 9.0352 9.0156 21.535 14.605 35.352 14.605s26.316-5.5898 35.352-14.605c9.0156-9.0352 14.605-21.543 14.605-35.352 0-13.816-5.5898-26.316-14.605-35.352z" />
                                    </svg>
                                </a>
                            @endif
                        @else
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                        </ul>
                    </div>
                </div>
        </nav> --}}
    @endguest
        <main class="">
            @yield('content')
        </main>
    </div>

    <!--
    <script rel="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.user = {{!! Auth::user() !!}} 
    </script>
      
    @yield('js')
</body>

</html>
