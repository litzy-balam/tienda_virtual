<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWpokj9l\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWpokj9l/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerWpokj9l.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerWpokj9l\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerWpokj9l\appProdProjectContainer([
    'container.build_hash' => 'Wpokj9l',
    'container.build_id' => 'b6e2451d',
    'container.build_time' => 1588231262,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWpokj9l');
