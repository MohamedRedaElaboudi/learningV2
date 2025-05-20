@extends('layout.sidebar')

@section('content')
    
    <div class="container mx-auto px-6">
        <h2 class="text-2xl font-bold mt-6 mb-8">Tableau de Bord</h2>
        
        <!-- Dashboard Stats -->
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-6">
                <div class="stat-box">
                    <div class="text-gray-600 dark:text-gray-300 font-medium">Classes actives</div>
                    <div class="number blue">5</div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-6">
                <div class="stat-box">
                    <div class="text-gray-600 dark:text-gray-300 font-medium">Ressources publiées</div>
                    <div class="number green">24</div>
                </div>
            </div>
            
        </div>
        
        <!-- Recent Activity -->
        <div class="mt-10 mb-16">
            <h3 class="text-xl font-semibold mb-6">Activité récente</h3>
            <div class="activity-list">
                <div class="activity-item">
                   <div>
                        <div class="font-semibold mb-1">Ressource "TD ava Avancé" publiée dans classe "L2 Informatique"</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Par vous • Hier 15:20</div>
                    </div>
                    <div>
                        <button class="btn-action btn-consult">Consulter</button>
                    </div> 
                    
                </div>
                
                <div class="activity-item">
                    <div>
                        <div class="font-semibold mb-1">Ressource "TP Java Avancé" publiée dans classe "L3 Informatique"</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Par vous • Hier 15:20</div>
                    </div>
                    <div>
                        <button class="btn-action btn-consult">Consulter</button>
                    </div>
                </div>
                
                <div class="activity-item">
                    <div>
                        <div class="font-semibold mb-1">Nouvelle classe "M2 Cybersécurité" créée</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Par vous • 08/05/2025</div>
                    </div>
                    <div>
                        <button class="btn-action btn-consult">Consulter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection