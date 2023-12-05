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
    <a id="backButton" href="../PLC Project/index.php">&lt; Back</a>

    <h1>Front-Delts Workouts</h1>

    <ul>
     

        <form method="post" action="add_workout.php">
            <li><strong>1. Front Dumbbell Raises:</strong> For front dumbbell raises, stand with a dumbbell in each hand, palms facing your body, lift the weights forward with straight arms, stopping when they reach shoulder height, and then lower them back down in a controlled manner.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/gzDawZwDC6Y" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. Military Press:</strong> To execute a military press, start by sitting or standing with a barbell at shoulder height, grip the bar with hands slightly wider than shoulder-width apart, press the bar overhead by extending your arms, and then lower it back down to shoulder height.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/waeCyaAQRn8" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>3. Front Plate Raises:</strong> For front plate raises, stand with a weight plate in front of you, grasp it with both hands, keep your arms extended, and lift the plate straight in front of you to shoulder height using your shoulder muscles, then lower it back down in a controlled motion.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/hFo-LIkCozU" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>