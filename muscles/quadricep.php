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

    <h1>Quads Workouts</h1>

    <ul>
     

        <form method="post" action="add_workout.php">
            <li><strong>1. Squats</strong> To perform squats, stand with your feet shoulder-width apart, engage your core, and lower your body by bending your knees and hips, keeping your back straight and chest up. Descend until your thighs are parallel to the ground or as far as your flexibility allows, then push through your heels to return to the starting position.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Barbell Back Squats">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/EbOPpWi4L8s" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. Leg Press</strong> To execute the leg press, sit on a leg press machine with your back against the backrest and your feet on the platform, positioned hip-width apart. Release the safety locks, lower the platform by bending your knees until they form a 90-degree angle, and then push the platform back up to the starting position by extending your knees.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Barbell Front Squats">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/U9dnM3dguLc" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>3. Lunges</strong> For lunges, stand with feet hip-width apart, take a step forward with one leg, lower your body until both knees are bent at a 90-degree angle, ensuring your front knee doesn't go beyond your toes, then push through the heel of the front foot to return to the starting position.
            &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Leg Press">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/wrwwXE_x-pQ" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>