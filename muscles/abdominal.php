<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdominal Workouts</title>
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

    <h1>Abs Workouts</h1>

    <ul>

        <form method="post" action="add_workout.php">
            <li><strong>1. Crunches:</strong> To perform crunches, lie on your back, bend your knees, place your hands behind your head, and lift your upper body towards your knees using your abdominal muscles while keeping your lower back on the ground.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src="https://www.youtube.com/embed/MKmrqcoCZ-M" frameborder="0" allowfullscreen></iframe>
            <form method="post" action="add_workout.php">
            <li><strong>2. Leg Raises:</strong> To perform leg raises, lie on your back, keep your legs straight, lift them upward towards the ceiling using your abdominal muscles, and then lower them back down without letting your feet touch the ground.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/l4kQd9eWclE" frameborder="0" allowfullscreen></iframe>
        <form method="post" action="add_workout.php">
            <li><strong>3. Planks:</strong> To do planks, assume a forearm plank position, align your body in a straight line from head to heels, engage your core, and hold the position for a specified duration.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/6LqqeBtFn9M" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>