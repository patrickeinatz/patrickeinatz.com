<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3WoIkL5\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3WoIkL5/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3WoIkL5.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3WoIkL5\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container3WoIkL5\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '3WoIkL5',
    'container.build_id' => '2f62e3db',
    'container.build_time' => 1558272572,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3WoIkL5');
