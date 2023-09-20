<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'silownia');

$opcja = $_POST['opcja'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$nr = $_POST['nr'];

$s = " select * from zgloszenia where imie = '$imie' && nazwisko = '$nazwisko' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1)
{
	echo "<!DOCTYPE html>";
echo "<html lang=\"PL\">";

echo "<head>";
      
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
	
		   echo "<section class=\"main-content\">";
		  echo " <section class=\"services\">";
		  echo"<p style=\"color: red; text-align: center; margin-top: 30px; Font-size: 40px;\">Wysłałeś nam już swoje zgłoszenie.</p>";
		  echo "<form action=\"zgloszenie.php\" method=\"post\">";
		         echo "<label class=\"container checkmarks\">";
                    echo "<input type=\"radio\" checked=\"checked\" name=\"opcja\" value=\"prowadzący\">";
                    echo "<span class=\"checkmark\"></span>";
		            echo "<article class=\"option\">";
		            echo " <div>";
		            echo " <img style=\"margin: 0px 60px 0px 40px;\" src=\"img/trainer1.png\" width=\"130\" height=\"130\"></img>";
		            echo " </div>";
		            echo " <div>";
		            echo " <h1>Trener prowadzący</h1> <br />";
					echo " <p>-Prowadzenie wybranych zajęć</p>";
					echo " <p>-Możliwość prowadzenia treningów personalnych 8 razy w miesiącu</p>";
					 echo "<p>-Udostępniamy twój grafik</p>";
		             echo "<br />";
		             echo "<p></p> <br />";
					 echo "<i>Odstępne: 200zł</i>";
		           echo " </article>";
                echo " </label>";
                echo " <label class=\"container checkmarks\">";
                   echo " <input type=\"radio\" name=\"opcja\" value=\"freelancer\">";
                    echo "<span class=\"checkmark\"></span>";
		            echo "<article class=\"option\">";
		              echo "<div>";
		               echo " <img style=\"margin: 0px 60px 0px 40px;\" src=\"img/trainer2.png\" width=\"130\" height=\"130\"></img>";
		              echo "</div>";
		             echo " <div>";
		                echo "<h1>Freelancer</h1> <br />";
		                echo "<p>-Możliwość prowadzenia treningów personalnych codziennie</p>";
		                echo "<p>-Udostępniamy twój grafik</p> <br />";
		                echo "<p></p> <br />";
						echo "<i>Odstępne: 800zł</i>";
		             echo "</article>";
                 echo "</label>";
                    
				   echo "<div id=\"buy2\">";
			       echo "<h1>Wyślij swoje zgłoszenie</h1>";
				   echo "<input type=\"text\" name=\"imie\" placeholder=\"Imię\"> ";
				   echo "<input type=\"text\" name=\"nazwisko\" placeholder=\"Nazwisko\">";
				  echo " <input type=\"text\" name=\"nr\" placeholder=\"Numer telefonu\"> ";
                   echo "<input type=\"submit\" value=\"WYŚLIJ\">";
		  
		  echo "  </div>";
		echo "  </form>";
		   
         echo " </section>";
        echo "  </section>";
 
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
}

else
{ 
	
	$dodaj = " insert into zgloszenia(opcja, imie, nazwisko, nr_telefonu) values ('$opcja', '$imie', '$nazwisko', '$nr')";
    mysqli_query($con, $dodaj);
	
	echo "<!DOCTYPE html>";
echo "<html lang=\"PL\">";

echo "<head>";
      
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
	
		   echo "<section class=\"main-content\">";
		  echo " <section class=\"services\">";
		 echo"<p style=\"color: #2ecc71; text-align: center; margin-top: 30px; Font-size: 40px;\">Zgłoszenie zostało wysłane!</p>";
	echo"<p style=\"color: #2ecc71; text-align: center; Font-size: 40px;\">Wkrótce się do ciebie odezwiemy.</p>";
		  echo "<form action=\"zgloszenie.php\" method=\"post\">";
		         echo "<label class=\"container checkmarks\">";
                    echo "<input type=\"radio\" checked=\"checked\" name=\"opcja\" value=\"prowadzący\">";
                    echo "<span class=\"checkmark\"></span>";
		            echo "<article class=\"option\">";
		            echo " <div>";
		            echo " <img style=\"margin: 0px 60px 0px 40px;\" src=\"img/trainer1.png\" width=\"130\" height=\"130\"></img>";
		            echo " </div>";
		            echo " <div>";
		            echo " <h1>Trener prowadzący</h1> <br />";
					echo " <p>-Prowadzenie wybranych zajęć</p>";
					echo " <p>-Możliwość prowadzenia treningów personalnych 8 razy w miesiącu</p>";
					 echo "<p>-Udostępniamy twój grafik</p>";
		             echo "<br />";
		             echo "<p></p> <br />";
					 echo "<i>Odstępne: 200zł</i>";
		           echo " </article>";
                echo " </label>";
                echo " <label class=\"container checkmarks\">";
                   echo " <input type=\"radio\" name=\"opcja\" value=\"freelancer\">";
                    echo "<span class=\"checkmark\"></span>";
		            echo "<article class=\"option\">";
		              echo "<div>";
		               echo " <img style=\"margin: 0px 60px 0px 40px;\" src=\"img/trainer2.png\" width=\"130\" height=\"130\"></img>";
		              echo "</div>";
		             echo " <div>";
		                echo "<h1>Freelancer</h1> <br />";
		                echo "<p>-Możliwość prowadzenia treningów personalnych codziennie</p>";
		                echo "<p>-Udostępniamy twój grafik</p> <br />";
		                echo "<p></p> <br />";
						echo "<i>Odstępne: 800zł</i>";
		             echo "</article>";
                 echo "</label>";
                    
				   echo "<div id=\"buy2\">";
			       echo "<h1>Wyślij swoje zgłoszenie</h1>";
				   echo "<input type=\"text\" name=\"imie\" placeholder=\"Imię\"> ";
				   echo "<input type=\"text\" name=\"nazwisko\" placeholder=\"Nazwisko\">";
				  echo " <input type=\"text\" name=\"nr\" placeholder=\"Numer telefonu\"> ";
                   echo "<input type=\"submit\" value=\"WYŚLIJ\">";
		  
		  echo "  </div>";
		echo "  </form>";
		   
         echo " </section>";
        echo "  </section>";
 
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
}

?>