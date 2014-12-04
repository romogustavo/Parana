<?php
namespace App\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class User extends BaseUser
{
    protected $name;

    // ...
    /*public function __construct()
    {
        echo "Entro en User";
        //exit();
        parent::__construct();
        // your own logic
    }*/
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name; 
    }
}