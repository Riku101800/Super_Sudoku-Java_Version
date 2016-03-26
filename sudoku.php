<?php
    require 'lib/game.inc.php';
?>


<!DOCTYPE HTML>
<html>


<head>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
    <meta charset="utf-8">
    <title>Play | Super Sudoku</title>
</head>


<body>
    <header>
        <img src="images/SuperSudokuBanner.png" width="600" height="175" alt="Super Sudoku Banner"/>
    </header>

    <div class="container">
        <nav>
            <ul>
                <li><button id="giveUp">Give Up</button></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>

        <h1 id="header-text"><?php echo $_SESSION['userName']; ?>'s Puzzle</h1>


        <div class="content">
        <?php if(isset($_SESSION['cheatMode']) && $_SESSION['cheatMode'] == true) { ?>
            <input id="cheatMode" type="hidden" value="true">
        <?php }
        else { ?>
            <input id="cheatMode" type="hidden" value="false">
        <?php } ?>
            <!-- Puzzle -->
            <table class='normal'>
                <tr>
                    <td id="0-0"></td>
                    <td id="0-1"></td>
                    <td id="0-2"></td>
                    <td id="0-3"></td>
                    <td id="0-4"></td>
                    <td id="0-5"></td>
                    <td id="0-6"></td>
                    <td id="0-7"></td>
                    <td id="0-8"></td>
                </tr>

                <tr>
                    <td id="1-0"></td>
                    <td id="1-1"></td>
                    <td id="1-2"></td>
                    <td id="1-3"></td>
                    <td id="1-4"></td>
                    <td id="1-5"></td>
                    <td id="1-6"></td>
                    <td id="1-7"></td>
                    <td id="1-8"></td>
                </tr>

                <tr>
                    <td id="2-0"></td>
                    <td id="2-1"></td>
                    <td id="2-2"></td>
                    <td id="2-3"></td>
                    <td id="2-4"></td>
                    <td id="2-5"></td>
                    <td id="2-6"></td>
                    <td id="2-7"></td>
                    <td id="2-8"></td>
                </tr>

                <tr>
                    <td id="3-0"></td>
                    <td id="3-1"></td>
                    <td id="3-2"></td>
                    <td id="3-3"></td>
                    <td id="3-4"></td>
                    <td id="3-5"></td>
                    <td id="3-6"></td>
                    <td id="3-7"></td>
                    <td id="3-8"></td>
                </tr>

                <tr>
                    <td id="4-0"></td>
                    <td id="4-1"></td>
                    <td id="4-2"></td>
                    <td id="4-3"></td>
                    <td id="4-4"></td>
                    <td id="4-5"></td>
                    <td id="4-6"></td>
                    <td id="4-7"></td>
                    <td id="4-8"></td>
                </tr>

                <tr>
                    <td id="5-0"></td>
                    <td id="5-1"></td>
                    <td id="5-2"></td>
                    <td id="5-3"></td>
                    <td id="5-4"></td>
                    <td id="5-5"></td>
                    <td id="5-6"></td>
                    <td id="5-7"></td>
                    <td id="5-8"></td>
                </tr>

                <tr>
                    <td id="6-0"></td>
                    <td id="6-1"></td>
                    <td id="6-2"></td>
                    <td id="6-3"></td>
                    <td id="6-4"></td>
                    <td id="6-5"></td>
                    <td id="6-6"></td>
                    <td id="6-7"></td>
                    <td id="6-8"></td>
                </tr>

                <tr>
                    <td id="7-0"></td>
                    <td id="7-1"></td>
                    <td id="7-2"></td>
                    <td id="7-3"></td>
                    <td id="7-4"></td>
                    <td id="7-5"></td>
                    <td id="7-6"></td>
                    <td id="7-7"></td>
                    <td id="7-8"></td>
                </tr>

                <tr>
                    <td id="8-0"></td>
                    <td id="8-1"></td>
                    <td id="8-2"></td>
                    <td id="8-3"></td>
                    <td id="8-4"></td>
                    <td id="8-5"></td>
                    <td id="8-6"></td>
                    <td id="8-7"></td>
                    <td id="8-8"></td>
                </tr>
            </table>
        </div>
    </div>


    <!-- Pop-up form -->
    <div id="popupBody">

    <div id="popupBox">
        <div id="popupContent">
            <h2>Cell Options:</h2>

            <!-- Empty the cell -->
            <form method="post">
                <img id="close" src="images/close-button.png" width="33" height="33" alt="Close button"/>

                <p>
                    <label for="empty">Set the cell to empty?</label>
                </p>

                <p>
                    <input type="button" name="empty" id="empty" value="Empty Cell"/>
                </p>
            </form>
            <br/>

            <!-- Put an answer in the cell -->
            <form method="post">
                <p>
                    <label for="cellAnswer">Put an answer in the cell (1-9):</label>
                    <input type="number" name="cellAnswer" id="cellAnswer" min="1" max="9"/>
                </p>

                <p>
                    <input id="answer" type="button" value="Submit Answer"/>
                </p>
            </form>
            <br/>

            <!-- Put clues in the cell -->
            <form id="notes" method="post">
                <p>
                    <label>Select which clues to put in the cell:</label>
                    <br/><br/>

                    <input type="checkbox" name="checkbox1" id="checkbox1" value="1"/>
                    <label for="checkbox1">1</label>

                    <input type="checkbox" name="checkbox2" id="checkbox2" value="2"/>
                    <label for="checkbox2">2</label>

                    <input type="checkbox" name="checkbox3" id="checkbox3" value="3"/>
                    <label for="checkbox3">3</label>
                    <br/><br/>

                    <input type="checkbox" name="checkbox4" id="checkbox4" value="4"/>
                    <label for="checkbox4">4</label>

                    <input type="checkbox" name="checkbox5" id="checkbox5" value="5"/>
                    <label for="checkbox5">5</label>

                    <input type="checkbox" name="checkbox6" id="checkbox6" value="6"/>
                    <label for="checkbox6">6</label>
                    <br/><br/>

                    <input type="checkbox" name="checkbox7" id="checkbox7" value="7"/>
                    <label for="checkbox7">7</label>

                    <input type="checkbox" name="checkbox8" id="checkbox8" value="8"/>
                    <label for="checkbox8">8</label>

                    <input type="checkbox" name="checkbox9" id="checkbox9" value="9"/>
                    <label for="checkbox9">9</label>
                </p>

                <p>
                    <input id="clues" type="button" value="Submit Clue(s)"/>
                </p>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
