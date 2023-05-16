<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Sort</title>
    <style>
        body {
            margin: auto;
            padding: auto;
            background: url("bubble.jpg");
            height: auto;
            width: auto;
            background-repeat: no-repeat;
        }

        section div {
            font-size: 45px;
            font-family: sans-serif;
            color: rgb(231, 231, 231);
            margin: 42px 190px 0px 60px;
        }

        article img {
            width: 450px;
            padding: 30px;
            margin: 0px 0px 0px 35px;

        }

        .description {
    
            color: rgb(231, 231, 231);
            width: 961px;
            margin: 8px 15px 0px 60px;
        }

        article p{
            color: rgb(231, 231, 231);
            float: right;
            padding: 0px 0px 0px 0px;
            margin: 100px 510px 0px 0px;
        }
        button{
            margin-bottom: 10px;
            border-radius: 15px;
            padding: 10px;
            cursor: pointer;
        }
        button:hover{
            background-color: skyblue;
        }
    </style>
</head>

<body>
    <section>
        <div>
            Bubble Sort
        </div>
    </section>
        <!-- <div>
            <button onclick="window.location.href='index.html';">Start Sorting !</button>
        </div> -->
    <article>
        <p>
            Average Complexity O(n2) <br><br>
            Best Case O(n) <br><br>
            Worst Case O(n2) <br><br>
            Space Complexity O(1) <br><br>
        </p>
        <img src="sorting.png" alt="sorting">
    </article>

    <div class="description">
        Description:<br>
        Bubble sort, also referred to as comparison sort, sinking sort, is a simple sorting algorithm that repeatedly
        goes through thelist, compares adjacent elements and swaps them if they are in the wrong order. This is the most simplest
        algorithm and inefficient at the same time. Yet, it is very much necessary to learn about it as it represents
        the basic foundations of sorting.
        <br><br>
        If a programmer or analyst wanted to arrange a series of numbers in ascending order, the bubble sort approach
        would look like the example pictured here.
        <br><br>
        The algorithm would review two items at a time, rearrange those not already in ascending order from left to
        right, and then continue to cycle through the entire sequence until it completed a pass without switching any
        numbers.
    </div>
    <!-- &nbsp; -->
    <br>
    <br>
    <div style="margin-left: 60px;">
        <button onclick="window.location.href='index.html';">Start Sorting !</button>
    </div>
</body>

</html>