<div class="content-wrapper">
   <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Relatórios Pessoas</h1>
            </div>
        </div>
    </div>
    </section>
   <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Preencha os filtros para gerar o relatório de pessoas</h3>
                        </div>

                        <form>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="dt_cadastro">Data de cadastro</label>
                                            <input type="text" class="form-control" id="dt_cadastro">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="categoria">Categoria</label>
                                        <input type="text" class="form-control" id="categoria" name="categoria"/>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exemplo">exemplo</label>
                                            <input type="text" class="form-control" id="exemplo" name="exemplo" >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="tp_saida">Tipo de saída</label>
                                            <select class="form-control">
                                                <option>PDF</option>
                                                <option>EXCEL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary btn btn-success"><i class="fas fa-file-download mr-2"></i>Gerar Relatório</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>