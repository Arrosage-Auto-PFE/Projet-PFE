<? php
  if (! vide ( $ _POST [ "statistiques" ])) {
    date_default_timezone_set ( "Afrique / Casablanca" );
    $ statistiques = $ _POST [ "statistiques" ]; // 100: 199: 100
   $ t = preg_split ( "/: /" , $ statistiques );  // ---> t [0] = "100"; t [1] = "199"; t [2] = "100"
   $ pluie = $ t [ 0 ];
   $ temp = $ t [ 1 ];
   $ hum = $ t [ 2 ];
   settype ( $ temp , "float" );
   settype ( $ hum , "float" );
   settype ( $ pluie , "float" );
   // ---> t [0] = 100; t [1] = 199; t [2] = 100
   $ user = "sql11414003" ;
   $ password = "hqLPy2ZGPn" ;
   essayez {
   $ conn = new  PDO ( "mysql: host = sql11.freemysqlhosting.net: 3306; dbname = sql11414003" , $ utilisateur , $ mot de passe );
   } catch ( PDOException  $ ex ) {
       echo  "ERREUR" . $ ex -> getMessage ();
   }
   $ requete = "INSERT INTO statistiques (temperature, humidite, pluie) VALUES ('$ temp', '$ hum', '$ pluie')" ;
   $ conn -> exec ( $ requete );
  } else {
      echo "hi";
      exit ();
  }
?>
