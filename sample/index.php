<!DOCTYPE html>
<html>
	<head>
		<title>Teste</title>
		<style type="text/css">
			* {
				box-sizing: border-box;
				margin: 0;
				padding: 0;
				list-style: none;
			}

			*:after, *:before {
				box-sizing: inherit;
			}

			.wrapper {
				position: relative;
				margin: 50px auto;
				max-width: 1800px;
				background: #EFEFEF;
			}

			.wrapper:after {
				content: "";
				display: table;
				clear: both;
			}

			.wrapper.flow-active .conteudo-box {
				position: absolute;
				float: none;
			}

			.conteudo-box {
				display: block;
				float: left;
				margin: 5px;
				padding: 15px;
				width: 250px;
				background: #FFF;
				border: 1px #FDD solid;
				border-radius: 4px;
			}

			.image-wrapper {
				display: block;
				width: 100%;
			}

			.image-wrapper img {
				max-width: 100%;
			}

			.text-wrapper p {
				margin-top: 10px;
				font-family: sans-serif;
				color: #333;
			}

		</style>
	</head>
	<body>
		<section class="wrapper">
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image1.jpeg" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consecteturamet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image1.jpeg" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image3.png" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam itaque necessitatibus adipisci minima sit, non repellendus cumque? Dolorum iusto voluptatum sunt, tempore ab quia. Explicabo, quod. Doloremque eius inventore modi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image2.jpg" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image1.jpeg" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error recusandae saepe non itaque, quidem consectetur maiores magnam ullam sint alias animi praesentium quibusdam rerum voluptates adipisci numquam tempora. Modi, aspernatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea totam neque minus! Id, ut deleniti eos. Magni veritatis architecto nam voluptas sequi, adipisci provident eaque est, id quos rem itaque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image2.jpg" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image3.png" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde minima porro commodi aliquam placeat distinctio odit cupiditate explicabo magnam, consequatur a nisi atque dolorem modi nulla, illum repellendus laudantium error.sit amet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image1.jpeg" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consectetur adipis Lorem ipsum dolor s dolores natus est pariatur itaque suscipit sed nam alias perspiciatis. Architecto voluptas praesentium velit magnam odio saepe placeat, est deleniti!	 icing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image2.jpg" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image3.png" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi invent Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptate culpa consequuntur, eos, magni debitis soluta odit possimus velit exercitationem recusandae ullam necessitatibus rem magnam commodi dolorem incidunt unde consectetur. ore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image2.jpg" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
			<article class="conteudo-box">
				<figure class="image-wrapper"><img src="img/image1.jpeg" alt=""></figure>
				<div class="text-wrapper">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dicta totam dolores, quo quos, accusantium, harum perspiciatis expedita illo maiores, id minima vel. Quia quibusdam quaerat laboriosam sit commodi maiores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsam quos, repudiandae, id corporis dicta commodi inventore magnam beatae quaerat delectus alias, voluptatum deserunt minima possimus? Illo modi obcaecati quis?</p>
				</div>
			</article>
		</section>
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="assets/pinterestish-grid/jquery.pinterestish-grid.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>