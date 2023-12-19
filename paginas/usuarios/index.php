<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usuários</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Pesquisar usuários</h3>
            </div>

            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-6 mx-auto">
                            <label for="nm_usuario" class="col-sm-2 col-form-label">Nome</label>
                            <input type="email" class="form-control" id="nm_usuario" placeholder="Digite o nome do usuário...">
                        </div>
                    </div>
                </div>

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-info">Pesquisar</button>
                </div>
            </form>
        </div>

        <div class="card card-primary mt-3">
            <div class="card-header bg-light">
                <div class="container-fluid">
                    <div class="row justify-content-end">
                        <div class="col-sm-2">
                        <a href="home.php?acao=inserir_novo" class="nav-link"> 
                            <button type="button" class="btn btn-success"><i class="fas fa-plus mr-2"></i>Inserir novo</button>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="card-body p-0 table-responsive">
                    <table class="table table-striped">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                    <th style="width: 40px">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Roberta Silva</td>
                                    <td>51 99595-8888</td>
                                    <td>exemplo@gmail.com</td>
                                    <td><span class="badge bg-danger">Inativo</span></td>
                                </tr>
                                <tr>
                                    <td>Daniel Alves</td>
                                    <td>51 96666-8888</td>
                                    <td>exemplo@gmail.com</td>
                                    <td><span class="badge bg-success">Ativo</span></td>
                                </tr>
                                <tr>
                                    <td>Job Ke</td>
                                    <td>51 96666-8888</td>
                                    <td>exemplo@gmail.com</td>
                                    <td><span class="badge bg-success">Ativo</span></td>
                                </tr>
                                <tr>
                                    <td>Adalberto Rot</td>
                                    <td>51 96666-8888</td>
                                    <td>exemplo@gmail.com</td>
                                    <td><span class="badge bg-success">Ativo</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
