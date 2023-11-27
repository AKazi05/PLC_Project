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
    <a id="backButton" href="index.php">&lt; Back</a>

    <h1>Lats Workouts</h1>

    <ul>
        //Workouts

        <form method="post" action="add_workout.php">
            <li><strong>1. Pullups</strong> 
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Pullups">Grab the bar with your preferred grip, hang, then pull yourself up until your chin passes the bar (pulling to the clavicle or sternum is optional), and lower yourself back down with control.</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=iWpoegdfgtc" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>2. Pulldowns</strong> Sit at the pulldown machine and adjust the thigh pad so that your thighs are comfortably secured under the pads. Grasp the bar your preferred grip, and pull it down towards your chest while keeping your back straight, then slowly return the bar to the starting position.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Pulldowns">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=EUIri47Epcg" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>3. Dumbbell Pullovers</strong> Lie on a bench, hold a dumbbell above your chest with both hands, then lower it backward over your head in a controlled arc until your upper arms are in line with your torso or slightly below. Then, bring the dumbbell back up over your chest to the starting position while keeping a slight bend in your elbows.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Dumbbell Pullovers">Add to Workout</button>
            </li>
        </form>
        //YouTube Video
        <iframe width="480" height="270" src="https://www.youtube.com/watch?v=jQjWlIwG4sI" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>