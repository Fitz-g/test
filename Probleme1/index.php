<?php

/**
 * @param array $book
 * @param string $word
 *
 * Compte le nombre de fois un mot se repète dans un tableau de mots.
 */
function wordSearch(array $book, string $word)
{
    $count = 0;
    foreach ($book as $val) {
        if ($val == $word) {
            $count++;
        }
    }

    return ($count > 0) ? $count : -1;
}