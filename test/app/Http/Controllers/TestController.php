<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Importer la classe DB
use App\Models\Feedback;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('welcome', 'login','register'); 
        //fait en sorte que la vue welcome,login et register peut etre vue si on est pas connécté et pour voir tout le reste on doit etre connécté.
    }

    public function foo()
    {
        return view('test.foo');
    }

    public function bar()
    {
        return view('test.bar');
    }
    public function feedbackcrée()
    {
        return view('test.feedbackcrée');
    }

   

    public function feedback()//liste des feedbacks positif et négatif
    {
        //demander a laravel de recuperer tout les objets dans la table feedback
        $feedbacks = Feedback::where('type', 1)->get();
        //dd($feedbacks);
        //retourne la vue avec tout le feedback intégrés
        return view('test.feedback', ["feedbacks"=> $feedbacks]);
    }

    // Fonction pour traiter la soumission du formulaire de feedback
public function submitFeedback(Request $request)
{
    // Récupérer les données du formulaire
    $commentaire = $request->input('comment');
    $type = null;
    $retro_id= null;

    // Vérifier si la case de rétroaction positive est cochée
    if ($request->input('feedback') === 'positive') {
        $type = 0; // Définir le type à 0 pour rétroaction positive
    }

    // Vérifier si la case de rétroaction négative est cochée
    if ($request->input('feedback') === 'negative') {
        $type = 1; // Définir le type à 1 pour rétroaction négative
    }

    // Insérer le nouveau feedback dans la table "feedback" de la base de données
    $retro_id = DB::table('feedback')->insertGetId([
        'commentaire' => $commentaire,
        'type' => $type
        
    ]);

    // Rediriger vers une page de confirmation ou effectuer d'autres actions nécessaires
    return redirect()->route('feedbackcrée')->with('success', 'Feedback soumis avec succès!');
}
public function retrospective(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'question' => 'required|string',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date|after_or_equal:dateDebut',
        ]);

        // Récupérer les données du formulaire
        $question = $request->input('question');
        $dateDebut = $request->input('dateDebut');
        $dateFin = $request->input('dateFin');

        // Insérer les données dans la table retrospectives
         // Insérer le nouveau feedback dans la table "feedback" de la base de données
         DB::table('retrospective')->insert([
            'question' => $question,
            'dateDebut' => $dateDebut,
            'dateFin' => $dateFin
        ]);

        // Rediriger avec un message de succès
        return redirect('')->back()->with('success', 'Rétrospective créée avec succès !');
    }
}


