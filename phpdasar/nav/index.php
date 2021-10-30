<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/all.css">
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="#" class="active">Home</a>
        <a href="#" class="">News</a>
        <a href="#" class="">Contact</a>
        <div class="dropdown">
            <button class="dropbtn">
                Dropdown
                <i class="fas fa-caret-down"></i>
            </button>

            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>

            </div>

            <a href="#about">About</a>
            <a href="#" class="icon" onclick="myfunction();">&#9776</a>



        </div>

    </div>

    <div class="container-fluid p-3 text-center">
        <div class="containers-music bg-primary p-3">
            <div class="controls">
                <button type="submit " class="btn btn-dark"><i class="fas fa-backward"></i></button> <button type="submit " class="btn btn-dark"><i class="fas fa-play"></i></button> <button type="submit " class="btn btn-dark"><i class="fas fa-forward"></i></button>
            </div>

        </div>

    </div>

    <div class="container-fluid p-3 bg-dark text-center f">
        <div class="face">

            <div class="eyes">
                <div class="pupil"></div>
            </div>
            <div class="nouse"></div>
            <div class="monsth"></div>


        </div>


    </div>




    <div class="container-fluid text-center p-3">
        <div class="planet planetEarth">
            <h2>Earth</h2>
            <div class="containers">

                <div class="loader"><span></span></div>
                <div class="earth"></div>




            </div>

        </div>


    </div>





    <div class="container-fluid p-3">

        <div class="form-group card bg-dark p-3 text-light mb-4" id="form">
            <h1 class="card-title">Add Book</h1>
            <form action="">
                <label for="Name" class="form-label">Name</label>
                <input class="form-control" type="text" name="Name" id="Name">
                <label for="Author" class="form-label">Author</label>
                <input class="form-control" type="text" name="Author" id="Author">
                <label for="Num" class="form-group">Num</label>
                <input type="number" name="Num" id="Num" class="form-control">
                <button id="btn" class="btn btn-primary mt-3" type="submit">Send</button>
            </form>

        </div>

        <div class="card bg-primary p-3">
            <h1 class="card-title">FORM</h1>
            <table class="table table-striped table-dark text-center">

                <thead>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Num</th>
                    <th>Action</th>



                </thead>
                <tbody id="tbody">
                </tbody>





            </table>

        </div>

    </div>

    <script src="app.js"></script>
    <script src="apps.js"></script>
    <script src="../Js/all.js"></script>
</body>

</html>