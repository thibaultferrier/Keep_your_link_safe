<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2dEoxoe\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2dEoxoe/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container2dEoxoe.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container2dEoxoe\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container2dEoxoe\srcDevDebugProjectContainer(array(
    'container.build_hash' => '2dEoxoe',
    'container.build_id' => 'aab8ea62',
    'container.build_time' => 1544801801,
), __DIR__.\DIRECTORY_SEPARATOR.'Container2dEoxoe');
