<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mid Trapezius Workouts</title>
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

    <h1>Middle-Trap Workouts</h1>

    <ul>
         

        <form method="post" action="add_workout.php">
            <li><strong>1. Face Pulls:</strong> To perform face pulls, attach a rope to a cable machine at about face height, grasp the ends of the rope with an overhand grip, step back to create tension, and pull the rope towards your face by externally rotating your shoulders and squeezing your upper back muscles.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/V8dZ3pyiCBo" frameborder="0" allowfullscreen></iframe>
             
        <form method="post" action="add_workout.php">
            <li><strong>2. T-Bar Rows:</strong> To execute T-bar rows, start by loading weight plates onto one end of a T-bar row machine or secure a barbell in a landmine attachment. Put the loaded end between your legs, grab the handles or the barbell with both hands, keep your back straight, and hinge at the hips until your upper body is almost parallel to the floor. Pull the weight towards your chest by retracting your shoulder blades and keeping your elbows close to your body. Lower the weight back down.
                &nbsp&nbsp&nbsp&nbsp<button type="submit" name="exercise" value="Preacher Curls">Add to Workout</button>
            </li>
        </form>
         
        <iframe width="480" height="270" src=" https://www.youtube.com/embed/TyLoy3n_a10" frameborder="0" allowfullscreen></iframe>
            
    </ul>
</body>

</html>