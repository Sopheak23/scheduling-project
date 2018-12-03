<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
                width: 15%;
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
                background-color: #4CAF50;
                color: white;
            }

            /*table*/
            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td, #customers th {
                border: 10px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers td:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: middle;
                background-color: #4CAF50;
                color: white;
            }

            #square{
                height:100px;
            }

        </style>
    </head>
    <body>
        <div id="container" style="height:100%;">
            <header>
              <h2>Building A</h2>
            </header>

            <section>
              <nav>
                <ul>
                  <li><a href="http://localhost:8000">Home</a></li>
                  <li><a href="#news">News</a></li>
                  <li><a href="#contact">Contact</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a class="active" href="http://localhost:8000/switchView_buildingA">Switch View</a></li>
                </ul>
              </nav>
  
              <article>
                <table id="customers">
                  <tr id="square">
                    <th width="20%">Floor</th>
                    <th colspan="4">Rooms</th>
                  </tr>
                  <tr id="square">
                    <th>4</th>
                    <td>A4.1</td>
                    <td>A4.2</td>
                    <td>A4.3</td>
                    <td>A4.4</td>
                  </tr>
                  <tr id="square">
                    <th>3</th>
                    <td>A3.1</td>
                    <td>A3.2</td>
                    <td>A3.3</td>
                    <td>A3.4</td>
                  </tr>
                  <tr id="square">
                    <th>2</th>
                    <td>A2.1</td>
                    <td>A2.2</td>
                    <td>A2.3</td>
                    <td>A2.4</td>
                  </tr>
                  <tr id="square">
                    <th>1</th>
                    <td onClick="document.location.href='http://localhost:8000/roomA1';">A1</td>
                    <td onClick="document.location.href='http://localhost:8000/roomA1';">A2</td>
                    <td onClick="document.location.href='http://localhost:8000/roomA1';">A3</td>
                    <td onClick="document.location.href='http://localhost:8000/roomA1';">A4</td>
                  </tr>
                  
                </table>
              </article>

            </section>

            <footer>
                <p>Footer</p>
            </footer>

        </div>
        
    </body>
    
</html>
