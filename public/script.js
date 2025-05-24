document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la connexion
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Ici, vous ajouteriez la logique de connexion réelle
            console.log('Tentative de connexion avec:', email, password);
            
            // Simulation de connexion réussie
            alert('Connexion réussie! Redirection...');
            window.location.href = 'documents.html';
        });
    }
    
    // Gestion du formulaire de demande
    const requestForm = document.getElementById('requestForm');
    const documentType = document.getElementById('documentType');
    const dynamicFields = document.getElementById('dynamicFields');
    
    if (documentType && dynamicFields) {
        documentType.addEventListener('change', function() {
            // Effacer les champs précédents
            dynamicFields.innerHTML = '';
            
            // Ajouter des champs en fonction du type de document
            switch(this.value) {
                case 'attestation':
                    dynamicFields.innerHTML = `
                        <div class="mb-3">
                            <label for="address" class="form-label">Adresse complète</label>
                            <input type="text" class="form-control" id="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="since" class="form-label">Habitez-vous à cette adresse depuis</label>
                            <input type="date" class="form-control" id="since" required>
                        </div>
                    `;
                    break;
                    
                case 'carte-identite':
                case 'passeport':
                    dynamicFields.innerHTML = `
                        <div class="mb-3">
                            <label for="birthDate" class="form-label">Date de naissance</label>
                            <input type="date" class="form-control" id="birthDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="birthPlace" class="form-label">Lieu de naissance</label>
                            <input type="text" class="form-control" id="birthPlace" required>
                        </div>
                        <div class="mb-3">
                            <label for="parentsNames" class="form-label">Noms des parents</label>
                            <input type="text" class="form-control" id="parentsNames" required>
                        </div>
                    `;
                    break;
                    
                case 'extrait-acte':
                    dynamicFields.innerHTML = `
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Nom complet</label>
                            <input type="text" class="form-control" id="fullName" required>
                        </div>
                        <div class="mb-3">
                            <label for="birthDateAct" class="form-label">Date de naissance</label>
                            <input type="date" class="form-control" id="birthDateAct" required>
                        </div>
                        <div class="mb-3">
                            <label for="birthPlaceAct" class="form-label">Lieu de naissance</label>
                            <input type="text" class="form-control" id="birthPlaceAct" required>
                        </div>
                    `;
                    break;
                    
                case 'certificat':
                    dynamicFields.innerHTML = `
                        <div class="mb-3">
                            <label for="fullNameCert" class="form-label">Nom complet</label>
                            <input type="text" class="form-control" id="fullNameCert" required>
                        </div>
                        <div class="mb-3">
                            <label for="purpose" class="form-label">Motif de la demande</label>
                            <select class="form-select" id="purpose" required>
                                <option value="mariage">Mariage</option>
                                <option value="pacs">PACS</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                    `;
                    break;
            }
        });
    }
    
    if (requestForm) {
        requestForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Ici, vous ajouteriez la logique d'envoi de la demande
            console.log('Demande envoyée');
            
            // Simulation de succès
            alert('Votre demande a été enregistrée avec succès!');
            window.location.href = 'documents.html';
        });
    }
    
    // Animation pour les cartes de services
    const serviceCards = document.querySelectorAll('.card');
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
        });
    });
});