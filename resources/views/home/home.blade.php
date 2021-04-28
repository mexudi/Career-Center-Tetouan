@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-6" style="margin-bottom: 100px;">
		<div class="text-center mb-5">
			<h1 style="font-family: Roboto;font-size: 2rem; font-weight: 900;">
	    	Qu'est ce que j'y trouve</h1>
		</div>
		<div class="row d-flex justify-content-center mb-5" style="font-family: Roboto;">
			<div class="col-3 left" style="border:2px #EA4E3C solid; height: 200px; border-radius: 20px;">
				<div class="d-flex justify-content-center mt-3">
					<img src="images/1.png"  style="width: 50px; height: 50px;">
				</div>
					<h3 style="text-align: center;">Me Connaitre</h3>
				<p>Je teste mon niveau en langues, je découvre les métiers qui matchent avec ma personnalité</p>
			</div>
			
			<div class="col-3 right" style="border: 2px #742F8B solid; height: 200px; border-radius: 20px;">
				<div class="d-flex justify-content-center mt-3">
					<img src="images/2.png"  style="width: 50px; height: 50px;">
				</div>
				<h3 style="text-align: center;">Explorer</h3>
				<p>Je consulte la base de données des établissements et la liste des métiers par secteur</p>
			</div>
		</div>
		<div class="row d-flex justify-content-center" style="font-family: Roboto;">
			<div class="col-3 left" style="border:2px #25CBD3 solid ; height: 200px; border-radius: 20px;">
				<div class="d-flex justify-content-center mt-3">
					<img src="images/3.png"  style="width: 50px; height: 50px;">
				</div>
				<h3 style="text-align: center;">Me Preparer</h3>
				<p>Tous les outils pour préparer mon entrée dans la vie professionnelle</p>
			</div>
			<div class="col-3 right" style="border:2px #F9D507 solid ;height: 200px; border-radius: 20px;">
				<div class="d-flex justify-content-center mt-3">
					<img src="images/4.png"  style="width: 50px; height: 50px;">
				</div>
				<h3 style="text-align: center;">Me Lancer</h3>
				<p>J’accède aux dernières offres de stage et d’emploi au Maroc</p>	
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mb-3">
			<div class="col-3" style="border-top:2px #EA4E3C solid;"></div>
			<div class="col-3" style="border-top:2px #742F8B solid;"></div>
			<div class="col-3" style="border-top:2px #25CBD3 solid;"></div>
			<div class="col-3" style="border-top:2px #F9D507 solid;"></div>
		</div>
	</div>
	<div class="container" style="margin-top: 100px; margin-bottom: 150px;">
		
		<div class="row">
			<div class="col">
				<img src="images/img-about.png">
			</div>
			<div class="col">
				<div class="row d-flex align-items-baseline mb-5">
					<div class="col"><img src="images/logo_home.png" style="width: 80px; height: 100px;"></div>
					<div class="col-8"><h3 class="text-left" style="font-size: 2rem; font-weight: 900;">LE CAREER CENTER:<br>QU'EST-CE QUE C'EST</h3></div>
				</div>
				<p>
					Un Carrer Center est un esapace destine aux jeune et aux employeurs et qui a pour vacation de renforcer l'employabilite des jeunes.
					Les Career Centers sont le fruit de la cooperation entre le gouvernement de Maroc et le gouvernement des Etats-Unis. Ils sont finances par le peuple 
					americain a travers l'Agence americaine pour le Developpement international (USAID Maroc).
				</p>
				<a href="https://vcc.careercenter.ma/vcc/" target="_blank">
					<button type="button" class="btn btn-outline-dark mt-3">En savoir plus</button>
				</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="text-center mb-5">
			<h1>Equipe de Centre</h1>
		</div>
		<div class="row">
			<div class="col-4 text-center">
				<img src="images/person_2.jpg" class="rounded-circle" style="width: 50%; height: auto;">
				<h2 style="color: #B3B3B1;">Sarah Sharp</h2>
				<h5 style="color: #A4D55D ;">Directeur</h5>
			</div>
			<div class="col-4 text-center">
				<img src="images/person_3.jpg" class="rounded-circle" style="width: 50%; height: auto;">
				<h2 style="color: #B3B3B1;">Tom Sharp</h2>
				<h5 style="color: #A4D55D ;">Conseiller carrière</h5>
			</div>
			<div class="col-4 text-center">
				<img src="images/person_4.jpg" class="rounded-circle" style="width: 50%; height: auto;">
				<h2 style="color: #B3B3B1;">Winston Hodson</h2>
				<h5 style="color: #A4D55D ;">Conseiller carrière</h5>
			</div>
		</div>
		<div class="mt-5 text-center">
			<h3 style="font-weight: 500; color: gray; font-size: 1rem; line-height: 1.7;letter-spacing: 0.2rem;">PRENDRE RENDEZ-VOUS</h3>
			
			<a href="#" style="font-size: 18px;font-weight: 600;"><button type="button" class="btn btn-outline-dark mt-1">Click ici</button> </a>
		</div>
	</div>
@endsection
