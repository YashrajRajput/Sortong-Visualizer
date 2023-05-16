<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Visualizer</title>
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
</head>
<body>

    <header>
        <nav>
            <div class="array-inputs">
                <p>Size of the array:</p>
                <input id="a_size" type="range" min=20 max=150 step=1 value=80>
                <p>Speed of the algorithm:</p>
                <input id="a_speed" type="range" min=1 max=5 step=1 value=4>
                <button id="a_generate">Generate New Array!</button>
            </div>
            <div class="header_right">
                <p class="nav-heading">Sorting visualizer</p>
                <div class="algos">
                    <button style="margin-right: 10px;">Bubble</button>
                    <button style="margin-right: 9px;">Quick</button>
                    <button style="margin-right: 8px;">Merge</button>
                    <button style="margin-right: 8px;">Heap</button>
                    <button style="margin-right: 10px;">Insertion</button>
                    <button style="margin-right: -2px;">Selection</button>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div id="Info_Cont1">
            <h1>Unsorted</h1>
            <div class="triangle">
            </div>
            <br>
            <br>
            <h1>Swapping</h1>
            <div class="rectangle"></div>
            <br>
            <br>
            <h1>Checking</h1>
            <div class="circle"></div>
            <br>
            <br>
            <h1>Sorted</h1>
            <div class="square">
            </div>
        </div>
        <div id="array_container"> 
        </div>
        <div id="Info_Cont2">
        </div>
    </section>
    <footer>
    </footer>

    <script src="./main.js"></script>   
    <script src="./visualizations.js"></script> 
    <script src="./bubble_sort.js"></script>
    <script src="./selection_sort.js"></script>
    <script src="./insertion_sort.js"></script>
    <script src="./merge_sort.js"></script>
    <script src="./quick_sort.js"></script>
    <script src="./heap_sort.js"></script>
   
</body>


</html>
