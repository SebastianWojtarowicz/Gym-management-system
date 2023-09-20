<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'silownia');

$login = $_POST['login'];
$password = $_POST['password'];

$userlogin = " select login from uzytkownicy where login = '$login' ";
$userpassword = " select hasło from uzytkownicy where login = '$login' && hasło = '$password' ";
$workerlogin = "select login from pracownicy where login = '$login' ";
$workerpassword = "select hasło from pracownicy where login = '$login' && hasło = '$password' ";
$workerdata = "select imie, nazwisko from pracownicy where login = '$login' ";
$type = "select opcja from karnety where login = '$login' ";
$expiredate = "select data_wygasniecia from karnety where login = '$login' ";
$amount = "select count(*) from stan";

$result_userlogin = mysqli_query($con, $userlogin);
$result_userpassword = mysqli_query($con, $userpassword);
$result_workerlogin = mysqli_query($con, $workerlogin);
$result_workerpassword = mysqli_query($con, $workerpassword);
$result_workerdata = mysqli_query($con, $workerdata);
$result_type = mysqli_query($con, $type);
$result_expiredate = mysqli_query($con, $expiredate);
$result_amount = mysqli_query($con, $amount);

$convertedresult = $result_amount->fetch_array()[0] ?? '';

$convertedresultoftype = $result_type->fetch_array()[0] ?? '';
$convertedresultofexpiredata = $result_expiredate->fetch_array()[0] ?? '';

$ifuserexists = mysqli_num_rows($result_userlogin);
$ifupasswordisok = mysqli_num_rows($result_userpassword);

$ifworkerexists = mysqli_num_rows($result_workerlogin);
$ifwpasswordisok = mysqli_num_rows($result_workerpassword);

if($ifuserexists == 1)
{
	if($ifupasswordisok == 1)
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
	       echo "<section class=\"intro\">";
	          echo "<div class=\"user\">";
			     echo "<h1>Panel użytkownika</h1> <br /> <br /> <br />";
				 echo "<p style=\"font-size: 25px; \">Witaj: <i style=\"color: #ffaa00;\">".$login." </i></p> <br />";
				 echo "<p style=\"color: #00ff00;\">Rodzaj karnetu: ".$convertedresultoftype."</p> <br />";
				 echo "<p>Karnet ważny do: ".$convertedresultofexpiredata."</p>";
		      echo "</div>";
		   echo "</section>";
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
	
	}
	
	else
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
	    
		echo "<section class=\"intro\">";
		    
			  echo "<form class=\"box\" action=\"logowanie.php\" method=\"post\">";
                   echo "<h1 style=\"margin-bottom: 60px;\">Login</h1>";
                   echo "<input type=\"text\" name=\"login\" placeholder=\"Login\">";
                  echo " <input type=\"password\" name=\"password\" placeholder=\"Hasło\">";
                   echo "<input type=\"submit\" value=\"Login\">";
				   echo "<p style=\"font-family: 'Rubik', sans-serif; color: red;\">Nieprawidłowe hasło</p>";
              echo "</form>";
			  
			  echo "<form class=\"box\" action=\"registration.php\" method=\"post\">";
                   echo "<h1>Rejestracja</h1>";
                   echo "<input type=\"text\" name=\"login\" placeholder=\"Login\">";
                   echo "<input type=\"password\" name=\"password\" placeholder=\"Hasło\">";
                  echo " <input type=\"password\" name=\"password2\" placeholder=\"Powtórz hasło\">";
                   echo "<input type=\"submit\" value=\"Zatwierdź\">";
              echo "</form>";
		
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
	}
}

else if($ifworkerexists == 1)
{
	
    if($ifwpasswordisok == 1)
	{
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
	}
	
	else
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
	    
		echo "<section class=\"intro\">";
		    
			  echo "<form class=\"box\" action=\"logowanie.php\" method=\"post\">";
                   echo "<h1 style=\"margin-bottom: 60px;\">Login</h1>";
                   echo "<input type=\"text\" name=\"login\" placeholder=\"Login\">";
                  echo " <input type=\"password\" name=\"password\" placeholder=\"Hasło\">";
                   echo "<input type=\"submit\" value=\"Login\">";
				   echo "<p style=\"font-family: 'Rubik', sans-serif; color: red;\">Nieprawidłowe hasło</p>";
              echo "</form>";
			  
			  echo "<form class=\"box\" action=\"registration.php\" method=\"post\">";
                   echo "<h1>Rejestracja</h1>";
                   echo "<input type=\"text\" name=\"login\" placeholder=\"Login\">";
                   echo "<input type=\"password\" name=\"password\" placeholder=\"Hasło\">";
                  echo " <input type=\"password\" name=\"password2\" placeholder=\"Powtórz hasło\">";
                   echo "<input type=\"submit\" value=\"Zatwierdź\">";
              echo "</form>";
		
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
	}
}

else
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
	    
		echo "<section class=\"intro\">";
		    
			  echo "<form class=\"box\" action=\"logowanie.php\" method=\"post\">";
                   echo "<h1 style=\"margin-bottom: 60px;\">Login</h1>";
                   echo "<input type=\"text\" name=\"login\" placeholder=\"Login\">";
                  echo " <input type=\"password\" name=\"password\" placeholder=\"Hasło\">";
                   echo "<input type=\"submit\" value=\"Login\">";
				   echo "<p style=\"font-family: 'Rubik', sans-serif; color: red;\">Nie ma takiego użytkownika</p>";
              echo "</form>";
			  
			  echo "<form class=\"box\" action=\"registration.php\" method=\"post\">";
                   echo "<h1>Rejestracja</h1>";
                   echo "<input type=\"text\" name=\"login\" placeholder=\"Login\">";
                   echo "<input type=\"password\" name=\"password\" placeholder=\"Hasło\">";
                  echo " <input type=\"password\" name=\"password2\" placeholder=\"Powtórz hasło\">";
                   echo "<input type=\"submit\" value=\"Zatwierdź\">";
              echo "</form>";
		
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
}



?>