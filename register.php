<!DOCTYPE html>
<html lang="am">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <title>የመመዝገቢያ ቅጽ</title>
</head>

<body>
    <h1>የመመዝገቢያ ቅጽ</h1>
    <form method="post" action="register_process.php" class="form-info">
        <label for="name">ሙሉ ስም፡</label>
        <input type="text" name="name" id="name" class="form-info" required><br />
        <label for="educational_level">የትምህርት ደረጃ: </label>
        <input type="text" name="educational_level" id="school" class="form-info" required><br />
        <label for="age"> እድሜ: </label>
        <input type="text" name="age" id="age" class="form-info" required></br>
        <label for="phone"> ስልክ ቁጥር: </label>
        <input type="text" name="phone" id="phone" class="phone-info" required><br />
        <label for="time_to_learn">አሁን ላይ መማር የሚፈልጉት?</label><br />
        የቀን <input type="radio" name="time_to_learn" value="የቀን" id="day" required>
        የማታ <input type="radio" name="time_to_learn" value="የማታ" id="night" required>
        </br><br />
        <label for="have_learnt_before">ከዚህ በፊት በሰንበት ት/ቤት ተምረው ያውቃሉ?</label><br />
        አዎ <input type="radio" name="have_learnt_before" id="yes" value="አዎ" class="form-info" required>
        አይ <input type="radio" name="have_learnt_before" id="no" value="አይ" class="form-info" required></br></br>
        <label for="the_name"> የተማሩበት ሰንበት ት/ቤት ስም፡ </label>
        <input type="text" name="the_name" id="the_name" required>


        <button type="submit" name="submit">አስገባ</button>

    </form>
</body>

</html>