<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'baneado', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\User' . "\0" . 'profesion', '' . "\0" . 'App\\Entity\\User' . "\0" . 'post', '' . "\0" . 'App\\Entity\\User' . "\0" . 'interactions'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'baneado', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\User' . "\0" . 'profesion', '' . "\0" . 'App\\Entity\\User' . "\0" . 'post', '' . "\0" . 'App\\Entity\\User' . "\0" . 'interactions'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getBaneado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBaneado', []);

        return parent::getBaneado();
    }

    /**
     * {@inheritDoc}
     */
    public function setBaneado($baneado): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBaneado', [$baneado]);

        parent::setBaneado($baneado);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function removePost(\App\Entity\Post $post): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePost', [$post]);

        return parent::removePost($post);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfesion(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfesion', []);

        return parent::getProfesion();
    }

    /**
     * {@inheritDoc}
     */
    public function addProfesion(\App\Entity\Profesion $profesion): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProfesion', [$profesion]);

        return parent::addProfesion($profesion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProfesion(\App\Entity\Profesion $profesion): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProfesion', [$profesion]);

        return parent::removeProfesion($profesion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPost(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPost', []);

        return parent::getPost();
    }

    /**
     * {@inheritDoc}
     */
    public function getInteractions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInteractions', []);

        return parent::getInteractions();
    }

    /**
     * {@inheritDoc}
     */
    public function addInteraction(\App\Entity\Interaction $interaction): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInteraction', [$interaction]);

        return parent::addInteraction($interaction);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInteraction(\App\Entity\Interaction $interaction): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInteraction', [$interaction]);

        return parent::removeInteraction($interaction);
    }

}