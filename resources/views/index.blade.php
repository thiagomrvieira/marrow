@extends('layouts.app-home')

@section('body')
	<div id="wrapper">

		<!-- Intro -->
			<section class="intro">
				<header>
					<h1>Nome do APP</h1>
					<p>Doação de sangue e Madula óssea</p>
					<ul class="actions">
						<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
					</ul>
				</header>
				<div class="content">
					<span class="image fill" data-position="center"><img src="{{asset('img/blood.jpeg')}}" alt="" /></span>
				</div>
			</section>

		<!-- Section -->
			<section id="first">
				<header>
					<h2>Sobre nós</h2>
				</header>
				<div class="content">
					<p><strong>Nome do software</strong> é um software voltado para doação de sangue e medula óssea. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor amet fermentum. Nullam venenatis erat id vehicula ultrices sed ultricies condimentum. Magna sed etiam consequat, et lorem adipiscing sed nulla. Volutpat nisl et tempus et dolor libero, feugiat magna tempus, sed et lorem adipiscing.</p>
					<span class="image main"><img src="{{asset('img/pic02.jpg')}}" alt="" /></span>
				</div>
			</section>

		<!-- Section -->
			<section>
				<header>
					<h2>Como funciona</h2>
				</header>
				<div class="content">
					<p><strong>Etiam tristique libero</strong> eu nibh porttitor amet fermentum. Nullam venenatis erat id vehicula ultrices sed ultricies condimentum.</p>
					<ul class="feature-icons">
						<li class="icon fa-gear">Informações sobre procedimentos</li>
						<li class="icon fa-laptop">Agendamento de doação</li>
						<li class="icon fa-bolt">Emissão de alertas</li>
						<li class="icon fa-signal">Relatório de doações</li>
						<li class="icon fa-map-marker">Postos de coleta</li>
						<li class="icon fa-code">Nibh amet venenatis</li>
					</ul>
					<p>Vehicula ultrices sed ultricies condimentum. Magna sed etiam consequat, et lorem adipiscing sed nulla. Volutpat nisl et tempus et dolor libero, feugiat magna tempus, sed et lorem adipiscing.</p>
				</div>
			</section>

		<!-- Section -->
			<section>
				<header>
					<h2>Doação de sangue</h2>
				</header>
				<div class="content">
					<p><strong>Integer mollis egestas</strong> nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>

					<!-- Section -->
						<section>
							<header>
								<h3>Doação de sangue</h3>
								<p>Vehicula ultrices dolor amet ultricies et condimentum. Magna sed etiam consequat, et lorem adipiscing sed dolor sit amet, consectetur amet do eiusmod tempor incididunt  ipsum suspendisse ultrices gravida.</p>
							</header>
							<div class="content">
								<div class="gallery">
									<a href="images/gallery/fulls/01.jpg" class="landscape"><img src="{{asset('img/gallery/thumbs/01.jpg')}}" alt="" /></a>
									<a href="images/gallery/fulls/02.jpg"><img src="{{asset('img/gallery/thumbs/02.jpg')}}" alt="" /></a>
									<a href="images/gallery/fulls/03.jpg"><img src="{{asset('img/gallery/thumbs/03.jpg')}}" alt="" /></a>
									<a href="images/gallery/fulls/04.jpg" class="landscape"><img src="{{asset('img/gallery/thumbs/04.jpg')}}" alt="" /></a>
								</div>
							</div>
						</section>

					<!-- Section -->
						<section>
							<header>
								<h3>Doação de Medula óssea</h3>
								<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam sed facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet mauris. Ut magna finibus nisi nec lacinia ipsum maximus.</p>
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


	