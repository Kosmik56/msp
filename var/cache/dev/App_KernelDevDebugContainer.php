<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSLCjLss\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSLCjLss/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSLCjLss.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSLCjLss\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSLCjLss\App_KernelDevDebugContainer([
    'container.build_hash' => 'SLCjLss',
    'container.build_id' => '724800c6',
    'container.build_time' => 1657212349,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSLCjLss');