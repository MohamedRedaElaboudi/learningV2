@php
    use Illuminate\Support\Arr;

    // Définir les couleurs de fond disponibles
    $backgroundColors = [
        'red-100', 'red-200',
        'orange-100', 'orange-200',
        'amber-100', 'amber-200',
        'yellow-100', 'yellow-200',
        'lime-100', 'lime-200',
        'green-100', 'green-200',
        'emerald-100', 'emerald-200',
        'teal-100', 'teal-200',
        'cyan-100', 'cyan-200',
        'sky-100', 'sky-200',
        'blue-100', 'blue-200',
        'indigo-100', 'indigo-200',
        'violet-100', 'violet-200',
        'purple-100', 'purple-200',
        'fuchsia-100', 'fuchsia-200',
        'pink-100', 'pink-200',
        'rose-100', 'rose-200',
    ];

    // Définir un tableau limité de 3 couleurs de texte
    $textColors = [
        'red-500', 'blue-600', 'gray-800','black','green'
    ];

    // Mélanger les couleurs pour avoir un ordre aléatoire
    $shuffledBackgroundColors = collect($backgroundColors)->shuffle()->values();
    $shuffledTextColors = collect($textColors)->shuffle()->values();
@endphp

<x-navbar_etudiant></x-navbar_etudiant>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
    @if($classes->isEmpty())
        <p>Aucune classe inscrite pour le moment.</p>
    @else
        @foreach ($classes as $index => $classe)
            @php
                // Choisir une couleur de fond et de texte distincte
                $randomBackgroundColor = $shuffledBackgroundColors[$index % $shuffledBackgroundColors->count()];
                $randomTextColor = $shuffledTextColors[$index % $shuffledTextColors->count()];
            @endphp
            <a href="#" class="block cursor-pointer">
                <div class="bg-white dark:bg-gray-700 rounded-lg border overflow-hidden hover:shadow-md">
                    <!-- Appliquer la couleur de fond -->
                    <div class="relative h-40 bg-{{ $randomBackgroundColor }}">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <!-- Appliquer la couleur de texte distincte -->
                            <span class="text-{{ $randomTextColor }} font-bold">{{ $classe->classe_nom }}</span>
                        </div>
                    </div>

                    <div class="p-4">
                        <h3 class="font-bold text-lg">{{ $classe->classe_nom }}</h3>
                        <p class="bg-white dark:bg-gray-700 text-sm mt-1">
                            Professeur : 
                            @if($classe->professeur)
                                {{ $classe->professeur->nom }} {{ $classe->professeur->prenom }}
                            @else
                                Professeur non attribué
                            @endif
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
    @endif
</div>
