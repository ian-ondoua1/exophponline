<?php
	$cat="PC";
	$prix=900;
	if ($cat=="PC") 
	{
		if ($prix >= 1000) 
		{
		echo "<b>Pour l'achat d'un PC d'un montant de $prix &euro;, la remise de 15% </b><br/>";
		echo "<h3> Le prix net de : ", $prix*0.85, "&euro; </h3>";
		}  	
	   else {
	   		
	   }
	}
?>