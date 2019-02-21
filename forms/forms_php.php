<?php 
    /**
     * text fields
     */
    $user_name = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $action = filter_input(INPUT_POST, 'action');
    echo '<u>Text Results</u><br>'.$user_name."s password is ".$password.'<br><br>';

    /**
     * Radio Buttons
     */
    $card_type = filter_input(INPUT_POST, 'card_type');
        if($card_type == NULL) {
            $card_type = 'unknown';
        }

    echo '<u>Radio Results</u><br>'.$card_type.'<br><br>';

    /**
     * Checkboxes - one at a time
     */
    $topping = "none";
    if (isset($_POST['pep'])) {
        $topping = 'pepp';
    }
    else if (isset($_POST['mush'])) {
        $topping = 'mush';
    }
    else {
        $topping = 'oli';
    }
    
    echo '<u>Single Checkbox Results</u><br>'.$topping.'<br><br>';

    /**
     * Checkboxes - multiple
     */
    $toppings = filter_input(INPUT_POST, 'top', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    $result = "";
        if ($toppings != NULL) {
            foreach($toppings as $key => $value) {
                $result = $value.'<br>'.$result;
            }
        } else {
            $result = 'No toppings selected';
        }

        echo '<u>Multi Checkbox Results</u><br>'.$result.'<br><br>';

    /**
     * Drop-Down List
     */
    $card_types = filter_input(INPUT_POST, 'card_types');
    echo '<u>Drop-Down Result</u><br>'.$card_types.'<br><br>';

    /**
     * ListBox
     */
    $toppings = filter_input(INPUT_POST, 'top', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    $result = "";
        if ($toppings != null) {
            foreach ($toppings as $key => $value) {
                $result = $value.'<br>'.$result;
            }
        } else {
            $result = "No toppings selected";
        }

    echo '<u>ListBox Results</u><br>'.$result.'<br><br>';

    /** 
     * TextArea
     */
    $comment = filter_input(INPUT_POST, 'comment');

    echo '<u>TextArea Results</u><br>'.$comment.'<br><br>';
?>