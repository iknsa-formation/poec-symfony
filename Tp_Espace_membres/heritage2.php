<?php

class Animal{
public function parent(){
$animal="Je suis la classe Animaux";
return $animal;
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
