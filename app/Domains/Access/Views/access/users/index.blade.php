@extends('layout.backend.app')

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.users') }}
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Usuários<a class="heading-elements-toggle"><i class="icon-more"></i></a>
                    </h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                    <br>
                    <a href="" class="btn btn-primary btn-raised legitRipple"><i class="icon-database-add"></i>
                        Cadastrar</a>
                </div>
                <div class="panel-body">
                    <form action="">
                        <fieldset>
                            <legend>Pesquisar Usuário</legend>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="col-lg-10">
                                        <div class="input-group">
												<span class="input-group-btn">
													<button class="btn btn-default btn-icon legitRipple"
                                                            type="button"><i class="icon-user"></i></button>
												</span>
                                            <input type="text" class="form-control"
                                                   placeholder="Digite o nome do usuário">
                                            <span class="input-group-btn">
													<button class="btn btn-default legitRipple"
                                                            type="submit">Pesquisar</button>
												</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-framed table-bordered table-striped text-size-base">
                        <thead>
                        <tr>
                            <th width="70">#</th>
                            <th>Nome Completo</th>
                            <th>Perfil</th>
                            <th width="120">Status</th>
                            <th width="80" class="text-center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>Kopyov</td>
                                <td>
                                    @if($user->status == 'A')
                                        <span class="label label-success">Ativo</span>
                                    @elseif($user->status == 'I')
                                        <span class="label label-danger">Inativo</span>
                                    @endif
                                </td>
                                <td>
                                    <ul class="icons-list">
                                        <li><a href="#"><i class="icon-pencil7"></i></a></li>
                                        <li><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop