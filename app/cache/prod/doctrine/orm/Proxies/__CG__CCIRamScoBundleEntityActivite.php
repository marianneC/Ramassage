<?php

namespace Proxies\__CG__\CCI\RamScoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Activite extends \CCI\RamScoBundle\Entity\Activite implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'id', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'titreActivite', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'theme', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'lieu', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'dateActivite', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'fournitures', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'cout');
        }

        return array('__isInitialized__', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'id', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'titreActivite', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'theme', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'lieu', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'dateActivite', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'fournitures', '' . "\0" . 'CCI\\RamScoBundle\\Entity\\Activite' . "\0" . 'cout');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Activite $proxy) {
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
    public function setTitreActivite($titreActivite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitreActivite', array($titreActivite));

        return parent::setTitreActivite($titreActivite);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitreActivite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitreActivite', array());

        return parent::getTitreActivite();
    }

    /**
     * {@inheritDoc}
     */
    public function setTheme($theme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTheme', array($theme));

        return parent::setTheme($theme);
    }

    /**
     * {@inheritDoc}
     */
    public function getTheme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTheme', array());

        return parent::getTheme();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieu($lieu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieu', array($lieu));

        return parent::setLieu($lieu);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieu', array());

        return parent::getLieu();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateActivite($dateActivite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateActivite', array($dateActivite));

        return parent::setDateActivite($dateActivite);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateActivite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateActivite', array());

        return parent::getDateActivite();
    }

    /**
     * {@inheritDoc}
     */
    public function setFournitures($fournitures)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFournitures', array($fournitures));

        return parent::setFournitures($fournitures);
    }

    /**
     * {@inheritDoc}
     */
    public function getFournitures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFournitures', array());

        return parent::getFournitures();
    }

    /**
     * {@inheritDoc}
     */
    public function setCout($cout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCout', array($cout));

        return parent::setCout($cout);
    }

    /**
     * {@inheritDoc}
     */
    public function getCout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCout', array());

        return parent::getCout();
    }

}
