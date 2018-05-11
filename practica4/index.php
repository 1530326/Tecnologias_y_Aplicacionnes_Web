<?php
    //se incluye el archivo formulario ya que se utilizarán elementos de ese archivo en este
    include 'formulario.php'; 
    //se crea un objeto de la clase Formulario 
    $form = new Formulario();

    //lo que se encuentra dentro del if se ejecutará cuando sea presionado el botón de submit
    if(isset($_POST['submit'])){
        //se les manda los respectivos valores a cada uno de los métodos que se encuentran en el archivo formulario.php
        $form->setName($_POST['name']); 
        $form->setEmail($_POST['email']);
        $form->setWebsite($_POST['website']);
        $form->setComment($_POST['comment']);
        $form->setGender($_POST['gender']);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario en PHP7</title>
</head>
<body>
	<h2>PHP Form Validation Example</h2>
	<p><span class="error">* required field.</span></p>
	<form method="post" action="">
    	Name: <input type="text" name="name" value="<?php echo $form->getName(); ?>">
    	<span class="error">* <?php echo $form->getNameErr(); ?></span>
    	<br><br>
    	E-mail: <input type="text" name="email" value="<?php echo $form->getEmail(); ?>">
    	<span class="error">* <?php echo $form->getEmailErr(); ?></span>
    	<br><br>
    	Website: <input type="text" name="website" value="<?php echo $form->getWebsite(); ?>">
    	<span class="error"><?php echo $form->getWebsiteErr(); ?></span>
    	<br><br>
    	Comment: <textarea name="comment" rows="5" cols="40"><?php echo $form->getComment(); ?></textarea>
    	<br><br>
    	Gender:
    	<input type="radio" name="gender" value="female" <?php if($form->getGender()=="female") echo "checked"; ?>>Female
    	<input type="radio" name="gender" value="male" <?php if($form->getGender()=="male") echo "checked"; ?>>Male
    	<span class="error">* <?php echo $form->getGenderErr(); ?></span>
    	<br><br>
    	<input type="submit" name="submit" value="Submit">
	</form>
    <?php
        //se mandan llamar los métodos que tienen los valores que se ingresaron en el formulario
        echo "<h2>Your Input:</h2>";
        echo $form->getName()."<br>";
        echo $form->getEmail()."<br>";
        echo $form->getWebsite()."<br>";
        echo $form->getComment()."<br>";
        echo $form->getGender()."<br>";
    ?>
	<ul>
    	<li><a href="#">Volver al Inicio</a></li>
	</ul>
</body>
</html>