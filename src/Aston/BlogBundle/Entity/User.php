<?php
// src/IKNSA/AppBundle/Entity/User.php
namespace Aston\BlogBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser; use Doctrine\ORM\Mapping as ORM;
          /**
           * @ORM\Entity
           * @ORM\Table(name="fos_user")
           */
class User extends BaseUser {
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO") */
protected $id;
/**
* @ORM\ManyToOne(targetEntity="Aston\BlogBundle\Entity\User")
 */
protected $user;
public function __construct()
              {
                  parent::__construct();
                  // your own logic
              }

         }