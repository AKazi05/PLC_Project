<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tibalis Anterior Workouts</title>
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

    <h1>Tibalis Anterior Workouts</h1>

    <ul>
        //Workouts

        <form method="post" action="add_workout.php">
            <li><strong>1. Preacher Curls:</strong> Use a preacher bench to isolate the biceps. Curl the weight up with your arms resting on the bench.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/embed/ykJmrZ5v0Oo" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>2. Preacher Curls:</strong> Use a preacher bench to isolate the biceps. Curl the weight up with your arms resting on the bench.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>

        <iframe width="480" height="270" src="https://www.youtube.com/embed/zC3nLlEvin4" frameborder="0" allowfullscreen></iframe>

        <form method="post" action="add_workout.php">
            <li><strong>3. Preacher Curls:</strong> Use a preacher bench to isolate the biceps. Curl the weight up with your arms resting on the bench.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
        //YouTube Video
        <iframe width="480" height="270" src="https://www.youtube.com/embed/fIWP-FRFNU0" frameborder="0" allowfullscreen></iframe>
    </ul>
</body>

</html>