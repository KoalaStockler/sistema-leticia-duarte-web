<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistema com seu CSS e sidebar Semantic UI.</title>

    <link rel="stylesheet" href="./css/cadastros.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css" />

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js"></script>
</head>

<body>

    <button id="btn-menu" class="ui icon button">
        <i class="sidebar icon"></i>
    </button>

    <section class="corpo_pagina">
        <?php include './template/menuLateral.php' ?>

        <main class="conteudo_cadastrados">
            <section class="cabecalho_cadastrados">
                <h2>Alunos<br>Cadastrados</h2>
                <img class="ui small image fluid" src="./img/apresentacao_img/Logo Leiticia Duarte.png"
                    alt="logo da leticia duarte na tela de cadastros de alunos">
            </section>

            <section class="pesquisa_alunos">
                <div class="container_pesquisar ui action input">
                    <input id="txtPesquisar" type="text" placeholder="Pesquisar aluno (Nome/RA/Responsavel)">
                    <button class="ui button primary"><i class="search icon"></i></button>
                </div>
            </section>

            <section class="sessao_tabela">
                <table class="ui single line table center aligned">
                    <thead>
                        <tr>
                            <th><i class="hashtag icon"></i> RA</th>
                            <th><i class="user icon"></i> Nome</th>
                            <th><i class="birthday cake icon"></i> Data de Nascimento</th>
                            <th><i class="book icon"></i> Série</th>
                            <th><i class="users icon"></i> Responsável</th>
                            <th><i class="cogs icon"></i> Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12345</td>
                            <td>João da Silva</td>
                            <td>01/01/2005</td>
                            <td>3º Ano</td>
                            <td>Maria Silva</td>
                            <td>
                                <button class="ui small icon button blue" title="Detalhes">
                                    <i class="eye icon"></i> Detalhes
                                </button>
                                <a href="./cadastradosExcluir.php?idExluir=<?= $linha['ra_aluno'] ?>"
                                    class="ui small red icon button" title="Excluir">
                                    <i class="trash icon"></i> Excluir
                                </a>
                                <button class="ui small icon button yellow" title="Editar">
                                    <i class="edit icon"></i> Editar
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>12346</td>
                            <td>Maria Oliveira</td>
                            <td>15/02/2006</td>
                            <td>2º Ano</td>
                            <td>José Oliveira</td>
                            <td>
                                <button class="ui small icon button blue" title="Detalhes">
                                    <i class="eye icon"></i> Detalhes
                                </button>
                                <a href="./cadastradosExcluir.php?idExluir=<?= $linha['ra_aluno'] ?>"
                                    class="ui small red icon button" title="Excluir">
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

</body>

</html>