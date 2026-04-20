<?php
// Désactive l'ajout automatique de <br> et <p> dans CF7
add_filter('wpcf7_autop_or_not', '__return_false');