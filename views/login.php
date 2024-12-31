<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtCulture - Authentification</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Container principal -->
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Section gauche décorative -->
        <div class="hidden md:flex md:w-1/2 bg-gradient-to-br from-purple-600 to-blue-500 p-12 relative">
            <div class="absolute inset-0 bg-black opacity-20"></div>
            <div class="items-center relative z-10 text-white">
                <h1 class="text-4xl font-bold mb-6">L'Art & La Culture</h1>
                <p class="text-xl mb-8">Rejoignez notre communauté de passionnés d'art et de culture.</p>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Partagez vos passions artistiques</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Découvrez des contenus uniques</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Échangez avec des passionnés</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section droite avec les formulaires -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <!-- Onglets -->
                <div class="flex mb-8">
                    <button id="loginTab" class="w-1/2 pb-4 text-lg font-semibold text-center border-b-2 border-blue-500">Connexion</button>
                    <button id="registerTab" class="w-1/2 pb-4 text-lg font-semibold text-center border-b-2 border-transparent text-gray-500">Inscription</button>
                </div>

                <!-- Formulaire de connexion -->
                <form action="" id="loginForm" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <input type="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <!-- <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label class="ml-2 block text-sm text-gray-700">Se souvenir de moi</label>
                        </div>
                        <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Mot de passe oublié ?</a>
                    </div> -->
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Se connecter
                    </button>
                </form>

                <!-- Formulaire d'inscription (caché par défaut) -->
                <form action="./inscription.php" id="registerForm" class="hidden space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nom complet</label>
                        <input type="text" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <input type="password" required minlength="8" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Confirmez le mot de passe</label>
                        <input type="password" required minlength="8" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" required class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label class="ml-2 block text-sm text-gray-700">
                            J'accepte les <a href="#" class="text-blue-600 hover:text-blue-500">conditions d'utilisation</a>
                        </label>
                    </div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        S'inscrire
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Gestion des onglets
        const loginTab = document.getElementById('loginTab');
        const registerTab = document.getElementById('registerTab');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');

        loginTab.addEventListener('click', () => {
            loginTab.classList.add('border-blue-500', 'text-gray-900');
            loginTab.classList.remove('border-transparent', 'text-gray-500');
            registerTab.classList.remove('border-blue-500', 'text-gray-900');
            registerTab.classList.add('border-transparent', 'text-gray-500');
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
        });

        registerTab.addEventListener('click', () => {
            registerTab.classList.add('border-blue-500', 'text-gray-900');
            registerTab.classList.remove('border-transparent', 'text-gray-500');
            loginTab.classList.remove('border-blue-500', 'text-gray-900');
            loginTab.classList.add('border-transparent', 'text-gray-500');
            registerForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
        });

        // Validation du formulaire d'inscription
        const registerFormEl = document.getElementById('registerForm');
        registerFormEl.addEventListener('submit', (e) => {
            e.preventDefault();
            const password = registerFormEl.querySelector('input[type="password"]').value;
            const confirmPassword = registerFormEl.querySelectorAll('input[type="password"]')[1].value;

            if (password !== confirmPassword) {
                alert('Les mots de passe ne correspondent pas');
                return;
            }

            // Ici, vous pouvez ajouter le code pour envoyer les données au serveur
            console.log('Formulaire d\'inscription soumis');
        });

        // Validation du formulaire de connexion
        const loginFormEl = document.getElementById('loginForm');
        loginFormEl.addEventListener('submit', (e) => {
            e.preventDefault();
            // Ici, vous pouvez ajouter le code pour envoyer les données au serveur
            console.log('Formulaire de connexion soumis');
        });

        // Animation des champs de formulaire
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('transform', 'scale-105');
                input.classList.add('ring-2', 'ring-blue-200');
            });

            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('transform', 'scale-105');
                input.classList.remove('ring-2', 'ring-blue-200');
            });
        });
    </script>
</body>
</html>