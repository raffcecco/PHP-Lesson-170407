<?php
    sleep(1);

    // Try and get item1 and item2 from the posted form.
    // First we check they actually exist and are valid values.
    // If this result.php page was accessed directly instead of through the
    // form in index.php, then the tests will fail as the post variables won't be there.

    $item1 = filter_input(INPUT_POST, 'item1', FILTER_SANITIZE_NUMBER_INT);
    $item2 = filter_input(INPUT_POST, 'item2', FILTER_SANITIZE_NUMBER_INT);

    // At this point, $item1 and $item2 will be an integer, false or null (return values from filter_input).
    // The is_numeric() tests below will ensure we have a number.

    if (!is_numeric($item1) || !is_numeric($item2) ) {

        // If we get here, then the tests have failed, so redirect
        // back to the home page to enter valid values.

        header('Location: http://localhost:8080/simple');
        die();
    }

?>


<!DOCTYPE html>
<html>

    <head>
        <title>Result</title>
        <link rel='stylesheet' type = 'text/css' href='/styles.css'>
    </head>

    <body>

        <h1>Result</h1>

        <p class = 'result'>

            <?php
                // At this point we know $item1 and $item2 from above are valid numbers,
                // so we can perform the calculation.
                // Finally, echo the sum and result.

                $result = $item1 + $item2;
                echo "$item1 + $item2 = $result";
            ?>

        </p>

    </body>
</html>