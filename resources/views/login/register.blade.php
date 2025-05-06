<x-navbar></x-navbar>

<div class="bg-blue-100 min-h-screen flex items-center justify-center px-4 py-8">
    <div class="w-full max-w-md bg-white rounded-lg shadow dark:bg-gray-800 dark:border dark:border-gray-700 p-6 md:p-8">
        <a href="#" class="flex justify-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            Edu<span class="text-blue-600">Plus</span>
        </a>

        <h1 class="text-xl font-bold text-center text-gray-900 dark:text-white mb-4">Créer un compte</h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-900 dark:text-white mb-1">Nom</label>
                <input type="text" id="name" name="name" placeholder="Entrez votre nom"
                    class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="lastName" class="block text-sm font-medium text-gray-900 dark:text-white mb-1">Prénom</label>
                <input type="text" id="lastName" name="lastName" placeholder="Entrez votre prénom"
                    class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-900 dark:text-white mb-1">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email"
                    class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-900 dark:text-white mb-1">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe"
                    class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="confirmPassword" class="block text-sm font-medium text-gray-900 dark:text-white mb-1">Confirmez le mot de passe</label>
                <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirmez votre mot de passe"
                    class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Créer un compte</button>

            <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                Vous avez déjà un compte ?
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline dark:text-blue-400"> Se connecter</a>
            </p>
        </form>
    </div>
</div>

<x-footer></x-footer>
