<!-- Update your HTML file -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags, title, stylesheets, etc. -->
</head>

<body>

    <!-- Header, navigation, main content, popup form, etc. -->

    <script>
        // Function to create a new program asynchronously
        function createProgram() {
            var newProgram = document.getElementById('newProgram').value.trim();
            if (newProgram !== "") {
                // AJAX request
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "backend.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert(xhr.responseText);
                        closePopup();
                    }
                };
                xhr.send("action=createProgram&newProgram=" + newProgram);
            } else {
                alert('Please enter a program name.');
            }
        }

        // Function to delete a program asynchronously
        function deleteProgram() {
            var selectedProgram = document.getElementById('programSelect').value;
            // AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "backend.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert(xhr.responseText);
                    closePopup();
                }
            };
            xhr.send("action=deleteProgram&selectedProgram=" + selectedProgram);
        }
    </script>

</body>

</html>
