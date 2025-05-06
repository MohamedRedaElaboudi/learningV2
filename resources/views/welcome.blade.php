<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edu+ - Apprendre partout, à tout moment</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans dark:bg-gray-800 dark:text-gray-100 transition-colors duration-200">

  <x-navbar></x-navbar>

  <!-- Hero section -->
  <section class="bg-indigo-100 dark:bg-indigo-900 py-20 transition-colors duration-200">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold text-indigo-700 dark:text-indigo-300 mb-4">Bienvenue sur Edu+</h2>
      <p class="text-lg text-indigo-800 dark:text-indigo-200 mb-6">Apprenez à votre rythme, où que vous soyez.</p>
      <a href="#" class="bg-blue-600 dark:bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition">
        Explorer les cours
      </a>
    </div>
  </section>

  <!-- Cours populaires -->
  <section class="py-16 bg-white dark:bg-gray-700 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-6">
      <h3 class="text-3xl font-semibold text-center mb-10 text-gray-800 dark:text-gray-100">Cours populaires</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-gray-100 dark:bg-gray-600 p-6 rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-bold mb-2 text-gray-800 dark:text-gray-100">Introduction à HTML & CSS</h4>
          <p class="text-gray-600 dark:text-gray-300">Apprenez à créer des sites web modernes dès aujourd'hui.</p>
        </div>
        <div class="bg-gray-100 dark:bg-gray-600 p-6 rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-bold mb-2 text-gray-800 dark:text-gray-100">Débuter avec Python</h4>
          <p class="text-gray-600 dark:text-gray-300">Maîtrisez les bases de la programmation avec Python.</p>
        </div>
        <div class="bg-gray-100 dark:bg-gray-600 p-6 rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-bold mb-2 text-gray-800 dark:text-gray-100">UX/UI Design</h4>
          <p class="text-gray-600 dark:text-gray-300">Découvrez les fondamentaux de l'expérience utilisateur.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <x-footer></x-footer>

</body>
</html>