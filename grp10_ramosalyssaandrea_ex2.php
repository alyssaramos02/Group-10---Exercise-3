<?php
// Array to hold team member data
$team_members = [
    [
        "name" => "Alyssa Andrea C. Ramos",
        "role" => "LEADER",
        "image" => "ramos.png",
        "age" => 23,
        "skills" => "Basic Programming, HTML, CSS, Photo and Video Editing",
        "motto" => "Live everyday as if it was your last.",
        "github" => "https://github.com/alyssaramos02",
        "coursera" => "https://www.coursera.org/user/364687d7c6ca22d8c9086676a9842a1b",
        "linkedin" => "https://www.linkedin.com/in/alyssa-andrea-ramos-3a85b5189"
    ],
    [
        "name" => "John Wengelbert M. Malic",
        "role" => "MEMBER",
        "image" => "malic.png",
        "age" => 22,
        "skills" => "Basic HTML, Basic CSS, Basic c++, Basic MySql",
        "motto" => "Keep moving forward.",
        "github" => "https://github.com/John-Malic",
        "coursera" => "https://www.coursera.org/user/e61b8aea9f4aaba961b3072fd61dcb47",
        "linkedin" => "http://www.linkedin.com/in/john-wengelbert-malic-b346612b3"
    ],
    [
        "name" => "Lanieri M. Moleta",
        "role" => "MEMBER",
        "image" => "moleta.png",
        "age" => 21,
        "skills" => "Programming",
        "motto" => "Live life to the fullest.",
        "github" => "https://github.com/Lmoleta",
        "coursera" => "https://www.coursera.org/user/cf02d1f5ea9f2cfa2f490ef7c19a9df3",
        "linkedin" => "https://www.linkedin.com/in/lanieri-moleta-b4003a323/"
    ],
    [
        "name" => "Gilbert Gonzales",
        "role" => "MEMBER",
        "image" => "gonzales.png",
        "age" => 22,
        "skills" => "Programming",
        "motto" => "Don't study with a fear of failing, study with a hope of succeeding.",
        "github" => "https://github.com/Gonzales3",
        "coursera" => "https://www.coursera.org/user/c758302b40e308b5ae913ff2ffde8c27",
        "linkedin" => "https://www.linkedin.com/in/gil-gonz-156b191ab/"
    ],
    [
        "name" => "Jwelmar C. Lacno",
        "role" => "MEMBER",
        "image" => "lacno.png",
        "age" => 20,
        "skills" => "Programming",
        "motto" => "One by two and three for yung baby.",
        "github" => "https://github.com/Jmwelmarlacno",
        "coursera" => "https://www.coursera.org/account-profile",
        "linkedin" => "https://www.linkedin.com/in/jmwelmar-lacno-66a9b7322/"
    ],
    [
        "name" => "Jerlyjoyce C. Penaflor",
        "role" => "MEMBER",
        "image" => "penaflor.png",
        "age" => 21,
        "skills" => "Programming",
        "motto" => "If you can dream it, You can do it..",
        "github" => "https://github.com/Penaflor7",
        "coursera" => "https://www.coursera.org/account-profile",
        "linkedin" => "https://www.linkedin.com/in/jerlyjoyce-penaflor-5223b0323/"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Profile of Group 10</title>
    <style>
        body, ul {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif; 
            color: #fff;
        }

        body {
            background-color: #121212; 
        }

        header {
            background-color: #000;
            padding: 10px 0;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        h1 {
            font-size: 36px;
            text-transform: uppercase;
            margin-top: 150px;
            color: #ff7e5f; 
            letter-spacing: 2px;
        }

        hr {
            border: 1px solid #333;
            width: 50%;
        }

        .logo img {
            width: 150px; 
            height: auto; 
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .column {
            flex: 1;
            max-width: 35%; 
            margin: 16px;
            padding: 2px 10px;
            box-sizing: border-box;
        }

        .card { 
            background-color: #1c1c1c;
            border: 1px solid #333; 
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
            flex: 1;
            min-height: 450px; 
            align-items: stretch; 
        }

        .container {
            flex: 1;
            padding: 16px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%; 
        }

        .card:hover {
            transform: translateY(-10px);
        }

        @media screen and (max-width: 670px) { 
            .column { 
                max-width: 100%;
            } 
        }

        .button { 
            border: none; 
            padding: 10px 15px; 
            color: white; 
            background-color: #ff7e5f; 
            text-align: center; 
            cursor: pointer; 
            width: 100%; 
            margin-bottom: 10px; 
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        } 

        .button:hover { 
            background-color: #e76e51; 
        } 

        .profile-image-container {
            display: flex; 
            justify-content: center;
            align-items: center; 
            height: 200px;
        }

        .profile-image {
            width: 300px; 
            height: 300px; 
            object-fit: cover; 
        }

        footer {
            padding: 10px 0;
            width: 100%;
            background-color: #000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .nav-links a {
            color: black; 
            text-decoration: none; 
            font-weight: bold;
            transition: color 0.3s, text-decoration 0.3s; 
        }

        .nav-links a:hover {
            text-decoration: underline; 
            color: #ff7e5f; 
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto; /* Center horizontally */
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            max-width: 500px;
            position: relative; /* For positioning close button */
            top: 50%;
            transform: translateY(-50%); /* Center vertically */
            color: black;
            box-sizing: border-box; /* Ensure padding is included in width */
        }

        #modalName {
            color: #ff7e5f; /* Change the color to orange */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: red;
            text-decoration: none;
        }

        .search-bar {
            margin: 20px 0;
            text-align: center;
        }

        .search-bar input {
            padding: 10px;
            font-size: 16px;
            width: 80%;
            max-width: 500px;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <a href="new.php">
                <img src="g10.jpg" alt="Logo">
            </a>
        </div>
    </header>

    <main>
        <center>
            <h1>Team Profile</h1>
            <hr>

            <?php
            foreach ($team_members as $index => $member) {
                if ($index % 3 == 0) {
                    echo '<div class="row">';
                }

                echo '
                <div class="column">
                    <div class="card">
                        <div class="profile-image-container">
                            <img src="images/' . htmlspecialchars($member["image"]) . '" alt="' . htmlspecialchars($member["name"]) . '" class="profile-image">
                        </div>
                        <div class="container">
                            <h2>' . htmlspecialchars($member["name"]) . '</h2>
                            <p>' . htmlspecialchars($member["role"]) . '</p>
                            <button class="button" onclick=\'openModal(' . htmlspecialchars(json_encode($member, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT)) . ');\' >View More</button>
                        </div>
                    </div>
                </div>';

                if ($index % 3 == 2 || $index == count($team_members) - 1) {
                    echo '</div>';
                }
            }
            ?>
        </center>
    </main>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="profile-container">
                <center>
                    <h2 id="modalName"></h2>
                    <p><strong>Position:</strong> <span id="modalRole"></span></p>
                    <p><strong>Age:</strong> <span id="modalAge"></span></p>
                    <p><strong>Skills:</strong> <span id="modalSkills"></span></p>
                    <p><strong>Motto:</strong> <i><span id="modalMotto"></span></i></p>
                    <nav class="nav-links">
                        <a id="modalGithub" href="" target="_blank">GitHub</a> |
                        <a id="modalCoursera" href="" target="_blank">Coursera</a> |
                        <a id="modalLinkedin" href="" target="_blank">LinkedIn</a>
                    </nav>
                </center>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Team Profile</p>
    </footer>

    <script>
        // JavaScript to handle modal
        function openModal(member) {
            document.getElementById('modalName').innerText = member.name;
            document.getElementById('modalRole').innerText = member.role;
            document.getElementById('modalAge').innerText = member.age;
            document.getElementById('modalSkills').innerText = member.skills;
            document.getElementById('modalMotto').innerText = member.motto;
            document.getElementById('modalGithub').href = member.github;
            document.getElementById('modalCoursera').href = member.coursera;
            document.getElementById('modalLinkedin').href = member.linkedin;

            document.getElementById('myModal').style.display = 'block';
        }

        // Close modal functionality
        var modal = document.getElementById('myModal');
        var span = document.getElementsByClassName('close')[0];

        span.onclick = function() {
            modal.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>
</html>
