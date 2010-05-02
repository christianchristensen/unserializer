<textarea cols="70" rows="30">
    <?php

    echo htmlentities(print_r(unserialize($_POST['unserialize_input']),1));

    ?>
</textarea>
<br />
<div><a href="http://www.unserializer.com">unserializer.com</a></div>
<br />
