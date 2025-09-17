<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistema</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css" />
    <link rel="stylesheet" href="./css/perfil.css" />

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui-calendar@0.0.8/dist/calendar.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui-calendar@0.0.8/dist/calendar.min.css">
</head>

<body>
    <button id="btn-menu" class="ui icon button">
        <i class="sidebar icon"></i>
    </button>

    <section class="corpo_pagina">
        <?php include './template/menuLateral.php' ?>

        <main class="conteudo_perfil">
            <section class="cabecalho_cadastrados">
                <h1>Perfil</h1>
                <img class="ui small image fluid" src="./img/apresentacao_img/Logo Leiticia Duarte.png"
                    alt="logo da leticia duarte na tela de cadastros de alunos">
            </section>

            <section class="sessao_cadastro ui segment blue">
                <h3 class="ui dividing header">Dados do Funcionário</h3>

                <div class="ui stackable four column grid">
                    <div class="column">
                        <div class="ui segment">
                            <h4 class="ui header"><i class="user icon"></i>Nome</h4>
                            <p>João da Silva</p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="ui segment">
                            <h4 class="ui header"><i class="envelope icon"></i>Email</h4>
                            <p>joao.silva@email.com</p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="ui segment">
                            <h4 class="ui header"><i class="phone icon"></i>Celular</h4>
                            <p>(11) 91234-5678</p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="ui segment">
                            <h4 class="ui header"><i class="id card icon"></i>CPF</h4>
                            <p>123.456.789-00</p>
                        </div>
                    </div>
                </div>

                <div class="ui divider"></div>

                <div style="text-align:right;">
                    <button class="ui yellow button"><i class="edit icon"></i>Editar</button>
                </div>
            </section>


            <h2>Histórico de Cadastro do(a) Admin</h2>

            <section class="sessao_cadastro ui segment blue">

                <div class="ui action input" style="margin-bottom: 20px; width: 400px;">
                    <input type="text" id="txtPesquisar" placeholder="Pesquisar aluno (Nome/RA/Responsável)">
                    <button class="ui primary button"><i class="search icon"></i> Pesquisar</button>
                </div>

                <table class="ui single line table center aligned stackable">
                    <thead>
                        <tr>
                            <th>Registro do Aluno (RA)</th>
                            <th>Nome</th>
                            <th>Data de Nascimento</th>
                            <th>Última Atualização</th>
                            <th>Alterações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <button class="ui small icon button blue" title="Detalhes">
                                    <i class="eye icon"></i> Detalhes
                                </button>
                                <a href="./cadastradosExcluir.php?idExluir=<?= $linha['ra_aluno'] ?>" class="ui small red icon button" title="Excluir">
                                    <i class="trash icon"></i> Excluir
                                </a>
                                <button class="ui small icon button yellow" title="Editar">
                                    <i class="edit icon"></i> Editar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>


        </main>
    </section>

    <script>

    </script>
    <script src="./js/adicionarResponsavel.js"></script>
</body>

</html>