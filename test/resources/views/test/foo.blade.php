<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Formulaire de Feedback</title>
</head>
<body>
<x-app-layout>
  <h1>Créer un Feedback</h1>

  <form action="/submitFeedback" method="post">
    @csrf <!-- Ajouter un jeton CSRF pour la protection contre les attaques CSRF -->
    <label for="comment">Commentaire :</label><br>
    <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>

    <label for="positive">Avis positive :</label>
    <input type="checkbox" id="positive" name="feedback" value="positive"><br>

    <label for="negative">Avis négative :</label>
    <input type="checkbox" id="negative" name="feedback" value="negative"><br><br>

    <input type="submit" value="Soumettre">





    
  </form>

  </x-app-layout>

</body>
</html>
