<?php

  echo 'Merci ' . $_POST['user_firstname'] . " " . $_POST['user_lastname'] . ' de nous avoir contacté à propos de ' . $_POST['user_language'] . '. Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_phone_number'] . ' dans les plus brefs délais pour traiter votre demande : <br>' . $_POST['user_message'];

  ?>