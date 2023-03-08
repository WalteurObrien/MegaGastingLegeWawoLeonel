<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308081707 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE civilite (id INT IDENTITY NOT NULL, identifiant NVARCHAR(255) NOT NULL, libelle_court NVARCHAR(255) NOT NULL, libelle_long NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE TABLE civilite_offre (civilite_id INT NOT NULL, offre_id INT NOT NULL, PRIMARY KEY (civilite_id, offre_id))');
        $this->addSql('CREATE INDEX IDX_167C6B5339194ABF ON civilite_offre (civilite_id)');
        $this->addSql('CREATE INDEX IDX_167C6B534CC8505A ON civilite_offre (offre_id)');
        $this->addSql('CREATE TABLE conseil (id INT IDENTITY NOT NULL, identifiant NVARCHAR(255) NOT NULL, libelle NVARCHAR(255) NOT NULL, contenu NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE TABLE niveau (id INT IDENTITY NOT NULL, relation_id INT NOT NULL, identifiant NVARCHAR(255) NOT NULL, libelle NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE INDEX IDX_4BDFF36B3256915B ON niveau (relation_id)');
        $this->addSql('CREATE TABLE offre (id INT IDENTITY NOT NULL, identifiant NVARCHAR(255) NOT NULL, libelle NVARCHAR(255) NOT NULL, reference NVARCHAR(255) NOT NULL, date_diffusion NVARCHAR(255) NOT NULL, date_debut_casting DATE NOT NULL, date_fin_casting DATE NOT NULL, date_fin_diffusion DATE NOT NULL, description SMALLINT NOT NULL, localite SMALLINT NOT NULL, publie SMALLINT NOT NULL, age_min SMALLINT NOT NULL, offre NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE TABLE typecontrat (id INT IDENTITY NOT NULL, o_ffre_id INT NOT NULL, identifiant NVARCHAR(255) NOT NULL, libelle NVARCHAR(255) NOT NULL, offre NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE INDEX IDX_BAD01528C9F48695 ON typecontrat (o_ffre_id)');
        $this->addSql('ALTER TABLE civilite_offre ADD CONSTRAINT FK_167C6B5339194ABF FOREIGN KEY (civilite_id) REFERENCES civilite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE civilite_offre ADD CONSTRAINT FK_167C6B534CC8505A FOREIGN KEY (offre_id) REFERENCES offre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE niveau ADD CONSTRAINT FK_4BDFF36B3256915B FOREIGN KEY (relation_id) REFERENCES offre (id)');
        $this->addSql('ALTER TABLE typecontrat ADD CONSTRAINT FK_BAD01528C9F48695 FOREIGN KEY (o_ffre_id) REFERENCES offre (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA db_accessadmin');
        $this->addSql('CREATE SCHEMA db_backupoperator');
        $this->addSql('CREATE SCHEMA db_datareader');
        $this->addSql('CREATE SCHEMA db_datawriter');
        $this->addSql('CREATE SCHEMA db_ddladmin');
        $this->addSql('CREATE SCHEMA db_denydatareader');
        $this->addSql('CREATE SCHEMA db_denydatawriter');
        $this->addSql('CREATE SCHEMA db_owner');
        $this->addSql('CREATE SCHEMA db_securityadmin');
        $this->addSql('CREATE SCHEMA dbo');
        $this->addSql('ALTER TABLE civilite_offre DROP CONSTRAINT FK_167C6B5339194ABF');
        $this->addSql('ALTER TABLE civilite_offre DROP CONSTRAINT FK_167C6B534CC8505A');
        $this->addSql('ALTER TABLE niveau DROP CONSTRAINT FK_4BDFF36B3256915B');
        $this->addSql('ALTER TABLE typecontrat DROP CONSTRAINT FK_BAD01528C9F48695');
        $this->addSql('DROP TABLE civilite');
        $this->addSql('DROP TABLE civilite_offre');
        $this->addSql('DROP TABLE conseil');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE typecontrat');
    }
}
