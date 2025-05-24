<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CitizenRequest;
use App\Models\User;

class RequestController extends Controller
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
        // Liste toutes les demandes pour l'admin
        $requests = CitizenRequest::with(['user', 'document'])->latest()->get();
        return view('admin.requests.index', compact('requests'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer et afficher une demande spécifique
        $request = CitizenRequest::with(['user', 'document'])->findOrFail($id);
        return view('admin.requests.show', compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer et afficher le formulaire d'édition d'une demande
        $request = CitizenRequest::with(['user', 'document'])->findOrFail($id);
        return view('admin.requests.edit', compact('request'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation des données
        $validated = $request->validate([
            'status' => 'required|string|in:pending,approved,rejected',
            'admin_comments' => 'nullable|string',
        ]);

        // Récupérer la demande
        $citizenRequest = CitizenRequest::findOrFail($id);

        // Mettre à jour les champs
        $citizenRequest->status = $request->status;
        $citizenRequest->admin_comments = $request->admin_comments;
        $citizenRequest->save();

        return redirect()->route('admin.requests.index')
            ->with('success', 'Demande mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer la demande
        $citizenRequest = CitizenRequest::findOrFail($id);

        // Supprimer la demande
        $citizenRequest->delete();

        return redirect()->route('admin.requests.index')
            ->with('success', 'Demande supprimée avec succès.');
    }
}
