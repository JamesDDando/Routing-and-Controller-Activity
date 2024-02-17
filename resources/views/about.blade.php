<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>About Me</title>
</head>

<body>
    <div class="about-me">
        <h1>About Me</h1>
        <p>Name: {{ $aboutMeData['name']}}</p>
        <p>Age: {{ $aboutMeData['age']}}</p>
        <p>Email: {{ $aboutMeData['email']}}</p>
    </div>

</body>
</html>