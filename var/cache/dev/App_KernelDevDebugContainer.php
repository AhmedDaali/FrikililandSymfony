<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIvJXThX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIvJXThX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIvJXThX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIvJXThX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIvJXThX\App_KernelDevDebugContainer([
    'container.build_hash' => 'IvJXThX',
    'container.build_id' => '537249f9',
    'container.build_time' => 1680186767,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIvJXThX');
