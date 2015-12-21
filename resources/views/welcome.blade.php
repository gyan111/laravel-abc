<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- <title>Adalabadala</title> -->
        <meta charset="UTF-8">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

        <style>
            
        </style>
    </head>
    <body>
    <form>
        <input type="text" name="text" id="text">
        <input type="submit" id="send" value="Submit">
    </form>
    <script type="text/javascript">
        $( "#send" ).click(function(e) {
            var text = $("#text").val();
            alert(text);
            e.preventDefault();
                $.ajax({
                    url: "/",
                    method:'post',
                    data: {
                        words: text
                    },
                    success: function( data ) {
                        $( "#weather-temp" ).html( "<strong>" + data + "</strong> degrees" );
                    }
                });
        });
        </script>
    </body>
</html>
