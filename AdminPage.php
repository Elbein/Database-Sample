<?php include "inc/html-top.php"; ?>
<body>
	<div class = "container">
<header>

	<h1>Fig Store Incorporated</h1>

	<div></div>

</header>

<form method="post" action="form-processor.php" class="full-width">


<!-- <label for="fname">Full name:</label> 
<input type="text" name="fname"><br><br>
<label for="email">Email Address:</label>
<input type="text" name="email"><br><br>
<label for="phone">Phone Number:</label>
<input type="text" name="phone"><br><br> -->

<fieldset>

<legend>Add New Item</legend>

<h3>Enter the figure information below</h3>

Figure Name: <input type="text" name = "figName" id="figName"><br>
Figure Height (centimeters): <input type="text" name = "figHeight" id="figHeight"><br>
Figure Width (grams): <input type="text" name = "figWidth" id="figWidth"><br>
Supplier: <input type="text" name = "supplier" id="supplier"><br>
Price: <input type="text" name = "figPrice" id="figPrice"><br>
Figure Name: <input type="text" name = "iname" id="fullname"><br>
<h3>Figure Condition</h3>

	<input type="radio" name="figQuality" id="figMint" value="mint">
	<label for = "figMint">Mint</label>
	<br>

	<input type="radio" name="figQuality" id="figChipped" value="chipped">
	<label for = "figChipped">Chipped</label>
	<br>

	<input type="radio" name="figQuality" id="figScratched" value="scratch">
	<label for = "figScratched">Scratched</label>
	<br>

	<input type="radio" name="figQuality" id="figCracked" value="crack">
	<label for = "figCracked">Cracked</label>
	<br>

	<input type="radio" name="figQuality" id="figBroken" value="broken">
	<label for = "figBroken">Broken</label>
	<br>
	
	<h3>New or Used/Pre-Owned</h3>

	<input type="radio" name="figOwned" id="figNew" value="new">
	<label for = "figNew">New</label>
	<br>

	<input type="radio" name="figOwned" id="figUsed" value="used">
	<label for = "figUsed">Pre-Owned</label>
	<br>

	Material: <input type="text" name = "figMaterial" id="figMaterial"><br>

	<h3>Figure Categories</h3>

	<input type="checkbox" name="sci-fi" id="sci-fi" value="StarWars">
	<label for = "sci-fi">Science Fiction</label>
	<br>

	<input type="checkbox" name="horror" id="horror" value="Nightmare">
	<label for = "horror">Horror</label>
	<br>

	<input type="checkbox" name="animal" id="animal" value="beast">
	<label for = "animal">Animals</label>
	<br>

	<input type="checkbox" name="adventure" id="adventure" value="quest">
	<label for = "adventure">Adventure</label>
	<br>

	<input type="checkbox" name="realLife" id="realLife" value="nonfiction">
	<label for = "realLife">Real Life</label>
	<br>

	<input type="checkbox" name="fiction" id="fiction" value="fictional">
	<label for = "fiction">Fictional</label>
	<br>

	<input type="checkbox" name="retro" id="retro" value="oldschool">
	<label for = "retro">Retro</label>
	<br>

	<input type="checkbox" name="newRelease" id="newRelease" value="fresh">
	<label for = "newRelease">New Releases</label>
	<br>





	<input type="checkbox" name="child" id="child" value="kid">
	<label for = "child">Child</label>
	<br>

	<input type="checkbox" name="teen" id="teen" value="adolescent">
	<label for = "teen">Teenager</label>
	<br>

	<input type="checkbox" name="adult" id="adult" value="grownUp">
	<label for = "adult">Adult</label>
	<br>

	<input type="checkbox" name="male" id="male" value="boy">
	<label for = "male">Male</label>
	<br>

	<input type="checkbox" name="female" id="female" value="girl">
	<label for = "female">Female</label>
	<br>



	<input type="checkbox" name="" id="" value="">
	<label for = "">Horror</label>
	<br>

</fieldset>


</form>

<!-- <nav class = "menu">
	<li><a href="original-trilogy.html">Original Trilogy</a></li>
	<li><a href="prequel-trilogy.html">Prequel Trilogy</a></li>
	<li><a class = "is-current" href="sequel-trilogy.html">Sequel Trilogy</a></li>
	<li><a href="installments.html">Installments in Film and Television</a></li>

	</nav> -->

</div><!--.container-->
</body>
</html>