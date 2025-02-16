<?php

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true, // Use PSR-12 coding standard
        'array_syntax' => ['syntax' => 'short'], // Use short array syntax
        'no_unused_imports' => true, // Remove unused imports
        'binary_operator_spaces' => [ // Fix spacing around operators
            'operators' => [
                '.' => 'single_space', // Fix spacing around concatenation (.)
                '=>' => 'single_space', // Fix spacing around array arrows (=>)
            ],
        ],
        'no_whitespace_in_blank_line' => true, // Remove trailing whitespace
        'no_trailing_whitespace' => true, // Remove trailing whitespace
        'braces' => [ // Fix braces placement
            'allow_single_line_closure' => true,
        ],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__) // Apply to the current directory
            ->exclude('vendor') // Exclude the vendor directory
    );