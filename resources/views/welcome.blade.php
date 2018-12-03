<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title>Scheduling Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }

            .full-height {
                height: 100%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
            }

            div.gallery:hover {
                border: 1px solid #777;
            }

            div.gallery img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: center;
            }

            * {
                box-sizing: border-box;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            /* Style the header */
            header {
                background-color: #666;
                padding: 20px;
                text-align: center;
                font-size: 35px;
                color: white;
            }

            /* Create two columns/boxes that floats next to each other */
            nav {
                float: left;
                width: 20%;
                height: 100vh;
                background: #ccc;
                padding: 10px;
            }

            /* Style the list inside the menu */
            nav ul {
                list-style-type: none;
                padding: 0;
            }

            article {
                float: left;
                padding: 10px;
                width:80%;
                background-color: #f1f1f1;
                height: 100vh;
            }

            /* Clear floats after the columns */
            section:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Style the footer */
            footer {
                background-color: #777;
                padding: 1px;
                text-align: center;
                color: white;
            }

            /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
            @media (max-width: 600px) {
                nav, article {
                    width: 100%;
                    height: auto;
                }
            }
            /*vertical navigation*/
            ul {
                margin: 0;
                padding: 0;
                background-color: #f1f1f1;
            }

            li a {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            li a.active {
                background-color: #4CAF50;
                color: white;
            }

            li a:hover:not(.active) {
                background-color: #555;
                color: white;
            }

        </style>
    </head>
    <body>
        <div id = "container" style="width:100%;">
            <header>
              <h2>Classroom Scheduling</h2>
            </header>

            <section>
              <nav>
                <ul>
                  <li><a class="active" href="#home">Home</a></li>
                  <li><a href="#news">News</a></li>
                  <li><a href="#contact">Contact</a></li>
                  <li><a href="#about">About</a></li>
                </ul>
              </nav>
  
              <article>
                <div>
                    <div class="gallery">
                         <a target="_blank" href="img_5terre.jpg">
                            <img src="5terre.jpg" alt="5Terre" width="600" height="400">
                        
                         </a>
                         <div class="desc">
                            <a href="http://localhost:8000/buildingA">Building A</a>
                         </div>
                    </div>

                    <div class="gallery">
                          <a target="_blank" href="img_forest.jpg">
                            <img src="img_forest.jpg" alt="Forest" width="600" height="400">
                          </a>
                          <div class="desc">Add a description of the image here</div>
                    </div>

                    <div class="gallery">
                          <a target="_blank" href="img_lights.jpg">
                            <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
                          </a>
                          <div class="desc">Add a description of the image here</div>
                    </div>

                    <div class="gallery">
                          <a target="_blank" href="img_mountains.jpg">
                            <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
                          </a>
                          <div class="desc">Add a description of the image here</div>
                    </div>     
                </div>
              </article>
            </section>

            <footer>
                <p>Footer</p>
            </footer>

        </div>
        
    </body>
</html>
