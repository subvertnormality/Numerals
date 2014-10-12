<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
    <link href="public/styles/roman.css" media="screen" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Roman Numerals</h1>
    <form id="inputForm">
        <p>
            <label for="conversionSelect">Conversion type</label>
            <select id="conversionSelect" name="conversion"><option value="tobaseten">Roman Numerals to Base Ten</option><option value="toromannumerals">Base Ten to Roman Numerals</option></select>
        </p>
        <p>
            <label for="inputBox">Type an amount and press submit.</label>
        </p>
        <p>
            <input id="inputBox" type="text" name="input">
            <button id="goButton" type="submit">Submit</button>
        </p>
    </form>
    <div id="result"></div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/public/javascripts/form.js"></script>
</body>
</html>
