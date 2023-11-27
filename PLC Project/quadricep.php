<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tricep Workouts</title>
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

    <h1>Quads Workouts</h1>

    <ul>
    //Workouts

        <form method="post" action="add_workout.php">
            <li><strong>1. Barbell Back Squats</strong> Position a barbell on your upper traps, step under it, and lift the bar off of the rack. Stand with feet shoulder-width apart, and squat down by bending your knees and hips, keeping your back straight and rigid, and descend until your thighs are parallel to the ground or lower. Push through your heels to return to a standing position.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Barbell Back Squats">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/embed/ykJmrZ5v0Oo" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>2. Barbell Front Squats</strong> Hold a barbell in front of your shoulders, either crossing your arms to secure it or using an Olympic clean grip. Stand with feet shoulder-width apart, squat down by bending your knees and hips while keeping your chest up and core engaged, descend until your thighs are parallel to the ground or lower. Push through your heels to return to a standing position.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Barbell Front Squats">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/embed/zC3nLlEvin4" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>3. Leg Press</strong> Sit on the machine with your back against the pad and set up the safeties. Place your feet shoulder-width apart on the platform, unrack the safeties, and push the weight up by straightening your legs without locking your knees. Slowly lower the weight back down, keeping control throughout the movement to work your quads.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Leg Press">Add to Workout</button>
            </li>
        </form>
        //YouTube Video
        <iframe width="480" height="270" src="https://www.youtube.com/embed/fIWP-FRFNU0" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>