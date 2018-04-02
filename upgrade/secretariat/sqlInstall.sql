INSERT IGNORE INTO `system` (`name`,`groupe`,`value`) VALUES
('secretariat', 'module', 'v1.1.0');

INSERT IGNORE INTO `configuration` (`name`, `level`, `cat`, `module`, `type`, `description`, `value`) VALUES
('secretariatPeutCreerOrdo', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutCreerConsult', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutVoirAtcd', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutVoirSynthese', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutEditerConsult', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutEditerOrdo', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutDupliquerOrdo', 'default', 'module Secretariat', '', 'true/false', '', ''),
('secretariatPeutCreerOrdo', 'module', '', 'secretariat', '', '', 'false'),
('secretariatPeutCreerConsult', 'module', '', 'secretariat', '', '', 'false'),
('secretariatPeutVoirAtcd', 'module', '', 'secretariat', '', '', 'true'),
('secretariatPeutVoirSynthese', 'module', '', 'secretariat', '', '', 'true'),
('secretariatPeutEditerConsult', 'module', '', 'secretariat', '', '', 'false'),
('secretariatPeutEditerOrdo', 'module', '', 'secretariat', '', '', 'false'),
('secretariatPeutDupliquerOrdo', 'module', '', 'secretariat', '', '', 'false');
