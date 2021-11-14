<h3>Kérem írjon hozzászólást</h2>

    <form action="<?= SITE_ROOT ?>hozzaszol" method="post">
    <br>
        <fieldset>
<br>
            <legend>Hozzászólás</legend>

            <br>

            <input type="textarea" name="szoveg" width: "350px" placeholder="Kérem írja be a hozzászólását" required><br><br>

            

            <input type="submit" name="kuld" value="Hozzaszolas">

            <br>&nbsp;

        </fieldset>

    </form>
    <h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>