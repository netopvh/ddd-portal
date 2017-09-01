<div id="left">
    <div class="menu_scroll">
        <div class="left_media">
            <div class="media user-media">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper">
                    <a class="user-link" href="#">
                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3"
                             alt="User Picture"
                             src="{{asset('backend/img/admin.jpg')}}">
                        <p class="user-info menu_hide">Welcome Micheal</p>
                    </a>
                </div>
            </div>
            <hr/>
        </div>
        <ul id="menu">
            <li class="{!! active(['/']) !!}">
                <a href="{{ route('home') }} ">
                    <i class="fa fa-home"></i>
                    <span class="link-title menu_hide">Principal</span>
                </a>
            </li>
            <li {!! (Request::is('calendar')? 'class="active"':"") !!}>
                <a href="{{ URL::to('calendar') }} ">
                    <i class="fa fa-calendar"></i>
                    <span class="link-title menu_hide">&nbsp; Calendar</span>
                    <span class="badge badge-pill badge-warning float-right calendar_badge menu_hide">7</span>
                </a>
            </li>
            <li class="dropdown_menu">
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span class="link-title menu_hide">Administração</span>
                    <span class="fa arrow menu_hide"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-angle-right"></i>
                            Usuários
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-angle-right"></i>
                            Perfis
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-angle-right"></i>
                            Permissões
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-angle-right"></i>
                            Auditoria do Sistema
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-angle-right"></i>
                            Log de Erros
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /#menu -->
    </div>
</div>