<?php 
    include('connect.php');
?>

    <div class="content"> <!-- Div för sticky footer -->
        <section class ="main-section">
            <h1 id="main-title">Abbas Hodroj</h1>
            <h2 id="second-title">Front End Developer</h2>
            <img id="mountain" src="img/berg.jpg" alt="banner">
            <?php 
                $query = "SELECT * FROM home";
                $pages_result = mysqli_query($conn, $query);

                while($page = mysqli_fetch_assoc($pages_result)){
                    echo '
                    <p>'.$page['page_content'].'</p>
                    ';
                }

            ?>  
            <div id="main-countdown">
                <h2 class="title-lia-graduation">Tid kvar till LIA</h2>
                <div id="countdown">
                    <table id="on-lia" cellspacing="4" cellpadding="0" border="0" align="center">
                    <!-- The cellspacing attribute specifies the space, in pixels, between cells.
                    The cellpadding attribute specifies the space, in pixels, between the cell wall and the cell content.
                    border = "0" för att ta bort linjerna (The border attribute specifies if a border should be displayed around the table cells or not.) info från w3schools -->
                        <tr>
                            <td class="numbers" id="dday"></td>       
                            <td class="title-countdown">Dagar</td>
                            <td class="numbers" id="dhour"></td>
                            <td class="title-countdown">Timmar</td>
                            <!--<td class="numbers" id="dmin"></td>
                            <td class="title-countdown">Minutes</td>
                            <td class="numbers" id="dsec"></td>
                            <td class="title-countdown">Seconds</td>-->
                        </tr>
                    </table>
                </div>

                <img id="profile-photo" src="img/abbas.jpg" alt="Photo of Abbas">

                <h2 class="title-lia-graduation">Tid kvar till Examen</h2>
                <div id="countdown">
                    <table id="graduated" cellspacing="4" cellpadding="0" border="0" align="center">
                        <tr>
                            <td class="numbers" id="dday2"></td>       
                            <td class="title-countdown">Dagar</td>
                            <td class="numbers" id="dhour2"></td>
                            <td class="title-countdown">Timmar</td>
                            <!--<td class="numbers" id="dmin2"></td>
                            <td class="title-countdown">Minutes</td>
                            <td class="numbers" id="dsec2"></td>
                            <td class="title-countdown">Seconds</td>-->
                        </tr>
                    </table>
                </div> <!--######## div countdown ########-->
            </div> <!--######## div main-countdown ########-->
        </section>
    </div> <!--######## div content ########-->

    <script src="js/countdown.js"></script>
    <script src="js/easteregg.js"></script>
