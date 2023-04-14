<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Formulaire de Rétrospective</title>
</head>
<body>
<x-app-layout>
    <h1>Créer une Rétrospective</h1>
    <form id="retrospectiveForm">
        <label for="question">Question :</label>
        <input type="text" id="question" name="question" required>
        <br>
        <label for="dateDebut">Date de début :</label>
        <input type="date" id="dateDebut" name="dateDebut" required>
        <br>
        <label for="dateFin">Date de fin :</label>
        <input type="date" id="dateFin" name="dateFin" required>
        <br>
        <input type="submit" value="Soumettre">
    </form>
</x-app-layout>
</body>
</html>
