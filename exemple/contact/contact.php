<p style="font-size: 13px; margin-bottom:50px "> Take time to contact us,<br> we will be so glad to help you! </p>

<form action="database.php" method="post">
    <input name="usermail" type="email"><br>
    <input name="username" type="text"><br>
    <input name="subject" type="text" placeholder="Enter a subject, please!"><br>
    <textarea name="content" id="" cols="30" rows="10" placeholder="Enter a text, please!"></textarea>
    <br>
    <input type="submit">
</form>
<div class="restitution">
    <h1>
        <?php
            $dtcontact = $bdd->query('SELECT * FROM contact ');
            $data=$dtablecontact->fetch();
            print $data;
        ?>
    </h1>
</div>