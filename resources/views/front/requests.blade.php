@extends('layouts.front.app')
@section('content')
      <section class="py-5">
        <div class="container">
            <h1 class="mb-4">Nouvelle demande</h1>
            
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form id="requestForm">
                        <div class="mb-3">
                            <label for="documentType" class="form-label">Type de document</label>
                            <select class="form-select" id="documentType" required>
                                <option value="" selected disabled>Choisissez un document</option>
                                <option value="attestation">Attestation de domicile</option>
                                <option value="carte-identite">Demande de carte d'identité</option>
                                <option value="passeport">Demande de passeport</option>
                                <option value="extrait-acte">Extrait d'acte de naissance</option>
                                <option value="certificat">Certificat de célibat</option>
                            </select>
                        </div>
                        
                        <div id="dynamicFields">
                            <!-- Les champs dynamiques seront ajoutés ici par JavaScript -->
                        </div>
                        
                        <div class="mb-3">
                            <label for="comments" class="form-label">Commentaires (optionnel)</label>
                            <textarea class="form-control" id="comments" rows="3"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Pièces jointes</label>
                            <input type="file" class="form-control" multiple>
                            <div class="form-text">Vous pouvez joindre jusqu'à 5 fichiers (PDF, JPG, PNG)</div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">Envoyer la demande</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
