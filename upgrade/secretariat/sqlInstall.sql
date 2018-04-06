INSERT IGNORE INTO `system` (`name`,`groupe`,`value`) VALUES
('secretariat', 'module', 'v1.1.0');

INSERT IGNORE INTO `configuration` (`name`, `level`, `cat`, `module`, `type`, `description`, `value`) VALUES
('secretariatPeutModifierAtcd', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutDupliquerOrdo', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutCreerReglementDe', 'default', 'module Secretariat', '', 'liste', 'vide pour personne, 0 pour tout le monde, ou liste des #id utilisateurs séparés par virgules', '');
