<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR727nxm\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR727nxm/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerR727nxm.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerR727nxm\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerR727nxm\appProdProjectContainer([
    'container.build_hash' => 'R727nxm',
    'container.build_id' => '3fa77c86',
    'container.build_time' => 1673817603,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerR727nxm');
