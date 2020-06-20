<?php 
class config
{
    private static $instance = NULL;
    public static function getConnection()
    {
        if(!isset(self::$instance))
        {
            try {
                //PDO PHP Data Objects
                //Parametres: type de Base de donnees utilise mysql host nom de la connection
                self::$instance = new PDO('mysql:host=localhost;dbname=gestion produits;','root','');
            }   
            catch (Execption $e){

                die('Erreur: '.$e->getMessage());
            }
        }
    return self::$instance;
    }
}
class config2 {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
        try{
        self::$instance = new PDO('mysql:host=localhost;dbname=gestion produits',
        'root', '');
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
      }
      return self::$instance;
    }
  }
?>