<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forearm Workouts</title>
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

    <h1>Forearm Workouts</h1>

    <ul>
     
        <form method="post" action="add_workout.php">
            <li><strong>1. Wrist Curls:</strong> To do wrist curls, sit on a bench with a dumbbell in hand, rest your forearm on your thigh with your wrist just beyond the knee, lower the dumbbell towards the floor by extending your wrist, and then lift it back up by flexing your wrist.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/u61QWKYgbxI" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. Reverse Wrist Curls:</strong> For reverse wrist curls, sit on a bench with a dumbbell in hand, rest your forearm on your thigh with your palm facing the floor, lower the dumbbell towards the floor by flexing your wrist, and then lift it back up by extending your wrist.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/krZ6pWGZ8xo" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>3. Farmer's Walks:</strong> To perform farmer's walks, stand upright holding a heavy dumbbell or kettlebell in each hand at your sides, maintain a straight posture, engage your core, and walk forward for a set distance or time while keeping your shoulders stabilized and avoiding excessive leaning.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/z7E_YU9P1jU" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>