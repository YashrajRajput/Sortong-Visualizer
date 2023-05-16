<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Sort</title>
    <style>
        body {
            margin: auto;
            padding: auto;
            background: url("insert.jpg");
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
            Insertion Sort
        </div>
    </section>

    <article>
        <p>
            Average Complexity O(n2) <br><br>
            Best Case O(n) <br><br>
            Worst Case O(n2) <br><br>
            Space Complexity O(1) <br><br>
        </p>
        <img src="insertionsort.png" alt="sorting">
    </article>

    <div class="description">
        Description:<br>
        Insertion sort is a simple sorting algorithm that works similar to the way you sort playing cards in your hands.
        The array is virtually split into a sorted and an unsorted part. Values from the unsorted part are picked and
        placed at the correct position in the sorted part.
        <br>
         Sorting is typically done in-place, by iterating up the
        array, growing the sorted list behind it. At each array-position, it checks the value there against the largest
        value in the sorted list (which happens to be next to it, in the previous array-position checked). If larger, it
        leaves the element in place and moves to the next. If smaller, it finds the correct position within the sorted
        list, shifts all the larger values up to make a space, and inserts into that correct position.
        <br><br>
        Uses: Insertion sort is used when number of elements is small. It can also be useful when input array is almost
        sorted, only few elements are misplaced in complete big array.
        <br><br>
        Boundary Cases: Insertion sort takes maximum time to sort if elements are sorted in reverse order. And it takes
        minimum time (Order of n) when elements are already sorted.
    </div>
    <br><br>
    <div style="margin-left: 60px;">
        <button onclick="window.location.href='index.php';">Start Sorting !</button>
    </div>
</body>

</html>
