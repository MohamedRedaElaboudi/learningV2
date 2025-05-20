@extends('layout.sidebar')

@section('content')
<div class="header bg-blue-500">
    <h1 class="text-xl">Paramètres du compte</h1>
</div>

<div class="p-6">
    <!-- Onglets de navigation des paramètres -->
    <div class="flex border-b border-gray-300 dark:border-gray-600 mb-6">
        <button class="px-6 py-3 font-medium border-b-2 border-blue-500 text-blue-500 dark:text-blue-400">
            Profil
        </button>
        
    </div>

    <!-- Contenu des paramètres profil -->
    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-6">Informations personnelles</h2>
        
        <div class="flex flex-col md:flex-row mb-6">
            <!-- Avatar et bouton modifier -->
            <div class="flex flex-col items-center mb-6 md:mb-0 md:mr-10">
                <div class="w-40 h-40 rounded-full bg-gray-300 dark:bg-gray-600 overflow-hidden mb-4">
                    <img src="/api/placeholder/200/200" alt="Photo de profil" class="w-full h-full object-cover" />
                </div>
                <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
                    Modifier
                </button>
            </div>
            
            <!-- Formulaire d'informations -->
            <div class="flex-grow">
                <form id="profileForm">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="nom" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Nom:</label>
                            <input type="text" id="nom" name="nom" value="Dupont" 
                                class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-200 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label for="prenom" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Prénom:</label>
                            <input type="text" id="prenom" name="prenom" value="Jean" 
                                class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-200 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Email:</label>
                        <input type="email" id="email" name="email" value="jean.dupont@universite.fr" 
                            class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-200 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div class="mb-6">
                        <label for="biographie" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Biographie:</label>
                        <textarea id="biographie" name="biographie" rows="3" 
                            class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-200 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">Professeur d'informatique spécialisé en bases de données et programmation orientée objet. Docteur en informatique de l'Université de Paris.</textarea>
                    </div>
                    
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded-md">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('extra_js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion des onglets
        const tabs = document.querySelectorAll('.flex.border-b button');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Réinitialiser tous les onglets
                tabs.forEach(t => {
                    t.classList.remove('border-b-2', 'border-blue-500', 'text-blue-500', 'dark:text-blue-400');
                    t.classList.add('text-gray-600', 'dark:text-gray-400');
                });
                
                // Mettre en évidence l'onglet actif
                this.classList.remove('text-gray-600', 'dark:text-gray-400');
                this.classList.add('border-b-2', 'border-blue-500', 'text-blue-500', 'dark:text-blue-400');
                
                // Logique pour afficher le contenu correspondant
                // À implémenter selon vos besoins
            });
        });
        
        // Gestion du formulaire de profil
        const profileForm = document.getElementById('profileForm');
        
        profileForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Récupération des valeurs du formulaire
            const nom = document.getElementById('nom').value;
            const prenom = document.getElementById('prenom').value;
            const email = document.getElementById('email').value;
            const biographie = document.getElementById('biographie').value;
            
            // Validation basique
            if (!nom || !prenom || !email) {
                alert('Veuillez remplir tous les champs obligatoires.');
                return;
            }
            
            // Simulation d'enregistrement
            console.log('Profil mis à jour:', {
                nom: nom,
                prenom: prenom,
                email: email,
                biographie: biographie
            });
            
            alert('Profil mis à jour avec succès!');
        });
    });
</script>
@endsection