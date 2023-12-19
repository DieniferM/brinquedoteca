<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastrar item</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form>
                <div class="card-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome_item">Nome do item:</label>
                            <input type="text" class="form-control" id="nome_item" placeholder="Digite o nome do item" required>
                        </div>
                    </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="categoria">Categoria:</label>
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="estante">Estante:</label>
                            <select class="form-control" id="estante">
                                <option value="Estante_Renata">Estante Renata</option>
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="Jogos de matemática">Jogos de matemática</option>
                                <option value="Brinquedo de bebê">Brinquedo de bebê</option>
                                <option value="sem_classificacao">Sem classificação</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-id" for="status">Status:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="ON" value="ON">
                                <label class="form-check-label" for="inlineRadio1">Disponível</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="OFF" value="OFF">
                                <label class="form-check-label" for="inlineRadio2">Indisponível</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <label for="descricao">Descrição:</label>
                            <textarea class="form-control" rows="3" id="descricao" name="descricao" placeholder="De forma resumida, insira as descrição do item..."></textarea>
                        </div>
                    </div>
                </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn btn-success">Cadastrar</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
