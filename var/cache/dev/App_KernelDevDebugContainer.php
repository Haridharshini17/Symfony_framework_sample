<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9hLJqK5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9hLJqK5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9hLJqK5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9hLJqK5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9hLJqK5\App_KernelDevDebugContainer([
    'container.build_hash' => '9hLJqK5',
    'container.build_id' => '720be4ee',
    'container.build_time' => 1664171856,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9hLJqK5');
