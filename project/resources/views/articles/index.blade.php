<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    body {font-family: "Times New Roman", Georgia, Serif;}
    h1, h2, h3, h4, h5, h6 {
        font-family: "Playfair Display";
        letter-spacing: 5px;
    }
</style>
<body>



<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
        <div class="w3-col m6 w3-padding-large w3-hide-small">
            <img src="https://www.w3schools.com/w3images/tablesetting2.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
        </div>
        @foreach($articles as $article)
        <div class="w3-col m6 w3-padding-large">
            <h1 class="w3-center">{{ $article -> title}}</h1><br>
            <h5 class="w3-center">{{ $article -> subtitle}}</h5>
            <p class="w3-large">{{ $article -> desc1 }}</p>
            <p class="w3-large w3-text-grey w3-hide-medium">{{ $article -> desc2 }}</p>
        </div>
        @endforeach
    </div>

</body>
</html>
