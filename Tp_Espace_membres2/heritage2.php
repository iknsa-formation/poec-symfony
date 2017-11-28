<?php

class Mere{
public function parent(){
$mere="Je suis la classe Mère";
return $mere;
}

}
class Fille extends Mere{
  public function enfant(){
    $fille="Je suis la classe fille, jhérite de ma mère";
    return $fille;
  }
}
$objet = new Fille();
echo "$objet->parent().<br />";
echo $objet->enfant();
?>
