<?php
$routes = array(
    // Main
    'IndexMain' => array('nom' => 'IndexMain','header'=> 'HeaderMain' , 'footer' => 'Footer', 'controleur' => null,'model' => 'ModelMain', 'vue' => 'IndexMain', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),
    'Vehicule' => array('nom' => 'Vehicule','header'=> 'HeaderMain' , 'footer' => 'Footer', 'controleur' => null,'model' => 'Vehicule', 'vue' => 'VehiculeView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),
    'Contact' => array('nom' => 'Contact','header'=> 'HeaderMain' , 'footer' => 'Footer', 'controleur' => null,'model' => '', 'vue' => 'ContactView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),
    // Pour se connecter
    'NewAccount' => array('nom' => 'NewAccount','header'=> 'HeaderMain' , 'footer' => 'Footer', 'controleur' => null,'model' => 'NewAccount', 'vue' => 'NewAccountView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),
    'Login' => array('nom' => 'Login','header'=> 'HeaderMain' , 'footer' => 'Footer', 'controleur' => null,'model' => 'Login', 'vue' => 'LoginView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),
    'Logout'=> array('nom' => 'Logout' ,'header'=> null,'controleur'=> null, 'model' => 'Logout', 'vue' => null, 'js' => null,'bdd' => 'BDD' , 'visible' => true, 'active' => true),
    //
    'CIndex' => array('nom' => 'CIndex','header'=> 'HeaderClient' , 'footer' => 'Footer', 'controleur' => null,'model' => 'CIndex', 'vue' => 'CIndexView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),
    'CReservation' => array('nom' => 'CReservation','header'=> 'HeaderClient' , 'footer' => 'Footer', 'controleur' => null,'model' => 'CReservation', 'vue' => 'CReservationView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),


    'AIndex' => array('nom' => 'AIndex','header'=> 'HeaderAdmin' , 'footer' => 'Footer', 'controleur' => null,'model' => 'AIndex', 'vue' => 'AIndexView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),
    'ANewVehicule' => array('nom' => 'ANewVehicule','header'=> 'HeaderAdmin' , 'footer' => 'Footer', 'controleur' => null,'model' => 'ANewVehicule', 'vue' => 'ANewVehiculeView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),
    'AModifVehicule' => array('nom' => 'AModifVehicule','header'=> 'HeaderAdmin' , 'footer' => 'Footer', 'controleur' => null,'model' => 'AModifVehicule', 'vue' => 'AModifVehiculeView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),
    'AClientele' => array('nom' => 'AClientele','header'=> 'HeaderAdmin' , 'footer' => 'Footer', 'controleur' => null,'model' => 'AClientele', 'vue' => 'AClienteleView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),
    'AModifClient' => array('nom' => 'AModifClient','header'=> 'HeaderAdmin' , 'footer' => 'Footer', 'controleur' => null,'model' => 'AModifClient', 'vue' => 'AModifClientView', 'js' => '','bdd' => 'BDD', 'visible' => true, 'active' => true),

);
?>
