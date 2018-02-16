<!DOCTYPE html>

	<head>
		<meta charset="utf-8">
		<meta name ="viewport" content="width=device-width">
		<title>GIS, HSN</title>
		<link rel="stylesheet" href="../style.css">
	</head>
	<body>

		<header>

			<div class="container">

				<div id="branding">

					<h1><span class ="highlight">GIS</span> | Høgskolen i Sørøst-Norge</h1>

				</div>

			</div>

			<nav class="container">

				<ul>

					<li><a href="../index.html">Hjem</a></li>

					<li><a href="../studiet.html">Om studiet</a></li>

					<li><a href="../faq.html">Faq</a></li>

					<li><a href="../bilder.html">Bilder</a></li>

					<li><a href="kontakt.php">Kontakt oss</a>

					<li><a href="../fou.html">FOU</a></li>

					<li><a href="../omoss.html">Om oss</a></li>

					<li><a href="../Jobbe med GIS.html">Jobbe med GIS</a></li>

					<li><a href="../GIS i samfunnet.html">GIS i samfunnet</a></li>



				</ul>

			</nav>

		</header>
		
		<section id="showcase">

			<div class="formcontainer">

			<?php include('contactform.php'); ?>

<link rel="stylesheet" href="form.css" type="text/css">

  

  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

    <h3>Kontakt Harald Klempe</h3>

    <fieldset>

      <input placeholder="Fullt navn" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>

      <span class="error"><?= $name_error ?></span>

    </fieldset>

    <fieldset>

      <input placeholder="Epost" type="text" name="email" value="<?= $email ?>" tabindex="2">

      <span class="error"><?= $email_error ?></span>

    </fieldset>

    <fieldset>
		<p>Melding</p>
      <textarea  value="<?= $message ?>" name="message" tabindex="3">

      </textarea>

    </fieldset>

    <fieldset>

      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send</button>

    </fieldset>

    <div class="success"><?= $success ?></div>

  </form>

</div>
	
		</section>

		
		<footer>

			<p>Uganda Services, Copyright &copy; 2017</p>

		</footer>

	</body>

</html>