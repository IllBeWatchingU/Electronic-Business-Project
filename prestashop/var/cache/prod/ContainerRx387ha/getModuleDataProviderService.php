<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] : $this->load('getModuleRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] : $this->load('getShopRepository2Service.php')) && false ?: '_'});
