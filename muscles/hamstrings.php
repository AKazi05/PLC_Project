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
    <a id="backButton" href="../PLC Project/index.php">&lt; Back</a>

    <h1>Hamstrings Workouts</h1>

    <ul>
         

        <form method="post" action="add_workout.php">
            <li><strong>1. Deadlifts</strong> To perform deadlifts, stand with your feet hip-width apart, grip a barbell with hands slightly wider than shoulder-width, keep your back straight, and hinge at the hips to lower the barbell towards the ground while bending your knees, ensuring the barbell stays close to your body. Push through your heels, to lift the barbell back to a standing position.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Romanian Deadlifts / Stiff Legged Deadlifts">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/vRKDvt695pg" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. Romanian Deadlifts</strong> For Romanian deadlifts, start with feet hip-width apart, hold a barbell or dumbbells in front of your thighs, hinge at the hips, lower the weight by pushing your hips back while maintaining a straight back and slightly bent knees, feeling a stretch in your hamstrings, then return to the upright position by squeezing your glutes and thrusting your hips forward.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Good Mornings">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/hQgFixeXdZo" frameborder="0" allowfullscreen></iframe>
            
    </ul>
</body>

</html>