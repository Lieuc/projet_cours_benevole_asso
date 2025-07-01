<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250701084420 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abite (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, adresse_id INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE contient (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, domaine_id INTEGER NOT NULL, mission_id INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE favoris (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, domaine_id INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE postes (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, poste_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL, content CLOB NOT NULL, post_date DATETIME NOT NULL, image_url VARCHAR(255) NOT NULL, association_id INTEGER NOT NULL)');
        $this->addSql('ALTER TABLE missions ADD COLUMN association_id INTEGER NOT NULL');
        $this->addSql('ALTER TABLE missions ADD COLUMN adresse_id INTEGER NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE abite');
        $this->addSql('DROP TABLE contient');
        $this->addSql('DROP TABLE favoris');
        $this->addSql('DROP TABLE postes');
        $this->addSql('CREATE TEMPORARY TABLE __temp__missions AS SELECT id, mission_id, description, start_date, end_date, asked_volunteer FROM missions');
        $this->addSql('DROP TABLE missions');
        $this->addSql('CREATE TABLE missions (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, mission_id INTEGER NOT NULL, description VARCHAR(255) NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, asked_volunteer INTEGER NOT NULL)');
        $this->addSql('INSERT INTO missions (id, mission_id, description, start_date, end_date, asked_volunteer) SELECT id, mission_id, description, start_date, end_date, asked_volunteer FROM __temp__missions');
        $this->addSql('DROP TABLE __temp__missions');
    }
}
