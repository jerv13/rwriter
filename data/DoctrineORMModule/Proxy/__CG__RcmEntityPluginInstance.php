<?php

namespace DoctrineORMModule\Proxy\__CG__\Rcm\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PluginInstance extends \Rcm\Entity\PluginInstance implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function clearAssets()
    {
        $this->__load();
        return parent::clearAssets();
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }

    public function getInstanceId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["instanceId"];
        }
        $this->__load();
        return parent::getInstanceId();
    }

    public function setInstanceId($instanceId)
    {
        $this->__load();
        return parent::setInstanceId($instanceId);
    }

    public function getPlugin()
    {
        $this->__load();
        return parent::getPlugin();
    }

    public function setPlugin($plugin)
    {
        $this->__load();
        return parent::setPlugin($plugin);
    }

    public function setSiteWide()
    {
        $this->__load();
        return parent::setSiteWide();
    }

    public function setPageOnlyPlugin()
    {
        $this->__load();
        return parent::setPageOnlyPlugin();
    }

    public function isSiteWide()
    {
        $this->__load();
        return parent::isSiteWide();
    }

    public function getDisplayName()
    {
        $this->__load();
        return parent::getDisplayName();
    }

    public function setDisplayName($name)
    {
        $this->__load();
        return parent::setDisplayName($name);
    }

    public function setViewModel(\Zend\View\Model\ViewModel $viewModel)
    {
        $this->__load();
        return parent::setViewModel($viewModel);
    }

    public function getView()
    {
        $this->__load();
        return parent::getView();
    }

    public function setAdminEditJs($jsPath)
    {
        $this->__load();
        return parent::setAdminEditJs($jsPath);
    }

    public function getAdminEditJs()
    {
        $this->__load();
        return parent::getAdminEditJs();
    }

    public function setAdminEditCss($cssPath)
    {
        $this->__load();
        return parent::setAdminEditCss($cssPath);
    }

    public function getAdminEditCss()
    {
        $this->__load();
        return parent::getAdminEditCss();
    }

    public function hasAdminJs()
    {
        $this->__load();
        return parent::hasAdminJs();
    }

    public function hasAdminCss()
    {
        $this->__load();
        return parent::hasAdminCss();
    }

    public function setMd5($md5)
    {
        $this->__load();
        return parent::setMd5($md5);
    }

    public function getMd5()
    {
        $this->__load();
        return parent::getMd5();
    }

    public function setPreviousEntity(\Rcm\Entity\PluginInstance $instance)
    {
        $this->__load();
        return parent::setPreviousEntity($instance);
    }

    public function setAssets($assets)
    {
        $this->__load();
        return parent::setAssets($assets);
    }

    public function getAssets()
    {
        $this->__load();
        return parent::getAssets();
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setIcon($icon)
    {
        $this->__load();
        return parent::setIcon($icon);
    }

    public function getIcon()
    {
        $this->__load();
        return parent::getIcon();
    }

    public function setTooltip($tooltip)
    {
        $this->__load();
        return parent::setTooltip($tooltip);
    }

    public function getTooltip()
    {
        $this->__load();
        return parent::getTooltip();
    }

    public function setOnPage($onPage)
    {
        $this->__load();
        return parent::setOnPage($onPage);
    }

    public function getOnPage()
    {
        $this->__load();
        return parent::getOnPage();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'instanceId', 'plugin', 'siteWide', 'displayName', 'md5', 'previousEntity', 'assets');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        parent::__clone();
    }
}