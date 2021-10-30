<?php





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        margin: 150px auto;
        justify-content: center;
        align-items: center;
        font-size: 2rem;
        flex-direction: column;
        font-weight: 400;
        font-family: sans-serif;


    }
</style>

<body id="body">
    <di class="container">
        <div class="time">
            <h1 id="time">00:00:00 AM</h1>
        </div>
        <br>
        <div class="today">
            <h2 id="today">Good Night</h2>
        </div>
        <br>
        <div class="name">
            <h3 id="names"><span id="name" contenteditable="true"> Stark</span></h3>
        </div>
        <br>
        <div class="">
            <h4>What's your goal today</h4>
        </div>
        <div class="focuss">
            <h4 class="focus"><span id="focus" contenteditable="true">To Be Heroes</span></h4>
        </div>
    </di>
    <script>
        const name = document.getElementById("name");
        const body = document.getElementById("body");
        const time = document.getElementById("time");
        const focus = document.getElementById("focus");
        const today = document.getElementById("today");

        name.addEventListener("keypress", setNameItem);
        name.addEventListener("blur", setNameItem);
        focus.addEventListener("keypress", setFocusItem);
        focus.addEventListener("blur", setFocusItem);


        function times() {
            const date = new Date(),
                Hour = date.getHours(),
                Minute = date.getMinutes(),
                Second = date.getSeconds();

            let Am = Hour < 12 ? "AM" : "PM";

            time.innerHTML = `${addzero(Hour)}<span>:</span>${addzero(Minute)}<span>:</span>${addzero(Second)}<span> ${Am}</span>`;

            const ios = setTimeout(times, 1000);


        }

        function addzero(e) {
            return (parseInt(e, 10) < 10 ? "0" : "") + e;
        }

        function setNameItem(e) {
            if (e.type == "keypress") {
                if (e.keycode === 15) {
                    localStorage.setItem("name", e.target.textContent);
                    alert("Masukan nama dengan maximal 15 karacter");
                    name.blur();
                } else {
                    localStorage.setItem("name", e.target.textContent);

                }
            }

        }

        function getItemName() {
            if (localStorage.getItem("name") === null || localStorage.getItem("name") == "") {
                name.textContent = "[Enter Name]";
            } else {
                name.textContent = localStorage.getItem("name");
            }
        }


        function setFocusItem(e) {
            if (e.type == "keypress") {
                if (e.keycode === 15) {
                    localStorage.setItem("focus", e.target.textContent);
                    alert("Masukan nama dengan maximal 15 karacter");
                    focus.blur();
                } else {
                    localStorage.setItem("focus", e.target.textContent);

                }
            }

        }

        function getFocusItem() {
            if (localStorage.getItem("focus") === null || localStorage.getItem("focus") == "") {
                focus.textContent = "[Enter focus]";
            } else {
                focus.textContent = localStorage.getItem("focus");
            }
        }

        function bg() {
            const d = new Date(),
                h = d.getHours();

            if (h > 18) {

                body.style.background = 'url("../img/Img12.jpg")';
                body.style.backgroundSize = "cover";
                body.style.color = "#f4f4f4";
                today.textContent = "Good Night";
            }
            if (h > 6) {
                body.style.background = 'url("../img/Lighthouse.jpg")';
                body.style.backgroundSize = "cover";
                body.style.color = "white";
                today.textContent = "Good Morning";

            }
            if (h > 12) {
                body.style.background = 'url("../img/Tulips.jpg")';
                body.style.backgroundSize = "cover";
                body.style.color = "white";
                body.style.backgroundRepeat = "no-repeat";
                today.textContent = "Good Afternoon";
            }


        }
        class Human {

        }

        getItemName();
        bg();
        getFocusItem();
        times();
    </script>
</body>

</html>