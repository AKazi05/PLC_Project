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
    <a id="backButton" href="index.php">&lt; Back</a>

    <h1>Glutes Workouts</h1>

    <ul>
        //Workouts

        <form method="post" action="add_workout.php">
            <li><strong>1. Split Squats</strong> Stand with one foot in front and one behind (on an elevated surface preferably). Lower your body by bending your knees until your rear knee is almost touching the ground. Push through the front heel to return to the starting position. Switch the legs and repeat.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Split Squats">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=jNihW0WDIL4" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>2. Lunges</strong> Start standing with feet together. Step forward with one leg, and lower your body until both knees are at 90-degree angles, then push back up to the starting position. Repeat with the other leg.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Lunges">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=eFWCn5iEbTU" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>3. Hip Thrusts</strong> Sit on the floor with your upper back against a bench. Roll a barbell over your hips, bend your knees, and push through your heels to lift your hips until your body forms a straight line from knees to shoulders, squeezing your glutes at the top. Lower back down with control.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Hip Thrusts">Add to Workout</button>
            </li>
        </form>
        //YouTube Video
        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=EF7jXP17DPE" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>