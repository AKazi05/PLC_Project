<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gluteus Maximus Workouts</title>
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

    <h1>Glutes Workouts</h1>

    <ul>
         

        <form method="post" action="add_workout.php">
            <li><strong>1. Squats</strong> To maximize engagement of your buttocks during squats, stand with feet shoulder-width apart, lower your body by bending your knees and hips while keeping your back straight, ensuring your knees don't go beyond your toes, and then push through your heels to return to the starting position.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Split Squats">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/EbOPpWi4L8s" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. Lunges</strong> To emphasize the activation of your glutes during lunges, stand with feet hip-width apart, take a step forward with one leg, lower your body until both knees are bent at a 90-degree angle, ensuring your front knee doesn't go beyond your toes, push through the heel of the front foot as you return to the starting position.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Lunges">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/wrwwXE_x-pQ" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>3. Hip Thrusts</strong> To perform hip thrusts, sit on the ground with your back against a bench, place a barbell over your hips, plant your feet on the floor with knees bent, drive through your heels, and lift your hips towards the ceiling, forming a straight line from shoulders to knees, before lowering them back down.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Hip Thrusts">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/29OfN4ztW_g" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>