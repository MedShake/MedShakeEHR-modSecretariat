-- Modifications des données de la bdd de v1.0.1. à v1.1.0

UPDATE `system` SET `value`='v1.1.0' WHERE `groupe`='module' and `name`='secretariat';

INSERT IGNORE INTO `configuration` (`name`, `level`, `cat`, `module`, `type`, `description`, `value`) VALUES
('secretariatPeutModifierAtcd', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutDupliquerOrdo', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutCreerReglementDe', 'default', 'module Secretariat', '', 'liste', 'vide pour personne, 0 pour tout le monde, ou liste des #id utilisateurs séparés par virgules', '');
