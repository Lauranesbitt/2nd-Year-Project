<!DOCTYPE html>

<?php include 'database.php'; ?>
<?php include 'header.php'?>


<html>

<head>
    <link type='text/css' rel='stylesheet' href='style.css' />
    <title>Booking</title>
</head>

<body>
    <div id="Booking" style="float:right" "border-style: solid" "border-width: 20px" "padding=10px">
        <!--"border-color:#b4bbe4"-->
        <!--#3f51b5-->
        <div class="header">
            <h3>Booking</h3>
        </div>
        <form id="book" action="projects.sql" method="post">
            <label for="username">Username/Email:</label>
            </br>
            <input type="text" name="username" class="required" placeholder="name@example.com" />
            </p>

            <label for="time">Time:</label>
            </br>
            <input type="time" name="time" class="required" placeholder="13:30" />
            </p>

            <label for="date">Date:</label>
            </br>
            <input type="date" name="date" class="required" placeholder="dd/mm/yy" />
            </p>


            <label for="room">Room:</label>
            </br>
            <input type="room" name="room" class="required" placeholder="SCR3" />
            </p>
            <input type="submit" value="Confirm" />


        </form>
    </div>
    </div>
</body>

</html>