<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW0nyOHq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW0nyOHq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW0nyOHq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW0nyOHq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerW0nyOHq\App_KernelDevDebugContainer([
    'container.build_hash' => 'W0nyOHq',
    'container.build_id' => '34bdec86',
    'container.build_time' => 1664254965,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW0nyOHq');
