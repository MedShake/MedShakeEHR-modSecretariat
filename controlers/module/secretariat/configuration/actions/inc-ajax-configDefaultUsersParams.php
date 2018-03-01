<?php
/*
 * This file is part of MedShakeEHR.
 *
 * Copyright (c) 2017
 * fr33z00 <https://github.com/fr33z00>
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
 * Config : gérer les paramètres de configuration par défaut des utilisateurs spécifiques au module
 *
 * @author fr33z00 <https://github.com/fr33z00>
 */

//admin uniquement
if (msUser::checkUserIsAdmin()) {
    foreach (['secretariatPeutCreerOrdo', 'secretariatPeutCreerConsult', 'secretariatPeutVoirAtcd', 'secretariatPeutVoirSynthese', 'secretariatPeutEditerConsult', 'secretariatPeutEditerOrdo', 'secretariatPeutDupliquerOrdo'] as $v) {
        $booleans[]=$v;
        if (!isset($p['configDefaut'][$v])) {
            $p['configDefaut'][$v]=false;
        }
    }
}
