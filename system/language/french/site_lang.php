<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
	Chaque "Page" correspond au Controller qui lui correspond.
	Chaque entrée est appelé dans views/___/.php
*/

//Page Login
$lang['admin']          	=	"Administration";
$lang['login']				=	"Connexion";

//Page Head
$lang['home']				=	"Accueil";
$lang['users']				=	"Utilisateurs";
$lang['trips']				=	"Randonnées";
$lang['reports']			=	"Signalements";
$lang['logout']				=	"Déconnexion";

//Page Footer
$lang['copyright']			=	"Horse Globe administration par Nartex";

//Page Home
$lang['status']				=	"Statut";
$lang['country']			=	"Pays";
$lang['quantity']			=	"Quantité";
$lang['member']				=	"Membre";
$lang['memberSport']		=	"Membre Sport";
$lang['exMemberSport']		=	"Ex-membre Sport";
$lang['exMember']			=	"Ex-membre";
$lang['pro']				=	"Pro";
$lang['exPro']				=	"Ex-pro";
$lang['guest']				=	"Invité";

//Page Users
$lang['userslist']			=	"Liste des utilisateurs";
$lang['username']			=	"Pseudo";
$lang['firstname']			=	"Prénom";
$lang['lastname']			=	"Nom";
$lang['email']				=	"Email";
$lang['zipcode']			=	"Code postal";
$lang['badges']				=	"Badges";
$lang['filleuls']			=	"Filleuls";
$lang['difficulty']			= 	"Difficulté";

//Page Vue utilisateur
$lang['userDetails'] 		=	"Détails de l'utilisateur";
$lang['origin']				=	"Origine";
$lang['registered']			=	"Inscrit le";
$lang['date']				=	"Date";
$lang['localisation']		=	"Localisation";
$lang['agreement']			=	"Agrément";
$lang['state']				=	"Etat";
$lang['registerDate']		=	"Date d'inscription";
$lang['deactivateAccount']	=	"Désactiver ce compte";
$lang['deactivation']		=	"Désactivation d'un compte";
$lang['GoDeactivateAccount']=	"Cet utilisateur sera désactivé et il ne pourra plus se connecter à son compte.";
$lang['reactivateAccount']	=	"Réactiver ce compte";
$lang['reactivation']		=	"Réactivation d'un compte";
$lang['GoReactivateAccount']=	"Cet utilisateur sera activé et il pourra se connecter à nouveau à son compte.";
$lang['offerOneMonth']		=	"Offrir des mois d'abonnement";
$lang['youGoOffer']			=	"Vous vous apprêtez à offrir un mois d'abonnement à cet utilisateur.";
$lang['active']				=	"Actif";
$lang['inactive']			=	"Inactif";
$lang['cancel']				=	"Annuler";
$lang['confirm']			=	"Confirmer";
$lang['title']				=	"Titre";
$lang['createdTrips']		=	"Randonnées créées";
$lang['successMonthOffer'] 	= "<strong>Succès !</strong> Le compte <u>%1s </u> a bien été crédité.";
$lang['successUserReactivated']= "<strong>Succès !</strong> Le compte <u>%1s</u> a bien été réactivé.";
$lang['successUserDeactivated']= "<strong>Success !</strong> Le compte <u>%1s</u> a bien été désactivé.";
$lang['proUntil']			=	"Pro jusqu'au";
$lang['memberUntil']		=	"Membre jusqu'au";
$lang['exProUntil']			=	"Ex-pro depuis";
$lang['exMembreUntil']		=	"Ex-membre depuis";

//Page Trips
$lang['tripsList']				=	"Liste des randonnées";
$lang['viewTripsOnMap']			=	"Voir les randonnées sur la carte";
$lang['easy']					=	"Facile";
$lang['middle']					=	"Intermédiaire";
$lang['hard']					=	"Difficile";
$lang['successTripDeactivated']	=	"<strong>Succès !</strong> <u>%1s</u> a bien été désactivée.";
$lang['successTripReactivated']	=	"<strong>Succès !</strong> <u>%1s</u> a bien été réactivée.";
$lang['pictureDeactivated']		=	"<strong>Succès !</strong> La photo a bien été désactivée.";
$lang['pictureReactivated']		=	"<strong>Succès !</strong> La photo a bien été réactivée.";
$lang['tripDetails']			=	"Détails de la randonnée";
$lang['author']					=	"Auteur";
$lang['publication']			=	"Publication";
$lang['distance']				=	"Distance";
$lang['category']				=	"Catégorie";
$lang['description']			=	"Description";
$lang['location']				=	"Localisation";
$lang['principale']				=	"Miniature";
$lang['disable']				=	"Désactiver";
$lang['enable']					=	"Réactiver";
$lang['edit']					=	"Editer";
$lang['reactivationTrip']		=	"Réactivation d'une randonnée";
$lang['deactivationTrip']		=	"Désactivation d'une randonnée";
$lang['GoDeactivateTrip']		=	"Cette randonnée sera désactivée et n'apparaîtra plus sur le catalogue HorseGlobe.";
$lang['GoReactivateTrip']		=	"Cette randonnée sera réaactivée et apparaîtra de nouveau sur le catalogue HorseGlobe.";
$lang['restorePicture']			=	"Cette photographie sera restaurée et apparaîtra de nouveau sur la randonnée.";
$lang['deletePicture']			=	"Cette photographie sera supprimée et n'apparaîtra plus sur la randonnée.";
$lang['restoreThisPicture']		=	"Restaurer cette image.";
$lang['deleteThisPicture']		=	"Supprimer cette image.";
$lang['pictureDeleted']			= 	"Photo supprimée";
$lang['restorationPic']			= 	"Restauration d'une photographie";
$lang['deletitionPic']			= 	"Suppression d'une photographie";
$lang['userDontSentDesc']		= 	"L'utilisateur n'a pas fourni de description";

//Page Edition Trip
$lang['saveChanges']			=	"Enregistrer les changements";
$lang['warningUpdate']			=	"Attention, modifier les champs Difficulté et Agrément va définitivement effacer les valeurs en cours pour imposer votre choix.";

//Page Warnings
$lang['reportsTraite']			= 	"<strong>Succès !</strong> Le signalement a bien été traité.";
$lang['reportsWaiting']			= 	"Signalements en attente";
$lang['sender']					= 	"Emetteur";
$lang['reason']					= 	"Raison";
$lang['trip']					= 	"Randonnée";
$lang['markAsOk']				=	"Marquer le signalement comme traité";
$lang['viewWarningsOk']			=	"Afficher les signalements traités";
$lang['hideWarningsOk']			=	"Masquer les signalements traités";
$lang['warningTraite']			=	"Ce signalement a bien été marqué comme traité.";
$lang['reportDone']				=	"Fait";
$lang['reportWait']				=	"En attente";




