<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Article</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js"></script>
</head>
<body class="bg-gray-50">
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-8">Créer un nouvel article</h1>

        <form id="articleForm" class="space-y-6" method="POST" action="create_article.php" enctype="multipart/form-data">
            <!-- Champ pour le titre -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Titre de l'article</label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       required 
                       minlength="5"
                       maxlength="150"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                       placeholder="Entrez le titre de votre article">
            </div>

            <!-- Sélection de la catégorie -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Catégorie</label>
                <select id="category" 
                        name="category_id" 
                        required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="">Sélectionnez une catégorie</option>
                    <!-- Les catégories seront chargées dynamiquement via PHP -->
                </select>
            </div>

            <!-- Image de couverture -->
            <div>
                <label for="cover_image" class="block text-sm font-medium text-gray-700">Image de couverture</label>
                <input type="file" 
                       id="cover_image" 
                       name="cover_image"
                       accept="image/*"
                       required
                       class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <p class="mt-1 text-sm text-gray-500">Format accepté : JPG, PNG, GIF (Max. 2MB)</p>
            </div>

            <!-- Contenu de l'article -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Contenu de l'article</label>
                <textarea id="content" 
                          name="content" 
                          required
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                          rows="15"></textarea>
            </div>

            <!-- Boutons d'action -->
            <div class="flex justify-end space-x-4">
                <button type="button" 
                        onclick="window.location.href='mes-articles.php'"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                    Annuler
                </button>
                <button type="submit" 
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700">
                    Publier l'article
                </button>
            </div>
        </form>
    </div>

    <script>
        // Initialisation de TinyMCE
        tinymce.init({
            selector: '#content',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            height: 500
        });

        // Validation côté client
        document.getElementById('articleForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation du titre
            const title = document.getElementById('title').value.trim();
            if (title.length < 5) {
                alert('Le titre doit contenir au moins 5 caractères.');
                return;
            }

            // Validation de la catégorie
            const category = document.getElementById('category').value;
            if (!category) {
                alert('Veuillez sélectionner une catégorie.');
                return;
            }

            // Validation de l'image
            const image = document.getElementById('cover_image').files[0];
            if (image && image.size > 2 * 1024 * 1024) {
                alert('L\'image ne doit pas dépasser 2MB.');
                return;
            }

            // Si tout est valide, on soumet le formulaire
            this.submit();
        });
    </script>
</body>
</html>