<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Photos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
      href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Amatic+SC">
      <link rel="stylesheet"
      href="styles.css">
    
  <style>
    input {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
    }

    input:hover {
    background-color: #ddd;
    color: black;
    }

    .previous {
    background-color: #B31B1B;
    color: white;
    }

    .next {
    background-color: #B31B1B;
    color: white;
    }
    
    img{

        max-width: 100%;

        max-height: 100%;

         border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;

    }
    img:hover {opacity: 0.7;}

  </style>
  </head>
  <body vlink="#551A8B" text="#000000" bgcolor="#B31B1B" alink="#EE0000"
    link="#0000EE" style="margin-right:100px">
    <!-- Navbar (sit on top) -->
    <div w3-include-html="nav.html"></div>
    <header class="bgimg w3-display-container">
      <div class="w3-display-center w3-center">
        <h1 style="position:relative; top:.9em"> <font color="#ffffff"><span class="" style="font-size: 3em; top: 10%; text-shadow: -1px 0px
              black, 0px 1px black, 1px 0px black, 0px -1px black;
              width: 803px; height: 320px;">Photos</span></font>
        </h1>
      </div>
    </header>
    
    <div class="w3-card w3-row w3-panel w3-margin w3-center" style="background-color:#fbfbff">
            <div id="gallery" class="w3-padding-48">
            <!-- This is the php code to add photos to the photo page. What does this mean for you? To add photos to this page, don't change this file. Instead, add photos to the images folder.
                Photos are sorted by year, with an Undated folder for any photos you don't know the date of. Please try to place photos in the appropriate folder! -->
                <?php
                    $imgdir = "images/";
                
                    $years = array_diff(scandir($imgdir, 1), array('..', '.'));
                
                
                    foreach ($years as &$year) {
                        if ($year == '0_Undated') {
                            echo '<h1 class="w3-xxxlarge">Undated</h1> ';
                        } else {
                            echo '<h1 class="w3-xxxlarge">'.$year.'</h1> ';
                        }
                        $images = array_diff(scandir($imgdir.$year), array('..', '.'));
                        foreach ($images as &$imgpath) {
                            echo '<img class="w3-padding-48 w3-margin w3-image w3-hide-small w3-hide-medium" style="width:30%;" src="'.$imgdir.$year.'/'.$imgpath.'"> ';
                            echo '<img class="w3-padding-48 w3-margin w3-image w3-hide-small w3-hide-large" style="width:40%;" src="'.$imgdir.$year.'/'.$imgpath.'"> ';
                            echo '<img class="w3-padding-48 w3-margin w3-image w3-hide-medium w3-hide-large" style="width:90%;" src="'.$imgdir.$year.'/'.$imgpath.'"> ';
                        }
                    }
                ?>
            </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content w3-image" id="modal-img">
        <div id="caption"></div>
    </div>
   
    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
      <p>Powered by <a
          href="https://www.w3schools.com/w3css/default.asp"
          title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
    </footer>
    <script>

    
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
}
includeHTML()

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption

var imgs = document.getElementsByTagName("img");
var modalImg = document.getElementById("modal-img");
var captionText = document.getElementById("caption");

for (var i = 0; i < imgs.length; i++) {
    var img = imgs[i];
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}


</script> 
  </body>
</html>
