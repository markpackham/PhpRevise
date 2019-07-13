//str is what we have typed in the form
function showSuggestion(str) {
    if (str.length == 0) {
        document.getElementById('output').innerHTML = '';
    } else {
        // AJAX Request
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            //https://www.w3schools.com/xml/ajax_xmlhttprequest_response.asp readyState 4: request finished and response is ready
            //status 200 for http means all is ok
            if (this.readyState == 4 && this.status == 200) {
                //output is the span tag where our work shows up
                document.getElementById('output').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "suggest.php?q=" + str, true);
        xmlhttp.send();
    }
}