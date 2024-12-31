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
    
     <!-- Header -->
     <header class="bg-white shadow-md">
        <!-- Barre supérieure -->
        <div class="bg-gradient-to-r from-purple-600 to-blue-500 text-white px-4 py-1 text-sm">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <p>Découvrez notre nouvelle section "Art contemporain"</p>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-gray-200">Newsletter</a>
                    <a href="#" class="hover:text-gray-200">Contact</a>
                </div>
            </div>
        </div>

        <!-- Navigation principale -->
        <nav class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-4">
                    <a href="/" class="flex items-center space-x-2">
                        <span class="text-2xl font-bold text-gradient bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-blue-500">
                            ArtCulture
                        </span>
                    </a>
                </div>

                <!-- Menu principal - Desktop -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/categories" class="text-gray-700 hover:text-blue-600">Catégories</a>
                    <a href="/articles" class="text-gray-700 hover:text-blue-600">Articles</a>
                    <a href="/auteurs" class="text-gray-700 hover:text-blue-600">Auteurs</a>
                    <a href="/a-propos" class="text-gray-700 hover:text-blue-600">À propos</a>
                </div>

                <!-- Boutons d'action -->
                <div class="hidden md:flex items-center space-x-4">
                    <button class="text-gray-700 hover:text-blue-600">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </button>
                    <div class="relative group">
                        <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600">
                            <i data-lucide="user" class="w-5 h-5"></i>
                            <span>Mon compte</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="absolute right-0 w-48 mt-2 py-2 bg-white rounded-md shadow-xl hidden group-hover:block">
                            <a href="/profil" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                            <a href="/mes-articles" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mes articles</a>
                            <a href="/parametres" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Paramètres</a>
                            <hr class="my-2">
                            <a href="/deconnexion" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Déconnexion</a>
                        </div>
                    </div>
                    <a href="/creer-article" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                        Publier
                    </a>
                </div>

                <!-- Menu burger - Mobile -->
                <button class="md:hidden text-gray-700" id="mobileMenuButton">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>

            <!-- Menu mobile -->
            <div class="md:hidden hidden" id="mobileMenu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="/categories" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Catégories</a>
                    <a href="/articles" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Articles</a>
                    <a href="/auteurs" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Auteurs</a>
                    <a href="/a-propos" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">À propos</a>
                    <hr class="my-2">
                    <a href="/profil" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Mon compte</a>
                    <a href="/creer-article" class="block px-3 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Publier</a>
                </div>
            </div>
        </nav>
    </header>

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
    <footer class="bg-gradient-to-r from-purple-600 to-blue-500 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- À propos -->
                <div class="space-y-4">
                    <h3 class="text-lg font-bold">À propos d'ArtCulture</h3>
                    <p class="text-gray-400">Une plateforme dédiée à l'art et à la culture, créée par des passionnés pour des passionnés.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-lucide="facebook" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-lucide="twitter" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Catégories -->
                <div class="space-y-4">
                    <h3 class="text-lg font-bold">Catégories</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Peinture</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Musique</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Littérature</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cinéma</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Photographie</a></li>
                    </ul>
                </div>

                <!-- Liens utiles -->
                <div class="space-y-4">
                    <h3 class="text-lg font-bold">Liens utiles</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Guide de publication</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Conditions d'utilisation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Nous contacter</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="space-y-4">
                    <h3 class="text-lg font-bold">Newsletter</h3>
                    <p class="text-gray-400">Restez informé de nos dernières actualités</p>
                    <form class="space-y-2">
                        <input type="email" placeholder="Votre email" class="w-full px-4 py-2 rounded-md bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-blue-500">
                        <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            S'abonner
                        </button>
                    </form>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2024 ArtCulture. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialisation des icônes Lucide
        lucide.createIcons();

        // Gestion du menu mobile
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        let isMenuOpen = false;

        mobileMenuButton.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            if (isMenuOpen) {
                mobileMenu.classList.remove('hidden');
                mobileMenuButton.innerHTML = '<i data-lucide="x" class="w-6 h-6"></i>';
            } else {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.innerHTML = '<i data-lucide="menu" class="w-6 h-6"></i>';
            }
            lucide.createIcons();
        });

        // Gestion du scroll pour le header
        let lastScroll = 0;
        const header = document.querySelector('header');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll <= 0) {
                header.classList.remove('header-hidden');
                return;
            }

            if (currentScroll > lastScroll && !header.classList.contains('header-hidden')) {
                // Scroll vers le bas
                header.classList.add('header-hidden');
            } else if (currentScroll < lastScroll && header.classList.contains('header-hidden')) {
                // Scroll vers le haut
                header.classList.remove('header-hidden');
            }
            lastScroll = currentScroll;
        });
    </script>

    <style>
        .header-hidden {
            transform: translateY(-100%);
        }

        header {
            position: sticky;
            top: 0;
            z-index: 50;
            transition: transform 0.3s ease-in-out;
        }
    </style>
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