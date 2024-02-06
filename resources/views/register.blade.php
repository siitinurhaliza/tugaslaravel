<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Sign Up Form</h1>
    <form action="{{ route('register') }}" class="" method="post">
        <label for="first_name">Nama Depan:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Nama Belakang:</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label> Gender :</label><br>
            <input type="radio">Male<br>
            <input type="radio">Female<br>
            <input type="radio">Other<br><br>
           
            </from>

            <from action="/action_page.php">
                <label>Nationality:</label><br><br>
                <select name="cars">
                    <option value="Indonesia">Indonesia</option>
                    <option value="Inggris">Inggris</option>
                    <option value="Arab">Arab</option>
                </select> <br> <br>
             </from>
          
            <label>Language Spoken :</label><br>
            <input type="checkbox" name="skill">Bahasa Indonesia<br>
            <input type="checkbox" name="skill">English<br>
            <input type="checkbox" name="skill">Other<br>

        
            <from action="/action_page.html">
                <label>Bio :</label><br>
                <textarea name="Bio" rows="10" cols="30"></textarea>
                <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
