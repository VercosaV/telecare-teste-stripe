<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>TeleCare</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Inria+Sans:wght@400;700&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    @stack('css')

    <style>
        :root {
            --body-size-medium: 16px;
            --space-300: 15px;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .font-inria {
            font-family: 'Inria Sans', sans-serif;
        }
    </style>
</head>

<body style="display: flex; min-height: 100vh; margin: 0;">

    <aside class="w-full xl:w-[300px] bg-[#eef7ff] shadow-lg flex flex-col p-6 shrink-0 xl:sticky xl:top-0 xl:h-screen">
        <!-- Logo -->
        <a href="#" class="flex justify-center mb-10">
            <img src="{{ asset('images/auth/logotipo.png') }}" alt="Logotipo Telecare">
        </a>

        <!-- Navegação -->
        <nav class="flex flex-col gap-3 mb-10">
            <a href="#"
                class="h-[50px] flex justify-center items-center rounded-[15px] bg-[#95b8a0] text-white text-[20px] font-semibold transition hover:opacity-90">Início</a>
            <a href="#"
                class="h-[50px] flex justify-center items-center rounded-[15px] bg-white text-black text-[20px] transition hover:bg-gray-50">Agenda</a>
            <a href="{{ route('pacientes.index') }}"
                class="h-[50px] flex justify-center items-center rounded-[15px] bg-white text-black text-[20px] transition hover:bg-gray-50">Pacientes</a>
            <a href="#"
                class="h-[50px] flex justify-center items-center rounded-[15px] bg-white text-black text-[20px] transition hover:bg-gray-50">Profissionais</a>
            <a href="#"
                class="h-[50px] flex justify-center items-center rounded-[15px] bg-white text-black text-[20px] transition hover:bg-gray-50">Configurações</a>
        </nav>

        <div class="mt-auto"></div> <!-- Espaçador para jogar o perfil para baixo -->

        <!-- Perfil do Doutor -->
        <div class="flex items-center gap-4 mb-6">
            <img class="w-[74px] h-[74px] rounded-full object-cover bg-gray-200"
                src="data:image/png;base64,…(icon-doctor.png)" alt="Icon Doctor">
            <div>
                <p class="text-[20px] font-normal leading-tight">Admin<br>Dr. José Zé de Zezé</p>
                <p class="text-[var(--body-size-medium)] text-gray-700 mt-1">CRM: 707530</p>
            </div>
        </div>

        <!-- Sair -->
        <a href="#"
            class="flex items-center gap-3 text-[var(--body-size-medium)] text-black hover:text-red-600 transition">
            <img class="w-[30px] h-[30px]" src="data:image/svg+xml;base64,…(log-out.svg)" alt="Log out">
            <span>Sair do Sistema</span>
        </a>
    </aside>

    <!-- CONTEÚDO DINÂMICO -->
    <main class="main-content" style="flex: 1; padding: 20px;">
        
        @yield('content')
    </main>

</body>

</html>
