@extends('layout.sidebar')

@section('content')
<div class="header bg-blue-500">
    <h1 class="text-xl">Gestion des Classes</h1>
</div>

<div class="p-6">
    <!-- Filtres et recherche -->
    <div class="flex flex-wrap justify-between items-center mb-6">
        <div class="w-full md:w-1/2 mb-4 md:mb-0">
            <div class="relative">
                <input type="text" placeholder="Rechercher une classe..." class="w-full py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
            </div>
        </div>
        <div class="flex space-x-2">
            <button class="btn-action bg-blue-500 hover:bg-blue-600 flex items-center" id="newClassBtn">
                <i class="fas fa-plus mr-2"></i> Nouvelle Classe
            </button>
            <button class="btn-action bg-gray-500 hover:bg-gray-600 flex items-center">
                <i class="fas fa-filter mr-2"></i> Filtres
            </button>
        </div>
    </div>

    <!-- Liste des classes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Classe 1 -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="bg-blue-500 text-white p-4">
                <h3 class="font-bold text-lg">L3 Informatique</h3>
            </div>
            <div class="p-4">
                <div class="flex items-center mb-3">
                    <i class="fas fa-users text-gray-500 dark:text-gray-300 mr-2"></i>
                    <span class="dark:text-gray-200">28 étudiants</span>
                </div>
                <div class="flex items-center mb-4">
                    <i class="fas fa-book text-gray-500 dark:text-gray-300 mr-2"></i>
                    <span class="dark:text-gray-200">5 cours actifs</span>
                </div>
                <div class="flex justify-between mt-4">
                    <button class="btn-action btn-consult">
                        <i class="fas fa-eye mr-1"></i> Voir détails
                    </button>
                    <button class="btn-action btn-manage">
                        <i class="fas fa-cog mr-1"></i> Gérer
                    </button>
                </div>
            </div>
        </div>

        <!-- Classe 2 -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="bg-blue-500 text-white p-4">
                <h3 class="font-bold text-lg">M1 Informatique</h3>
            </div>
            <div class="p-4">
                <div class="flex items-center mb-3">
                    <i class="fas fa-users text-gray-500 dark:text-gray-300 mr-2"></i>
                    <span class="dark:text-gray-200">22 étudiants</span>
                </div>
                <div class="flex items-center mb-4">
                    <i class="fas fa-book text-gray-500 dark:text-gray-300 mr-2"></i>
                    <span class="dark:text-gray-200">3 cours actifs</span>
                </div>
                <div class="flex justify-between mt-4">
                    <button class="btn-action btn-consult">
                        <i class="fas fa-eye mr-1"></i> Voir détails
                    </button>
                    <button class="btn-action btn-manage">
                        <i class="fas fa-cog mr-1"></i> Gérer
                    </button>
                </div>
            </div>
        </div>

        <!-- Classe 3 -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="bg-blue-500 text-white p-4">
                <h3 class="font-bold text-lg">L2 Informatique</h3>
            </div>
            <div class="p-4">
                <div class="flex items-center mb-3">
                    <i class="fas fa-users text-gray-500 dark:text-gray-300 mr-2"></i>
                    <span class="dark:text-gray-200">34 étudiants</span>
                </div>
                <div class="flex items-center mb-4">
                    <i class="fas fa-book text-gray-500 dark:text-gray-300 mr-2"></i>
                    <span class="dark:text-gray-200">4 cours actifs</span>
                </div>
                <div class="flex justify-between mt-4">
                    <button class="btn-action btn-consult">
                        <i class="fas fa-eye mr-1"></i> Voir détails
                    </button>
                    <button class="btn-action btn-manage">
                        <i class="fas fa-cog mr-1"></i> Gérer
                    </button>
                </div>
            </div>
        </div>

        <!-- Classe 4 -->
         <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="bg-blue-500 text-white p-4">
                <h3 class="font-bold text-lg">M2 Intelligence Artificielle</h3>
            </div>
    
            <div class="p-4">
                <div class="flex items-center mb-3">
                    <i class="fas fa-users text-gray-500 dark:text-gray-300 mr-2"></i>
                    <span class="dark:text-gray-200">18 étudiants</span>
                </div>
                <div class="flex items-center mb-4">
                    <i class="fas fa-book text-gray-500 dark:text-gray-300 mr-2"></i>
                    <span class="dark:text-gray-200">2 cours actifs</span>
                </div>
                <div class="flex justify-between mt-4">
                    <button class="btn-action btn-consult">
                        <i class="fas fa-eye mr-1"></i> Voir détails
                    </button>
                    <button class="btn-action btn-manage">
                        <i class="fas fa-cog mr-1"></i> Gérer
                    </button>
                </div>
            </div>
        </div>

        <!-- Classe 5 - Cours archivé -->
         <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="bg-blue-500 text-white p-4">
                <h3 class="font-bold text-lg">L1 Introduction Informatique</h3>
            </div>
         
        
            <div class="p-4">
                <div class="flex items-center mb-3">
                    <i class="fas fa-users text-gray-500 dark:text-gray-300 mr-2"></i>
                    <span class="dark:text-gray-200">42 étudiants</span>
                </div>
                <div class="flex items-center mb-4">
                    <i class="fas fa-book text-gray-500 dark:text-gray-300 mr-2"></i>
                    <span class="dark:text-gray-200">6 cours archivés</span>
                </div>
                <div class="flex justify-between mt-4">
                    <button class="btn-action btn-consult">
                        <i class="fas fa-eye mr-1"></i> Voir détails
                    </button>
                    
                        <button class="btn-action btn-manage">
                        <i class="fas fa-cog mr-1"></i> Gérer
                    
                    </button>
                </div>
            </div>
        </div>

        <!-- Ajouter une nouvelle classe (carte) -->
        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border-2 border-dashed border-gray-300 dark:border-gray-600 flex items-center justify-center" style="min-height: 250px;">
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-plus text-blue-500 text-2xl"></i>
                </div>
                <h3 class="font-bold text-lg text-gray-800 dark:text-gray-200 mb-2">Nouvelle Classe</h3>
                <p class="text-gray-500 dark:text-gray-400 mb-4">Ajouter une nouvelle classe à gérer</p>
                <button class="btn-action bg-blue-500 hover:bg-blue-600" id="createClassBtn">
                    <i class="fas fa-plus mr-2"></i> Créer
                </button>
            </div>
        </div>
    </div>
    
    <!-- Pagination -->
    <div class="flex justify-center mt-8">
        <nav class="inline-flex rounded-md shadow-sm">
            <a href="#" class="py-2 px-4 bg-white dark:bg-gray-700 text-gray-500 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded-l-md hover:bg-gray-100 dark:hover:bg-gray-600">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a href="#" class="py-2 px-4 bg-blue-500 text-white font-medium border border-blue-500 hover:bg-blue-600">1</a>
            <a href="#" class="py-2 px-4 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600">2</a>
            <a href="#" class="py-2 px-4 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600">3</a>
            <a href="#" class="py-2 px-4 bg-white dark:bg-gray-700 text-gray-500 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded-r-md hover:bg-gray-100 dark:hover:bg-gray-600">
                <i class="fas fa-chevron-right"></i>
            </a>
        </nav>
    </div>
</div>

<!-- Modal de création de classe -->
<div id="createClassModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="fixed inset-0 bg-black bg-opacity-50" id="modalOverlay"></div>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl w-full max-w-md z-10 relative">
        <div class="bg-gray-800 text-white p-4 rounded-t-lg flex justify-between items-center">
            <h3 class="font-bold text-lg">Créer une nouvelle classe</h3>
            <button id="closeModal" class="text-gray-300 hover:text-white">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="p-6">
            <form id="createClassForm">
                <div class="mb-4">
                    <label for="className" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Nom de la classe:</label>
                    <input type="text" id="className" name="className" placeholder="ex: M2 Cybersécurité" 
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="classCode" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Code de la classe:</label>
                    <input type="text" id="classCode" name="classCode" placeholder="ex: CYBER2023" 
                           class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <label for="classDescription" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Description (optionnelle):</label>
                    <textarea id="classDescription" name="classDescription" rows="3" placeholder="Description brève de la classe..." 
                              class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" id="cancelBtn" class="px-4 py-2 bg-gray-300 dark:bg-gray-600 text-gray-800 dark:text-gray-200 rounded-md hover:bg-gray-400 dark:hover:bg-gray-700">
                        Annuler
                    </button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('extra_js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sélecteurs pour les éléments du modal
        const modal = document.getElementById('createClassModal');
        const modalOverlay = document.getElementById('modalOverlay');
        const closeModalBtn = document.getElementById('closeModal');
        const cancelBtn = document.getElementById('cancelBtn');
        const newClassBtn = document.getElementById('newClassBtn');
        const createClassBtn = document.getElementById('createClassBtn');
        const createClassForm = document.getElementById('createClassForm');
        
        // Fonction pour ouvrir le modal
        function openModal() {
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden'); // Empêche le défilement de la page
        }
        
        // Fonction pour fermer le modal
        function closeModal() {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            createClassForm.reset(); // Réinitialiser le formulaire
        }
        
        // Événements pour ouvrir le modal
        newClassBtn.addEventListener('click', openModal);
        createClassBtn.addEventListener('click', openModal);
        
        // Événements pour fermer le modal
        closeModalBtn.addEventListener('click', closeModal);
        modalOverlay.addEventListener('click', closeModal);
        cancelBtn.addEventListener('click', closeModal);
        
        // Gestion de la soumission du formulaire
        createClassForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Récupération des valeurs du formulaire
            const className = document.getElementById('className').value;
            const classCode = document.getElementById('classCode').value;
            const classDescription = document.getElementById('classDescription').value;
            
            // Validation basique
            if (!className || !classCode) {
                alert('Veuillez remplir tous les champs obligatoires.');
                return;
            }
            
            // Traitement du formulaire (à adapter selon votre logique)
            console.log('Classe créée:', {
                nom: className,
                code: classCode,
                description: classDescription
            });
            
            // Exemple: Simuler une création réussie et fermer le modal
            alert('Classe créée avec succès!');
            closeModal();
            
            // Actualiser la page ou ajouter la nouvelle classe dynamiquement
            // window.location.reload(); // Option pour actualiser la page
        });
        
        // Code pour le filtrage et la recherche des classes
        // À implémenter selon vos besoins
    });
</script>
@endsection