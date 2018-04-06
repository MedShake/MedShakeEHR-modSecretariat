<?php
/*
 * This file is part of MedShakeEHR.
 *
 * Copyright (c) 2017
 * fr33z00 <https://www.github.com/fr33z00>
 * http://www.medshake.net
 *
 * MedShakeEHR is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * MedShakeEHR is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with MedShakeEHR.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Patient : la page du dossier patient
 *
 * @author fr33z00 <https://www.github.com/fr33z00>
 */


$atcd=msSQL::sql2tab("SELECT internalName AS name, module FROM forms WHERE cat=(SELECT id from forms_cat where name='formATCD')", 'name');
$synth=msSQL::sql2tab("SELECT internalName AS name, module FROM forms WHERE cat=(SELECT id from forms_cat where name='formSynthese')", 'name');

$data = new msData();
$name2typeID = $data->getTypeIDsFromName(['firstname', 'lastname', 'titre']);
$p['page']['listPrats']=msSQL::sql2tabKey("SELECT p.id, p.module, odt.value as titre, odn.value as nom, odp.value as prenom 
     FROM people as p
     LEFT JOIN objets_data as odt ON odt.toID=p.id AND odt.typeID='".$name2typeID['titre']."' AND odt.outdated='' AND odt.deleted=''
     LEFT JOIN objets_data as odn ON odn.toID=p.id AND odn.typeID='".$name2typeID['lastname']."' AND odn.outdated='' AND odn.deleted='' 
     LEFT JOIN objets_data as odp ON odp.toID=p.id AND odp.typeID='".$name2typeID['firstname']."' AND odp.outdated='' AND odp.deleted=''
     WHERE p.type='pro' AND p.name!='' AND p.module!='secretariat'", 'id');

foreach($p['page']['listPrats'] as $v) {
    $p['page']['listModules'][]=$v['module'];
}
array_unique($p['page']['listModules']);

$form=new msForm();
$p['page']['atcdFormNames']=array();
$p['page']['atcdFormDatas']=array();
foreach ($atcd as $v) {
    $form->setFormIDbyName($p['page']['atcdFormNames'][$v['module']]=$v['name']);
    $form->getPrevaluesForPatient($p['page']['patient']['id']);
    $p['page']['atcdFormDatas'][$v['module']]=$form->getForm();
}
$p['page']['synthFormNames']=array();
$p['page']['synthFormDatas']=array();
foreach ($synth as $v) {
    $form->setFormIDbyName($p['page']['synthFormNames'][$v['module']]=$v['name']);
    $form->getPrevaluesForPatient($p['page']['patient']['id']);
    $p['page']['synthFormDatas'][$v['module']]=$form->getForm();
}

// liste des formulaires fixes au 1er affichage dossier patient pour JS
$p['page']['listeForms']=array_merge(array_values($p['page']['atcdFormNames']), array_values($p['page']['synthFormNames']));

$cs=$data->getDataTypesFromGroupe('typecs', array('id','label', 'description', 'module', 'formValues'));
foreach ($cs as $v) {
    $p['page']['formCs'][$v['module']][]=$v;
}
$reglements=$data->getDataTypesFromCatName('porteursReglement', array('id', 'module', 'label', 'description', 'formValues'));
foreach ($reglements as $v) {
    $p['page']['formReglement'][$v['module']][]=$v;
}
$ordos=$data->getDataTypesFromCatName('porteursOrdo', array('id', 'module', 'label', 'description', 'formValues'));
foreach ($ordos as $v) {
    $p['page']['formOrdo'][$v['module']][]=$v;
}

