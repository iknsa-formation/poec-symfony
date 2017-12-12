<?php

namespace IKNSA\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity(repositoryClass="IKNSA\BlogBundle\Repository\ArticlesRepository")
 */
class Articles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	/**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255 ,nullable=true)
     */
    private $auteur;
	
	/**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255 ,nullable=true)
     */
    private $titre;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
	
	/**
     * Set name
     *
     * @param string $auteur
     *
     * @return Etudiants
     */
    public function setAuteur($auteur)
    {
        $this->name = $auteur;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
	
	/**
     * Set name
     *
     * @param string $name
     *
     * @return Etudiants
     */
    public function setTitre($titre)
    {
        $this->name = $titre;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
}
