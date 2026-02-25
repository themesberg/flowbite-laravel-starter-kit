<?php

/**
 * This script adds the ⚡ emoji prefix to Blade files containing Livewire components.
 * It runs after `composer create-project`, then removes itself from composer.json and self-deletes.
 */

$basePath = __DIR__.DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR.'views';

$files = [];

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($basePath, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if ($file->isFile()
        && str_ends_with($file->getFilename(), '.blade.php')
        && str_contains(file_get_contents($file->getPathname()), 'use Livewire\\Component;')
    ) {
        $files[] = $file->getPathname();
    }
}

foreach ($files as $filePath) {
    $directory = dirname($filePath);
    $filename = basename($filePath);
    $newFilename = '⚡'.$filename;
    $newPath = $directory.DIRECTORY_SEPARATOR.$newFilename;

    if (file_exists($filePath) && ! file_exists($newPath)) {
        rename($filePath, $newPath);

        $relativePath = str_replace(__DIR__.DIRECTORY_SEPARATOR, '', $directory);
        echo "Renamed: {$relativePath}/{$filename} → {$relativePath}/{$newFilename}\n";
    }
}

// Remove this script from composer.json post-create-project-cmd
$composerJsonPath = __DIR__.DIRECTORY_SEPARATOR.'composer.json';
$composerJson = json_decode(file_get_contents($composerJsonPath), true);

$composerJson['scripts']['post-create-project-cmd'] = array_values(
    array_filter(
        $composerJson['scripts']['post-create-project-cmd'],
        fn ($script) => ! str_contains($script, basename(__FILE__))
    )
);

file_put_contents(
    $composerJsonPath,
    json_encode($composerJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)."\n"
);

// Self-delete
unlink(__FILE__);
