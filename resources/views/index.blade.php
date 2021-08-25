@extends('template')
@section('title', 'acceuil')
@section('titre', 'Gestion Depense')
@section('sousTitre', 'Bienvenue')
@section('bgimage','famille.jpg')
@section('content')

  <div class="bg-light">
    </div> <!-- .page-section -->
    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Description </h1>
            <p class="text-grey mb-4">Dans le but de solutionner un problème(« Bonjour, je m’appelle Yoro GUEYE, enseignant à l’école primaire El Hadji Mamadou LO. Avec un salaire mensuel et des fins de mois compliquées, comme pour la plupart des salariés, il nous est difficile de cerner nos dépenses. Ayant rencontré Monsieur FOFANA, il m’a demandé de vous présenter le problème pour que vous puissiez me proposer une solution logicielle.») par deux étudiants de l'université de Iba Der Thiam de Thies qui répondent au nom de El Hadji Amath SARR et Mohamed NDOYE</p>
            </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="assets/img/contrat.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a class="post-thumb">
                <img src="assets/img/blog/tiéb.png" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title">Hausse des prix des denrées alimentaires aux Sénégal</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="assets/img/macky.jpg" alt="">
                  </div>

                </div>
                <span class="mai-time"></span> 2 week ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a class="post-thumb">
                <img src="assets/img/blog/dougou.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title">Hausse des prix des denrées alimentaires aux Sénégal</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="assets/img/macky.jpg" alt="">
                  </div>

                </div>
                <span class="mai-time"></span> 2 weeks ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">

              </div>
              <a class="post-thumb">
                <img src="assets/img/blog/eau.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title">Hausse des prix sachets d'eau de 25  à 50fcfa</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="assets/img/macky.jpg" alt="">
                  </div>
                </div>
                <span class="mai-time"></span> 2 week ago
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="https://www.ansd.sn/index.php?option=com_ansd&view=titrepublication&id=14" class="btn btn-primary">Plus d'Infos</a>
        </div>

      </div>
    </div>
  </div>
  <!-- .page-section -->
  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Team Collaboration</h1>
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="assets/img/amath.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">El Hadji Amath SARR</p>
              <span class="text-sm text-grey">Etudiant à UIDT option Génie Logiciel passionné du développement, de la nouvelle technologie</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/ndoye.png" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Mohamed Ndoye</p>
              <span class="text-sm text-grey">Etudiant à UIDT option Génie Logiciel passionné du développement, de la nouvelle technologie</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="assets/img/fofana.png" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Moussa Fofana</p>
              <span class="text-sm text-grey">Notre brillant et veillant encadreur nos félicitations <br>Ingénieur en génie logiciel et doctorant en sciences de données et applications</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Pour vous facilité la gestion de votre dépense nous suggérons un Application mobile</h1>
          <a href="#"><img src="assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
@endsection
