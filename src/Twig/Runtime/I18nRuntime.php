<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;

class I18nRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    public function getLocaleDir($value)
    {
        return $value == 'ar' ? 'rtl' : 'ltr';
    }
}
