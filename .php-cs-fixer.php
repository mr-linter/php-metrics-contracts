<?php

$finder = PhpCsFixer\Finder::create()->in(['src']);

return (new \PhpCsFixer\Config())
    ->registerCustomFixers([
        new \ArtARTs36\PhpCsFixerGoodFixers\Fixer\InterfaceMethodPhpDocSummaryFixer(),
        new \ArtARTs36\PhpCsFixerGoodFixers\Fixer\InterfacePhpDocSummaryFixer(),
        new \ArtARTs36\PhpCsFixerGoodFixers\Fixer\DisableFunctionFixer(),
    ])
    ->setRules([
        '@PSR12' => true,
        'PhpCsFixerGoodFixers/interface_method_php_doc_summary' => true,
        'PhpCsFixerGoodFixers/interface_php_doc_summary' => true,
        'PhpCsFixerGoodFixers/disable_function'                 => true,
        'no_unused_imports' => true,
    ])
    ->setFinder($finder);
