<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Liste tous les documents pour l'admin
        $documents = Document::latest()->get();
        return view('admin.documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Affiche le formulaire de création d'un document
        return view('admin.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'status' => 'required|in:active,inactive',
            'is_public' => 'sometimes|boolean',
        ]);

        // Gestion du fichier
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('documents', 'public');
            $validated['file_path'] = $filePath;
        }

        // Gestion du champ is_public qui est une checkbox
        $validated['is_public'] = $request->has('is_public') ? true : false;

        // Création du document
        $document = Document::create($validated);

        return redirect()->route('admin.documents.index')
            ->with('success', 'Document créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer et afficher un document spécifique
        $document = Document::findOrFail($id);
        return view('admin.documents.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer et afficher le formulaire d'édition d'un document
        $document = Document::findOrFail($id);
        return view('admin.documents.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation des données
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'is_public' => 'boolean',
            'status' => 'required|in:active,inactive',
        ]);

        // Récupérer le document
        $document = Document::findOrFail($id);

        // Mettre à jour le fichier si fourni
        if ($request->hasFile('file')) {
            // Supprimer l'ancien fichier
            Storage::disk('public')->delete($document->file_path);

            // Enregistrer le nouveau fichier
            $filePath = $request->file('file')->store('documents', 'public');
            $document->file_path = $filePath;
        }

        // Mettre à jour les autres champs
        $document->title = $request->title;
        $document->description = $request->description;
        $document->category = $request->category;
        $document->is_public = $request->has('is_public');
        $document->status = $request->status;
        $document->save();

        return redirect()->route('admin.documents.index')
            ->with('success', 'Document mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer le document
        $document = Document::findOrFail($id);

        // Supprimer le fichier associé
        Storage::disk('public')->delete($document->file_path);

        // Supprimer le document
        $document->delete();

        return redirect()->route('admin.documents.index')
            ->with('success', 'Document supprimé avec succès.');
    }
}
