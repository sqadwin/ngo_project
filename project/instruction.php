<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>Instructions</title>
    <style>
      .list {
        line-height: 2rem;
        font-weight: normal;
        color: black;
      }
      .card:hover {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16),
          0 2px 10px 0 rgba(0, 0, 0, 0.12);
      }
    </style>
    
  </head>
  <body>
    <div class="container-fluid">
      <!-- As a link -->
      <!-- <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Exam Instructions</a>
      </nav> -->
      <div class="col-11" id="myId">
        <div class="card" style="margin-top: 5rem; margin-bottom: 5rem">
          <div class="card-body">
            <h5 class="card-title" style="font-size: larger">Instructions</h5>
            <hr />
            <ol>
              <li class="list">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis
                ut voluptatum, nisi alias recusandae excepturi. Voluptatem
                sapiente reprehenderit vitae, recusandae vero excepturi eveniet
                aspernatur odio rerum, id porro ipsam aut.
              </li>

              <li class="list">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis
                ut voluptatum, nisi alias recusandae excepturi. Voluptatem
                sapiente reprehenderit vitae, recusandae vero excepturi eveniet
                aspernatur odio rerum, id porro ipsam aut.
              </li>

              <li class="list">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis
                ut voluptatum, nisi alias recusandae excepturi. Voluptatem
                sapiente reprehenderit vitae, recusandae vero excepturi eveniet
                aspernatur odio rerum, id porro ipsam aut.
              </li>

              <li class="list">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis
                ut voluptatum, nisi alias recusandae excepturi. Voluptatem
                sapiente reprehenderit vitae, recusandae vero excepturi eveniet
                aspernatur odio rerum, id porro ipsam aut.
              </li>

              <li class="list">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis
                ut voluptatum, nisi alias recusandae excepturi. Voluptatem
                sapiente reprehenderit vitae, recusandae vero excepturi eveniet
                aspernatur odio rerum, id porro ipsam aut.
              </li>

              <li class="list">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis
                ut voluptatum, nisi alias recusandae excepturi. Voluptatem
                sapiente reprehenderit vitae, recusandae vero excepturi eveniet
                aspernatur odio rerum, id porro ipsam aut.
              </li>

              <li class="list">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis
                ut voluptatum, nisi alias recusandae excepturi. Voluptatem
                sapiente reprehenderit vitae, recusandae vero excepturi eveniet
                aspernatur odio rerum, id porro ipsam aut.
              </li>
            </ol>
            <a href="registration.php" onclick="openFullscreen()" >
              <button
                class="btn btn-success"
                style="margin-left: 3rem"
                id="btnFullscreen"
                type="button"
              >
                Proceed
              </button>
              </a>
          </div>
        </div>
      </div>
      <div></div>
    </div>

    <script>
        function toggleFullscreen(elem) {
          elem = elem || document.documentElement;
  
          if (
            !document.fullscreenElement &&
            !document.mozFullScreenElement &&
            !document.webkitFullscreenElement &&
            !document.msFullscreenElement
          ) {
            if (elem.requestFullscreen) {
              elem.requestFullscreen();
            } else if (elem.msRequestFullscreen) {
              elem.msRequestFullscreen();
            } else if (elem.mozRequestFullScreen) {
              elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) {
              elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
            }
          } else {
            if (document.exitFullscreen) {
              document.exitFullscreen();
            } else if (document.msExitFullscreen) {
              document.msExitFullscreen();
            } else if (document.mozCancelFullScreen) {
              document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
              document.webkitExitFullscreen();
            }
          }
        }
  
        document
          .getElementById("btnFullscreen")
          .addEventListener("click", function () {
            toggleFullscreen();
          });
  
        document
          .getElementById("exampleImage")
          .addEventListener("click", function () {
            toggleFullscreen(this);
          });
      </script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
