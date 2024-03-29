BEGIN TRANSACTION;
CREATE TABLE user (id INTEGER NOT NULL, team INTEGER DEFAULT NULL, company INTEGER DEFAULT NULL, login VARCHAR(255) NOT NULL COLLATE BINARY, name VARCHAR(255) NOT NULL COLLATE BINARY, surname VARCHAR(255) NOT NULL COLLATE BINARY, PRIMARY KEY(id), CONSTRAINT FK_8D93D649C4E0A61F FOREIGN KEY (team) REFERENCES team (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_8D93D6494FBF094F FOREIGN KEY (company) REFERENCES company (id) NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO `user` VALUES (1,1,1,'nterray','Nicolas','Terray');
INSERT INTO `user` VALUES (2,1,1,'yannis.rossetto','Yannis','Rossetto');
INSERT INTO `user` VALUES (3,2,1,'sandrae','Sandra','Echinard');
CREATE TABLE team (id INTEGER NOT NULL, company INTEGER DEFAULT NULL, teamName VARCHAR(255) NOT NULL COLLATE BINARY, PRIMARY KEY(id), CONSTRAINT FK_C4E0A61F4FBF094F FOREIGN KEY (company) REFERENCES company (id) NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO `team` VALUES (1,'Enalean','TeamA');
INSERT INTO `team` VALUES (2,'Enalean','TeamB');
CREATE TABLE repository (id INTEGER NOT NULL, owner INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, fullName VARCHAR(255) NOT NULL COLLATE BINARY, PRIMARY KEY(id), CONSTRAINT FK_5CFE57CDCF60E67C FOREIGN KEY (owner) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE);
INSERT INTO `repository` VALUES (1,1,'repo1','nterray/repo1');
INSERT INTO `repository` VALUES (2,1,'repo2','nterray/repo2');
INSERT INTO `repository` VALUES (3,2,'repo3','yannis.rossetto/repo3');
INSERT INTO `repository` VALUES (4,3,'repo4','sandrae/repo4');
INSERT INTO `repository` VALUES (5,3,'repo5','sandrae/repo5');
INSERT INTO `repository` VALUES (6,3,'repo6','sandrae/repo6');
CREATE TABLE company (id INTEGER NOT NULL, companyName VARCHAR(255) NOT NULL, PRIMARY KEY(id));
INSERT INTO `company` VALUES (1,'Enalean');
CREATE INDEX IDX_C4E0A61F4FBF094F ON team (company);
CREATE INDEX IDX_8D93D649C4E0A61F ON user (team);
CREATE INDEX IDX_8D93D6494FBF094F ON user (company);
CREATE INDEX IDX_5CFE57CDCF60E67C ON repository (owner);
COMMIT;
