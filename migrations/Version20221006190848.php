<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221006190848 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname LONGTEXT NOT NULL, bloodgroup VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, firstname LONGTEXT NOT NULL, lastname LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usertables (id INT AUTO_INCREMENT NOT NULL, blood_group_id INT NOT NULL, gender_id INT NOT NULL, firstname LONGTEXT NOT NULL, lastname LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_ECBD15E55F3AECE2 (blood_group_id), UNIQUE INDEX UNIQ_ECBD15E5708A0E0 (gender_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE usertables ADD CONSTRAINT FK_ECBD15E55F3AECE2 FOREIGN KEY (blood_group_id) REFERENCES blood_group (id)');
        $this->addSql('ALTER TABLE usertables ADD CONSTRAINT FK_ECBD15E5708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usertables DROP FOREIGN KEY FK_ECBD15E55F3AECE2');
        $this->addSql('ALTER TABLE usertables DROP FOREIGN KEY FK_ECBD15E5708A0E0');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE usertables');
    }
}
