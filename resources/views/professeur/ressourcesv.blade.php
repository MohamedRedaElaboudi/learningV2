@extends('layout.sidebar')

@section('content')
    <div class="header p-4 bg-blue-500 text-white">
        <h1 class="text-xl font-bold">Gestion des Ressources </h1>
    </div>

    <div class="p-4">
        <!-- Onglets de navigation -->
        <div class="flex mb-4">
            <a href="#cours" class="bg-blue-500 text-white px-6 py-2 rounded-t-lg">Cours</a>
            <a href="#td" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-t-lg ml-1">TD</a>
            <a href="#tp" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-t-lg ml-1">TP</a>
            <a href="#publications" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-t-lg ml-1">Publications</a>
            <div class="flex-grow"></div>
            <button class="bg-green-500 text-white px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-plus mr-2"></i> Nouveau
            </button>
        </div>

        <!-- Formulaire d'ajout de ressource -->
        <div class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-700">
            <h2 class="text-lg font-semibold mb-4">Ajouter un nouveau cours</h2>
            
            <form s method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-4">
                    <label for="titre" class="block mb-2">Titre du cours:</label>
                    <input type="text" id="titre" name="titre" class="w-full p-2 border rounded dark:bg-gray-800 dark:border-gray-600" 
                           placeholder="ex: Concepts avancés de programmation orientée objet">
                </div>
                
                <div class="mb-4 grid grid-cols-2 gap-4">
                    <div>
                        <label for="classe" class="block mb-2">Classe:</label>
                        <div class="relative">
                            <select id="classe" name="classe" class="w-full p-2 border rounded appearance-none dark:bg-gray-800 dark:border-gray-600">
                                <option value="L3 Informatique">L3 Informatique</option>
                                <option value="M1 Informatique">M1 Informatique</option>
                                <option value="M2 Informatique">M2 Informatique</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="type" class="block mb-2">Type:</label>
                        <div class="relative">
                            <select id="type" name="type" class="w-full p-2 border rounded appearance-none dark:bg-gray-800 dark:border-gray-600">
                                <option value="Cours">Cours</option>
                                <option value="TD">TD</option>
                                <option value="TP">TP</option>
                                <option value="Publication">Publication</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="description" class="block mb-2">Description:</label>
                    <textarea id="description" name="description" rows="5" 
                              class="w-full p-2 border rounded dark:bg-gray-800 dark:border-gray-600"
                              placeholder="Description détaillée du contenu du cours..."></textarea>
                </div>
                
                <div class="mb-6">
                    <label for="fichier" class="block mb-2">Fichier:</label>
                    <div class="border rounded p-2 text-gray-500 dark:border-gray-600 dark:text-gray-400">
                        <input type="file" id="fichier" name="fichier" class="hidden">
                        <label for="fichier" class="cursor-pointer">Aucun fichier sélectionné</label>
                    </div>
                </div>
                
                <div class="flex justify-end space-x-2">
                    <button type="button" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 transition duration-200">
                        Parcourir
                    </button>
                    <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition duration-200">
                        Publier
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Liste des ressources -->
        <div class="mt-8">
            <h2 class="text-lg font-semibold mb-4">Ressources disponibles</h2>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden dark:bg-gray-700">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-800">
                            <th class="py-3 px-4 text-left">Titre</th>
                            <th class="py-3 px-4 text-left">Type</th>
                            <th class="py-3 px-4 text-left">Classe</th>
                            <th class="py-3 px-4 text-left">Date de publication</th>
                            <th class="py-3 px-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-gray-200 dark:border-gray-600">
                            <td class="py-3 px-4">Introduction à la programmation orientée objet</td>
                            <td class="py-3 px-4">Cours</td>
                            <td class="py-3 px-4">L3 Informatique</td>
                            <td class="py-3 px-4">10/05/2025</td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-eye"></i></button>
                                    <button class="text-green-500 hover:text-green-700"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-200 dark:border-gray-600">
                            <td class="py-3 px-4">Exercices sur l'héritage et le polymorphisme</td>
                            <td class="py-3 px-4">TD</td>
                            <td class="py-3 px-4">L3 Informatique</td>
                            <td class="py-3 px-4">08/05/2025</td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-eye"></i></button>
                                    <button class="text-green-500 hover:text-green-700"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-200 dark:border-gray-600">
                            <td class="py-3 px-4">TP: Implémentation d'un modèle MVC</td>
                            <td class="py-3 px-4">TP</td>
                            <td class="py-3 px-4">L3 Informatique</td>
                            <td class="py-3 px-4">05/05/2025</td>
                            <td class="py-3 px-4">
                                <div class="flex space-x-2">
                                    <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-eye"></i></button>
                                    <button class="text-green-500 hover:text-green-700"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('extra_js')
<script>
    // Script pour gérer l'affichage du nom de fichier sélectionné
    document.getElementById('fichier').addEventListener('change', function(e) {
        const fileName = e.target.files[0] ? e.target.files[0].name : 'Aucun fichier sélectionné';
        e.target.nextElementSibling.textContent = fileName;
    });
    
    // Script pour gérer les onglets
    document.querySelectorAll('.tabs a').forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Réinitialiser tous les onglets
            document.querySelectorAll('.tabs a').forEach(t => {
                t.classList.remove('bg-blue-500', 'text-white');
                t.classList.add('bg-gray-200', 'text-gray-700');
            });
            
            // Activer l'onglet cliqué
            this.classList.remove('bg-gray-200', 'text-gray-700');
            this.classList.add('bg-blue-500', 'text-white');
        });
    });
</script>
@endsection