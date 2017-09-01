@extends('frontend.layouts.app')

@section('title')
    Portal Sistema FIERO
@stop

@section('css-before')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/components.css') }}">
@stop

@section('css-after')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
@stop

@section('scripts-before')
    <script type="text/javascript" src="{{ asset('frontend/assets/js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/scripts.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/buttons.min.js') }}"></script>
@stop

@section('scripts-after')
    <script type="text/javascript" src="{{ asset('frontend/assets/js/mustache.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/anmap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/brazilLow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
@stop

@section('main')
    @include('fiero.partials.menu_mobile')
    <header id="mainHeader">
        <div class="container">
            <div class="fl">
                <a href="#" class="logo-page"><img
                            src="{{ asset('frontend/assets/img/logo_fiero.png') }}"></a>

            </div>
            <div class="fr">
                <div class=" hidden-xs page-links fr ta-r">
                    <div class="p-links-hold">
                        <div class="hover-menu touch ">
                            <span class="casa-color logo-sistema-s">=</span>

                            <span class="gtm-titulo">Área de Negócios</span>
                            <div class="submenu hover-container no-hover">
                                <ul>
                                    <li class="gtm-menugeral"><a
                                                href="#">Torneio de Robótica FLL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="hover-menu touch ">
                            <span class="casa-color logo-sistema-s">=</span>

                            <span class="gtm-titulo">Conheça o Sistema FIERO</span>
                            <div class="submenu hover-container no-hover">
                                <ul>
                                    <li class="gtm-menugeral"><a href="#">O que o SESI faz</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="hidden-xs page-menu-b cl " style="">
                    <ul class="page-menu">
                        <li class="gtm-menuaplicacoes"><a href="#"><i class="fa fa-industry"></i>
                                Para Indústria</a>
                        </li>

                        <li class="gtm-menuaplicacoes"><a href="#"><i class="fa fa-newspaper-o"></i>
                                Imprensa</a></li>

                        <li class="gtm-menuaplicacoes"><a href="#"><i class="fa fa-envelope"></i>
                                Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="home-slider-wrapper">
        <ul class="bxslider">
            <li>
                <a href="">
                    <img src="http://www.fiea.org.br/public/banners/cache/1920x500/banner-fiea-1.jpg" class="bg">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="http://al.senai.br/public/banners/senaicursos-bannersitegrande-1920x500px.jpg" class="bg">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="http://al.sesi.org.br/public/banners/banner-para-site-do-sesi-1920-x-500.jpg" class="bg">
                </a>
            </li>
        </ul>
    </div>
    <main class="main container">
        @yield('content')
    </main>
    <footer class="footer">
        <section class="footer-top">
            <div class="">
                <div class="container">
                    <div class="col col-xs-12 col-sm-6 col-md-4 None">
                        <h4 class="title">
                            Conheça o Sistema FIERO
                            <span class="icone">+</span>
                        </h4>
                        <ul>
                            <li><a href="#">Área de Negócio</a></li>
                            <li><a href="#">Sindicatos</a></li>
                            <li><a href="#">Entidades Regionais</a>
                            </li>
                            <li><a href="#">Redes Sociais</a></li>
                            <li><a href="#">Vídeos</a></li>
                        </ul>
                    </div>
                    <div class="col col-xs-12 col-sm-6 col-md-4 None destaques">
                        <h4 class="title b-22">
                            FIERO
                            <span class="icone">+</span>
                        </h4>
                        <ul>
                            <li><a href="#">PARA EMPRESA</a></li>
                            <li><a href="#">IMPRENSA</a></li>
                            <li><a href="#">CONTATO</a></li>
                        </ul>
                    </div>
                    <div class="col col-xs-12 col-sm-6 col-md-4 None sistema">
                        <ul>
                            <li><a href="#"><span class="logo-sistema-s"><span class="spacer-sistema-r">=</span>Sistema FIERO<span class="spacer-sistema-l">=</span></span></a>
                            </li>
                            <li><a href="#"><span class="logo-sistema-s"><span class="spacer-sistema-r">=</span>SESI<span class="spacer-sistema-l">=</span></span></a>
                            </li>
                            <li><a href="#"><span class="logo-sistema-s"><span class="spacer-sistema-r">=</span>SENAI<span class="spacer-sistema-l">=</span></span></a></li>
                            <li><a href="#"><span class="logo-sistema-s"><span class="spacer-sistema-r">=</span>IEL<span class="spacer-sistema-l">=</span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-mid">
            <div class="">
                <div class="container">
                    <section class="col-md-9 col-xs-7 col-c">
                        <div class="al-ta ">
                            <div>
                                <span class="title">Federação das Indústrias do Estado de Rondônia</span> <br>
                                Departamento Regional de Rondônia <br>
                                Rua Rui Barbosa, 1112 - Arigolândia, 76801-186 - Porto Velho - Rondônia - Brasil
                            </div>
                        </div>
                    </section>
                    <section class="col-md-3 col-xs-6 col-c">
                        <div class="al-ta ">
                            <div class="pull-right" style="margin-top: 30px">
                                <ul>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </footer>
@stop