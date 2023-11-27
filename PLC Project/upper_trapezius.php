<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upper Trapezius Workouts</title>
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

    <h1>Upper-Trap Workouts</h1>

    <ul>
        //Workouts

        <form method="post" action="add_workout.php">
            <li><strong>1. Dumbbell Shrugs</strong>  Stand with feet shoulder-width apart, hold dumbbells at your sides, lift your shoulders straight up toward your ears, squeeze, then slowly lower them back down.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Dumbbell Shrugs">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=_t3lrPI6Ns4" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>2. Rack Pulls</strong> Set up a barbell on a power rack with pins at about knee height. Stand with feet shoulder-width apart, grip the bar, and lift by straightening your back and extending your hips, as well as pulling the shoulders back as you complete the movement. Let the weight stretch your upper traps at the top and slowly lower back down.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Rack Pulls">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=u7NE34Vw81w" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>3. Farmers Walk</strong>  Grab dumbbells in each hand, keep your back straight, chest up, and shoulders back, and walk forward, maintaining an upright posture and engaging your core and grip strength.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Farmers Walk">Add to Workout</button>
            </li>
        </form>
        //YouTube Video
        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=p5MNNosenJc" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>