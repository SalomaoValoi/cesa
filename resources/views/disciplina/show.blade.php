@extends('template.main')
@extends('template.menu')
@section('title','Disciplinas')
@section('content')
@section('menu')
@endsection
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista das Disciplinas</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Disciplinas</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="card-body table-responsive p-0" >
                                <table class="table table-striped table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Codigo</th>
                                            <th>Disicplina</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($disciplinas as $disc)
                                        <tr>
                                            <td>{{$disc->id}}</td>
                                            <td>{{$disc->sigla}}</td>
                                            <td>{{$disc->nome}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex ">
                            {{$disciplinas->links() }}
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection