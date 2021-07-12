<?php
function checksub(array $superset, array $subset): bool
{
    foreach($subset as $final){
        if (! in_array($final, $superset )){
            return false;
        }
    }
    return true;
}
print_r (checksub([1, 2, 3, 4, 5], [1, 4]));
?>
