<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblique Workouts</title>
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

    <h1>Oblique Workouts</h1>

    <ul>

        <form method="post" action="add_workout.php">
            <li><strong>1. Oblique Crunches:</strong> Lie on your back with hands behind your head, lift your shoulder blades off the ground while twisting your torso to bring your elbow toward the opposite knee, engaging your obliques, then return to the starting position and repeat on the other side.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src="https://www.youtube.com/embed/QbL1ksNO0Js" frameborder="0" allowfullscreen></iframe>
            <form method="post" action="add_workout.php">
            <li><strong>2. Bicycle Crunches:</strong>Lie on your back, lift your shoulder blades off the ground, alternate bringing your right elbow to your left knee and left elbow to your right knee in a cycling motion while extending your opposite leg, engaging your core throughout.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src="https://www.youtube.com/embed/1we3bh9uhqY" frameborder="0" allowfullscreen></iframe>
        <form method="post" action="add_workout.php">
            <li><strong>3. Standing Sidebend:</strong>Stand with feet hip-width apart, lift one arm overhead, and gently lean to the side, engaging your core and maintaining a straight spine.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src="https://www.youtube.com/embed/dL9ZzqtQI5c" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>