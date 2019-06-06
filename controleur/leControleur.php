<?php 
require_once("../modele/leModele.php");
class leControleur
{
    private $unModele;
    public function __construct($server,$bdd,$user,$mdp)
    {
        //instanciation de la class modele
        $this->unModele = new leModele($server,$bdd,$user,$mdp);
    }

    public function verifCon($email, $mdp)
    {
        // on peu controler les donnees 
        return $this->unModele->verifCon($email, $mdp);
    }
    public function selectEvent()
    {
        return $this->unModele->selectEvent();
    }
    public function selectProduit()
    {
        return $this->unModele->selectProduit();
    }
    public function selectPartenaire()
    {
        return $this->unModele->selectPartenaire();
    }
    public function verifConPart($accronyme, $mdp)
    {
        // on peu controler les donnees 
        return $this->unModele->verifConPart($accronyme, $mdp);
    }
    public function insert($table, $tab)
      {
        $this->unModele->insert($table, $tab);
      }
      public function delete($table, $tab)
      {
        $this->unModele->delete($table, $tab);
      }
      public function update($table, $tab)
      {
        $this->unModele->update($table, $tab);
      }
}