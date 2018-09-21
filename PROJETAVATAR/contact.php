
	
		<?php 
		
		echo $_POST['prenom']."<br>"; 
		echo $_POST ['nom']."<br>";
		echo $_POST ['email']."<br>";
		   ?>
		   <?php
		   if (isset ($_POST['Madame']))
		   {
			   echo'<p>Merci Madame</p>';
		   }
		   else{
			echo'<p>Merci Monsieur</p>';
		   }
		   ?>
			<?php
     $to      = 'oumou.s@codeur.online';
	 $subject= 'salutation' ;
	 $contenu = $_POST ['prenom']." "
				 .$_POST ['nom']." "
				 .$_POST ['email']."  "
				.$_POST['message'];

				
	$headers = 'From:oumoukalsoums@gmail.com'."\r\n" .
     'Reply-To: oumou.s@codeur.online' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

	$mail=mail($to, $subject, $contenu,  $headers);
	if($mail){
    echo('votre message est envoyé');
    
	}
 ?>
    
