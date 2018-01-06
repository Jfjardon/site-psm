@extends('layouts.app')

@section('content')
	<section id="welcome-section" style="background-image: url('{!! get_theme_mod('home_page_welcome_section_img',\App\App::get_image_page_header('dept-mm', 'jpg')) !!}')">
		<div class="filter"></div>
		<div class="row">
			<div id="welcome-left-collumn" class="col-12 col-md-7">
				<div id="logo-welcome" class="col-7 offset-1 no-padding hidden-md-down">
					<img src="{!! _e(get_template_directory_uri().'/assets/images/svg/psm-logo.svg') !!}" alt="Logo de la seciton accueil du site PSM">
				</div>
				<div id="svg-slider-texte" class="col-12 col-sm-10 offset-sm-1 no-padding">
					<div id="text-slider-container">
						<div id="text-slider-idee" class="col-12 no-padding text-slider">
							<h3 class="home_page_welcome_section_slide_1_title">
                                {{ get_theme_mod(
                                    'home_page_welcome_section_slide_1_title',
                                    'Berceau d\'idées innovantes')
                                }}
                            </h3>
							<p class="home_page_welcome_section_slide_1_text">
                                {!! get_theme_mod(
                                    'home_page_welcome_section_slide_1_text',
                                    'Les plus grandes innovations naissent d\'idées simples. Les étudiants de PSM sont encouragés à '.
                                    'cultiver leur créativité et leur imagination, à voir le monde avec un regard novateur et à '.
                                    'concevoir des produits et services multimédia répondant aux besoins et aux demandes d’aujourd’hui '.
                                    'et de demain.'
                                ) !!}
                            </p>
						</div>
						<div id="text-slider-reunion" class="col-12 no-padding text-slider">
                            <h3 class="home_page_welcome_section_slide_2_title">
                                {{ get_theme_mod(
                                    'home_page_welcome_section_slide_2_title',
                                    'Des compétences de leader'
                                )}}
                            </h3>
                            <p class="home_page_welcome_section_slide_2_text">
                                {!! get_theme_mod(
                                    'home_page_welcome_section_slide_2_text',
                                    'L’expérience prépare mieux que la théorie aux défis du monde actuel. Chez PSM, nous formons '.
                                    'des chefs de projet complets et polyvalents en confrontant nos étudiants à des expériences '.
                                    'concrètes. À la sortie, ils seront capables de concevoir, réaliser et promouvoir des projets '.
                                    'multimédia complexes et innovants.')
                                !!}
                            </p>
						</div>
						<div id="text-slider-travail" class="col-12 no-padding text-slider">
                            <h3 class="home_page_welcome_section_slide_3_title">
                                {{ get_theme_mod(
                                    'home_page_welcome_section_slide_3_title',
                                    'Partager, valoriser, réussir'
                                ) }}
                            </h3>
                            <p class="home_page_welcome_section_slide_3_text">
                                {!! get_theme_mod(
                                    'home_page_welcome_section_slide_3_text',
                                    'Savoir composer, gérer et travailler dans une équipe de professionnels aux profils différents '.
                                    'est une compétence fondamentale dans le secteur du multimédia. En étant confrontés à de '.
                                    'nombreux projets collectifs, les étudiants de PSM apprennent à valoriser les compétences '.
                                    'spécifiques de chaque membre d’une équipe, à partager et à communiquer pour mieux réussir.'
                                )!!}
                            </p>
						</div>
						<div id="text-slider-deploiement" class="col-12 no-padding text-slider">
                            <h3 class="home_page_welcome_section_slide_4_title">
                                {{ get_theme_mod(
                                    'home_page_welcome_section_slide_4_title',
                                    'La qualité avant tout'
                                ) }}</h3>
                            <p class="home_page_welcome_section_slide_4_text">
                                {!! get_theme_mod(
                                    'home_page_welcome_section_slide_4_text',
                                    'Un produit ou un service de qualité est un produit qui sait répondre aux besoins et aux '.
                                    'attentes de ses cibles. Pour cette raison, PSM tient particulièrement à cœur d’enseigner '.
                                    'aux professionnels du multimédia de demain à bien observer et analyser le marché, à concevoir '.
                                    'et à réaliser des produits et des services visant à proposer la meilleure expérience '.
                                    'utilisateur possible.'
                                ) !!}</p>
						</div>
					</div>
				</div>

				<ul id="svg-slider-nav" class="col-10 offset-1 d-flex no-padding justify-content-between align-items-center">
					<li><i id="prev" class="inactive fa fa-backward"></i></li>
					<li><i id="sel_idee" class="selected fa fa-circle"></i></li>
					<li><i id="sel_reunion" class="fa fa-circle"></i></li>
					<li><i id="sel_travail" class="fa fa-circle"></i></li>
					<li><i id="sel_deploiement" class="fa fa-circle"></i></li>
					<li><i id="next" class="fa fa-forward"></i></li>
				</ul>
			</div>
			<div id="welcome-right-collumn" class="col-12 col-md-5">
				<div id="animations_home">
					<div class="col-8 offset-2 col-md-12 offset-md-0  svg-container d-flex align-items-center" id="idee">
						{!! get_template_part('/assets/images/svg/inline', 'idee.svg') !!}

					</div>
					<div class="col-8 offset-4 col-md-12 offset-md-0  svg-container d-flex align-items-center" id="reunion">
						{!! get_template_part('../dist/images/svg/inline', 'reunion.svg') !!}
					</div>
					<div class="col-8 offset-4 col-md-12 offset-md-0  svg-container d-flex align-items-center" id="travail">
						{!! get_template_part('../dist/images/svg/inline', 'travail.svg') !!}
					</div>
					<div class="col-8 offset-4 col-md-12 offset-md-0  svg-container d-flex align-items-center" id="deploiement">
						{!! get_template_part('../dist/images/svg/inline', 'deploiement.svg') !!}
					</div>
				</div>
			</div>
		</div>
		<div class="mouse">
			<div class="scroll"></div>
		</div>
		<div class="swipe-container">
			{!! get_template_part('../dist/images/svg/inline', 'swipe.svg') !!}
		</div>
	</section>
	<!-- Welcome section end -->

	<!-- Presentation section start -->
	<section id="presentation-section" class="section-image-left-content-right">
		<div class="row justify-content-center align-items-center">
			<div class="losange"></div>
			<div class="losange"></div>
			<div class="losange"></div>
			<div class="losange"></div>
			<div class="content offset-0 offset-md-2 col-12 col-md-9">
				<div class="row">
					<div class="picture col-12 col-md-4 no-padding">
                            {!! get_template_part('/assets/images/svg/inline', 'anac1.svg') !!}
					</div>
					<div class="text col-12 col-md-8 d-flex justify-content-center align-items-start flex-column">
						<h2 class="home_page_presentation_section_title">
                            {{ get_theme_mod(
                                'home_page_presentation_section_title',
                                'PASSIONNÉS ET SUPER MOTIVÉS !'
                            ) }}
                        </h2>
                        <p class="home_page_presentation_section_text">
                            {!! get_theme_mod(
                                'home_page_presentation_section_text',
                                'Chez PSM, votre <b>passion</b> sera la clé de votre réussite. Que vous ayez un profil de graphiste, communicant, '.
                                'développeur, informaticien, ou que vous soyez tout simplement <b>motivé</b> et passionné par <b>l’innovation</b>, le '.
                                'multimédia et les nouvelles technologies, nous allons vous transmettre les <b>outils</b> et les <b>expériences</b> '.
                                'nécessaires à faire de vous un professionnel qualifié dans votre domaine de prédilection. '.
                                'Vous visez <b>l’excellence</b> pour la poursuite de vos études en <b>BAC+3</b> ou en <b>Master</b> ? PSM pourrait être la '.
                                'réponse : venez découvrir nos <a href="#">formations</a> et nos <a href="">modalités d’admission</a>. '
                            ) !!}
                        </p>
                        <span class="home_page_presentation_section_admission_link">
                            <a class="btn btn-psm" href="{!! get_theme_mod(
                                'home_page_presentation_section_admission_link',
                                '#'
                            ) !!}" target="_blank">ADMISSION
                            </a>
                        </span>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Presentation section end -->

	<!-- Formation section start -->
	<section id="formations-section">
		<div class="row formations ">
			<a href="{{ site_url().'/licence' }}" style="background-image:url('{{ get_theme_mod(
			        'home_page_formations_section_img_1',
			        get_template_directory_uri(). '/../dist/images/960-960-city-1.jpg'
			    ) }}')" class="formation home_page_formations_section_img_1">
				<div class="filter"></div>
				<h2>L<span class="writing-letter">ICENCE</span>3</h2>
			</a>

			<a href="{{add_query_arg( 'formation', 'm1', site_url().'/master' )}}" style="background-image:url('{{ get_theme_mod(
			        'home_page_formations_section_img_2',
			        get_template_directory_uri(). '/../dist/images/960-960-city-2.jpg'
			    )}}')" class="formation home_page_formations_section_img_2">
				<div class="filter"></div>
				<h2 class="formation-title">M<span class="writing-letter">ASTER</span>1</h2>
			</a>

			<a href="{{add_query_arg( 'formation', 'm2', site_url().'/master' )}}" style="background-image:url('{{ get_theme_mod(
			        'home_page_formations_section_img_3',
			           get_template_directory_uri(). '/../dist/images/960-960-city-3.jpg'
			    )}}')" class="formation home_page_formations_section_img_3">
				<div class="filter"></div>
				<h2 class="formation-title">M<span class="writing-letter">ASTER</span>2</h2>
			</a>
		</div>
	</section>
	<!-- Formation section end -->

	<!-- Projects section start -->
	<section id="projects-section" class="section-image-right-content-left">
		<div class="row justify-content-center align-items-center">
			<div class="losange"></div>
			<div class="losange"></div>
			<div class="losange"></div>
			<div class="losange"></div>
			<div class="content col-12 col-md-9">
				<div class="row">
					<div class="text col-12 col-md-8 d-flex justify-content-center align-items-start flex-column">
						<h2 class="home_page_projects_section_title">
                            {{ get_theme_mod(
                               'home_page_projects_section_title',
                               'Des formations orientées projet !'
                           ) }}
                        </h2>
						<p class="home_page_projects_section_text">
                            {!! get_theme_mod(
                                'home_page_projects_section_text',
                                'Les <b>projets multimédia</b> sont le pain quotidien des étudiants de PSM. Chaque année, ils sont amenés à
                                réaliser un vrai projet d’<b>équipe</b>, en totale autonomie et dans des <b>conditions réelles</b> (et cela, en
                                plus des projets spécifiques aux unités d’enseignements).<br />
                                Ces <b>expériences concrètes</b>, en plus d’être extrêmement formatrices et valorisantes, aboutissent souvent
                                à des résultats remarquables.<br />
                                Découvrez les projets réalisés au fil des années par nos étudiant dans la section dédiée de ce site !'
                            )!!}
						</p>
						<div class="btns-box">
                            <span class="home_page_projects_section_rhizome_page">
                                 <a class="btn btn-psm" href="{!! site_url() .'/?p='. get_theme_mod(
                                    'home_page_projects_section_rhizome_page',
                                    '1866'
                                ) !!}">Projets rhizomes</a>
                            </span>
                            <span class="home_page_projects_section_pfe_page">
                                 <a class="btn btn-psm" href="{!! site_url() .'/?p='. get_theme_mod(
                                    'home_page_projects_section_pfe_page',
                                    '1868'
                                ) !!}">Projets fin d'études</a>
                            </span>
						</div>
					</div>
					<div class="picture col-12 col-md-4">
                        {!! get_template_part('/assets/images/svg/inline', 'anac2.svg') !!}
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</section>
	<!-- Projects section end -->

	<!-- News section start -->
	<section id="news-section">
		<div class="row justify-content-around">
            {!! \App\FrontPage::get_three_news() !!}
            <div class="row w-100">
				<div class="see-all-news  d-flex justify-content-center align-items-center col-12">
					<a href="#" class="btn btn-psm">Voir toutes les actualités</a>
				</div>
			</div>
		</div>
	</section>
	<!-- News section end -->

	<!-- Professional section start -->
	<section id="professional-section">
         <div class="row justify-content-center align-items-center">
			<div class="losange"></div>
			<div class="losange"></div>
			<div class="losange"></div>
			<div class="losange"></div>
			<div id="professional-content" class="col-12 col-lg-11">
				<div class="row">
					<div id="professional-picture" class="col-12 col-md-4">
						{!! get_template_part('../dist/images/svg/inline', 'anac3.svg') !!}
					</div>
					<div id="professional-text" class="col-12 col-md-8 d-flex justify-content-center align-items-start flex-column">
						<h2 class="home_page_professional_section_title">
                            {{ get_theme_mod(
                               'home_page_professional_section_title',
                               'Un tremplin vers le monde du travail'
                            ) }}
                        </h2>
						<p class="home_page_professional_section_text">
                            {!! get_theme_mod(
                             'home_page_professional_section_text',
                             'La force de PSM est la <b>réussite</b> de ses étudiants dans le monde du travail. Pour atteindre ce but,
                             nous misons sur la <b>qualité</b> des enseignements, sur la <b>polyvalence</b> des compétences des étudiants et
                             sur des <b>expériences professionnelles</b> réellement valorisantes pour leurs profils.<br />
                             Les stages de Licence 3 et de Master 2 visent à favoriser l’insertion professionnelle et le <b>recrutement</b>
                             immédiat de nos diplômés.<br />
                             Vous êtes un professionnel et vous souhaitez soumettre une offre de stage / emploi à nos étudiants ?
                             Un formulaire est disponible pour vous dans la section <a href="#">Espace Pro</a>.'
                            )!!}
						</p>
                        <span class="home_page_professional_section_link_page_pro">
                             <a class="btn btn-psm" href="{!! site_url() .'/?p='. get_theme_mod(
                                'home_page_professional_section_link_page_pro',
                                '1868'
                            ) !!}">Espace pro</a>
                        </span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Professional section end -->

	{{--  @if (!have_posts())
			<div class="alert alert-warning">
				{{ __('Sorry, no results were found.', 'sage') }}
			</div>
			{!! get_search_form(false) !!}
		@endif

		@while (have_posts()) @php(the_post())
		@include('partials.content-'.get_post_type())
		@endwhile

		{!! get_the_posts_navigation() !!}--}}
@endsection
