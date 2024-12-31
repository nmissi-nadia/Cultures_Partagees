<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles - Plateforme Culturelle</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" class="text-xl font-bold text-gray-800">ArtCulture</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-gray-900">Accueil</a>
                    <a href="#" class="text-blue-600 font-medium">Articles</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Catégories</a>
                    <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        <i class="fas fa-plus mr-2"></i>Publier
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button onclick="toggleMobileMenu()" class="text-gray-600 hover:text-gray-900">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <a href="#" class="block py-2 text-gray-600">Accueil</a>
                <a href="#" class="block py-2 text-blue-600 font-medium">Articles</a>
                <a href="#" class="block py-2 text-gray-600">Catégories</a>
                <a href="#" class="block py-2 text-blue-600">
                    <i class="fas fa-plus mr-2"></i>Publier
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        <!-- Search and Filter Section -->
        <div class="mb-8">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <input type="text" 
                           placeholder="Rechercher un article..." 
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div class="flex gap-4 flex-wrap">
                    <select class="px-4 py-2 border rounded-lg bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Toutes les catégories</option>
                        <option value="peinture">Peinture</option>
                        <option value="musique">Musique</option>
                        <option value="litterature">Littérature</option>
                        <option value="cinema">Cinéma</option>
                    </select>
                    <select class="px-4 py-2 border rounded-lg bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="recent">Plus récents</option>
                        <option value="popular">Plus populaires</option>
                        <option value="viewed">Plus vus</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="articles-grid">
            <!-- Articles will be injected here -->
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center items-center space-x-4">
            <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Précédent</button>
            <span class="text-gray-600">Page 1 sur 5</span>
            <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Suivant</button>
        </div>
    </main>

    <script>
        // Sample articles data
        const articles = [
            {
                id: 1,
                title: "L'évolution de l'art moderne",
                category: "Peinture",
                excerpt: "Une exploration approfondie des mouvements artistiques qui ont façonné l'art moderne...",
                author: "Marie Dubois",
                date: "2024-12-30",
                image: "/api/placeholder/800/400"
            },
            {
                id: 2,
                title: "Jazz contemporain",
                category: "Musique",
                excerpt: "Découvrez les nouvelles tendances du jazz et ses influences modernes...",
                author: "Jean Martin",
                date: "2024-12-29",
                image: "/api/placeholder/800/400"
            },
            {
                id: 3,
                title: "Le cinéma d'auteur",
                category: "Cinéma",
                excerpt: "Analyse des œuvres marquantes du cinéma d'auteur contemporain...",
                author: "Sophie Laurent",
                date: "2024-12-28",
                image: "/api/placeholder/800/400"
            },
            {
                id: 4,
                title: "Littérature moderne",
                category: "Littérature",
                excerpt: "Les courants littéraires qui définissent notre époque...",
                author: "Pierre Durand",
                date: "2024-12-27",
                image: "/api/placeholder/800/400"
            },
            {
                id: 5,
                title: "Art numérique",
                category: "Peinture",
                excerpt: "L'impact des nouvelles technologies sur l'art contemporain...",
                author: "Léa Martin",
                date: "2024-12-26",
                image: "/api/placeholder/800/400"
            },
            {
                id: 6,
                title: "Photographie urbaine",
                category: "Photographie",
                excerpt: "Capturer l'essence de la vie urbaine à travers l'objectif...",
                author: "Thomas Bernard",
                date: "2024-12-25",
                image: "/api/placeholder/800/400"
            }
        ];

        // Toggle Mobile Menu
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        // Populate Articles
        function populateArticles() {
            const grid = document.getElementById('articles-grid');
            
            grid.innerHTML = articles.map(article => `
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <img src="${article.image}" alt="${article.title}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">
                                ${article.category}
                            </span>
                            <span class="ml-2">${article.date}</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">
                            <a href="#" class="hover:text-blue-600">${article.title}</a>
                        </h2>
                        <p class="text-gray-600 mb-4">${article.excerpt}</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Par ${article.author}</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                                Lire plus <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </article>
            `).join('');
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            populateArticles();
        });
    </script>
</body>
</html>