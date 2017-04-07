<!DOCTYPE html>
<html>

    <head>
        <title>Super Adder Ajax</title>

        <link rel='stylesheet' type = 'text/css' href='/styles.css'>

    </head>

    <body>
        <h1>Super Adder Ajax</h1>
        <p>Enter two integers:</p>

        <form id = 'the-form' action="" method="post">

            <input type="number" name = 'item1' >

            <input type="number" name = 'item2' >

            <button id='submit-button' type="submit" value="add-button">Add 'Em Up!</button>
        </form>

        <p id="time"></p>

        <p id = 'result-section' class="result">

        </p>

        <!-- JavaScript stuff here. -->
        <!-- We include JS libraries after all the HTML so the page isn't blocked while the JS stuff is loading. -->

        <!-- Include jQuery from CDN. -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


        <script>
            // This odd looking construct ensures jQuery is loaded before trying anything with it.
            $(function(){

                // IMPORTANT: the $ symbol between the script tags is NOTHING to do with PHP.
                // It's just a shortcut convention to the jQuery object!

                // Function to display a counting number.
                setInterval(function(){$('#time').text(Date.now())}, 10);

                // This is called when Ajax returns with some data.
                var success = function(jsonData) {
                    $('#result-section').text(jsonData.result);
                    $('#result-section').fadeIn(1000);
                }

                // This is called when the user clicks the button.
                var whenClicked =  function() {

                    // Serialize the data in the form to send to result.php.
                    var formData = $('#the-form').serialize();
                    // Send it!
                    $.post('/SimpleAjax/result.php', formData, success, 'json');
                    // Immediately fade out the last result.
                    $('#result-section').fadeOut(0);
                    // Stop the normal form handling from happening on the page.
                    return false;
                }

                // Set up click function on the button.
                $('#submit-button').click(whenClicked);
            })
        </script>

    </body>
</html>