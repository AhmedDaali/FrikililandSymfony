<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2bz4uzt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2bz4uzt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2bz4uzt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2bz4uzt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2bz4uzt\App_KernelDevDebugContainer([
    'container.build_hash' => '2bz4uzt',
    'container.build_id' => '9692641f',
    'container.build_time' => 1681311870,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2bz4uzt');
