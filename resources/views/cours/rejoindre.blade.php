<x-navbar_etudiant />

<div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-800">
    <div class="bg-white dark:bg-gray-700 p-10 rounded-2xl shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-6">
            Rejoindre un cours
        </h1>

        <form method="POST" action="{{route('cours.rejoindre')}}">
            @csrf
            <input type="text" name="code" placeholder="Entrer le code du cours" required
                   class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 mb-5">

            <button type="submit"
                    class="w-full bg-indigo-600 text-white font-semibold py-2.5 rounded-lg hover:bg-indigo-700 transition">
                Confirmer
            </button>
        </form>
    </div>
</div>
<x-footer></x-footer>
