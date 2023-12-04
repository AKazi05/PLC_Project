<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hip Flexor Workouts</title>
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

    <h1>Hip Flexor Workouts</h1>

    <ul>
     
        <form method="post" action="add_workout.php">
            <li><strong>1. Hanging Leg Raises:</strong> To perform hanging leg raises, hang from a pull-up bar with your arms fully extended, lift your legs upward while keeping them straight, and then lower them back down without swinging.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/lS5B0MmLgZs" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. Lying Leg Raises:</strong> For lying leg raises, lie on your back with your hands by your sides, lift your legs upward toward the ceiling while keeping them straight, and then lower them back down without allowing your feet to touch the ground.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/Zr-PtqcpeWM" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>3. Mountain Climbers:</strong> To do mountain climbers, start in a plank position with your hands directly under your shoulders, engage your core, and bring one knee towards your chest while keeping the other leg extended, then quickly switch legs in a running motion, maintaining a straight line from head to heels.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/De3Gl-nC7IQ" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>