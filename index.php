<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Presence LBS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Styles CSS personnalisés */
    body {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('Study.jpg');
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      color: #fff;
    }
    .jumbotron {
      background-color: rgba(255, 0, 0, 0.7);
      padding: 2rem;
      margin-top: 100px;
      opacity: 0;
      animation: fadeIn 2s ease forwards;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    .card {
      background-color: rgba(0, 0, 0, 0.7);
      color: #fff;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: scale(1.05);
    }
    .admin-section {
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      padding: 50px 0;
      
      
    }
    .admin-section h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .admin-card {
      background-color: rgba(0, 123, 255, 0.7);
      color: #fff;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="https://lome-bs.com/">Lomé Business School</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="page2.php">Voir les groupes<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="login2.php">Se connecter<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="page1.php">S'inscrire<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <!-- Contenu principal -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-4">Bienvenue à Lome Business School</h1>
      <p class="lead">Le site est un site de présentation des groupes participant à SEIC</p>
    </div>
  </div>

  <!-- Activités de l'école -->
  <div class="container">
    <h2 class="text-center my-4">Les activités de Lomé Business School</h2>
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img src="livre.jpg" class="card-img-top" alt="Activité 1">
          <div class="card-body">
            <h5 class="card-title">Activité 1</h5>
            <p class="card-text">Description de l'activité 1.</p>
            <a href="#" class="btn btn-primary">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img src="school2.jpg" class="card-img-top" alt="Activité 2">
          <div class="card-body">
            <h5 class="card-title">Activité 2</h5>
            <p class="card-text">Description de l'activité 2.</p>
            <a href="#" class="btn btn-primary">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img src="inter.jpg" class="card-img-top" alt="Activité 3">
          <div class="card-body">
            <h5 class="card-title">Activité 3</h5>
            <p class="card-text">Description de l'activité 3.</p>
            <a href="#" class="btn btn-primary">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Administration de l'école -->
  <div class="admin-section" id="admin-section">
    <div class="container">
      <h2>Les programmeures du site</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card admin-card">
            <div class="card-body">
              <h5 class="card-title">TAHE Prince</h5>
              <p class="card-text">Etudiant en B1SI</p>
              <p class="card-text">Contact: +228 99 35 99 70</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card admin-card">
            <div class="card-body">
              <h5 class="card-title">OURO Marzouk</h5>
              <p class="card-text">Designer du site</p>
              <p class="card-text">Contact: +228 33 45 77 89</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card admin-card">
            <div class="card-body">
              <h5 class="card-title">TOITRE Andre</h5>
              <p class="card-text">Chef projet</p>
              <p class="card-text">Contact: +228 88 55 22 11</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card admin-card">
            <div class="card-body">
              <h5 class="card-title">DIANATOU Ouro</h5>
              <p class="card-text">Programmation</p>
              <p class="card-text">Contact: +228 88 44 77 99</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card admin-card">
            <div class="card-body">
              <h5 class="card-title">TCHAZINON Hezouwe</h5>
              <p class="card-text">Programmation</p>
              <p class="card-text">Contact: +228 66 55 44 33</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card admin-card">
            <div class="card-body">
              <h5 class="card-title">GNITRU-TECH</h5>
              <p class="card-text">Etudiant en cybersécurité</p>
              <p class="card-text">Contact: +229 33 22 11 45</p>
            </div>
          </div>
        </div>

        
    </div>
    <div class="card" style="width: 18rem;">
    <img src="livre.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
  </div>

  <!-- Pied de page -->
  <footer class="bg-primary text-white text-center py-4">
    <p>Lomé Business School &copy; 2024</p>

  </footer>

  <!-- Scripts Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
