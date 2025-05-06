<x-navbar></x-navbar>

<div class="min-h-screen bg-blue-50 flex items-center justify-center px-4 py-8">
    <div class="w-full max-w-md bg-white rounded-lg shadow dark:bg-gray-800 dark:border dark:border-gray-700">
        <a href="#" class="flex justify-center mt-6 text-2xl font-semibold text-gray-900 dark:text-white">
            Edu<span class="text-blue-600">Plus</span>
        </a>

        <div class="p-6 space-y-6">
            <h1 class="text-xl font-bold text-center text-gray-900 dark:text-white">
                Connectez-vous à votre compte
            </h1>

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900 dark:text-white mb-1">
                        Votre email
                    </label>
                    <input type="email" name="email" id="email" required placeholder="name@company.com"
                        class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-900 dark:text-white mb-1">
                        Mot de passe
                    </label>
                    <input type="password" name="password" id="password" required placeholder="••••••••"
                        class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center">
                        <input id="remember" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-50 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 focus:ring-2 focus:ring-blue-500">
                        <span class="ml-2 text-gray-600 dark:text-gray-300">Se souvenir de moi</span>
                    </label>
                    <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">Mot de passe oublié ?</a>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Se connecter
                </button>

                <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                    Vous n'avez pas encore de compte ?
                    <a href="{{ route('showRegistrationForm') }}" class="text-blue-600 hover:underline dark:text-blue-400"> S'inscrire</a>
                </p>
            </form>
        </div>
    </div>
</div>

<x-footer></x-footer>
