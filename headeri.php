<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
        body {
            color: white;
            padding: 20px;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        h1, h2, p {
            color: white;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-text {
            margin-left: 10px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap; 
        }

        li {
            margin-right: 15px;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: rgb(174, 98, 44);
        }

        @media only screen and (max-width: 768px) {
            ul {
                flex-direction: column; 
                text-align: center;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #333;
                display: none;
            }

            ul.show {
                display: flex;
            }

            li {
                margin: 0;
                width: 100%;
                text-align: center;
            }

            nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .logo-container {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo-container">
            <span class="logo-text"><a href="index.php">RESTAURANT VENECIA</a></span>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="online.php">Porosit Online</a></li>
            <li><a href="rezervo.php">Rezervo</a></li>
            <li><a href="kontakti.php">Kontakti</a></li>
            <?php
            if (isset($_SESSION['ID'])) {
                echo '<li><a href="#">Welcome ' . $_SESSION['name'] . '</a></li>';
                if ($_SESSION['isAdmin'] == 1) {
                    echo '<li onclick="openLink(\'MonitoroUsers.php\')"><a href="#">Users</a></li>';
                    echo '<li onclick="openLink(\'upload.php\')"><a href="#">Insert Products</a></li>';
                    echo '<li onclick="openLink(\'rezervimetDash.php\')"><a href="#">Rezervimet</a></li>';
                    echo '<li onclick="openLink(\'productDash.php\')"><a href="#">Menaxho Produktet</a></li>';
                    echo '<li onclick="openLink(\'mesazhet.php\')"><a href="#">Mesazhet</a></li>';
                }
                echo '<li onclick="openLink(\'LogOut.php\')"><a href="#">Log Out</a></li>';
            } else {
                echo '<li onclick="openLink(\'Login.php\')"><a href="#">Log In</a></li>';
            }
            ?>
        </ul>
        <i class="fas fa-bars" id="menu-icon"></i>
    </nav>

   

    <script>
        document.getElementById('menu-icon').addEventListener('click', function() {
            var navList = document.querySelector('ul');
            navList.classList.toggle('show');
        });

        function adjustMenuIcon() {
            var menuIcon = document.getElementById('menu-icon');
            var navList = document.querySelector('ul');

            if (window.innerWidth > 768) {
                menuIcon.style.display = 'none';
                navList.classList.remove('show');
            } else {
                menuIcon.style.display = 'block';
            }
        }

        window.addEventListener('resize', adjustMenuIcon);
        window.addEventListener('load', adjustMenuIcon);
        
        function openLink(link){
            window.open(link, "_self");
        }
    </script>