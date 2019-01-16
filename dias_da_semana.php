<?php

$dia_da_semasa = date("w");

switch ($dia_da_semasa){
	
	case 0:
	echo "Domingo";
	break;
	
	case 1:
	echo "Segunda-feira";
	break;
	
	case 2:
	echo "Terca-feira";
	break;
	
	case 3:
	echo "Quarta-feira";
	break;

    case 4:
	echo "Quinta-feira";
	break;

	case 5:
	echo "Sexta-feira";
	break;

    case 6:
	echo "Sabado";
	break;

}
?> 