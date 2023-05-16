<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selectionsort Sort</title>
    <style>
        body {
            margin: auto;
            padding: auto;
            background: url("selection.jpg");
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

        article p {
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
            Selectionsort Sort
        </div>
    </section>

    <article>
        <p>
            Average Complexity O(n2) <br><br>
            Best Case O(n2) <br><br>
            Worst Case O(n2) <br><br>
            Space Complexity O(1) <br><br>
        </p>
        <img src="selectionsort.png" alt="sorting">
    </article>

    <div class="description">
        Description:<br>
        In computer science, selection sort is an in-place comparison sorting algorithm. It has an O(n2) time
        complexity, which makes it inefficient on large lists, and generally performs worse than the similar insertion
        sort. Selection sort is noted for its simplicity and has performance advantages over more complicated algorithms
        in certain situations, particularly where auxiliary memory is limited.
        <br><br>
        The algorithm divides the input list into two parts: a sorted sublist of items which is built up from left to
        right at the front (left) of the list and a sublist of the remaining unsorted items that occupy the rest of the
        list. Initially, the sorted sublist is empty and the unsorted sublist is the entire input list. The algorithm
        proceeds by finding the smallest (or largest, depending on sorting order) element in the unsorted sublist,
        exchanging (swapping) it with the leftmost unsorted element (putting it in sorted order), and moving the sublist
        boundaries one element to the right.
        <br><br>
        One thing which distinguishes selection sort from other sorting algorithms is that it makes the minimum possible number of swaps, n − 1 in the worst case.
    </div>
    <br>
    <br>
    <div style="margin-left: 60px;">
        <button onclick="window.location.href='index.php';">Start Sorting !</button>
    </div>
</body>

</html>
