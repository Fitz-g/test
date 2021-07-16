<?php


/**
 * @param string $word
 *
 * compte le nombre de fois une lettre se repète dans un mot.
 */
function nbreOccurence(string $word)
{
    $arrayResult = array();
    $nbre = 1;

    for ($i = 0; $i <= strlen(@$word); $i++) {
        for ($j = 1; $j < strlen(@$word); $j++) {
            if (@$word[$i] == @$word[$j]) {
                $nbre = $nbre + 1;
            }
        }
        $result = @$word[$i] . $nbre;

        $nbre = 0;
        if (array_search(@$word[$i], $arrayResult) == false) {
            array_push($arrayResult, $result);
        }
    }
    return $arrayResult;
}


$occu = nbreOccurence("anticonstitutionnellement");

var_dump($occu);
echo "<pre>";
