@extends('layouts.front.app')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <h2 class="card-title text-center mb-4">Connexion</h2>
                            <form id="loginForm">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">Se souvenir de moi</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Se connecter</button>
                                <div class="text-center mt-3">
                                    <a href="forgot-password.html">Mot de passe oublié ?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <p>Pas encore de compte ? <a href="register.html">S'inscrire</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
