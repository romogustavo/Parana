<?php

namespace Proxies\__CG__\Application\Sonata\PageBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Site extends \Application\Sonata\PageBundle\Entity\Site implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'enabled', 'createdAt', 'updatedAt', 'name', 'host', 'relativePath', 'enabledFrom', 'enabledTo', 'isDefault', 'formats', 'locale', 'title', 'metaKeywords', 'metaDescription');
        }

        return array('__isInitialized__', 'id', 'enabled', 'createdAt', 'updatedAt', 'name', 'host', 'relativePath', 'enabledFrom', 'enabledTo', 'isDefault', 'formats', 'locale', 'title', 'metaKeywords', 'metaDescription');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Site $proxy) {
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
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', array());

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', array());

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', array($enabled));

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', array());

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', array());

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', array());

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function isLocalhost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLocalhost', array());

        return parent::isLocalhost();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt = NULL)
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
    public function setUpdatedAt(\DateTime $updatedAt = NULL)
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

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setHost($host)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHost', array($host));

        return parent::setHost($host);
    }

    /**
     * {@inheritDoc}
     */
    public function getHost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHost', array());

        return parent::getHost();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormats($formats)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormats', array($formats));

        return parent::setFormats($formats);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormats', array());

        return parent::getFormats();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelativePath($relativePath)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelativePath', array($relativePath));

        return parent::setRelativePath($relativePath);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelativePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelativePath', array());

        return parent::getRelativePath();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDefault($default)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDefault', array($default));

        return parent::setIsDefault($default);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDefault', array());

        return parent::getIsDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabledFrom(\DateTime $enabledFrom = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabledFrom', array($enabledFrom));

        return parent::setEnabledFrom($enabledFrom);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabledFrom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabledFrom', array());

        return parent::getEnabledFrom();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabledTo(\DateTime $enabledTo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabledTo', array($enabledTo));

        return parent::setEnabledTo($enabledTo);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabledTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabledTo', array());

        return parent::getEnabledTo();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocale', array($locale));

        return parent::setLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocale', array());

        return parent::getLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaDescription($metaDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaDescription', array($metaDescription));

        return parent::setMetaDescription($metaDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescription', array());

        return parent::getMetaDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaKeywords($metaKeywords)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaKeywords', array($metaKeywords));

        return parent::setMetaKeywords($metaKeywords);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaKeywords', array());

        return parent::getMetaKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

}
