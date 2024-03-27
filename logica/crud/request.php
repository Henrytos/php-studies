<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "post request <br>";
} else {
    echo "get request <br>";
}

if (isset($_POST['submit'])) {
    echo "submit button _post<br>";
    print_r($_POST['submit']);
}
?>