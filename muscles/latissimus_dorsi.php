<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latissimus Dorsi Workouts</title>
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

    <h1>Lats Workouts</h1>

    <ul>
         

        <form method="post" action="add_workout.php">
            <li><strong>1. Pull-Ups</strong> For pull-ups, grip a horizontal bar with your palms facing away from you, hang with your arms fully extended, and then pull your body upward by bending your elbows until your chin clears the bar.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Pullups">Add to workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/Ir8IrbYcM8w" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. Lat Pulldowns</strong> To perform lat pulldowns, sit at a lat pulldown machine with your knees secured under the pads, grip the bar with your hands wider than shoulder-width apart, and pull the bar down towards your chest. Keep your back straight, chest up, and elbows pointing down.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Pulldowns">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/u3gQT2aMVaI" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>3. Bent Over Rows</strong> For bent-over rows, stand with feet hip-width apart, hold a barbell or dumbbells in front of you with a slight bend in your knees, hinge at your hips, and lean forward while keeping your back straight. Pull the weight(s) towards your hips, squeezing your shoulder blades together.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Dumbbell Pullovers">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/B1T6ZYrPAy4" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>