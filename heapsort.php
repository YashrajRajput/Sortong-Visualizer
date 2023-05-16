<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heap Sort</title>
    <style>
        body {
            margin: auto;
            padding: auto;
            background: url("heap.jpg");
            height: auto;
            width: auto;
            background-repeat: no-repeat;
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
    </style>
</head>

<body>
    <section>
        <div>
            Heap Sort
        </div>
    </section>

    <article>
        <p>
            Average Complexity O(n × log n) <br><br>
            Best Case O(n × log n) <br><br>
            Worst Case O(n × log n) <br><br>
            Space Complexity O(1) <br><br>
        </p>
        <img src="heapsort.png" alt="sorting">
    </article>

    <div class="description">
        Description:<br>
        In computer science, heapsort is a comparison-based sorting algorithm. Heapsort can be thought of as an improved selection sort: like selection sort, heapsort divides its input into a sorted and an unsorted region, and it iteratively shrinks the unsorted region by extracting the largest element from it and inserting it into the sorted region. Unlike selection sort, heapsort does not waste time with a linear-time scan of the unsorted region; rather, heap sort maintains the unsorted region in a heap data structure to more quickly find the largest element in each step.
        <br><br>
        Although somewhat slower in practice on most machines than a well-implemented quicksort, it has the advantage of a more favorable worst-case O(n log n) runtime. Heapsort is an in-place algorithm, but it is not a stable sort.
        <br><br>
        Heapsort was invented by J. W. J. Williams in 1964.[2] This was also the birth of the heap, presented already by Williams as a useful data structure in its own right.
    </div>
    <br><br>
    <div style="margin-left: 60px;">
        <button onclick="window.location.href='index.html';">Start Sorting !</button>
    </div>
</body>

</html>