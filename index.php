<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple Fetch</title>
</head>

<body class="">
    <div class="wrapper">
        <div class="form-container">
            <div class="form-title">
                <h1>Simple Fetch</h1>
            </div>
            <div class="form-inputs">
                <form method="post" action="server/enteritems.php" id="form">
                    <!-- <div class="form-input-wrapper">ID:<input type="text" name="userid" id="userid"></div><br> -->
                    <div class="form-input-wrapper">Voornaam:<input type="text" name="firstname" id="firstname"></div><br>
                    <div class="form-input-wrapper">Achternaam:<input type="text" name="lastname" id="lastname"></div><br>
                    <div class="form-input-wrapper">Hasteckel?:<input type="text" name="hasteckel" id="hasteckel"></div><br>
                    <div class="form-input-wrapper">E-mail:<input type="text" name="email" id="email"></div>
                    <input type="submit" value="submit">
                </form>
            </div>
            <div class="form-table">
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Has Teckel</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody id="user-list"></tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>