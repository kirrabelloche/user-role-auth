<?php

return [
    /*
     * Afficher ou non le sélecteur de langue, ou simplement par défaut la valeur par défaut
     * paramètres régionaux spécifiés dans le fichier de configuration de l'application
     *
     * @var bool
     */
    'status' => true,

    /*
      * Langues disponibles
     *
     * Ajoutez votre code de langue à ce tableau.
     * Le code doit avoir le même nom que le dossier de langue.
     * Assurez-vous d'ajouter la nouvelle langue dans un ordre alphabétique.
     *
     * Le sélecteur de langue ne sera pas disponible s'il n'y a qu'une seule option de langue
     * La mise en commentaire des langues les rendra inaccessibles à l'utilisateur
     *
     * tableau @var
     */
    'languages' => [
        /*
         * La clé est le code régional Laravel
         * L'index 0 du sous-tableau est le code de paramètres régionaux Carbon
         * L'index 1 du sous-tableau est le code de paramètres régionaux PHP pour setlocale ()
         * L'index 2 du sous-tableau indique s'il faut ou non utiliser la direction html RTL (de droite à gauche) pour cette langue
         */
        'ar' => ['ar', 'ar_AR', true],
        'az' => ['az', 'az-AZ', false],
        'zh' => ['zh', 'zh-CN', false],
        'zh-TW' => ['zh-TW', 'zh-TW', false],
        'da' => ['da', 'da_DK', false],
        'de' => ['de', 'de_DE', false],
        'el' => ['el', 'el_GR', false],
        'en' => ['en', 'en_US', false],
        'es' => ['es', 'es_ES', false],
        'fa' => ['fa', 'fa_IR', true],
        'fr' => ['fr', 'fr_FR', false],
        'he' => ['he', 'he_IL', true],
        'id' => ['id', 'id_ID', false],
        'it' => ['it', 'it_IT', false],
        'ja' => ['ja', 'ja-JP', false],
        'nl' => ['nl', 'nl_NL', false],
        'no' => ['no', 'no_NO', false],
        'pt_BR' => ['pt_BR', 'pt_BR', false],
        'ru' => ['ru', 'ru-RU', false],
        'sv' => ['sv', 'sv_SE', false],
        'th' => ['th', 'th_TH', false],
        'tr' => ['tr', 'tr_TR', false],
        'uk' => ['uk', 'uk-UA', false],
    ],
];
