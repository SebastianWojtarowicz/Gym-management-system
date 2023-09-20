 <?php
 
session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'silownia');

$nr = $_POST['nr'];

$amount = "select count(*) from stan";
$result = mysqli_query($con, $amount);
$convertedresult = $result->fetch_array()[0] ?? '';

$add = "insert into stan(numer_karty) values('$nr') ";
mysqli_query($con, $add); 
 
 echo "<meta charset=\"utf-8\" />";
	  echo "<meta name=\"description\" content=\"\" />";
	  echo "<meta name=\"keywords\" content=\"gym, sport, fitness, siłownia, crossfit, sylwetka\" />";
	  echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
	  echo "<meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1\" />";
      echo "<meta http-equiv=\"X-UA-Compatible\" />";
      echo "<title>MyFitness</title>";
      echo "<link rel=\"stylesheet\" href=\"style.css?v=1\" type=\"text/css\" /> " ;
      echo "<script src=\"script.js\" defer></script>";
	  echo "<script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>";
 	
echo "</head>";

echo "<body>";

        echo "<header>";
		  
		  echo "<nav class=\"navbar\">";
		             echo "<a class=\"logo\" href=\"index.html\">My<span style=\"color: #ffaa00;\">Fitness</span></a>";
					 echo "<a href=\"#\"class=\"toggle-button\">";
					      echo "<span class=\"bar\"></span>";
					      echo "<span class=\"bar\"></span>";
					     echo " <span class=\"bar\"></span>";
					echo " </a>";
					 echo "<div class=\"navbar-links\">";
                        echo "<ul>";
					      echo " <li><a class=\"first\" href=\"karnet.html\">Kup karnet</a></li>";
					     echo "  <li><a href=\"zajecia.html\">Zajęcia grupowe</a></li>";
					      echo " <li><a href=\"biznes.html\">Biznes trenera</a></li>";
                         echo "  <li><a href=\"logowanie.html\">Logowanie</a></li>";
					   echo " </ul>";
					echo " </div>";
       echo "   </nav>";
		  
	   echo "</header> ";
	   
	   echo "<main>";
	    
		echo "<section class=\"intro\">";
		
		echo "<div class=\"user\" style=\"height: 520px;\">";
			     echo "<h1>Panel pracownika</h1> <br /> ";
				 echo "<p>Liczba osób na siłowni: <i>".$convertedresult."</i></p> <br />";
				 echo "<form class=\"user-form\" action=\"rejestracja.php\" method=\"post\">";
				 echo "<input type=\"text\" name=\"nr\" placeholder=\"Numer karty\">";
				 echo "<input type=\"submit\" value=\"Zarejestruj wejście\">";
				 echo "</form>";
				 echo "<form class=\"user-form\" action=\"usuwanie.php\" method=\"post\">";
				 echo "<input type=\"text\" name=\"nr\" placeholder=\"Numer karty\">";
				 echo "<input type=\"submit\" value=\"Zwolnij miejsce\">";
				echo " </form>";
		      echo "</div>";
		
		echo " </section>";
	  echo " </main>";
	  
	  echo "<footer>";
	   
			echo "<div class=\"middlefooter\">";
 	        echo "<div class=\"leftfooter\">";
             echo "<p style=\"font-size: 18px; margin-top: 5px\"><i></i>Dane kontaktowe</p>";
             echo "<br />";
			 #<!--<p><i class="fas fa-map-marker-alt f-first-icon"></i>   Świnoujście, ul.Salomona 23</p>-->
             echo "<p><i></i>   Miasto, ul.Salomona 23</p>";
			 #<!--<p><i class="fas fa-phone-alt f-second-icon"></i>  886 775 223</p>-->
             echo "<p><i></i>  886 775 223</p>";
			 #<!--<p><i class="fas fa-envelope f-third-icon"></i>  figaro@gmail.com</p>-->
             echo "<p><i></i>  email@gmail.com</p>";
			echo "</div>";
			
			echo "<div class=\"rightfooter\">";
			echo "<p style=\"padding-bottom: 10px; padding-top: 5px\">Zaprzyjaźnione firmy</p>";
			echo "<a href=\"https://sklep.sfd.pl/\"><img src=\"img/sfd.png\" alt=\"SFD\" width=\"80\" height=\"24\"></img></a>";
			echo "<a href=\"https://sklep.kfd.pl/\"><img src=\"img/kfd.png\" alt=\"KFD\" width=\"72\" height=\"37\"></img></a>";
			echo "<a href=\"https://gbs.pl\"><img src=\"img/gbs.png\" alt=\"GBS\" width=\"84\" height=\"30\"></img></a>";
			echo "</div> <br> <br> <br> <br> <br> <br> <br>"; 
			echo "<span style=\"clear: both;\"> </span>";
			echo "</div>";
			
			echo "<div style=\"background-color: #202027; height: 40px; margin-top: auto;\">";
                echo "<p class=\"copy\"><a href=\"https://www.linkedin.com/in/sebastian-wojtarowicz/\" style=\"color: black\">Sebastian Wojtarowicz &copy; 2020</a></p>";
			echo "<div>";
			
	   echo "</footer>";

echo "</body>";
echo "</head>";
echo "</html>";

?>