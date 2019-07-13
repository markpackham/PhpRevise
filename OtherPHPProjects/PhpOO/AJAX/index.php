<!DOCTYPE html>
<html>
<head>
    <title>Search User</title>
    <link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.min.css">
    <script src="showSuggestion.js">
    </script>
</head>
<body>
<div class="container">
    <h1>Search Users</h1>
    <form>
        Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
</div>
</body>
</html>