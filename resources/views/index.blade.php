@extends('layouts.app-home')

@section('body')
	<div id="wrapper">

		<!-- Intro -->
			<section class="intro">
				<header>
					<h1>Nome do APP</h1>
					<p>Doação de sangue e Medula óssea</p>
					<ul class="actions">
						<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
					</ul>
				</header>
				<div class="content" >
					<span class="image fill" data-position="center"><img id="icon-home" src="{{asset('img/icon.png')}}" alt="" /></span>
				</div>
			</section>

		<!-- Section -->
			<section id="first">
				<header>
					<h2>Sobre o (nome do projeto)</h2>
				</header>
				<div class="content">
					<p><strong>(Nome do projeto)</strong> é um software voltado para doação de sangue e medula óssea. 
						O projeto tem como objetivo principal aproximar doadores de postos de coleta através módulos 
						desenvolvidos para agilizar e informar o doador à respeito de procedimentos, 
						incluindo um feedback à respeito de doações já efetuadas, alertas de baixo estoque e muito mais.</p>
					<span class="image main"><img src="{{asset('img/pic02.jpg')}}" alt="" /></span>
				</div>
			</section>

		<!-- Section -->
			<section>
				<header>
					<h2>Como funciona</h2>
				</header>
				<div class="content">
					<p>Ao criar um perfil de doador no <strong>(nome do projeto)</strong> você terá acesso às principais funcionalidades:</p>
					<ul class="feature-icons">
						<li class="icon fa-calendar">Agendamento de doação</li>
						<li class="icon fa-info-circle">Informações sobre procedimentos</li>
						<li class="icon fa-exclamation-triangle">Emissão de alertas</li>
						<li class="icon fa-file">Relatório de doações</li>
						<li class="icon fa-map-marker">Localização de postos de coleta próximos</li>
						<li class="icon fa-comment">Feedback sobre doações efetuadas</li>
					</ul>
					<p>Você pode começar usar agora mesmo. Crie uma conta <a href="/register">aqui</a></p>
				</div>
			</section>

		<!-- Section -->
			<section>
				<header>
					<h2>Doações</h2>
				</header>
				<div class="content">
					<p> <strong> Menos de 2% </strong>da população brasileira doa sangue regularmente.
						<br> No Brasil, segundo o Ministério da Saúde, 1,8% da população doa sangue com 
						regularidade. Esse número fica um pouco abaixo dos 2% ideais definidos 
						pela Organização Pan-Americana de Saúde (OPAS). Ou seja, por aqui, os bancos de 
						sangue operam no limite. </p>

					<!-- Section -->
						<section>
							<header>
								<h3>Doação de sangue</h3>
								<p>É um procedimento praticamente indolor, pelo qual um doador tem seu sangue coletado para uso subsequente em uma transfusão de sangue. 
									<br> Em uma única doação você pode salvar até <strong>3 vidas </strong>. 
									<br> Agende sua doação <a href="/agendamento"> aqui</a>.
								</p>
							</header>
							<div class="content">
								<div class="gallery">
									<a href="images/gallery/fulls/02.jpg"><img src="{{asset('img/blood-01.jpeg')}}" alt="" /></a>
									<a href="images/gallery/fulls/03.jpg"><img src="{{asset('img/blood-03.jpeg')}}" alt="" /></a>
									<a href="images/gallery/fulls/04.jpg" class="landscape"><img src="{{asset('img/blood-02.jpeg')}}" alt="" /></a>
								</div>
							</div>
						</section>

					<!-- Section -->
						<section>
							<header>
								<h3>Doação de Medula óssea</h3>
								<p>Doação de medula óssea consiste na substituição de uma medula óssea doente, ou deficitária, por células normais da medula óssea, com o objetivo de reconstituição de uma nova medula saudável.</p>
							</header>
							<div class="content">
								<div class="gallery">
									<a href="images/gallery/fulls/05.jpg" class="landscape"><img src="{{asset('img/gallery/thumbs/05.jpg')}}" alt="" /></a>
									<a href="images/gallery/fulls/06.jpg"><img src="{{asset('img/gallery/thumbs/06.jpg')}}" alt="" /></a>
									<a href="images/gallery/fulls/07.jpg"><img src="{{asset('img/gallery/thumbs/07.jpg')}}" alt="" /></a>
								</div>
							</div>
						</section>

				

				</div>
			</section>

		<!-- Section -->
			<section>
				<header>
					<h2>Começe agora mesmo</h2>
				</header>
				<div class="content">
					<p><strong>Proin tempus feugiat</strong> sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore.</p>
					<ul class="actions">
						<li><a href="/register" class="button primary large">Criar conta</a></li>
						<li><a href="/login" class="button large">Fazer Login</a></li>
					</ul>
				</div>
			</section>


		<!-- Section -->
			<section>
				<header>
					<h2>Contato</h2>
				</header>
				<div class="content">
					<p><strong>Auctor commodo</strong> interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis.</p>
					<form>
						<div class="fields">
							<div class="field half">
								<input type="text" name="name" id="name" placeholder="Name" />
							</div>
							<div class="field half">
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<textarea name="message" id="message" placeholder="Message" rows="7"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send Message" class="button primary" /></li>
						</ul>
					</form>
				</div>
				<footer>
					<ul class="items">
						<li>
							<h3>Email</h3>
							<a href="#">information@untitled.ext</a>
						</li>
						<li>
							<h3>Phone</h3>
							<a href="#">(000) 000-0000</a>
						</li>
						<li>
							<h3>Address</h3>
							<span>1234 Somewhere Road, Nashville, TN 00000</span>
						</li>
						
					</ul>
				</footer>
			</section>


			

	</div>
        
      
  
@endsection


	