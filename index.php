<?php
function hello(){
        echo "The select function is called.";
    }
    function insert(){
        echo "The insert function is called.";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="scripts.js"></script>
</head>

<body>
    <?php include 'listDir.php';echo "HEllow World";?>
    <y>
        <!-- <input type=button onClick="sample()" value='Users'> -->

        <script>
            // Function to handle the click event
            function handleClick(event) {
                // alert("Clicked item ID: " + event.target.id + "--" + window.location.href);
                window.location.href = window.location.href + event.target.id;

            }

            // function sample() {
            //     parent.location = 'C:/Users/' + window.location.href + event.target.id;
            // }

            // Add event listener to each <li> element
            document.querySelectorAll("li").forEach(function (li) {
                li.addEventListener("click", handleClick);
            });
        </script>

</html>