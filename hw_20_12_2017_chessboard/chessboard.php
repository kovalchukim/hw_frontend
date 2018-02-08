<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Chessboard</title>
    <script>
        var table = new Array(8);
        for (var i = 0; i < table.length; i++) {
            table[i] = new Array(8)
        }

        for (var row = 0; row < table.length; row++) {
            for (var col = 0; col<table[row].length; col++) {
                if((row + col) % 2 == 1 )
                    table[row][col] = "<img src='images/wight.jpg' width='50' height='50'>";
                else
                    table[row][col] = "<img src='images/black.jpg' width='50' height='50'>";
            }
        }

        for (var row = 0; row < table.length; row++) {
            for (var col = 0; col < table.length; col++) {
                document.write(table[row][col]);
            }
            document.write("<br>");
        }
    </script>
</head>
<body>
</body>
</html>