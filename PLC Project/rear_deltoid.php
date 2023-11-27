<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rear Deltoid Workouts</title>
    <link rel="stylesheet" href="muscle_styles.css">
</head>
<style>
    #backButton {
        position: fixed;
        top: 10px;
        left: 10px;
        background-color: #336699;
        color: #fff;
        padding: 10px;
        border: none;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    button {
        background-color: #336699;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
    }

    button:hover {
        background-color: #254158;
        transform: scale(1.05);
    }

    .success-message {
        color: green;
        font-weight: bold;
        margin-top: 10px;
    }
</style>

<body>
    <a id="backButton" href="index.php">&lt; Back</a>

    <h1>Rear-Delts Workouts</h1>

    <ul>
        //Workouts

        <form method="post" action="add_workout.php">
            <li><strong>1. Cable Face Pulls</strong> Attach a rope to a pulley, pull it towards your face, keeping elbows high and out, then slowly return. Repeat.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Cable Face Pulls">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=-MODnZdnmAQ" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>2. Standing Rear Delt Raise / Bent Lateral Raise</strong> While standing and with dumbbells in hand, bend at the waist till your torso is aobut parallel to the ground, and with your arms straight, raise the dumbbells out to sides.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Standing Rear Delt Raise">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=34gVHrkaiz0" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>3. Reverse Pec Dec</strong> Sit facing the machine, adjust the pad to chest height, and adjust the handles so you can reach them. Bring your arms back, squeezing the shoulder blades together, then return slowly.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Reverse Pec Dec">Add to Workout</button>
            </li>
        </form>
        //YouTube Video
        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=5YK4bgzXDp0" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>