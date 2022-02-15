@extends('template.main')
@extends('template.menu')
@section('title','Cadastro de alunos')
@section('content')

<div class="content-wrapper">
    <section class="content-header  py-1 mx-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h4>Cadastro de Alunos</h4>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    {{--  content form --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5 class="card-title"><strong>Informe os dados do aluno</strong></h5>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="">
                            <div class="card-body py-2">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="nome">Nome </label>
                                        <input name="nome" type="text" class="form-control" id="nome"
                                            placeholder="Digite o nome">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="apelido">Apelido</label>
                                        <input name="apelido" type="text" class="form-control" id="apelido"
                                            placeholder="Digite o apelido">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="data">Data de Nascimento </label>
                                        <input name="data" type="date" class="form-control" id="data">
                                    </div>



                                    <div class="form-group col-md-6">
                                        <label for="sexo">Sexo</label>
                                        <select name="sexo" class="form-control select2 select2-hidden-accessible"
                                            style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="M" selected="selected">Masculino</option>
                                            <option value="F">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="bairro">Cidade</label>
                                        <select name="cidade" class="form-control select2 select2-hidden-accessible"
                                            style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            {{$cont=0}}
                                            @foreach ($cidades as $cidade)

                                            <option @if($cont==0) selected="selected" @endif data-select2-id="3"
                                                value="{{$cidade->id}}">{{$cidade->nome}}</option>
                                            {{$cont++}}
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="bairro">Bairro</label>
                                        <input name="bairro" type="text" class="form-control" id="bairro"
                                            placeholder="Digite o bairro">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="quarteirao">Quarteirao</label>
                                        <input name="quarteirao" type="number" class="form-control" id="bairro"
                                            placeholder="Digite o numero do quarteirao">
                                    </div>



                                    <div class="form-group col-md-3">
                                        <label for="casa">Nr. Casa</label>
                                        <input name="casa" type="number" class="form-control" id="casa"
                                            placeholder="Digite o nr da casa">
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <label for="cell1">Telefone-1</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+258</span>
                                            </div>

                                            <input name="cell1" type="text" class="form-control"
                                                placeholder="Digite o numero de telefone 1">
                                        </div>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cell2">Telefone-2</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+258</span>
                                            </div>
                                            <input name="cell2" type="text" class="form-control"
                                                placeholder="Digite o numero de telefone alternativo">
                                        </div>

                                    </div>
                                    <div class="form-group col-md-4">

                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control"
                                            placeholder="Digite o email">
                                    </div>

                                </div>
                               


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">

                                <button type="submit" class="btn btn-primary btn-sm ">Salvar</button>
                                <button type="reset" class="btn btn-danger btn-sm mx-3">Cancelar</button>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection