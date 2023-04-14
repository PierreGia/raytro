<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="feedback.css">
  <script src="script.js"></script>
  
</head>
<body>
<x-app-layout>
<div class="container">
        <h1>Liste des Feedbacks</h1>
        <h2>Avis Positifs</h2>
        
        <select>
        @foreach ($feedbacks as $feedback)
        <option value="">{{$feedback->commentaire}}</option>
        @endforeach
        </select>
        
        <h2>Avis Négatifs</h2>
        <select>
        @foreach ($feedbacks as $feedback)
        <option value="">{{$feedback->commentaire}}</option>
        @endforeach
        </select>
        
        
    </div>
</x-app-layout>
</body>
</html>