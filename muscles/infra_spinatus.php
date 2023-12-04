<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infra Spinatus Workouts</title>
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

    <h1>Infra Spinatus Workouts</h1>

    <ul>
        <form method="post" action="add_workout.php">
            <li><strong>1. External Rotations with a resistance band:</strong> To execute external rotations with a resistance band, anchor the band at waist height, stand perpendicular to the anchor point, hold the band with the hand closest to the anchor, keep your elbow bent at a 90-degree angle, and rotate your arm away from your body while keeping your elbow at your side.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/8zJtj0Bw6D0" frameborder="0" allowfullscreen></iframe>
            
        
    </ul>
</body>

</html>