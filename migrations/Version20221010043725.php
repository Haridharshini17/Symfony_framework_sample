<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221010043725 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE blood_group (id INT AUTO_INCREMENT NOT NULL, blood_group_name LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee_information (id INT AUTO_INCREMENT NOT NULL, name LONGTEXT NOT NULL, age INT NOT NULL, designation LONGTEXT NOT NULL, education LONGTEXT NOT NULL, city LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gender (id INT AUTO_INCREMENT NOT NULL, gender_type LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE regenerate (id INT AUTO_INCREMENT NOT NULL, example_example VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_registration (id INT AUTO_INCREMENT NOT NULL, student_name LONGTEXT NOT NULL, age INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE symfony_example (id INT AUTO_INCREMENT NOT NULL, name LONGTEXT NOT NULL, age INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE blood_group');
        $this->addSql('DROP TABLE employee_information');
        $this->addSql('DROP TABLE gender');
        $this->addSql('DROP TABLE regenerate');
        $this->addSql('DROP TABLE student_registration');
        $this->addSql('DROP TABLE symfony_example');
    }
}
