<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Impossible de d&eacute;terminer les param&egrave;tres d\'acc&egrave;s &agrave; la base de donn&eacute;es en se basant sur la cha&icirc;ne de connexion que vous avez soumise.';
$lang['db_unable_to_connect'] = 'Impossible de se connecter &agrave; la base de donn&eacute;es en utilisant les param&egrave;tres fournis.';
$lang['db_unable_to_select'] = 'Impossible de s&eacute;lectionner cette base de donn&eacute;es : %s';
$lang['db_unable_to_create'] = 'Impossible de cr&eacute;er cette base de donn&eacute;es : %s';
$lang['db_invalid_query'] = 'La requ&ecirc;te que vous avez fournie est invalide.';
$lang['db_must_set_table'] = 'Vous devez sp&eacute;cifier une table pour effectuer votre requ&ecirc;te.';
$lang['db_must_use_set'] = 'Vous devez utiliser la m&eacute;thode "set()" pour mettre &agrave; jour une entr&eacute;e.';
$lang['db_must_use_index'] = 'Vous devez sp&eacute;cifier un index pour les mises &agrave; jour group&eacute;es.';
$lang['db_batch_missing_index'] = 'Une ou plusieurs rang&eacute;es de la mise &agrave; jour group&eacute;e ne disposent pas de l\'index requis.';
$lang['db_must_use_where'] = 'Il faut obligatoirement sp&eacute;cifier la clause "WHERE" pour mettre &agrave; jour une entr&eacute;e.';
$lang['db_del_must_use_where'] = 'Il faut obligatoirement sp&eacute;cifier la clause "WHERE" pour supprimer une entr&eacute;e.';
$lang['db_field_param_missing'] = 'La m&eacute;thode fetch_fields requiert le nom de la table cible en param&egrave;tre.';
$lang['db_unsupported_function'] = 'Cette fonctionnalit&eacute; n\'est pas disponible pour la base de donn&eacute;es utilis&eacute;e.';
$lang['db_transaction_failure'] = 'Erreur de transaction: la transaction est annul&eacute;e';
$lang['db_unable_to_drop'] = 'Impossible d\'effacer la base de donn&eacute;es sp&eacute;cifi&eacute;e.';
$lang['db_unsuported_feature'] = 'Cette fonctionnalit&eacute; n\'est pas soutenue par la plate-forme de base de donn&eacute;es utilis&eacute;e.';
$lang['db_unsuported_compression'] = 'Le format de compression choisi n\'est pas soutenu par votre serveur. ';
$lang['db_filepath_error'] = 'Impossible d\'&eacute;crire des donn&eacute;es au chemin de fichiers indiqu&eacute;.';
$lang['db_invalid_cache_path'] = 'Le chemin de mise en cache soumis n\'est pas valide ou n\'est pas inscriptible.';
$lang['db_table_name_required'] = 'Un nom de table est requis pour cette op&eacute;ration.';
$lang['db_column_name_required'] = 'Un nom de colonne est requis pour cette op&eacute;ration.';
$lang['db_column_definition_required'] = 'Une d&eacute;finition d\'une colonne est requise pour cette op&eacute;ration.';
$lang['db_unable_to_set_charset'] = 'Impossible de d&eacute;finir le jeu de caract&egrave;res de la connexion client: %s';
$lang['db_error_heading'] = 'Une erreur de la base de donn&eacute;es s\'est produite.';
