<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->name('*.php')
    ->in(__DIR__)
;

$header = <<<EOF
This file is part of the OverblogGraphQLPhpGenerator package.

(c) Overblog <http://github.com/overblog/>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$config = PhpCsFixer\Config::create();

return
    $config->setRules(
        [
            'header_comment' => ['header' => $header],
            '@PHP71Migration' => true,
            '@PHP71Migration:risky' => true,
            'single_blank_line_before_namespace' => true,
            'ordered_imports' => true,
            'concat_space' => ['spacing' => 'none'],
            'phpdoc_no_alias_tag' => ['type' => 'var'],
            'no_mixed_echo_print' => ['use' => 'echo'],
            'binary_operator_spaces' => ['align_double_arrow' => false, 'align_equals' => false],
            'general_phpdoc_annotation_remove' => ['author', 'category', 'copyright', 'created', 'license', 'package', 'since', 'subpackage', 'version'],
            'native_function_invocation' => true,
            'fully_qualified_strict_types' => true,
        ]
    )
    ->setFinder($finder)
    ->setUsingCache(true)
;
