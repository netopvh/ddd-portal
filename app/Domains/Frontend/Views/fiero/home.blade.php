@extends('fiero.master')

@section('content')
    <section class="materia">
        <section class="news">
            <div>
                <a href="/sesi/canais/programa-sesi-de-gestao-do-absenteismo/">
                    <article class="col-md-4 col-xs-12
                art-sm-img"
                             style="background-image:url('{{ url('/files/noticias/noticia1.jpg') }}');">
                        <div class="new-content new-main">
                            <div class="text">
                                <div>
                                    <h3>Gestão do Absenteísmo</h3>
                                </div>
                                <div class="cl"></div>
                                <p>Conheça o programa do SESI para reduzir afastamento de trabalhadores nas empresas</p>
                            </div>
                        </div>
                    </article>
                </a>
                <a href="http://www.portaldaindustria.com.br/sesi/canais/alimentacao-saudavel-na-industria/">
                    <article class="col-md-4 col-xs-12
                art-sm-img"
                             style="background-image:url('{{ url('/files/noticias/noticia2.jpg') }}');">
                        <div class="new-content new-main">
                            <div class="text">
                                <div>
                                    <h3>QUALIDADE DE VIDA</h3>
                                </div>
                                <div class="cl"></div>
                                <p>Conheça o programa Alimentação Saudável na Indústria</p>
                            </div>
                        </div>
                    </article>
                </a>
                <a href="http://www.portaldaindustria.com.br/senai/canais/edital-de-inovacao-para-industria/">
                    <article class="col-md-4 col-xs-12
                art-sm-img"
                             style="background-image:url('{{ url('/files/noticias/noticia3.jpg') }}');">
                        <div class="new-content new-main">
                            <div class="text">
                                <div>
                                    <h3>Fomento de R$ 53,6 milhões</h3>
                                </div>
                                <div class="cl"></div>
                                <p>Faça sua inscrição no Edital de Inovação para a Indústria</p>
                            </div>
                        </div>
                    </article>
                </a>
                <a href="/sesi/canais/torneio-de-robotica/">
                    <article class="col-md-4 col-xs-12
                art-sm-img"
                             style="background-image:url('{{ url('/files/noticias/noticia4.jpg') }}');">
                        <div class="new-content new-main">
                            <div class="text">
                                <div>
                                    <h3>Educação</h3>
                                </div>
                                <div class="cl"></div>
                                <p>Acesse o site do Torneio de Robótica e saiba tudo sobre a competição!</p>
                            </div>
                        </div>
                    </article>
                </a>
                <a href="/sesi/canais/educacao-para-o-trabalhador/">
                    <article class="col-md-4 col-xs-12
                art-sm-img"
                             style="background-image:url('{{ url('/files/noticias/noticia5.jpg') }}');">
                        <div class="new-content new-main">
                            <div class="text">
                                <div>
                                    <h3>Cursos</h3>
                                </div>
                                <div class="cl"></div>
                                <p>SESI oferece mais de 200 ações educativas nas modalidades presencial, semipresencial
                                    e a distância!</p>
                            </div>
                        </div>
                    </article>
                </a>
                <a href="/licitacoes/">
                    <article class="col-md-4 col-xs-12
                art-sm-img"
                             style="background-image:url('{{ url('/files/noticias/noticia6.jpg') }}');">
                        <div class="new-content new-main">
                            <div class="text">
                                <div>
                                    <h3>Produtos e Serviços</h3>
                                </div>
                                <div class="cl"></div>
                                <p>Confira as licitações e editais da CNI, SENAI, SESI e IEL</p>
                            </div>
                        </div>
                    </article>
                </a>

            </div>
        </section>
        <div class="common-space-cms" style="height: 30px;"></div>
        <section class="videos">
            <div class="video-title">Vídeos <span class="pull-right video-title-more"><a href="">VEJA MAIS</a></span></div>
            <div style="padding-top: 10px">
                <ul class="video-slider">
                    <li>
                        <a href="">
                            <img src="http://via.placeholder.com/385x225" width="">
                            <span class="video-caption">Prêmio Fiero Paulo Queiroz de Jornalismo</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="http://via.placeholder.com/385x225" alt="">
                            <span class="video-caption">Movimento Rondônia pela Educação</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="http://via.placeholder.com/385x225" alt="">
                            <span class="video-caption">Fiero comemora 30 anos</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="http://via.placeholder.com/385x225" alt="">
                            <span class="video-caption">Presidente da FIERO e Homenageado</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </section>
@endsection
