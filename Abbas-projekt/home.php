    <div class="content"> <!-- Div för sticky footer -->
        <section class ="main-section">
            <h1 id="main-title">Abbas Hodroj</h1>
            <h2 id="second-title">Front End Developer</h2>
            <img id="mountain" src="img/berg.jpg" alt="banner">
            <p>Som Frontend-utvecklare arbetar man med det som syns på en webbplats. Det gäller att skapa så logiska och effektiva koder för att göra sidorna enkla, lättlästa, snabbladdade och användarvänliga som möjligt. Sidorna ska kunna fungera lika bra oavsett om man använder en webbläsare, smartphone eller surfplatta. I nu läget studerar jag till detta på KYH Yrkeshögskola på Odenplan. Här nedan kan du se hur lång tid jag har kvar till min LIA samt examen. LIA betyder lärande i arbete och innebär att en del av utbildningen är förlagd ute på en arbetsplats.</p>
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

    <?php include('footer.php'); ?>

    <script src="js/countdown.js"></script>

</body>
</html>