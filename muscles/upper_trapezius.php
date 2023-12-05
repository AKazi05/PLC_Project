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
    <a id="backButton" href="../PLC Project/index.php">&lt; Back</a>

    <h1>Upper-Trap Workouts</h1>

    <ul>
     

        <form method="post" action="add_workout.php">
            <li><strong>1. Dumbbell Shrugs</strong> For dumbbell shrugs, stand with a dumbbell in each hand by your sides, keep your arms straight, elevate your shoulders towards your ears, and then lower them back down.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Dumbbell Shrugs">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/_t3lrPI6Ns4" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. Rack Pulls</strong> To perform rack pulls, set up a barbell on a power rack at knee height, stand with your feet shoulder-width apart, grip the bar with both hands, and lift it by straightening your hips and knees.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Rack Pulls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/u7NE34Vw81w" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>3. Farmers Walk</strong>  For a farmer's walk, grab a heavy weight in each hand, such as dumbbells or kettlebells, and walk with a straight posture.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Farmers Walk">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/p5MNNosenJc" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>