<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'zoom', language 'fr', version '3.10'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['addtocalendar'] = 'Ajouter au calendrier';
$string['allmeetings'] = 'Toutes les réunions';
$string['alternative_hosts'] = 'Hôtes alternatifs';
$string['alternative_hosts_help'] = 'L\'option hôte alternatif vous permet de planifier des réunions et de désigner un autre utilisateur Pro sur le même compte pour démarrer une réunion ou un webinaire si vous en êtes incapable. Cet utilisateur recevra un courriel l\'informant qu\'il a été ajouté en tant qu\'hôte alternatif avec un lien lui permettant de démarrer la réunion. Séparez plusieurs courriels par une virgule (sans espaces).';
$string['apikey'] = 'Clé API Zoom';
$string['apisecret'] = 'Secret API Zoom';
$string['apiurl'] = 'Url API Zoom';
$string['audio_both'] = 'Voix sur IP et téléphone';
$string['audio_telephony'] = 'Téléphone seulement';
$string['audio_voip'] = 'Voix sur IP seulement';
$string['cachedef_sessions'] = 'Informations sur une demande de rapport utilisateur Zoom';
$string['cachedef_zoomid'] = 'L\'ID utilisateur Zoom';
$string['calendardescriptionURL'] = 'URL pour participer à la réunion : {$a}.';
$string['calendardescriptionintro'] = '\\nDescription :\\n{\\$a}';
$string['calendariconalt'] = 'Icône du calendrier';
$string['changehost'] = 'Changer d\'hôte';
$string['clickjoin'] = 'Cliquez sur le bouton pour rejoindre la réunion';
$string['connectionfailed'] = 'Échec de connexion';
$string['connectionok'] = 'Connexion opérationnelle';
$string['connectionstatus'] = 'Statut de connexion';
$string['defaultsettings'] = 'Paramètres de Zoom par défaut';
$string['defaultsettings_help'] = 'Ces paramètres définissent les valeurs par défaut pour toutes les nouvelles réunions et webinaires Zoom.';
$string['downloadical'] = 'Téléchargez iCal';
$string['duration'] = 'Durée (minutes)';
$string['endtime'] = 'Heure de fin';
$string['err_duration_nonpositive'] = 'La durée doit être positive.';
$string['err_duration_too_long'] = 'La durée ne peut excéder 150 heures.';
$string['err_invalid_password'] = 'Le code secret contient des caractères non valides.';
$string['err_long_timeframe'] = 'Le laps de temps demandé est trop long et affiche les résultats du dernier mois dans la plage.';
$string['err_password'] = 'Le code secret peut seulement contenir les caractères suivants : [a-z A-Z 0-9 @ - _ *]. Maximum de 10 caractères.';
$string['err_password_required'] = 'Le code secret est requis.';
$string['err_start_time_past'] = 'La date de début ne peut pas être dans le passé.';
$string['errorwebservice'] = 'Erreur webservice Zoom : {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom a reçu une mauvaise requête : {$a}';
$string['errorwebservice_notfound'] = 'La ressource n\'existe pas : {$a}';
$string['export'] = 'Export';
$string['firstjoin'] = 'Le premier à être en mesure de joindre';
$string['firstjoin_desc'] = 'Le plus tôt un utilisateur peut rejoindre une réunion planifiée (quelques minutes avant le début).';
$string['getmeetingreports'] = 'Obtenir un rapport des réunions de Zoom.';
$string['host'] = 'Hôte';
$string['invalid_status'] = 'Statut invalide, vérifiez la base de données.';
$string['invalidscheduleuser'] = 'Vous ne pouvez pas planifier pour l\'utilisateur spécifié.';
$string['join'] = 'Rejoindre';
$string['join_meeting'] = 'Rejoindre la réunion';
$string['joinbeforehost'] = 'Rejoindre la réunion avant l\'hôte';
$string['jointime'] = 'Heure d\'arrivée';
$string['leavetime'] = 'Heure de départ';
$string['licenseonjoin'] = 'Sélectionnez cette option si vous souhaitez que l\'hôte reçoive une licence au démarrage de la réunion, <i>ainsi que</i> lors de la création.';
$string['licensesnumber'] = 'Nombre de licences';
$string['lowlicenses'] = 'Si le nombre de vos licences dépasse le nombre requis, chaque fois que vous créez une nouvelle activité, l\'utilisateur se voit attribuer une licence PRO en réduisant le statut d\'un autre utilisateur. L\'option est effective lorsque le nombre de licences PRO actives est supérieur à 5.';
$string['maskparticipantdata'] = 'Masquer les données des participants';
$string['maskparticipantdata_help'] = 'Empêche les données des participants d\'apparaître dans les rapports (utile pour les sites qui masquent les données des participants, par exemple pour HIPAA loi américaine sur la santé et l\'assurance maladie).';
$string['meeting_finished'] = 'Terminer';
$string['meeting_nonexistent_on_zoom'] = 'Inexistant dans Zoom';
$string['meeting_not_started'] = 'Pas commencé';
$string['meeting_started'] = 'En cours';
$string['meeting_time'] = 'Heure de début';
$string['meetingoptions'] = 'Option de la réunion';
$string['meetingoptions_help'] = '*Rejoindre avant l\'hôte* permet aux participants de rejoindre la réunion avant l\'hôte ou lorsque l\'hôte ne peut pas assister à la réunion.';
$string['modulename'] = 'Réunion Zoom';
$string['modulename_help'] = 'Zoom est une plate-forme de conférence vidéo et Web qui donne aux utilisateurs autorisés la possibilité d’organiser des réunions en ligne.';
$string['modulenameplural'] = 'Réunions Zoom';
$string['newmeetings'] = 'Nouvelles réunions';
$string['nomeetinginstances'] = 'Aucune session trouvée pour cette réunion.';
$string['noparticipants'] = 'Aucun participant trouvé pour cette session actuellement.';
$string['nosessions'] = 'Aucune session trouvée pour la plage spécifiée.';
$string['nozooms'] = 'Pas de réunion';
$string['off'] = 'Désactivé';
$string['oldmeetings'] = 'Réunions terminées';
$string['on'] = 'Activé';
$string['option_audio'] = 'Options audio';
$string['option_authenticated_users'] = 'Uniquement les utilisateurs authentifiés';
$string['option_host_video'] = 'Vidéo hôte';
$string['option_jbh'] = 'Permettre de rejoindre la classe virtuelle avant l\'hôte';
$string['option_mute_upon_entry'] = 'Muet au départ';
$string['option_mute_upon_entry_help'] = 'Place automatiquement en muet tous les participants lorsqu\'ils rejoignent la réunion. L\'hôte contrôle si les participants peuvent réactiver leur parole.';
$string['option_participants_video'] = 'Vidéo des participants';
$string['option_proxyhost'] = 'Utiliser un proxy';
$string['option_proxyhost_desc'] = 'Le proxy défini ici comme \'<code>&lt;hostname&gt;:&lt;port&gt;</code>\' est utilisé uniquement pour communiquer avec Zoom. Laissez vide pour utiliser les paramètres de proxy par défaut de Moodle. Vous ne devez le définir que si vous ne souhaitez pas définir de proxy global dans Moodle.';
$string['option_waiting_room'] = 'Activer la salle d\'attente';
$string['participantdatanotavailable'] = 'Détails indisponibles';
$string['participantdatanotavailable_help'] = 'Les données des participants ne sont pas disponibles pour cette session Zoom (par exemple, en raison de la conformité HIPAA).';
$string['participants'] = 'Participants';
$string['password'] = 'Code secret';
$string['passwordprotected'] = 'Protégé par code secret';
$string['pluginadministration'] = 'Gérer réunion Zoom';
$string['pluginname'] = 'Réunion Zoom';
$string['privacy:metadata:zoom_meeting_details'] = 'La table de base de données qui stocke des informations sur chaque instance de réunion.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'Le nom de la réunion à laquelle l\'utilisateur a assisté.';
$string['privacy:metadata:zoom_meeting_participants'] = 'La table de base de données qui enregistre des informations sur les participants à la réunion.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Le temps de présence du participant à la réunion';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'L\'heure à laquelle le participant a rejoint la réunion';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'L\'heure à laquelle le participant a quitté la réunion';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'Le nom du participant';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'L\'adresse de courriel du participant';
$string['recurringmeeting'] = 'Périodique';
$string['recurringmeeting_help'] = 'N\'a pas de date de fin';
$string['recurringmeetinglong'] = 'Réunion périodique (réunion sans date ou heure de fin)';
$string['recycleonjoin'] = 'Recycler la licence lors de l\'adhésion';
$string['redefinelicenses'] = 'Redéfinir les licences';
$string['report'] = 'Rapports';
$string['reportapicalls'] = 'Rapporter les appels API épuisés';
$string['resetapicalls'] = 'Réinitialiser le nombre d\'appels API disponibles';
$string['schedulefor'] = 'Planifier réunion pour';
$string['scheduleforself'] = 'Planifier pour vous-même';
$string['search:activity'] = 'Zoom - informations sur l\'activité';
$string['sessions'] = 'Sessions';
$string['start'] = 'Commencer';
$string['start_meeting'] = 'Démarrer la réunion';
$string['start_time'] = 'Quand';
$string['starthostjoins'] = 'Démarrer la vidéo lorsque l\'hôte est en ligne';
$string['startpartjoins'] = 'Lancer la vidéo lorsque le participant est en ligne';
$string['starttime'] = 'Heure de début';
$string['status'] = 'Statut';
$string['title'] = 'Titre';
$string['topic'] = 'Sujet';
$string['unavailable'] = 'Indisponible pour le moment';
$string['updatemeetings'] = 'Mettre à jour les paramètres de réunion à partir de Zoom';
$string['usepersonalmeeting'] = 'Utiliser un identifiant de réunion personnel {$a}';
$string['waitingroom'] = 'Salle d\'attente activée';
$string['webinar'] = 'Webinaire';
$string['webinar_already_false'] = '<p><b> Ce module était déjà défini en tant que réunion, et non webinaire. Vous ne pouvez pas modifier ce paramètre après avoir créé la réunion. </b></p>';
$string['webinar_already_true'] = '<p><b> Ce module était déjà défini en tant que webinaire, et non réunion. Vous ne pouvez pas modifier ce paramètre après avoir créé le webinaire. </b></p>';
$string['webinar_help'] = 'Cette option est uniquement disponible pour les comptes Zoom pré-autorisés.';
$string['zoom:addinstance'] = 'Ajouter une nouvelle réunion Zoom';
$string['zoom:view'] = 'Afficher les réunions Zoom';
$string['zoomerr'] = 'Une erreur est survenue avec Zoom.';
$string['zoomerr_apikey_missing'] = 'Clé de l\'API Zoom introuvable';
$string['zoomerr_apisecret_missing'] = 'Secret API Zoom introuvable';
$string['zoomerr_id_missing'] = 'Vous devez spécifier un ID de course_module ou un ID d\'instance.';
$string['zoomerr_licensesnumber_missing'] = 'Paramètre de Zoom maximum trouvé mais paramètre de numéro de licence introuvable';
$string['zoomerr_maxretries'] = '{$a->maxretries} tentatives pour passer l\'appel, mais l\'appel a échoué : {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Cette réunion est introuvable sur Zoom. Vous pouvez <a href="{$a-> recreate}"> la recréer ici</a> ou <a href="{$a->delete}"> la supprimer complètement</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Cette réunion est introuvable sur Zoom. Veuillez contacter l\'hôte de la réunion si vous avez des questions.';
$string['zoomerr_usernotfound'] = 'Impossible de trouver votre compte sur Zoom. Si vous utilisez Zoom pour la première fois, vous devez activer votre compte en vous connectant à Zoom <a href="{$a}" target="_blank">{$a}</a>. Une fois que vous avez activé votre compte Zoom, rechargez cette page et continuez la configuration de votre réunion. Sinon, assurez-vous que votre adresse de courriel sur Zoom correspond à votre courriel sur ce système.';
$string['zoomurl'] = 'URL de la page d\'accueil Zoom';
