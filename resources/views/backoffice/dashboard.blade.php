@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

  <div class="container-fluid">
    <div class="row min-vh-100">

      <!-- Sidebar -->
      <nav class="col-md-2 d-none d-md-block bg-dark text-white sidebar py-4">
        <div class="text-center mb-4">
          <h4>MIRO MIRO</h4>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link text-white" href="{{ route('dashboard') }}">Tableau de bord</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ route('products') }}">Produits</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Commandes</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Clients</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Statistiques</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Paramètres</a></li>
        </ul>
      </nav>

      <!-- Main content -->
      <main class="col-md-10 ms-sm-auto px-4">
        <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
          <h1 class="h4">Tableau de bord</h1>
          <a href="#" class="btn btn-outline-danger btn-sm">Déconnexion</a>
        </div>

        <div class="row my-4">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Ventes du jour</h5>
                <p class="card-text fs-4">42 articles</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Chiffre d'affaires</h5>
                <p class="card-text fs-4">1 530 €</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nouveaux clients</h5>
                <p class="card-text fs-4">8 inscrits</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Ajoute ici un tableau des dernières commandes ou des graphiques Bootstrap -->
      </main>

    </div>
  </div>

