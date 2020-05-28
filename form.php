<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport:" content="width=device-width">
        <meta name="description:" content="An experiment in web design">
        <meta name="keywords" content="CWRU, student, computer science">
        <meta name="author" content="Justin Lee">
        <title>JLee's Website | Form</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <!--Header-->
        <header>
            <div class="container">
                <div id="logo">
                    <h1>JLee's Website</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="current"><a href="form.html">Form</a></li>
                        <li><a href="video.html">Video</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!--Form-->
        <section class="main">
            <div class="container">
                <form class="bubble" method="post" name="contact_form" action="emailform.php">
                    <h2>Auto Reply Form</h2>
                    <label>Name:</label><br>
                    <input type="text" name="name" placeholder="Full Name" size="40"><br>
                    <label>Email:</label><br>
                    <input type="email" name="email" placeholder="Email" size="40"><br>
                    <label>Purpose:</label><br>
                    <textarea name="message" placeholder="Message"></textarea>

                    <button type="submit" class="button_1" name="submit">Submit</button>
                </form>
            </div>
        </section>

        <!--Random Number Generator-->
        <section class="main">
            <div class="container">
                <div class="bubble">
                    <h2>Javascript Random Integer</h2>
                    <div style="width: 50%; float: left">
                        <label>Lower Bound: </label>
                        <input class="input2" type="number" id="l_bound" value="1"><br>
                        <label>Upper Bound: </label>
                        <input class="input2" type="number" id="u_bound" value="10"><br>
                    </div>
                    <div style="width: 50%; float: right">
                        <p id="result">Result will appear here</p>
                    </div>
                    <button type="submit" style="margin-top: 10px;" class="button_1" onclick="getrandomInt()">Generate</button>

                    <script type="text/javascript">
                    function randInt(min, max){
                        if(min < max){
                            return Math.floor(Math.random() * (max - min + 1)) + min;
                        }
                        return "Error: lower bound ≥ upper bound"
                    }

                    function getrandomInt(){
                        var min = document.getElementById("l_bound").value;
                        var max = document.getElementById("u_bound").value;
                        document.getElementById("result").innerHTML = randInt(parseInt(min), parseInt(max));
                    }
                    </script>
                </div>
            </div>
        </section>
        <footer>
            <p>A Student Project 2020</p>
        </footer>
    </body>
</html>