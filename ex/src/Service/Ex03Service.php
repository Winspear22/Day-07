<?php

namespace App\Service;

class Ex03Service
{
    public function uppercaseWords(string $txt): string
    {
        // Met la première lettre de chaque mot en majuscule
        return ucwords(strtolower($txt));
    }

    public function countNumbers(string $txt): int
    {
        // Compte les chiffres contenus dans le texte
        return preg_match_all('/\d/', $txt);
    }
}