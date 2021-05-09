@extends('layouts.app')

@section('content')
	<!-- ======= Services Section ======= -->
    <section  class="services section-bg" style="margin-top: 70px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Bienvenue dans le panel Admin</p>
        </div>

        <div class="row">
          <a href="{{url('/admin/homeInfo')}}">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box connaitre-box">
                <div class="icon"><img src="images/1.png" style="width: 50px; height: 50px;"></div>
                <h4 class="title"><a href="">Modification</a></h4>
                <p class="description">Vous pouvez ici modifier les infos de la page d'acceuil</p>
                <a class="btn-get-started ">Clicker Ici</a>
              </div>
            </div>
          </a>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box explorer-box">
              <div class="icon"><img src="images/2.png" style="width: 50px; height: 50px;"></div>
              <h4 class="title"><a href="">Explorer</a></h4>
              <p class="description">Je consulte la base de données des établissements et la liste des métiers par secteur</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box preparer-box">
              <div class="icon"><img src="images/3.png" style="width: 50px; height: 50px;"></div>
              <h4 class="title"><a href="">Me Preparer</a></h4>
              <p class="description">Tous les outils pour préparer mon entrée dans la vie professionnelle</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box lancer-box">
              <div class="icon"><img src="images/4.png" style="width: 50px; height: 50px;"></div>
              <h4 class="title"><a href="">Me Lancer</a></h4>
              <p class="description">J’accède aux dernières offres de stage et d’emploi au Maroc</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
@endsection