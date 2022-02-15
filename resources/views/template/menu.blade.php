
<aside class="main-sidebar sidebar-bg elevation-1 ">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('assets')}}/img/logo.png" alt="CESA Logo" class="brand-image img-circle elevation-1" style="opacity: .5">
        <span class="brand-text font-weight-light">CESA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-close">
                    <span class="nav-link active">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Cadastros
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </span>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/classes/create" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Classes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/classes/create" class="nav-link">
                                <i class="far fa fa-graduation-cap nav-icon"></i>
                                <p>Turmas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('disciplina.nova')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Disciplinas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('aluno.novo')}}" class="nav-link">
                                <i class="far fas fa-user-friends nav-icon"></i>
                                <p>Alunos</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview menu-close">
                    <span class="nav-link active">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Listar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </span>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/classes/create" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Classes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/classes/create" class="nav-link">
                                <i class="far fa fa-graduation-cap nav-icon"></i>
                                <p>Turmas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/disciplinas" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Disciplinas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/alunos/create" class="nav-link">
                                <i class="far fas fa-user-friends nav-icon"></i>
                                <p>Alunos</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>