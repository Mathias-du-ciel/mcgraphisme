<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Masterclass Graphisme | Méthode Design</title>
  <!-- Bootstrap 5 CSS + Icons + Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Google Fonts: Inter (moderne) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #000000;  /* fond noir selon consigne */
      color: #f0f0f0;
      scroll-behavior: smooth;
    }

    /* couleur jaune personnalisée (vibrant mais lisible) */
    :root {
      --brand-yellow: #F5B042;   /* jaune chaleureux / orangé doux mais bien jaune */
      --brand-yellow-dark: #E09D2C;
      --brand-yellow-soft: rgba(245, 176, 66, 0.12);
      --gray-light: #eaeaea;
      --gray-mid: #2a2a2a;
      --card-bg: #111111;
      --border-dim: #262626;
    }

    /* style général */
    h1, h2, h3, h4, .display-title {
      font-weight: 700;
      letter-spacing: -0.02em;
    }

    .text-accent {
      color: var(--brand-yellow);
    }

    .bg-accent {
      background-color: var(--brand-yellow);
      color: #000;
    }

    .btn-custom {
      background-color: var(--brand-yellow);
      color: #000;
      font-weight: 700;
      padding: 12px 32px;
      border-radius: 60px;
      transition: 0.25s ease;
      border: none;
      font-size: 1rem;
      box-shadow: 0 4px 12px rgba(245, 176, 66, 0.2);
    }

    .btn-custom:hover {
      background-color: var(--brand-yellow-dark);
      color: #000;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(245, 176, 66, 0.3);
    }

    .btn-outline-light-custom {
      border: 1px solid var(--brand-yellow);
      color: var(--brand-yellow);
      background: transparent;
      padding: 10px 24px;
      border-radius: 60px;
      font-weight: 500;
      transition: 0.2s;
    }

    .btn-outline-light-custom:hover {
      background: var(--brand-yellow);
      color: #000;
    }

    .section {
      padding: 80px 0;
    }

    .section-sm {
      padding: 60px 0;
    }

    .card-dark {
      background-color: var(--card-bg);
      border: 1px solid var(--border-dim);
      border-radius: 28px;
      transition: transform 0.2s, border-color 0.2s;
    }

    .card-dark:hover {
      border-color: var(--brand-yellow);
    }

    .list-icon {
      color: var(--brand-yellow);
      font-size: 1.3rem;
      margin-right: 12px;
      width: 28px;
    }

    .step-locked {
      background: #1a1a1a;
      border-left: 4px solid var(--brand-yellow);
      padding: 20px 24px;
      border-radius: 20px;
      transition: all 0.2s;
    }

    .badge-warning-bg {
      background-color: rgba(245, 176, 66, 0.2);
      color: var(--brand-yellow);
      padding: 6px 14px;
      border-radius: 40px;
      font-weight: 500;
      font-size: 0.8rem;
    }

    footer a {
      color: #aaa;
      text-decoration: none;
    }

    footer a:hover {
      color: var(--brand-yellow);
    }

    /* Hero background subtle texture */
    .hero-section {
      position: relative;
      overflow: hidden;
    }

    .bg-glow {
      position: absolute;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(245,176,66,0.15) 0%, rgba(0,0,0,0) 70%);
      border-radius: 50%;
      filter: blur(60px);
      z-index: 0;
    }

    /* Form styling */
    .form-control-custom {
      background-color: #1c1c1c;
      border: 1px solid #2c2c2c;
      border-radius: 60px;
      padding: 12px 20px;
      color: white;
    }

    .form-control-custom:focus {
      background-color: #222;
      border-color: var(--brand-yellow);
      box-shadow: 0 0 0 3px rgba(245,176,66,0.25);
      color: white;
    }

    /* avatars / preuve section */
    .student-stats .stat-number {
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--brand-yellow);
    }
    
    .whatsapp-btn {
      background-color: #25D366;
      border: none;
      color: white;
      font-weight: 600;
      padding: 14px 30px;
      border-radius: 60px;
      transition: 0.2s;
    }
    .whatsapp-btn:hover {
      background-color: #1da15a;
      transform: scale(1.02);
      color: white;
    }

    @media (max-width: 768px) {
      .section {
        padding: 60px 0;
      }
      h1 {
        font-size: 2.2rem;
      }
    }
  </style>
</head>
<body>

<!-- Navigation simple -->
<nav class="navbar navbar-dark bg-transparent py-3">
  <div class="container">
    <a class="navbar-brand fw-bold fs-4" href="#">
      <span style="color: var(--brand-yellow);">✦</span> WePropulse
    </a>
    <div class="d-none d-md-flex gap-3">
      <a href="#probleme" class="text-decoration-none text-white-50">Problème</a>
      <a href="#methode" class="text-decoration-none text-white-50">Méthode</a>
      <a href="#acces" class="text-decoration-none text-white-50">Accès</a>
    </div>
    <a href="#formulaire" class="btn-outline-light-custom btn-sm">Rejoindre</a>
  </div>
</nav>

<!-- Hero section -->
<section class="hero-section section pt-4 pb-5" id="hero">
  <div class="container position-relative" style="z-index: 2;">
    <div class="row justify-content-center text-center">
      <div class="col-lg-9 col-xl-8">
        <span class="badge-warning-bg d-inline-block mb-3">
          <i class="fas fa-star me-1"></i> MASTERCLASS GRATUITE • DÉBUTANTS
        </span>
        <h1 class="display-4 fw-bold mb-4">
          Le design est une recette : découvre une méthode simple que <span class="text-accent">j’utilise personnellement</span>
        </h1>
        <p class="lead text-white-50 mb-3 fs-5">
          Masterclass gratuite pour débutants — une initiation pour comprendre comment structurer tes visuels et améliorer leur impact.
        </p>
        <div class="bg-dark p-3 rounded-4 d-inline-flex align-items-center gap-2 mb-4 flex-wrap justify-content-center border border-secondary">
          <i class="fas fa-check-circle text-accent fs-5"></i>
          <span class="fw-medium">👉 Une méthode issue de l’expérience, rarement expliquée clairement.</span>
        </div>
        <div class="mt-3">
          <a href="#formulaire" class="btn btn-custom btn-lg">
            👉 Je veux accéder à la masterclass <i class="fas fa-arrow-right ms-2"></i>
          </a>
        </div>
        <div class="mt-5 d-flex justify-content-center gap-4 flex-wrap text-muted small">
          <span><i class="fas fa-users text-accent me-1"></i> 168K+ utilisateurs actifs</span>
          <span><i class="fas fa-shield-alt text-accent me-1"></i> Rejoins le futur</span>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-glow" style="top: 10%; left: -5%;"></div>
  <div class="bg-glow" style="bottom: 0; right: -5%; width: 400px; height: 400px;"></div>
</section>

<!-- PROBLÈME section -->
<section class="section pt-0" id="probleme">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <span class="badge-warning-bg mb-3"><i class="fas fa-exclamation-triangle me-1"></i> Diagnostic</span>
        <h2 class="display-6 fw-bold mb-4">Pourquoi tes visuels ne donnent pas encore de résultats ?</h2>
        <p class="text-white-70 mb-4">La plupart des gens échouent en design pour 3 raisons :</p>
        <ul class="list-unstyled">
          <li class="mb-3 d-flex align-items-start"><i class="fas fa-times-circle list-icon mt-1"></i> <span>Ils créent sans vraie direction</span></li>
          <li class="mb-3 d-flex align-items-start"><i class="fas fa-times-circle list-icon mt-1"></i> <span>Ils utilisent mal les ressources disponibles</span></li>
          <li class="mb-3 d-flex align-items-start"><i class="fas fa-times-circle list-icon mt-1"></i> <span>Ils ne savent pas structurer leurs idées</span></li>
        </ul>
        <div class="alert alert-dark border-start border-4 border-warning bg-black-50" style="background:#0a0a0a">
          <i class="fas fa-chart-line text-accent me-2"></i> <strong>👉 Résultat : des visuels faibles, sans impact.</strong>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card-dark p-4 text-center">
          <i class="fas fa-palette fa-3x text-accent mb-3"></i>
          <p class="fst-italic text-white-50">"Un visuel sans structure, c'est comme une recette sans ingrédients..."</p>
          <hr class="border-secondary">
          <div class="d-flex justify-content-between text-white-50 small">
            <span><i class="fas fa-chart-simple text-accent"></i> 76% manquent de clarté</span>
            <span><i class="fas fa-eye text-accent"></i> Impact faible</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- POSITIONNEMENT (mystère) -->
<section class="section bg-black" style="background: radial-gradient(circle at 10% 30%, #0b0b0b, #000000);">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <i class="fas fa-magic fs-1 text-accent mb-3"></i>
        <h2 class="display-6 fw-bold mb-3">Une méthode que j’ai construite au fil du temps</h2>
        <div class="lead text-white-70 mb-4">Avec l’expérience, j’ai remarqué quelque chose d’intéressant :</div>
        <div class="card-dark p-4 text-start mx-auto" style="max-width: 700px;">
          <p class="fs-5 mb-0"><i class="fas fa-quote-left text-accent me-2"></i> Les visuels qui fonctionnent suivent presque toujours une logique simple… mais que peu de gens comprennent vraiment.</p>
        </div>
        <p class="mt-4 text-white-50">J’ai donc développé une approche personnelle pour rendre cette logique plus claire. <br> Cette méthode a déjà aidé plusieurs personnes à améliorer leurs résultats.</p>
      </div>
    </div>
  </div>
</section>

<!-- MÉTHODE (version mystérieuse) -->
<section class="section" id="methode">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-6 fw-bold">Ce que tu vas découvrir pendant <span class="text-accent">la masterclass</span></h2>
      <p class="lead text-white-50">Je vais te montrer comment je pense un design avant même de le créer.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="step-locked">
          <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-lock text-accent"></i> <span class="fw-bold">🔒 Étape 1</span></div>
          <h4 class="fs-5 mb-0">Comprendre l’idée avant de commencer</h4>
          <p class="text-white-50 small mt-1">La fondation invisible derrière chaque grand visuel.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="step-locked">
          <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-lock text-accent"></i> <span class="fw-bold">🔒 Étape 2</span></div>
          <h4 class="fs-5 mb-0">Choisir les bons éléments au bon moment</h4>
          <p class="text-white-50 small mt-1">Sélection stratégique, pas au hasard.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="step-locked">
          <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-lock text-accent"></i> <span class="fw-bold">🔒 Étape 3</span></div>
          <h4 class="fs-5 mb-0">Organiser les éléments pour donner du sens</h4>
          <p class="text-white-50 small mt-1">Hiérarchie et lisibilité, clés de l'impact.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="step-locked">
          <div class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-lock text-accent"></i> <span class="fw-bold">🔒 Étape 4</span></div>
          <h4 class="fs-5 mb-0">Finaliser pour rendre le visuel efficace</h4>
          <p class="text-white-50 small mt-1">La touche finale qui capte l'attention.</p>
        </div>
      </div>
    </div>
    <div class="mt-5 text-center p-4 rounded-4" style="background: rgba(245,176,66,0.05); border:1px solid #2c2c2c">
      <i class="fas fa-brain text-accent fs-3 me-2"></i> <strong class="fs-5">👉 Le plus important n’est pas les outils… mais la manière de penser.</strong>
    </div>
  </div>
</section>

<!-- CE QUE TU VAS OBTENIR (flou + désir) + CE QUE CE N'EST PAS en grille -->
<section class="section-sm" id="benefits">
  <div class="container">
    <div class="row g-5">
      <div class="col-md-6">
        <div class="card-dark p-4 h-100">
          <i class="fas fa-gift text-accent fa-2x mb-3"></i>
          <h3 class="fs-2 fw-bold mb-4">✨ Ce que tu vas obtenir</h3>
          <ul class="list-unstyled">
            <li class="mb-3"><i class="fas fa-check-circle text-accent me-2"></i> Une nouvelle façon de voir le design</li>
            <li class="mb-3"><i class="fas fa-check-circle text-accent me-2"></i> Une meilleure compréhension des visuels efficaces</li>
            <li class="mb-3"><i class="fas fa-check-circle text-accent me-2"></i> Une méthode simple que tu peux appliquer</li>
            <li class="mb-3"><i class="fas fa-check-circle text-accent me-2"></i> Une base solide pour progresser rapidement</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-dark p-4 h-100">
          <i class="fas fa-ban text-accent fa-2x mb-3"></i>
          <h3 class="fs-2 fw-bold mb-4">🚫 Ce que ce n’est pas</h3>
          <ul class="list-unstyled">
            <li class="mb-3"><i class="fas fa-close text-secondary me-2"></i> Ce n’est pas un cours technique</li>
            <li class="mb-3"><i class="fas fa-close text-secondary me-2"></i> Ce n’est pas une formation logicielle</li>
            <li class="mb-3"><i class="fas fa-close text-secondary me-2"></i> Ce n’est pas compliqué</li>
          </ul>
          <div class="mt-3 p-3 rounded-3" style="background: #1a1a1a;">
            <p class="mb-0 fw-semibold text-accent">👉 C’est une initiation à une logique simple mais puissante.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PREUVE (Réalisations + étudiants) -->
<section class="section" id="preuve">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-6 fw-bold">Quelques <span class="text-accent">résultats</span></h2>
      <p class="lead text-white-50">Cette approche a déjà été appliquée sur plusieurs projets et transmise à des apprenants.</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="card-dark p-4 text-center">
          <i class="fas fa-bezier-curve fa-3x text-accent mb-3"></i>
          <h3 class="fs-2 fw-bold text-accent">15+</h3>
          <p>projets professionnels accompagnés</p>
          <div class="small text-white-50">Design branding & stratégie visuelle</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-dark p-4 text-center">
          <i class="fas fa-users fa-3x text-accent mb-3"></i>
          <h3 class="fs-2 fw-bold text-accent">300+</h3>
          <p>étudiants & créateurs formés</p>
          <div class="small text-white-50">Masterclass et ateliers privés</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-dark p-4 text-center">
          <i class="fas fa-rocket fa-3x text-accent mb-3"></i>
          <h3 class="fs-2 fw-bold text-accent">98%</h3>
          <p>de satisfaction</p>
          <div class="small text-white-50">amélioration de la structure visuelle</div>
        </div>
      </div>
    </div>
    <div class="mt-5 text-center">
      <div class="d-inline-block bg-dark p-3 rounded-pill px-4">
        <i class="fas fa-star text-accent me-1"></i> <span>travaux réalisés · étudiants accompagnés · projets clients réels</span>
      </div>
    </div>
  </div>
</section>

<!-- QUI PEUT REJOINDRE -->
<section class="section-sm">
  <div class="container">
    <div class="card-dark p-5 text-center">
      <i class="fas fa-door-open fa-2x text-accent mb-3"></i>
      <h2 class="display-6 fw-bold mb-4">À qui s'adresse cette masterclass ?</h2>
      <div class="row justify-content-center mt-3">
        <div class="col-md-10">
          <div class="d-flex flex-wrap gap-3 justify-content-center">
            <span class="badge-warning-bg fs-6 px-4 py-2"><i class="fas fa-paintbrush me-1"></i> Débutants en design</span>
            <span class="badge-warning-bg fs-6 px-4 py-2"><i class="fas fa-video me-1"></i> Créateurs de contenu</span>
            <span class="badge-warning-bg fs-6 px-4 py-2"><i class="fas fa-chart-line me-1"></i> Entrepreneurs</span>
            <span class="badge-warning-bg fs-6 px-4 py-2"><i class="fas fa-user-plus me-1"></i> Toute personne qui veut améliorer ses visuels</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FORMULAIRE + WHATSAPP (après validation) -->
<section class="section" id="formulaire">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-dark p-4 p-md-5 text-center">
          <i class="fas fa-ticket-alt fa-2x text-accent mb-3"></i>
          <h2 class="display-6 fw-bold mb-2">Accède à la masterclass gratuite</h2>
          <p class="text-white-50 mb-4">Remplis le formulaire, reçois l’accès immédiat et rejoins la communauté.</p>

          <!-- formulaire simple + simulation whatsapp -->
          <form id="masterclassForm" class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <input type="text" class="form-control form-control-custom" id="name" placeholder="Ton prénom" required>
              <div class="invalid-feedback">Prénom requis</div>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control form-control-custom" id="email" placeholder="Adresse email" required>
              <div class="invalid-feedback">Email valide requis</div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-custom w-100 py-3">👉 Rejoindre maintenant <i class="fas fa-chevron-right ms-1"></i></button>
            </div>
            <p class="text-muted small mt-3 mb-0">Aucun spam, accès immédiat à la masterclass + groupe privé.</p>
          </form>

          <!-- section whatsapp cachée au début puis affichée dynamiquement (succès formulaire) -->
          <div id="whatsappBlock" style="display: none;" class="mt-5 pt-3 border-top border-secondary">
            <div class="p-3 rounded-4" style="background: #0f2b1d;">
              <i class="fab fa-whatsapp fa-2x text-success me-2"></i>
              <h4 class="d-inline-block fw-bold">🎉 Accès validé !</h4>
              <p class="mt-2 mb-3">Félicitations, ta place est réservée. Clique ci-dessous pour rejoindre le groupe privé WhatsApp.</p>
              <a href="https://chat.whatsapp.com/example" target="_blank" class="btn whatsapp-btn"><i class="fab fa-whatsapp me-2"></i> Clique ici pour rejoindre le groupe privé</a>
              <p class="small text-white-50 mt-3">⚡ Reçois le lien de la masterclass et échange avec la communauté.</p>
            </div>
          </div>
          <!-- message d'info si besoin -->
          <div id="formSuccessMessage" class="mt-3 small"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="pt-5 pb-4 border-top border-secondary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h5 class="fw-bold"><span class="text-accent">✦</span> WePropulse</h5>
        <p class="text-white-50 small">Méthode personnelle pour des designs qui marquent.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <a href="#" class="me-3">À propos</a>
        <a href="#" class="me-3">Confidentialité</a>
        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="col-12 text-center mt-4 text-white-50 small">
        © 2026 Masterclass Graphisme — méthode inspirée de l’expérience réelle.
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap JS Bundle + custom JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  (function() {
    const form = document.getElementById('masterclassForm');
    const whatsappDiv = document.getElementById('whatsappBlock');
    const successMsgDiv = document.getElementById('formSuccessMessage');

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      // validation simple
      const nameInput = document.getElementById('name');
      const emailInput = document.getElementById('email');
      let isValid = true;
      if (!nameInput.value.trim()) {
        nameInput.classList.add('is-invalid');
        isValid = false;
      } else {
        nameInput.classList.remove('is-invalid');
      }
      const emailRegex = /^[^\s@]+@([^\s@.,]+\.)+[^\s@]{2,}$/;
      if (!emailInput.value.trim() || !emailRegex.test(emailInput.value.trim())) {
        emailInput.classList.add('is-invalid');
        isValid = false;
      } else {
        emailInput.classList.remove('is-invalid');
      }
      if (isValid) {
        // afficher le bloc whatsapp avec animation + message
        whatsappDiv.style.display = 'block';
        successMsgDiv.innerHTML = '<div class="alert alert-success mt-3 bg-success text-dark bg-opacity-25 border-success"><i class="fas fa-check-circle"></i> ✅ Félicitations, tu as été inscrit·e ! Rejoins le groupe WhatsApp ci-dessous.</div>';
        // scroll doux vers le formulaire pour voir le groupe
        setTimeout(() => {
          document.getElementById('formulaire').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 100);
        // Optionnel: on peut aussi désactiver le submit pour ne pas spam
        form.querySelector('button[type="submit"]').innerHTML = '✅ Inscription validée !';
        form.querySelector('button[type="submit"]').disabled = true;
      } else {
        successMsgDiv.innerHTML = '<div class="alert alert-danger mt-2">Veuillez remplir correctement le formulaire.</div>';
        setTimeout(() => { successMsgDiv.innerHTML = ''; }, 3000);
      }
    });
  })();
</script>
</body>
</html>