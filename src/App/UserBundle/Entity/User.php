<?php

namespace App\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
	/**
     * @var integer
     */
    private $sexo_id;

    /**
     * @var string
     */
    private $direccion;

    public function __construct()
    {
        echo "Entro en User";
        //exit();
        parent::__construct();
        // your own logic
    }
    
    /**
     * Get sexo_id
     *
     * @return integer 
     */
    public function getSexoId()
    {
        return $this->sexo_id;
    }

    /**
     * Set sexo_id
     *
     * @param string $sexo_id
     * @return SexoId
     */
    public function setSexoId($sexo_id)
    {
        $this->sexo_id = $sexo_id;
        return $this;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

}