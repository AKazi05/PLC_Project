<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calf Workouts</title>
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

    <h1>Calves Workouts</h1>

    <ul>

        <form method="post" action="add_workout.php">
            <li><strong>1. Standing Calf Raises:</strong> To execute standing calf raises, stand with feet hip-width apart, lift your heels off the ground by pushing through the balls of your feet, contract your calf muscles at the top of the movement, and then lower your heels back down to the starting position.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/k8ipHzKeAkQ" frameborder="0" allowfullscreen></iframe>
        <form method="post" action="add_workout.php">
            <li><strong>2. Seated Calf Raises:</strong> For seated calf raises, sit on a chair or bench with your feet flat on the floor, place a weight on your thighs, lift your heels by pushing through the balls of your feet, contract your calf muscles at the top of the movement, and then lower your heels back down to the starting position.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/iNfR5cnabZo" frameborder="0" allowfullscreen></iframe>
        <form method="post" action="add_workout.php">
            <li><strong>3. Calf Press on the Leg Press Machine:</strong> To perform calf presses on the leg press machine, sit on the machine with your back against the pad, place your feet on the footplate, push through the balls of your feet to extend your ankles and raise the weight by straightening your knees, then lower the weight by bending your ankles, feeling the stretch in your calf muscles.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/Hu8i9d_IgpM" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>