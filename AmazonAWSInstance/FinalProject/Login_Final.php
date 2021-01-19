<!--
    Name: Ryan Christopher
    Pawprint: rdcb2f
    Date: December 11, 2020
    Challenge: Final Project

    Type: HTML
    File: Log In
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Final Project Log In rdcb2f</title>

        <link rel="stylesheet" type="text/css" href="CSS_Final.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
        <script src="Script_Final.js"></script>
        <script>
            $(function(){
                $("#includedContent").load("Menu_Final.html");
            });

            $(function(){
                $("#loginFormDiv").draggable();
            })
        </script>
    </head>

    <body>
        <div id="includedContent"></div>

        <h1 id="loginPageTitle" class="pageTitle">Log In</h1>

        <div id="loginContainerDiv">
            <h3 class="loginLogSign">Logged In</h3>
            <button type="button" id="logoutButton" class="loginLogSign" onclick="logOut()">Log Out</button>

            <h1 class="pageTitle">Complete Roster</h1>

            <div id="loginWrapperDiv" class="clear">
                <div class="loginColumns">
                    <p class="loginRoster">Adam Kerwood</p>
                    <p class="loginRoster">Adam Dintelman</p>
                    <p class="loginRoster">Aidan Matlock</p>
                    <p class="loginRoster">AJ Fisher</p>
                    <p class="loginRoster">Alex Gardner</p>
                    <p class="loginRoster">Alex Motsinger</p>
                    <p class="loginRoster">Alex Reed</p>
                    <p class="loginRoster">Andrew Pogue</p>
                    <p class="loginRoster">Andrew Schlager</p>
                    <p class="loginRoster">August Windau</p>
                    <p class="loginRoster">Austin Cleveland</p>
                    <p class="loginRoster">Ben McDonough</p>
                    <p class="loginRoster">Ben McDonald</p>
                    <p class="loginRoster">Blake Horner</p>
                    <p class="loginRoster">Blake Wigen</p>
                    <p class="loginRoster">Bobby Orr</p>
                    <p class="loginRoster">Brandon Taylor</p>
                    <p class="loginRoster">Brendan Maloney</p>
                    <p class="loginRoster">Brian Jorgensen</p>
                    <p class="loginRoster">Bryan Prichard</p>
                    <p class="loginRoster">Bryan Wang</p>
                    <p class="loginRoster">Bryce Pinsel</p>
                    <p class="loginRoster">Caleb Biggs</p>
                    <p class="loginRoster">Carter Kane</p>
                    <p class="loginRoster">Carter Starnes</p>
                    <p class="loginRoster">Chandler Benkendorf</p>
                    <p class="loginRoster">Charlie Meier</p>
                    <p class="loginRoster">Chase Cline</p>
                    <p class="loginRoster">Chris Bonderer</p>
                    <p class="loginRoster">Clay Compere</p>
                    <p class="loginRoster">Clifton Wilkerson</p>
                    <p class="loginRoster">Cody Wilfong</p>
                    <p class="loginRoster">Cole Griffeth</p>
                    <p class="loginRoster">Cole Halcomb</p>
                    <p class="loginRoster">Conner Sibley</p>
                    <p class="loginRoster">Connor Lyford</p>
                    <p class="loginRoster">Connor Mootz</p>
                    <p class="loginRoster">Conor Riggs</p>
                    <p class="loginRoster">Cooper Croley</p>
                    <p class="loginRoster">Daniel Buffum</p>
                    <p class="loginRoster">Drew Mings</p>
                </div>
                <div class="loginColumns">
                    <p class="loginRoster">Eric O'Donnell</p>
                    <p class="loginRoster">Evan Fay</p>
                    <p class="loginRoster">Garrett Johnson</p>
                    <p class="loginRoster">Gavin Cork</p>
                    <p class="loginRoster">Grant Bertucci</p>
                    <p class="loginRoster">Grant Cutting</p>
                    <p class="loginRoster">Grayson Burns</p>
                    <p class="loginRoster">Grayson Knight</p>
                    <p class="loginRoster">Gunner Noble</p>
                    <p class="loginRoster">Hunter Bickel</p>
                    <p class="loginRoster">Jack Faris</p>
                    <p class="loginRoster">Jack Garagnani</p>
                    <p class="loginRoster">Jack Gieseking</p>
                    <p class="loginRoster">Jack Graham</p>
                    <p class="loginRoster">Jack Kavanaugh</p>
                    <p class="loginRoster">Jack Underwood</p>
                    <p class="loginRoster">Jack Vuagniaux</p>
                    <p class="loginRoster">Jack Wruck</p>
                    <p class="loginRoster">Jackson Graham</p>
                    <p class="loginRoster">Jackson Gysbers</p>
                    <p class="loginRoster">Jackson Holiman</p>
                    <p class="loginRoster">Jackson Klump</p>
                    <p class="loginRoster">Jackson Meier</p>
                    <p class="loginRoster">Jackson Meyer</p>
                    <p class="loginRoster">Jackson Phan</p>
                    <p class="loginRoster">James Alspaw</p>
                    <p class="loginRoster">Jason Myer</p>
                    <p class="loginRoster">Jimmy Harvey</p>
                    <p class="loginRoster">Jonathan LaHue</p>
                    <p class="loginRoster">Joseph Granat</p>
                    <p class="loginRoster">Joseph Lavin</p>
                    <p class="loginRoster">Joseph Ragusa</p>
                    <p class="loginRoster">Josh Tagtmeyer</p>
                    <p class="loginRoster">Justin Smith</p>
                    <p class="loginRoster">Kavion Tajkarimi</p>
                    <p class="loginRoster">Keegan Ruckman</p>
                    <p class="loginRoster">Kirk Brewster</p>
                    <p class="loginRoster">Layne Konneman</p>
                    <p class="loginRoster">Luke Bomkamp</p>
                    <p class="loginRoster">Luke Bouchard</p>
                    <p class="loginRoster">Luke Mendralla</p>
                </div>
                <div class="loginColumns">
                    <p class="loginRoster">Luke Severt</p>
                    <p class="loginRoster">Mac Coles</p>
                    <p class="loginRoster">Mark Diekroeger</p>
                    <p class="loginRoster">Mason Naskowiak</p>
                    <p class="loginRoster">Matthew Boyer</p>
                    <p class="loginRoster">Matthew Deay</p>
                    <p class="loginRoster">Matthew Herr</p>
                    <p class="loginRoster">Max Pantaenius</p>
                    <p class="loginRoster">Micah Anderson</p>
                    <p class="loginRoster">Michael Fine</p>
                    <p class="loginRoster">Mitch Ellebrecht</p>
                    <p class="loginRoster">Nate Marcus</p>
                    <p class="loginRoster">Nicholas Yost</p>
                    <p class="loginRoster">Nick Bonadonna</p>
                    <p class="loginRoster">Noah Duckworth</p>
                    <p class="loginRoster">Paul Atkins</p>
                    <p class="loginRoster">Peter Hempstead</p>
                    <p class="loginRoster">Peyton Story</p>
                    <p class="loginRoster">Quintin Liddle</p>
                    <p class="loginRoster">Ray Wood</p>
                    <p class="loginRoster">Reed Kousoulas</p>
                    <p class="loginRoster">Reid Glenn</p>
                    <p class="loginRoster">Riley Matheny</p>
                    <p class="loginRoster">Robert Perlis</p>
                    <p class="loginRoster">Rob Norman</p>
                    <p class="loginRoster">Rocco Monachino</p>
                    <p class="loginRoster">Ryan Christopher</p>
                    <p class="loginRoster">Ryan Douglass</p>
                    <p class="loginRoster">Ryan Payne</p>
                    <p class="loginRoster">Sam Westhoven</p>
                    <p class="loginRoster">Sean Riggs</p>
                    <p class="loginRoster">Sebastian Mayoral</p>
                    <p class="loginRoster">Steven Guo</p>
                    <p class="loginRoster">Timmy Nguyen</p>
                    <p class="loginRoster">Thomas Mengasteab</p>
                    <p class="loginRoster">Thomas Spence</p>
                    <p class="loginRoster">Tyler Maddock</p>
                    <p class="loginRoster">Ward Reynolds</p>
                    <p class="loginRoster">William Mihm</p>
                    <p class="loginRoster">William Morris</p>
                    <p class="loginRoster">William Travis</p>
                </div>
            </div>
        </div>

        <div id="loginFormDiv">
                <div class="loginInfoDiv">
                    <label for="username">User Name:</label>
                    <input type="text" id="username" name="username" class="loginInput" autofocus>
                </div>

                <div class="loginInfoDiv">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="loginInput">
                </div>

                <div class="loginInfoDiv">
                    <!-- <input type="submit" value="Submit" class="loginSubmit"> -->
                    <button type="button" class="loginSubmit" onclick="loginCheck()">Submit</button>
                </div>

                <div class="loginInfoDiv">
                    <button type="button" class="loginSubmit" onclick="clearContents()">Clear</button>
                </div>
        </div>

        <div id="emailDiv">
            <h4 id="emailTitle">Provide Email</h4>

            <form action="loginMail_Final.php" method="POST">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">

                <input type="submit" value="Submit" class="loginEmailSubmit">
            </form>
        </div>

    </body>
</html>