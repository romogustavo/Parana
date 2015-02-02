<?php

namespace Proxies\__CG__\App\BackendBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Sexo extends \App\BackendBundle\Entity\Sexo implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'id', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'genero', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'id_user_created_at', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'created_at', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'id_user_updated_at', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'updated_at');
        }

        return array('__isInitialized__', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'id', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'genero', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'id_user_created_at', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'created_at', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'id_user_updated_at', '' . "\0" . 'App\\BackendBundle\\Entity\\Sexo' . "\0" . 'updated_at');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Sexo $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenero($genero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenero', array($genero));

        return parent::setGenero($genero);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenero', array());

        return parent::getGenero();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUserCreatedAt($idUserCreatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUserCreatedAt', array($idUserCreatedAt));

        return parent::setIdUserCreatedAt($idUserCreatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUserCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUserCreatedAt', array());

        return parent::getIdUserCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUserUpdatedAt($idUserUpdatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUserUpdatedAt', array($idUserUpdatedAt));

        return parent::setIdUserUpdatedAt($idUserUpdatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUserUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUserUpdatedAt', array());

        return parent::getIdUserUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

}
