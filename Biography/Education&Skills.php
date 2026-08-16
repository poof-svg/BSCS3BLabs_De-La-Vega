<html>
    <head>
        <?php

            $pageTitle = "Education & Skills | My Portfolio";
            echo "<title>" . $pageTitle . "</title>";
        ?>
    </head>

    <body>

        <table border="0" width="100%">
            <tr>

                <td align="left">
                    <em>Phloem</em>
                </td>

                <td align="right">
                    <a href="home.php">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="Education&Skills.php">Skills</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="projects.php">Projects</a>
                </td>

            </tr>
        </table>

        <hr>

        <?php

            $pageHeader = "EDUCATION & SKILLS";
            echo "<h1>" . $pageHeader . "</h1>";

            $pageHeader = "EDUCATION";
            echo "<h3>" . $pageHeader . "</h3>";
        ?>

        <img src="Image/USLS_Logo.png" alt="Portfolio Image"
             width="200" height="250">

        <p>
            Bachelor of Science in Computer Science (BSCS) &nbsp;&nbsp;&nbsp;&nbsp;
            <b>2024 - present</b>
        </p>

        <img src="Image/UNO-R_logo.png" alt="Portfolio Image"
             width="200" height="250">

        <p>
            Science, Technology, Engineering, and Mathematics (STEM) Strand
            &nbsp;&nbsp;&nbsp;&nbsp; <b>2022 - 2024</b>
        </p>

        <br><br><br>

        <?php

            $pageHeader = "SKILLS";
            echo "<h3>" . $pageHeader . "</h3>";
        ?>

        <ul>
            <li>
                <b>Programming Languages:</b> Java, C++, Python, HTML, CSS, JavaScript
            </li>

            <li>
                <b>Web Development:</b> Front-end & Back-end development
            </li>

            <li>
                <b>Version Control:</b> Git, GitHub, Unity Version Control
            </li>

            <li>
                <b>Design:</b> Figma, Graphic Design
            </li>
        </ul>

        <br><br><br>

        <hr>

        <p align="center">
            <font size="4">
                <strong>Connect with Me</strong>
            </font>
        </p>

        <p align="center">
            <a href="https://www.facebook.com/phemphloem" target="_blank">
                Facebook
            </a>
            |

            <a href="https://github.com/poof-svg" target="_blank">
                GitHub
            </a>
            |

            <a href="mailto:s2402145@usls.edu.ph">
                Email
            </a>
        </p>

        <p align="center">
            <font size="2">
                &copy; 2026 Phloem. All rights reserved.
            </font>
        </p>

    </body>
</html>