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

    <h1>Tricep Workouts</h1>

    <ul>
     
        <form method="post" action="add_workout.php">
            <li><strong>1. Tricep Dips:</strong> For tricep dips, grip parallel bars, lower your body by bending your elbows, and push back up to target.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/6kALZikXxLc" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. Tricep Pushdowns:</strong> For tricep pushdowns, stand in front of a cable machine, use a straight bar or rope attachment, keep your elbows close to your body, and push the bar or rope downward by extending your elbows.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/kiuVA0gs3EI" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>3. Overhead Tricep Extensions:</strong> For overhead tricep extensions, hold a dumbbell or barbell with both hands, lift it overhead, keeping your elbows close to your head, and then extend your arms upward.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/nRiJVZDpdL0" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>