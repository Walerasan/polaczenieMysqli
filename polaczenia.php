<?php
//definiuje parametry połączenia do bazy danych:
$serwer = "localhost"; //tutaj moża podać adres IP komputera np. 192.168.1.10
$uzytkownik = "root";  //jeśli nie mamy innego użytkownika to domyślnie root jako admin
$haslo = ""; //domyślnie root jest bez hasła po instalacji xampp'a
$bazadanych = "Szkola"; //podajemy nazwę bazy danych, którą utworzyliśmy w phpmyadmin'ie
//----------------------------------------------


//Sprawdzam poprawność połączenia do bazy danych za pomocą wyrażenia warunkowego
//jeśli funkcja $mysqli->connect_errno jest różna od 0 to występuje błąd połączenia do bazy danych
// @new znak "at" ukrywa rozszerzony tryb wyświetlania błędów
// tutaj mamy do czynienia tworzenia nowego połączenia za pomocą konstruktora klasy mysqli !
// trzeba się tego nauczyć na pamięć
//zmienna $polaczenie przechowuje połączenie do bazy danych
//$serwer, $uzytkownik, $haslo, $bazadanych, $port (3306) jest jeszcze 5 opcja $port na jakim zgłasza się serwer mysql tutaj pomijamy opcje
//$port=3306;
//$polaczenie = new mysqli($serwer, $uzytkownik, $haslo, $bazadanych,$port);

$polaczenie = new mysqli($serwer, $uzytkownik, $haslo, $bazadanych);
if ($polaczenie->connect_errno != 0) {
    echo "błąd połączenia do MySQL: (" . $polaczenie->connect_errno . ") " . $polaczenie->connect_error;
    //tutaj skrypt pokaże jaki jest to rodzaj błędu
} else {
	echo "Ustanowiono połączenie do bazy:".$bazadanych;
	// gdy mamy połączenie z bazą to wyświetli z jaką, ten kod jest tylko dodany 
	//w celu zaprezentowania poprawnego połączenia się z bazą danych
	//w rzeczywistości nie dodajemy tej kodu w else...
}

//-------------------------------------------------------------------------------------------------------
?>