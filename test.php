<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JS Select Element by ID</title>
</head>

<body>
    <p class="test">nuovo contento testuale</p>
    <p class="mark">This is a NEW paragraph of text.</p>
    <p>This is another paragraph of text.</p>
    <p class="test">this is a paragrah</p>

    <script>
        var matches = document.getElementsByClassName('test', 'mark');

        document.write("numero degli elementi :" + matches.length);

        matches[0].style.fontWeight = "bold";

        matches[matches.length - 1].style.fontStyle = "italic";

        for (var elem in matches) {
            matches[elem].style.background = "yellow";
        }
        // Selecting element with id mark 
        let match = document.getElementById("mark");

        // Highlighting element's background
        match.style.background = "yellow";
    </script>
</body>

</html>