<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsResolverController' shared service.

return $this->services['PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsResolverController'] = new \PrestaShop\Module\Ps_metrics\Controller\Admin\MetricsResolverController(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->load('getPsMetrics_ModuleService.php')) && false ?: '_'});
