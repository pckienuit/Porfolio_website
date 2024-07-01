<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HienNguyen</title>
    <link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" defer></script>
    <script src="../js/script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Cabin:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Cabin:ital,wght@0,400..700;1,400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap" rel="stylesheet">
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            background-color: #F9F6E4;
            padding: 10px
        }

        img {
            max-width: 100%;
            height: auto;
            vertical-align: middle;
            display: inline-block;
            cursor: pointer;
            transition: 0.3s;
        }

        img:hover {opacity: 0.7;}

        .grid-wrapper div{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .grid-wrapper div img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }
        .grid-wrapper {
            display: grid;
            grid-gap: 10px;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-auto-rows: 200px;
            grid-auto-flow: dense;
        }
        .grid-wrapper .wide {
            grid-column: span 2;
        }
        .grid-wrapper .tall {
            grid-row: span 2;
        }
        .grid-wrapper .big {
            grid-row: span 2;
            grid-column: span 2;
        }

        a {
            text-decoration: none;
        }
        #back {
            display: flex;
            align-items: center;
            flex-direction: row;
        }
        #back i {
            font-size: 40px;
            color: #F28775;
        }
        #back div {
            font-size: 40px;
            font-family: "Cabin", sans-serif;
            font-weight: 700;
            color: #000;
        }
        #image-viewer {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.9);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        .modal-content { 
            animation-name: zoom;
            animation-duration: 0.6s;
        }
        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }
        #image-viewer .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }
    </style>
</head>

<body>
<a href="javascript:history.back()">
    <div id="back">
        <i class="ri-arrow-left-s-line"></i>
        <div>
            Volunteer at Huong Duong Orphanage Home
        </div>
    </div>
</a>


<div>
<?php
$directory = '../assets/img/HUONGDUONG';  
$files = scandir($directory);
$filteredFiles = array_diff($files, array('.', '..'));

echo '<div style="margin-top: 26px;" class="grid-wrapper images">';
foreach ($filteredFiles as $filename) {
    echo '<div>';
    echo '<img src="';
    echo $directory."/".$filename;
    echo '"alt="#">';
    echo "</div>";
}
echo '</div>';
?>
</div>

<div id="image-viewer">
  <span class="close">&times;</span>
  <img class="modal-content" id="full-image">
</div>

</body>

</html>