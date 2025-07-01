<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250701082840 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adresses (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, adresse_id INTEGER NOT NULL, zip_code INTEGER NOT NULL, city VARCHAR(255) NOT NULL, street VARCHAR(255) NOT NULL, street_number INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE appartient (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL)');
        $this->addSql('CREATE TABLE associations (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, association_id INTEGER NOT NULL, url VARCHAR(255) NOT NULL, creation_date DATETIME NOT NULL, is_valid BOOLEAN NOT NULL, name VARCHAR(255) NOT NULL, description CLOB NOT NULL, rna_number INTEGER DEFAULT NULL, url_img_association VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE candidate (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, is_accepted BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE domaines (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, domaine_id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, description CLOB NOT NULL)');
        $this->addSql('CREATE TABLE gere (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, association_id INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE roles (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, role_id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, description CLOB NOT NULL)');
        $this->addSql('ALTER TABLE users ADD COLUMN role_id INTEGER NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE adresses');
        $this->addSql('DROP TABLE appartient');
        $this->addSql('DROP TABLE associations');
        $this->addSql('DROP TABLE candidate');
        $this->addSql('DROP TABLE domaines');
        $this->addSql('DROP TABLE gere');
        $this->addSql('DROP TABLE roles');
        $this->addSql('CREATE TEMPORARY TABLE __temp__users AS SELECT id, user_id, firstname, lastname, email, register_date, password, favorite_duration, available, img_profil_pic FROM users');
        $this->addSql('DROP TABLE users');
        $this->addSql('CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, register_date DATETIME NOT NULL, password VARCHAR(255) NOT NULL, favorite_duration INTEGER NOT NULL, available BOOLEAN NOT NULL, img_profil_pic VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO users (id, user_id, firstname, lastname, email, register_date, password, favorite_duration, available, img_profil_pic) SELECT id, user_id, firstname, lastname, email, register_date, password, favorite_duration, available, img_profil_pic FROM __temp__users');
        $this->addSql('DROP TABLE __temp__users');
    }
}
