<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Lista de Presentes - A & J</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="index.html" class="logo">
                <span class="symbol"><img src="{{ asset('image/logo.svg') }}" alt="" style="width: 3.5em"/></span><span class="title">Lista de presentes</span>
            </a>

            <!-- Nav -->
{{--            <nav>--}}
{{--                <ul>--}}
{{--                    <li><a href="#menu">Menu</a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}

        </div>
    </header>

    <!-- Menu -->
{{--    <nav id="menu">--}}
{{--        <h2>Menu</h2>--}}
{{--        <ul>--}}
{{--            <li><a href="index.html">Home</a></li>--}}
{{--            <li><a href="generic.html">Ipsum veroeros</a></li>--}}
{{--            <li><a href="generic.html">Tempus etiam</a></li>--}}
{{--            <li><a href="generic.html">Consequat dolor</a></li>--}}
{{--            <li><a href="elements.html">Elements</a></li>--}}
{{--        </ul>--}}
{{--    </nav>--}}

    <!-- Main -->
    <div id="main">
        <div class="inner">
            {{ $slot }}
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
                <h2>Chave PIX</h2>
                <div>
                    <p>
                        <img src="{{ asset('image/chave-pix.jpeg') }}" alt="Chave Pix" class="image left" style="width: 15em">
                        <b>Banco:</b> C6 Bank <br>
                        <b>Nome: </b> JOÃO VITOR BARROS FARIAS <br>
                        SERIA LEGAL ESCREVER ALGUMA COISA BACANA AQUI <b>@ANA</b> DÁ UMA FORÇA PRA GENTE AQUI

                    </p>
                </div>
            </section>
            <ul class="copyright">
                <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
