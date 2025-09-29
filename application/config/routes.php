<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller']         = 'Home';
$route['404_override']                 = '';
$route['translate_uri_dashes']         = FALSE;

$route['accueil']                 = 'home';
$route['inscription']                 = 'home/register';
$route['inscription/:any']             = 'home/register/$1';
$route['connexion']                 = 'home/login';
$route['deconnexion']                 = 'actions/logout';
$route['mot-de-passe-oublie']         = 'home/passwordForgot';

$route['mentions-legales']                        = 'home/page/mentions-legales';
$route['politique-de-confidentialite']            = 'home/page/politique-de-confidentialite';
$route['conditions-generales-utilisation']        = 'home/page/conditions-utilisation';
$route['conditions-generales-de-vente']            = 'home/page/conditions-generales-de-vente';
$route['politique-de-gestion-des-cookies']            = 'home/page/politique-de-gestion-des-cookies';
$route['foire-aux-questions'] = 'Home/faq';

$route['mise-en-route-gratuite'] = 'Home/merFree';
$route['mise-en-route-premium'] = 'Home/merPremium';

$route['mon-profil']         = 'account';
$route['parametres']        = 'account';
$route['quota-max-annonces-atteint']        = 'annonces/quotaMax';

$route['user/updateProfile']         = 'profile/updateProfile';
$route['user/updateAffiliation'] = 'profile/updateAffiliation';
$route['user/:any']         = 'profile/view/$1';
$route['user/edit/:any']         = 'profile/edit/$1';

$route['a-propos'] = 'About';
$route['demo-gratuite'] = 'About/demo';
$route['vous-nous-quittez'] = 'About/leave';
$route['affiliation'] = 'About/affiliation';
$route['comment-ca-marche'] = 'About/ccm';

$route['nos-offres'] = 'Pricing';
$route['decouvrez-albert-extra'] = 'Pricing/AlbertExtra';
$route['success'] = 'Pricing/success';
$route['cancel'] = 'Pricing/cancel';

$route['checkout'] = 'Actions/checkout';
$route['checkoutExtra'] = 'Actions/checkoutExtra';
$route['mon-abonnement'] = 'Subscription';
// $route['mon-abonnement'] = 'Actions/portal';
$route['abonnement'] = 'Subscription';

//Dashboard
$route['recherche']         = 'search';

//Annonces
$route['nouvelle-annonce'] = 'annonces/newAnnonce';
$route['annonce/addImage']         = 'annonces/addPictures';
$route['annonce/manageGuide/:any']         = 'annonces/manageGuide/$1';
$route['annonce/updateGuideParams']         = 'annonces/updateGuideParams';
$route['annonce/addProcedure']         = 'annonces/addProcedure';
$route['annonce/handleGuide/:any']         = 'annonces/handleGuide/$1';
$route['annonce/viewMoves/:any']         = 'annonces/viewMoves/$1';
$route['annonce/updateTasksAndInventory']         = 'annonces/updateTasksAndInventory';
$route['annonce/handleStocks/:any']         = 'annonces/handleStocks/$1';
$route['annonce/updateStocks']         = 'annonces/updateStocks';
$route['annonce/updateChannelItemID']         = 'annonces/updateChannelItemID';
$route['annonce/handleChannelID/:any']         = 'annonces/handleChannelID/$1';
$route['annonce/updateEmbed']         = 'annonces/updateEmbed';
$route['annonce/duplicateProcedure']         = 'annonces/duplicateProcedure';

$route['albertBrain/faq']         = 'actions/chatbaseFaq';
$route['albertBrain/:any']         = 'actions/chatBaseApiCall/$1';


$route['annonce/editProcedure']         = 'annonces/editProcedure';
$route['annonce/:any']         = 'annonces/viewAnnonce/$1';

$route['annonce/edit/:any']         = 'annonces/edit/$1';


$route['annonce/editPictures/:any']         = 'annonces/editPictures/$1';
$route['annonce/remove/:any']         = 'annonces/remove/$1';
$route['annonce/restore/:any']         = 'annonces/restore/$1';
$route['annonce/removeTicket/:any/:any']         = 'annonces/removeTicket/$1/$2';
$route['annonce/editTicket/:any/:any']         = 'annonces/editTicket/$1/$2';
$route['annonce/markAsVerified/:any']         = 'annonces/markAsVerified/$1';
$route['annonce/askForVerify/:any']         = 'annonces/askForVerify/$1';
$route['annonce/entryProcedure/:any']         = 'annonces/entryProcedure/$1?type=entry';
$route['annonce/leaveProcedure/:any']         = 'annonces/entryProcedure/$1?type=leave';
$route['annonce/gallery/:any']         = 'annonces/gallery/$1';

$route['gticket_public/:any']         = 'Home/ticketPublic/$1';
$route['ticket_public/:any']         = 'Home/ticketPublic/$1';

$route['user/:any']         = 'profile/view/$1';
$route['livre-blanc']         = 'dashboard/whiteBook';
$route['livre-blanc/guides']         = 'dashboard/whiteBook/guides';
$route['livre-blanc/team']         = 'dashboard/whiteBook/team';
$route['livre-blanc/:any']         = 'dashboard/whiteBook/$1';
$route['notice-albert']         = 'dashboard/noticeAlbert';


$route['blogs/:any'] = 'blog/view/$1';

$route['blog/:num/:any']             = 'blog/view/$1/$2';

$route['blogs/infos/pourquoi-service-client-hotellerie']                    = 'blog/view/1/pourquoi-le-service-client-dans-l-htellerie-est-il-primordial';
$route['blogs/infos/quelles-sont-attentes-besoins-voyageurs-reservation']   = 'blog/view/2/quelles-sont-les-attentes-et-les-besoins-des-voyageurs-lors-d-une-rservation';

$route['guide/markCheckInAsDone']         = 'guide/markCheckInAsDone';
$route['guide/markCleaningAsDone']         = 'guide/markCleaningAsDone';
$route['guide/markCheckOutAsDone']         = 'guide/markCheckOutAsDone';

$route['guide/previewCheckin']         = 'guide/previewCheckin';
$route['guide/preview/:any']         = 'guide/preview/$1';
$route['guide/view/:any']         = 'guide/view/$1';
$route['guide/handleCleaningGuide/:any']         = 'guide/handleCleaningGuide/$1/$2';
$route['guide/:any']         = 'guide/checkValidity/$1';
$route['guide/:any/:any']         = 'guide/checkValidity/$1/$2';
$route['cleaningGuide/:any']         = 'guide/cleaningGuide/$1';
$route['merci-pour-votre-sejour']         = 'guide/thankyou';
$route['merci-pour-votre-travail']         = 'guide/thankyouCleaning';

$route['hook/:any']         = 'hooks/$1';