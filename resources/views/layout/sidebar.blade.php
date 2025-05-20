<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu+ , apprendre partout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <!-- Icônes Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            background-color: #1e293b;
            color: white;
            min-height: 100vh;
            padding: 0;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar .logo {
            background-color: #0f172a;
            padding: 18px 20px;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 0.5px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar .nav-item {
            margin: 5px 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .sidebar .nav-item.active {
            background-color: #3b82f6;
            box-shadow: 0 4px 6px rgba(59, 130, 246, 0.25);
        }
        
        .sidebar .nav-item:hover:not(.active) {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar .nav-item a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 16px;
            font-weight: 500;
            border-radius: 8px;
        }
        
        .sidebar .nav-item a i {
            margin-right: 12px;
            font-size: 18px;
            width: 20px;
            text-align: center;
        }
        
        .sidebar .user-info {
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 15px;
        }
        
        .sidebar .user-info .name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 4px;
        }
        
        .sidebar .user-info .subject {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .main-content {
            padding: 0;
        }
        
        .header {
            background-color: #3b82f6;
            color: white;
            padding: 14px 20px;
            font-weight: bold;
            letter-spacing: 0.5px;
            border-radius: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .dashboard-stats {
            margin: 20px 0;
        }
        
        .stat-box {
            background-color: white;
            border-radius: 10px;
            padding: 24px;
            margin: 10px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .dark .stat-box {
            background-color: #2d3748;
        }
        
        .stat-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }
        
        .stat-box .number {
            font-size: 32px;
            font-weight: bold;
            margin: 10px 0;
        }
        
        .stat-box .number.green {
            color: #10b981;
        }
        
        .stat-box .number.blue {
            color: #3b82f6;
        }
        
        .stat-box .number.red {
            color: #ef4444;
        }
        
        .activity-list {
            margin: 20px 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .activity-item {
            padding: 16px 20px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            transition: background-color 0.2s ease;
        }
        
        .dark .activity-item {
            background-color: #2d3748;
            border-bottom: 1px solid #4a5568;
        }
        
        .activity-item:hover {
            background-color: #f9fafb;
        }
        
        .dark .activity-item:hover {
            background-color: #374151;
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .btn-action {
            padding: 8px 16px;
            color: white;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .btn-respond {
            background-color: #3b82f6;
        }
        
        .btn-respond:hover {
            background-color: #2563eb;
        }
        
        .btn-consult {
            background-color: #10b981;
        }
        
        .btn-consult:hover {
            background-color: #059669;
        }
        
        .btn-manage {
            background-color: #10b981;
        }
        
        .btn-manage:hover {
            background-color: #059669;
        }
    </style>
    @yield('extra_css')
</head>
<body class="bg-gray-50 text-gray-800 font-sans dark:bg-gray-800 dark:text-gray-100">
    <!-- Include your existing navbar -->
    @include('components.navbar')

    <div class="container-fluid">
        <div class="row flex">
            <!-- Sidebar -->
            <div class="w-1/5 sidebar">
               
                <div class="user-info">
                    <div class="name">Prof. BENNANE Salma</div>
                    <div class="subject">Informatique</div>
                </div>
                <div class="nav-item @if(request()->is('tableau-de-bord')) active @endif">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        Tableau de bord
                    </a>
                </div>
                <div class="nav-item @if(request()->is('classes')) active @endif">
                    <a href="{{ route('classes') }}">
                        <i class="fas fa-users"></i>
                        Mes Classes
                    </a>
                </div>
                <div class="nav-item @if(request()->is('ressources')) active @endif">
                    <a href="{{ route('ressources') }}">
                        <i class="fas fa-book"></i>
                        Ressources
                    </a>
                </div>
                
                <div class="nav-item @if(request()->is('parametres')) active @endif">
                    <a href="{{ route('parametres') }}">
                        <i class="fas fa-cog"></i>
                        Paramètres
                    </a>
                </div>
            </div>
            
            <!-- Main content -->
            <div class="w-4/5 main-content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Include your existing footer -->
    @include('components.footer')

    <script>
        function checkDarkMode() {
            if (localStorage.getItem('darkMode') === 'true' || 
                (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
            updateDarkModeIcon();
        }
        
        function toggleDarkMode() {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', isDark);
            updateDarkModeIcon();
        }
        
        // Met à jour l'icône
        function updateDarkModeIcon() {
            const isDark = document.documentElement.classList.contains('dark');
            document.getElementById('sun-icon').classList.toggle('hidden', isDark);
            document.getElementById('moon-icon').classList.toggle('hidden', !isDark);
        }
        
        // Écoute les changements de préférence système
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!localStorage.getItem('darkMode')) {
                checkDarkMode();
            }
        });
        
        // Initialisation
        document.addEventListener('DOMContentLoaded', checkDarkMode);
    </script>
    @yield('extra_js')
</body>
</html>