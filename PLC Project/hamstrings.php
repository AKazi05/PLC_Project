<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamstrings Workouts</title>
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

    <h1>Hamstrings Workouts</h1>

    <ul>
        //Workouts

        <form method="post" action="add_workout.php">
            <li><strong>1. Romanian Deadlifts / Stiff Legged Deadlifts</strong> Hold a barbell, hinge at the hips while keeping legs mostly straight, lower the bar down your legs, and then return to standing by squeezing your glutes and hamstrings. This movement can be done with the barbell "floating" in the air, or you can pause at the floor with each rep.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Romanian Deadlifts / Stiff Legged Deadlifts">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=CN_7cz3P-1U" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>2. Good Mornings</strong> With a barbell on your upper traps, hinge at hips, lean forward while keeping your back straight, then return to back to the standing position by squeezing your glutes and hamstrings.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Good Mornings">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/embed/zC3nLlEvin4" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>3. Seated Leg Curl</strong> Sit on the machine, adjust the pad to fit your thighs. Curl your legs by bending your knees, while squeezing your hamstrings, then slowly return to the starting position.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Seated Leg Curl">Add to Workout</button>
            </li>
        </form>
        //YouTube Video
        <iframe width="480" height="270" src="https://www.youtube.com/embed/fIWP-FRFNU0" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>