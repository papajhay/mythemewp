<?php
class AgenceMenuPage {
    const GROUP = 'agence_options';

    public static function register (){
        add_action('admin_menu', [self::class, 'addMenu']);//pour enregistrer le menu
        add_action('admin_init', [self::class, 'registerSettings']);//pour enregistrer les paramètres
    }

    public static function registerSettings (){
        register_setting(self:: GROUP, 'agence_horaire');
        // ça affiche le mot paramètres dans le gestion de l'agence
        add_settings_section('agence_options_section', 'Paramètres', function() {
              echo "Vous pouvez ici gérer les paramètres liés à l'agence immobilière ";
        }, self:: GROUP);
        add_settings_field("agence_options_horaire", "Horaires d'ouverture", function() {
              ?>
              <textarea name="agence_horaire"  cols="30" rows="10" style="width: 100%;"></textarea>
              <?php
      },self:: GROUP, 'agence_options_section');
       
    }

    public static function addMenu (){ 
        //add_options_page()=>fonction de rajouter d'une nouvelle entrée dans la partie de réglage (tableau de bord)
        add_options_page("Gestion de l'agence", 'Agence', "manage_options", self:: GROUP, [self::class, 'render']);
    }

    public static function render (){
        ?>
        <!--c'est le titre sur l'admin (tableau de bord)-->
        <h1>Gestion de l'agence</h1>
        <form action="options.php" method="post">
        <?php 
        //settings_fields()=>Affiche les champs nonce, action et option_page pour une page de paramètres-->
         settings_fields(self:: GROUP);
         //do_settings_sections()=> permet d'afficher les paramètres
         do_settings_sections(self:: GROUP);
         //submit_button()=>fonction qui affiche le bouton (Enregistrer les modifications dans letableau de bord)
         submit_button(); 
          ?>
        
        </form>

        <?php
    }
}