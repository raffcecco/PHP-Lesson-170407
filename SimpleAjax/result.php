<?php
    sleep(1);
    // Try and get item1 and item2 from the posted form.
    // First we check they actually exist and are valid values.
    // If this result.php page was accessed directly instead of through the
    // form in index.php, then the tests will fail as the post variables won't be there.
    $item1 = filter_input(INPUT_POST, 'item1', FILTER_SANITIZE_NUMBER_INT);
    $item2 = filter_input(INPUT_POST, 'item2', FILTER_SANITIZE_NUMBER_INT);

    // At this point, $item1 and $item2 will be an integer, false or null (return values from filter_input).
    // The is_numeric() tests below will ensure we have an integer.
    if (!is_numeric($item1) || !is_numeric($item2) ) {

        // If we get here, then the tests have failed, so send error message.
        $data = ['result' => "ERROR! Try again"];
        $jsonString = json_encode($data);
        echo $jsonString;
        exit;
    }

    // Everything is great at this point, so send the result as json data!
    $result = $item1 + $item2;
    $data = ['result' => "$item1 + $item2 = $result"];
    $jsonString = json_encode($data);
    echo $jsonString;