<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rear Deltoid Workouts</title>
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

    <h1>Rear-Delts Workouts</h1>

    <ul>
         

        <form method="post" action="add_workout.php">
            <li><strong>1. Cable Face Pulls</strong> To perform cable face pulls, set up a cable machine with a rope attachment at face height. Grasp the rope with both hands using an overhand grip, step back to create tension, and pull the rope towards your face by externally rotating your shoulders and squeezing your upper back muscles. Focus on bringing the rope towards the upper part of your face, just below eye level.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Cable Face Pulls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/-MODnZdnmAQ" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. Bent Over Lateral Raises</strong> For bent-over lateral raises, stand with feet hip-width apart, hinge at your hips to bend forward at about a 45-degree angle, holding a dumbbell in each hand with palms facing each other. With a slight bend in your elbows, lift the dumbbells outward to the sides until your arms are parallel to the ground, then lower them back down.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Standing Rear Delt Raise">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/34gVHrkaiz0" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>3. Reverse Pec Dec</strong>Sit facing the machine, grasp the handles with your palms facing each other, and position your chest against the pad. Keep a slight bend in your elbows, and exhale as you squeeze your shoulder blades together to bring the handles backward and outward.Inhale as you return to the starting position.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Reverse Pec Dec">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/5YK4bgzXDp0" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>