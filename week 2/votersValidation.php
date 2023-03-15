<?php
    // Code to check for eligibility to vote
    $voterAge = 18;
    $hasPvc = true;
    $voterWard = 020;

    if ($voterAge < 18) {
        # code...
        echo "I'm sorry, you are not eligible to vote";
    }else if ($hasPvc == false) {
        # code...
        echo "I'm sorry, you do not have a PVC";
    }else if ($voterWard != 020) {
        # code...
        echo "I'm sorry, you are not eligible to vote in this ward";
    }else {
        # code...
        echo "You are eligible to vote";
    }

?>