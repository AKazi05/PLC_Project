<style>
    /* Styles for the header */
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #212121;
        color: #ffffff;
        padding: 10px;
    }

    .welcome {
        font-size: 20px;
        flex: 1; /* Take up available space and center the text */
        text-align: center; /* Center the text horizontally */
    }


    .logout a {
        color: #ffffff;
        text-decoration: none;
    }
</style>

s

<!-- Logout Button -->
<div class="header">
    <div class="welcome">Welcome</div>
    <div class="logout"><a href="logout.php">Logout</a></div>
</div>

