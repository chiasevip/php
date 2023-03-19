<form method="post">
    <textarea id="content" name="content"></textarea>
    <input type="submit" value="Save">
</form>
<div id="printable"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
function uploadContent() {
    if (content !== textarea.value) {
        var temp = textarea.value;
        var request = new XMLHttpRequest();

        request.open("POST", "https://chiasevip.github.io/notepad.php", true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
        request.onload = function () {
            if (request.readyState === 4) {
                content = temp;
                setTimeout(uploadContent, 1000);
            }
        };
        request.onerror = function () {
            setTimeout(uploadContent, 1000);
        };
        request.send("text=" + encodeURIComponent(temp));
        printable.removeChild(printable.firstChild);
        printable.appendChild(document.createTextNode(temp));
    } else {
        setTimeout(uploadContent, 1000);
    }
}

var textarea = document.getElementById("content");
var printable = document.getElementById("printable");
var content = textarea.value;
printable.appendChild(document.createTextNode(content));
textarea.focus();
uploadContent();
</script>
