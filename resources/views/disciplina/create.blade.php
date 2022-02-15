@extends('template.main')
@extends('template.menu')
@section('title','Cadastro de disicplinas')
@section('content')
@section('menu')
@stop
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cadastro de Disciplinas</h1>
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
                            <h3 class="card-title">Informe os dados da disciplina</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{route('disciplina.salvar')}}">
                          @csrf
                            <div class="card-body">
                              @if($errors->any())
                              <div class="message message-danger message-visible "  id="message">
                                <ul>
                                  @foreach($errors->all() as $error)
                                  <li>{{$error}}</li>
                                  @endforeach
                                </ul>
                              </div>
                              @endif

                              @if(session('sucesso'))
                              <div class="message message-success message-visible">
                                <p>
                                  <i class="fa fa-check-cicle">

                                </i>{{session('sucesso')}}</p>
                              </div>
                              @endif
                                <div class="form-group">
                                    <label for="nome">Disicplina</label>
                                    <input name="nome" type="text" class="form-control" id="nome"
                                        placeholder="Digite o nome da disciplina">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Sigla</label>
                                    <input name="sigla" type="text" class="form-control" id="sigla"
                                        placeholder="Digite a sigla (combinacao das inicias)">
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