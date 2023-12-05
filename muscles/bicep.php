<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicep Workouts</title>
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
    <a id="backButton" href="../PLC Project/index.php">&lt; Back</a>

    <h1>Bicep Workouts</h1>

    <ul>
        <form method="post" action="add_workout.php">
            <li><strong>1. Bicep Curls:</strong> For bicep curls, stand with feet shoulder-width apart, hold dumbbells in each hand with palms facing forward, lift the weights towards your shoulders by bending your elbows, and then lower them back down in a controlled motion.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/ykJmrZ5v0Oo" frameborder="0" allowfullscreen></iframe>
        <form method="post" action="add_workout.php">
            <li><strong>2. Hammer Curls:</strong> To perform hammer curls, stand with feet shoulder-width apart, hold dumbbells in each hand with palms facing your torso, lift the weights towards your shoulders by bending your elbows, and then lower them back down in a controlled motion while keeping your palms facing your body throughout the movement.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/TwD-YGVP4Bk" frameborder="0" allowfullscreen></iframe>
        <form method="post" action="add_workout.php">
            <li><strong>3. Chin-ups:</strong> For chin-ups, grip a horizontal bar with palms facing towards you, hang with arms fully extended, and then pull your body upward by bending your elbows until your chin passes the bar, before lowering yourself back down in a controlled manner.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/T78xCiw_R6g" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>