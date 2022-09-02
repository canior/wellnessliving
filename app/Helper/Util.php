<?php
declare(strict_types=1);

namespace App\Helper;

class Util
{
    public static function findFirstElementOnAlphabeticalOrder($elements = []): ?string
    {
        if (empty($elements)) {
            return null;
        }

        $first = (string)$elements[0];

        for ($i = 1; $i < count($elements); $i++) {
            if (strcmp((string)$elements[$i], $first) < 0) {
                $first = (string)$elements[$i];
            }
        }

        return $first;
    }
}