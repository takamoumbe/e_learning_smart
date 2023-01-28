<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/* 
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);



/*
 * --------------------------------------------------------------------
 * START ROUTES DEFINITIONS
 * --------------------------------------------------------------------
 */
   
    # We get a performance increase by specifying the default
    # route since we don't have to scan directories.

    $routes->get('/', 'Home::index');

    $routes->get('Login', 'Home::login');

    
/*
 * --------------------------------------------------------------------
 * FORMATIONS
 * --------------------------------------------------------------------
 */
    
    $routes->group("formation", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "FormationControl::listAll",      ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "FormationControl::listOne/$1",   ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "FormationControl::delete_/$1",   ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "FormationControl::disable/$1",   ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "FormationControl::enable/$1",    ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "FormationControl::save",         ['filter' => 'authFilter']); 
        $routes->post("Update",                "FormationControl::update",       ['filter' => 'authFilter']);

    });

/*
 * --------------------------------------------------------------------
 * GROUPES
 * --------------------------------------------------------------------
 */

    $routes->group("groupes", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "GroupeControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "GroupeControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "GroupeControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "GroupeControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "GroupeControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "GroupeControl::save",           ['filter' => 'authFilter']); 
        $routes->post("Update",                "GroupeControl::update",         ['filter' => 'authFilter']);

    });

/*
 * --------------------------------------------------------------------
 * STAGIAIRE
 * --------------------------------------------------------------------
 */
    
    $routes->group("stagiaire", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "StagiaireControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "StagiaireControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "StagiaireControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "StagiaireControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "StagiaireControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Authen",                "AuthenControl.php::authen",                                  );
        $routes->post("Save",                  "StagiaireControl::save",                                     ); 
        $routes->post("Update",                "StagiaireControl::update",         ['filter' => 'authFilter']);

    });

/*
 * --------------------------------------------------------------------
 * FORMATEURS
 * --------------------------------------------------------------------
 */
    
    $routes->group("formateur", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "FormateurControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "FormateurControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "FormateurControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "FormateurControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "FormateurControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Authen",                "FormateurControl::authen",                                  );
        $routes->post("Save",                  "FormateurControl::save",           ['filter' => 'authFilter']); 
        $routes->post("Update",                "FormateurControl::update",         ['filter' => 'authFilter']);

    });
    

/*
 * --------------------------------------------------------------------
 * QUESTIONS
 * --------------------------------------------------------------------
 */

    $routes->group("question", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "QuestionControl::listAll",                                  );
        $routes->get("ListOne/(:any)",         "QuestionControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "QuestionControl::delete_/$1",     ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "QuestionControl::save",                                     ); 
        $routes->post("Response",              "QuestionControl::response",       ['filter' => 'authFilter']);

    });

/*
 * --------------------------------------------------------------------
 * SOUSCRIPTIONS
 * --------------------------------------------------------------------
 */
    $routes->group("souscription", function ($routes)  
    { 

        #@Routes get ---
        $routes->get("ListAll",                "SouscriptionControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "SouscriptionControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "SouscriptionControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "SouscriptionControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "SouscriptionControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "SouscriptionControl::save"                                     ); 

    });

/*
 * --------------------------------------------------------------------
 * POSTS
 * --------------------------------------------------------------------
 */
    $routes->group("post", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "PostControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "PostControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "PostControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "PostControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "PostControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "PostControl::save",           ['filter' => 'authFilter']); 
        $routes->post("Update",                "PostControl::update",         ['filter' => 'authFilter']);

    });

/*
 * --------------------------------------------------------------------
 * MESSAGES
 * --------------------------------------------------------------------
 */
    
    $routes->group("message", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "MessageControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "MessageControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "MessageControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "MessageControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "MessageControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "MessageControl::save",           ['filter' => 'authFilter']); 

    });

/*
 * --------------------------------------------------------------------
 * FORUMS
 * --------------------------------------------------------------------
 */

    $routes->group("forum", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "ForumControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "ForumControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "ForumControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "ForumControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "ForumControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "ForumControl::save",           ['filter' => 'authFilter']); 
        $routes->post("Update",                "ForumControl::update",         ['filter' => 'authFilter']);

    });


/*
 * --------------------------------------------------------------------
 * PUBLICATIONS
 * --------------------------------------------------------------------
 */
    
     $routes->group("publication", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "PublicationControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "PublicationControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "PublicationControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "PublicationControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "PublicationControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "PublicationControl::save",           ['filter' => 'authFilter']); 
        $routes->post("Update",                "PublicationControl::update",         ['filter' => 'authFilter']);

    });

/*
 * --------------------------------------------------------------------
 * COMMENTAIRES
 * --------------------------------------------------------------------
 */
    
     $routes->group("commentaire", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "CommentaireControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "CommentaireControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "CommentaireControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "CommentaireControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "CommentaireControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "CommentaireControl::save",           ['filter' => 'authFilter']); 

    });


/*
 * --------------------------------------------------------------------
 * PROJECT
 * --------------------------------------------------------------------
 */
    
     $routes->group("project", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "ProjectControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "ProjectControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "ProjectControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "ProjectControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "ProjectControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "ProjectControl::save",           ['filter' => 'authFilter']); 
        $routes->post("Update",                "ProjectControl::update",         ['filter' => 'authFilter']);

    });

/*
 * --------------------------------------------------------------------
 * FONCTIONNALITE
 * --------------------------------------------------------------------
 */

     $routes->group("fonctionalite", function ($routes) 
    {

        #@Routes get ---
        $routes->get("ListAll",                "FonctionaliteControl::listAll",        ['filter' => 'authFilter']);
        $routes->get("ListOne/(:any)",         "FonctionaliteControl::listOne/$1",     ['filter' => 'authFilter']); 
        $routes->get("delete_/(:any)",         "FonctionaliteControl::delete_/$1",     ['filter' => 'authFilter']);
        $routes->get("Disable/(:any)",         "FonctionaliteControl::disable/$1",     ['filter' => 'authFilter']);
        $routes->get("Enable/(:any)",          "FonctionaliteControl::enable/$1",      ['filter' => 'authFilter']);
        #@Routes post ---
        $routes->post("Save",                  "FonctionaliteControl::save",           ['filter' => 'authFilter']); 
        $routes->post("Update",                "FonctionaliteControl::update",         ['filter' => 'authFilter']);

    });

/*
 * --------------------------------------------------------------------
 * END ROUTES DEFINITIONS
 * --------------------------------------------------------------------
 */


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
