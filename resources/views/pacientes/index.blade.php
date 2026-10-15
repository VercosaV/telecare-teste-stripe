@extends('layouts.app')

@push('css')
    @vite(['resources/css/app.css'])
@endpush

@section('content')
    <div class="dashboard-container">

        <!-- Menu Lateral (Sidebar) -->
        <aside class="sidebar">
            <div class="sidebar-logo">
                <img src="{{ asset('images/auth/logotipo.png') }}"
                    onerror="this.src='https://placehold.co/215x166?text=Logo+TeleCare'" alt="Logo TeleCare">
            </div>

            <nav class="sidebar-nav">
                <ul>
                    <li><a href="{{ route('dashboard') }}" class="nav-item">Início</a></li>
                    <li><a href="#" class="nav-item">Agenda</a></li>
                    <li><a href="#" class="nav-item active">Pacientes</a></li>
                    <li><a href="#" class="nav-item">Profissionais</a></li>
                    <li><a href="#" class="nav-item">Configurações</a></li>
                </ul>
            </nav>

            <div class="sidebar-footer">
                <div class="user-info">
                    <img src="{{ asset('images/paciente/medico.png') }}" alt="Foto Admin" class="user-avatar">
                    <div class="user-details">
                        <span class="user-role">Admin</span>
                        <span class="user-name">Dr. José Zé de Zezé</span>
                        <span class="user-crm">CRM: 707530</span>
                    </div>
                </div>
                <a href="#" class="logout-link">
                    <img src="{{ asset('images/paciente/Log out.svg') }}" onerror="this.style.display='none'" alt="Sair"
                        class="icon-sair">
                    Sair do Sistema
                </a>
            </div>
        </aside>

        <!-- Conteúdo Principal -->
        <main class="main-content">
            <div class="content-wrapper">

                @if (session('mensagem'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('mensagem') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Cabeçalho da Página -->
                <header class="page-header">
                    <div class="header-title-group">

                        <a href="{{ route('dashboard') }}" class="btn-back">
                            <img src="{{ asset('images/paciente/Arrow 1.svg') }}" alt="Voltar">
                        </a>

                        <div>
                            <h1 class="page-title">Lista de Pacientes</h1>
                            <p class="page-subtitle">Consulte seus pacientes</p>
                        </div>
                    </div>
                    <button class="btn-novo">Novo</button>
                </header>

                <!-- Lista de Pacientes -->
                <section class="patient-list">

                    <!-- Utilize um foreach do Blade aqui para gerar a lista a partir do banco -->
                    {{-- @foreach ($pacientes as $paciente) --}}
                    <article class="patient-card">
                        <img src="{{ asset('images/paciente/acount.png') }}" alt="Foto do Paciente" class="patient-avatar">

                        <div class="patient-info">
                            <h2 class="patient-name">Paciente Teste</h2>
                            <div class="patient-meta">
                                <span class="patient-cpf">CPF: 999.999.999-99</span>
                                <span class="patient-birth">Nascimento: 01/01/1990</span>
                            </div>
                        </div>

                        <button class="btn-options">
                            <img src="{{ asset('images/paciente/More vertical.svg') }}"
                                onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' width=\'24\' height=\'24\' fill=\'none\' stroke=\'black\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'><circle cx=\'12\' cy=\'12\' r=\'1\'></circle><circle cx=\'12\' cy=\'5\' r=\'1\'></circle><circle cx=\'12\' cy=\'19\' r=\'1\'></circle></svg>'"
                                alt="Opções">
                        </button>
                    </article>
                    {{-- @endforeach --}}

                    <!-- Cópias estáticas apenas para simular a lista visualmente -->
                    <article class="patient-card">
                        <img src="https://placehold.co/42x42" alt="Foto do Paciente" class="patient-avatar">
                        <div class="patient-info">
                            <h2 class="patient-name">Paciente Teste</h2>
                            <div class="patient-meta">
                                <span class="patient-cpf">CPF: 999.999.999-99</span>
                                <span class="patient-birth">Nascimento: 01/01/1990</span>
                            </div>
                        </div>
                        <button class="btn-options">
                            <img src="{{ asset('images/paciente/More vertical.svg') }}"
                                onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' width=\'24\' height=\'24\' fill=\'none\' stroke=\'black\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'><circle cx=\'12\' cy=\'12\' r=\'1\'></circle><circle cx=\'12\' cy=\'5\' r=\'1\'></circle><circle cx=\'12\' cy=\'19\' r=\'1\'></circle></svg>'"
                                alt="Opções">
                        </button>
                    </article>

                    <article class="patient-card">
                        <img src="https://placehold.co/42x42" alt="Foto do Paciente" class="patient-avatar">
                        <div class="patient-info">
                            <h2 class="patient-name">Paciente Teste</h2>
                            <div class="patient-meta">
                                <span class="patient-cpf">CPF: 999.999.999-99</span>
                                <span class="patient-birth">Nascimento: 01/01/1990</span>
                            </div>
                        </div>
                        <button class="btn-options">
                            <img src="{{ asset('images/paciente/More vertical.svg') }}"
                                onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' width=\'24\' height=\'24\' fill=\'none\' stroke=\'black\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'><circle cx=\'12\' cy=\'12\' r=\'1\'></circle><circle cx=\'12\' cy=\'5\' r=\'1\'></circle><circle cx=\'12\' cy=\'19\' r=\'1\'></circle></svg>'"
                                alt="Opções">
                        </button>
                    </article>

                </section>
            </div>
        </main>
    </div>
@endsection
