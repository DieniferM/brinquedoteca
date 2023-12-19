  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastrar Usuários</h1>
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
                  <div class="form-group">
                    <label for="nome">Nome completo:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome completo" required>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="pronome">Escolha qual pronome você se idêntifica:</label>
                      <select class="form-control" id="pronome">
                        <option value="ele/dele">Ele/Dele</option>
                        <option value="ela/dela">Ela/Dela</option>
                        <option value="elu/delu">Elu/Delu</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" placeholder="XX XXX-XXXX" required maxlength="14" required>
                  </div>
                  <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" class="form-control" id="email" placeholder="exemplo@exemplo.com">
                  </div>
                  <div class="form-group">
                    <label for="dt_nascimento">Data de nascimento:</label>
                    <input type="text" class="form-control" id="dt_nascimento" placeholder="D/M/A" maxlength="10">
                  </div>
                  <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço" required>
                  </div>
                  <div class="form-group">
                    <label for="bairro">Bairro/Cidade:</label>
                    <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro" required>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="tpVinculo">Tipo de vínculo:</label>
                      <select class="form-control" id="tpVinculo">
                        <option value="Professor">Professor</option>
                        <option value="Servidor">Servidor</option>
                        <option value="Outros">Outros</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="curso">Curso:</label>
                    <input type="text" class="form-control" id="curso">
                  </div>
                  <div class="form-group">
                    <label for="nr_matricula">Matrícula:</label>
                    <input type="text" class="form-control" id="nr_matricula" placeholder="N°" maxlength="10">
                  </div>
                  <div class="form-group">
                    <label for="semestre">Semestre:</label>
                    <input type="text" class="form-control" id="semestre" maxlength="2">
                  </div>
                  <div class="form-group">
                    <label for="nr_matricula">Matrícula:</label>
                    <input type="text" class="form-control" id="nr_matricula" placeholder="N°" maxlength="10">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="rede_social" class="form-control" placeholder="Digite a rede social...">
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="observacoes">Observações</label>
                      <textarea class="form-control" rows="3" id="observacoes" name="observacoes" placeholder="De forma resumida, insira as observações ..."></textarea>
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
