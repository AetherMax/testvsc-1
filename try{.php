try{


    $bdd = new PDO("mysql:host=localhost;dbname=sigBiblio;charset=utf8", "sigBiblio", "secret");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $bdd;
}
catch (Exception $e){
    $msg
}