<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edu+ - Espace Étudiant</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>
  <!-- Icônes Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800 font-sans dark:bg-gray-800 dark:text-gray-100">

  <!-- Navbar -->
  <nav class="bg-white dark:bg-gray-900 shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logo -->
      <a href="{{route('Acceuil')}}" class="text-2xl font-bold text-gray-900 dark:text-white">
        Edu<span class="text-indigo-600 dark:text-indigo-400">+</span>
      </a>
  
      <!-- Bouton menu mobile -->
      <input type="checkbox" id="menu-toggle" class="peer hidden" />
      <label for="menu-toggle" class="md:hidden cursor-pointer text-gray-700 dark:text-gray-200">
        <i class="fas fa-bars fa-lg"></i>
      </label>
  
      <!-- Menu -->
      <div class="hidden md:flex space-x-6 text-gray-900 dark:text-white font-medium">
        <a href="{{ route('Acceuil') }}" class="hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
          <i class="fas fa-home mr-2"></i> Accueil
        </a>
        <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
          <i class="fas fa-book mr-2"></i> Mes cours
        </a>
        <a href="{{ route('cours.rejoindreshow') }}" class="hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
          <i class="fas fa-plus-circle mr-2"></i> Rejoindre un cours
        </a>
        <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
          <i class="fas fa-info-circle mr-2"></i> À propos
        </a>
      </div>
  
      <!-- Bouton pour basculer entre le mode clair et sombre -->
      <button onclick="toggleDarkMode()" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 dark:text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path id="sun-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
          <path id="moon-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
      </button>
    </div>
  </nav>

  <!-- Menu mobile -->
  <div class="peer-checked:flex hidden flex-col md:hidden px-4 pb-4 text-gray-700 dark:text-gray-200 space-y-2 font-medium">
    <a href="{{ route('Acceuil') }}" class="hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
      <i class="fas fa-home mr-2"></i> Accueil
    </a>
    <a href="{{route('cours.mescours')}}" class="hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
      <i class="fas fa-book mr-2"></i> Mes cours
    </a>
    <a href="{{ route('cours.rejoindreshow') }}" class="hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
      <i class="fas fa-plus-circle mr-2"></i> Rejoindre un cours
    </a>
    <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
      <i class="fas fa-info-circle mr-2"></i> À propos
    </a>
  </div>

  <script>
    // Vérifie le mode au chargement
    function checkDarkMode() {
      if (localStorage.getItem('darkMode') === 'true' || 
          (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
      updateDarkModeIcon();
    }

    // Bascule entre dark/light
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

</body>
</html>
