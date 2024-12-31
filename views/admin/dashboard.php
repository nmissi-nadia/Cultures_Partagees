<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Mobile Header -->
    <header class="lg:hidden bg-gray-900 text-white p-4 flex justify-between items-center">
        <h1 class="font-bold">Dashboard Admin</h1>
        <button onclick="toggleMobileMenu()" class="p-2 hover:bg-gray-800 rounded-lg">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="lg:hidden fixed inset-0 bg-black bg-opacity-50 z-40 hidden">
        <div class="bg-gray-900 text-white w-64 h-full p-4 transform transition-transform -translate-x-full" id="mobile-sidebar">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-bold">Menu</h2>
                <button onclick="toggleMobileMenu()" class="p-2 hover:bg-gray-800 rounded-lg">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="space-y-4">
                <button onclick="setActiveTab('users')" class="flex items-center w-full p-3 rounded-lg hover:bg-gray-800">
                    <i class="fas fa-users mr-3"></i>
                    <span>Utilisateurs</span>
                </button>
                <button onclick="setActiveTab('articles')" class="flex items-center w-full p-3 rounded-lg hover:bg-gray-800">
                    <i class="fas fa-file-alt mr-3"></i>
                    <span>Articles</span>
                </button>
                <button onclick="setActiveTab('categories')" class="flex items-center w-full p-3 rounded-lg hover:bg-gray-800">
                    <i class="fas fa-folder-open mr-3"></i>
                    <span>Catégories</span>
                </button>
            </nav>
        </div>
    </div>

    <!-- Desktop Sidebar -->
    <aside id="desktop-sidebar" class="hidden lg:block fixed top-0 left-0 h-full w-64 bg-gray-900 text-white transition-all duration-300 z-30">
        <div class="flex justify-between items-center p-4 border-b border-gray-800">
            <h1 class="font-bold">Dashboard Admin</h1>
            <button onclick="toggleSidebar()" class="p-2 hover:bg-gray-800 rounded-lg">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <nav class="p-4 space-y-2">
            <button onclick="setActiveTab('users')" class="flex items-center w-full p-3 rounded-lg hover:bg-gray-800">
                <i class="fas fa-users mr-3"></i>
                <span class="sidebar-text">Utilisateurs</span>
            </button>
            <button onclick="setActiveTab('articles')" class="flex items-center w-full p-3 rounded-lg hover:bg-gray-800">
                <i class="fas fa-file-alt mr-3"></i>
                <span class="sidebar-text">Articles</span>
            </button>
            <button onclick="setActiveTab('categories')" class="flex items-center w-full p-3 rounded-lg hover:bg-gray-800">
                <i class="fas fa-folder-open mr-3"></i>
                <span class="sidebar-text">Catégories</span>
            </button>
        </nav>
    </aside>

    <!-- Main Content -->
    <main id="main-content" class="lg:ml-64 transition-all duration-300">
        <div class="p-4 lg:p-6">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 mb-6">
                <!-- Users Card -->
                <div class="bg-white rounded-lg shadow p-4 lg:p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-500">Total Utilisateurs</p>
                            <h3 class="text-xl lg:text-2xl font-bold mt-2">125</h3>
                        </div>
                        <i class="fas fa-users text-blue-500 text-xl lg:text-2xl"></i>
                    </div>
                    <p class="text-sm text-green-500 mt-4">+5 aujourd'hui</p>
                </div>

                <!-- Articles Card -->
                <div class="bg-white rounded-lg shadow p-4 lg:p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-500">Total Articles</p>
                            <h3 class="text-xl lg:text-2xl font-bold mt-2">348</h3>
                        </div>
                        <i class="fas fa-file-alt text-blue-500 text-xl lg:text-2xl"></i>
                    </div>
                    <p class="text-sm text-orange-500 mt-4">12 en attente</p>
                </div>

                <!-- Categories Card -->
                <div class="bg-white rounded-lg shadow p-4 lg:p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-500">Catégories</p>
                            <h3 class="text-xl lg:text-2xl font-bold mt-2">8</h3>
                        </div>
                        <i class="fas fa-folder-open text-blue-500 text-xl lg:text-2xl"></i>
                    </div>
                    <p class="text-sm text-blue-500 mt-4">6 actives</p>
                </div>
            </div>

            <!-- Content Table -->
            <div class="bg-white rounded-lg shadow">
                <div class="p-4 lg:p-6 border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <h3 class="text-lg font-medium">Liste des Utilisateurs</h3>
                        <div class="flex flex-wrap gap-2 w-full sm:w-auto">
                            <input type="text" placeholder="Rechercher..." 
                                   class="px-4 py-2 border rounded-lg flex-grow sm:flex-grow-0">
                            <button class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 whitespace-nowrap">
                                <i class="fas fa-plus-circle mr-2"></i>
                                Ajouter
                            </button>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">Date</th>
                                <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">Statut</th>
                                <th class="px-4 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="table-body">
                            <!-- Data will be injected here -->
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Pagination -->
                <div class="flex justify-between items-center p-4 lg:p-6 border-t border-gray-200">
                    <button class="px-4 py-2 border rounded text-sm text-gray-600 hover:bg-gray-50">Précédent</button>
                    <span class="text-sm text-gray-600">Page 1 sur 5</span>
                    <button class="px-4 py-2 border rounded text-sm text-gray-600 hover:bg-gray-50">Suivant</button>
                </div>
            </div>
        </div>
    </main>

    <script>
        const tableData = [
            { id: 1, name: "John Doe", date: "2024-12-31", status: "Actif" },
            { id: 2, name: "Jane Smith", date: "2024-12-30", status: "Inactif" },
            { id: 3, name: "Bob Johnson", date: "2024-12-29", status: "Actif" }
        ];

        // Toggle Mobile Menu
        function toggleMobileMenu() {
            const overlay = document.getElementById('mobile-menu');
            const sidebar = document.getElementById('mobile-sidebar');
            
            if (overlay.classList.contains('hidden')) {
                overlay.classList.remove('hidden');
                setTimeout(() => {
                    sidebar.classList.remove('-translate-x-full');
                }, 10);
            } else {
                sidebar.classList.add('-translate-x-full');
                setTimeout(() => {
                    overlay.classList.add('hidden');
                }, 300);
            }
        }

        // Toggle Desktop Sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('desktop-sidebar');
            const mainContent = document.getElementById('main-content');
            const sidebarTexts = document.querySelectorAll('.sidebar-text');
            
            if (sidebar.classList.contains('w-64')) {
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-20');
                mainContent.classList.remove('lg:ml-64');
                mainContent.classList.add('lg:ml-20');
                sidebarTexts.forEach(text => text.classList.add('hidden'));
            } else {
                sidebar.classList.remove('w-20');
                sidebar.classList.add('w-64');
                mainContent.classList.remove('lg:ml-20');
                mainContent.classList.add('lg:ml-64');
                sidebarTexts.forEach(text => text.classList.remove('hidden'));
            }
        }

        // Populate Table
        function populateTable() {
            const tbody = document.getElementById('table-body');
            tbody.innerHTML = tableData.map(item => `
                <tr class="hover:bg-gray-50">
                    <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-900">#${item.id}</td>
                    <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-900">${item.name}</td>
                    <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden sm:table-cell">${item.date}</td>
                    <td class="px-4 lg:px-6 py-4 whitespace-nowrap hidden md:table-cell">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            ${item.status === 'Actif' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'}">
                            ${item.status}
                        </span>
                    </td>
                    <td class="px-4 lg:px-6 py-4 whitespace-nowrap text-sm space-x-3">
                        <button class="text-blue-600 hover:text-blue-900">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-600 hover:text-red-900">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `).join('');
        }

        // Set Active Tab
        function setActiveTab(tab) {
            const buttons = document.querySelectorAll('nav button');
            buttons.forEach(button => button.classList.remove('bg-blue-600'));
            event.currentTarget.classList.add('bg-blue-600');
            
            if (window.innerWidth < 1024) {
                toggleMobileMenu();
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            populateTable();
        });
    </script>
</body>
</html>