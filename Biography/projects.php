<!DOCTYPE html>
<html>
    <head>
        <?php

            $pageTitle = "Projects | My Portfolio";
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

            $pageHeader = "Featured Group Projects";
            echo "<center><h1>" . $pageHeader . "</h1></center>";
        ?>

        <marquee behavior="scroll" direction="left" scrollamount="10">
            <img src="Image/haven.jpg" alt="Portfolio Image"
                 width="150" height="250">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <img src="Image/garbo.jpg" alt="Portfolio Image"
                 width="400" height="250">
        </marquee>

        <?php

            $pageHeader = "School Projects:";
            echo "<h3>" . $pageHeader . "</h3>";
        ?>

        <p>
            <ol>
                <li>
                    Haven(java project) - is a smart, community-driven emergency response system designed to connect citizens, responders, and government units through one unified platform. It empowers users to report emergencies instantly with a single tap and enables responders to track, coordinate, and act efficiently using live data and intelligent mapping.

                    <p>
                        <b>Key Features:</b>
                    </p>

                    <ul>
                        <li>
                            One-Tap Emergency Button — no need to speak or explain.
                        </li>

                        <li>
                            Real-Time GPS Tracking — accurate location and live updates.
                        </li>

                        <li>
                            Unified Multi-Agency Dashboard — police, fire, and medical coordination.
                        </li>

                        <li>
                            AI-Powered Response Optimization — calculates shortest response routes.
                        </li>

                        <li>
                            Heatmap Visualization — shows emergency magnitude by area density.
                        </li>

                        <li>
                            Secure User Accounts — stores essential info for faster identification.
                        </li>

                        <li>
                            Data Analytics Dashboard — tracks patterns for future disaster planning.
                        </li>

                        <li>
                            Push Alerts & Notifications — for disasters, safety tips, and local advisories.
                        </li>
                    </ul>
                </li>

                <br><br>

                <li>
                    Garbo(c++ project) - is a smart, community-driven waste management system designed to solve inconsistent garbage collection routes and eliminate unserviced trash areas. The platform connects residents with waste collectors to optimize community disposal. It ensures a cleaner environment by deploying collection alerts and strategically placing waste collectors for maximum efficiency.

                    <p>
                        <b>Key Features:</b>
                    </p>

                    <ul>
                        <li>
                            listing of all trash disposal locations with statuses
                        </li>

                        <li>
                            assigning teams to empty disposal locations.
                        </li>

                        <li>
                            Manual alteration of location status.
                        </li>

                        <li>
                            Fully-navigable using number keys and Escape button (no need for input).
                        </li>
                    </ul>
                </li>
            </ol>
        </p>

        <?php

            $pageHeader = "Personal Projects:";
            echo "<h3>" . $pageHeader . "</h3>";
        ?>

        <p>
            <ul>
                <li>
                    Delivery System (Figma High-Fidelity Prototype) - is a smart, community-driven delivery system designed to connect customers, delivery personnel, and businesses through one unified platform. It empowers users to order products instantly with a single tap and enables delivery personnel to track, coordinate, and act efficiently using real time tracking of couriers and delivery riders.
                </li>
            </ul>
        </p>

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