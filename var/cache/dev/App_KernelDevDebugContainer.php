<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR3DHACx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR3DHACx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerR3DHACx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerR3DHACx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerR3DHACx\App_KernelDevDebugContainer([
    'container.build_hash' => 'R3DHACx',
    'container.build_id' => 'c09f2990',
    'container.build_time' => 1681437348,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerR3DHACx');
