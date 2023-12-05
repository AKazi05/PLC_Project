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

    <h1>Pectoral Workouts</h1>

    <ul>

        <form method="post" action="add_workout.php">
            <li><strong>1. Bench Press:</strong>Lie on a flat bench, grip the barbell slightly wider than shoulder-width apart, lower it to your chest, and push it back up while keeping your feet flat on the ground and maintaining a stable, arched back.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src="https://www.youtube.com/embed/4Y2ZdHCOXok" frameborder="0" allowfullscreen></iframe>
            <form method="post" action="add_workout.php">
            <li><strong>2. Pushups:</strong>Assume a plank position with hands shoulder-width apart, lower your chest to the ground by bending your elbows, and then push back up to the starting position, maintaining a straight line from head to heels.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src="https://www.youtube.com/embed/IODxDxX7oi4" frameborder="0" allowfullscreen></iframe>
        <form method="post" action="add_workout.php">
            <li><strong>3. Dumbell Flys:</strong>Lie on a flat bench, hold dumbbells over your chest with arms slightly bent, lower the weights out to your sides in a wide arc, and then bring them back up, engaging your chest muscles throughout the movement.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        <iframe width="480" height="270" src="https://www.youtube.com/embed/QENKPHhQVi4" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>