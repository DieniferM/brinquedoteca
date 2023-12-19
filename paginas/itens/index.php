<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Itens</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Pesquisar itens</h3>
            </div>

            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-6 mx-auto">
                            <label for="nm_item" class="col-sm-2 col-form-label">Nome</label>
                            <input type="email" class="form-control" id="nm_item" placeholder="Digite o nome do item...">
                        </div>
                        <div class="col-sm-6 mx-auto">
                            <label for="categoria" class="col-sm-2 col-form-label">Categoria:</label>
                                <select class="form-control" id="categoria">
                                    <option value="Jogos construídos">Jogos construídos</option>
                                    <option value="Jogos Industrializados">Jogos Industrializados</option>
                                    <option value="Jogos de alfabetização">Jogos de alfabetização</option>
                                    <option value="Jogos de alfabetização">Jogos de matemática</option>
                                    <option value="Jogos de matemática">Binquedo de bebê</option>
                                    <option value="Outros">Outros</option>
                                </select>
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
                        <a href="home.php?acao=inserir_item" class="nav-link"> 
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
                                    <th>Brinquedo/item</th>
                                    <th>Categoria</th>
                                    <th>Possuinte</th>
                                    <th style="width: 40px">Disponibilidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jogo-da-velha</td>
                                    <td>Jogos Industrializados</td>
                                    <td>Daniel Alves</td>
                                    <td><span class="badge bg-danger">Indisponivel</span></td>
                                </tr>
                                <tr>
                                    <td>Tabuleiro</td>
                                    <td>Jogos construídos	</td>
                                    <td>Sem possuinte</td>
                                    <td><span class="badge bg-success">Disponível</span></td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Jogos Industrializados</td>
                                    <td>Sem possuinte</td>
                                    <td><span class="badge bg-success">Disponível</span></td>
                                </tr>
                                <tr>
                                    <td>Xadrez</td>
                                    <td>Jogos Industrializados</td>
                                    <td>Sem possuinte</td>
                                    <td><span class="badge bg-success">Disponível</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
