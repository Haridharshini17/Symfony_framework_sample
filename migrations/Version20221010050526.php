<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221010050526 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE phone_table (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, phone_number INT NOT NULL, INDEX IDX_573FA5C9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_registration (id INT AUTO_INCREMENT NOT NULL, student_name LONGTEXT NOT NULL, age INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_table (id INT AUTO_INCREMENT NOT NULL, blood_group_id_id INT NOT NULL, gender_id_id INT NOT NULL, first_name LONGTEXT NOT NULL, last_name LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_14EB741EF8E0A4F3 (blood_group_id_id), UNIQUE INDEX UNIQ_14EB741E6F7F214C (gender_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE phone_table ADD CONSTRAINT FK_573FA5C9D86650F FOREIGN KEY (user_id_id) REFERENCES user_table (id)');
        $this->addSql('ALTER TABLE user_table ADD CONSTRAINT FK_14EB741EF8E0A4F3 FOREIGN KEY (blood_group_id_id) REFERENCES blood_group (id)');
        $this->addSql('ALTER TABLE user_table ADD CONSTRAINT FK_14EB741E6F7F214C FOREIGN KEY (gender_id_id) REFERENCES gender (id)');
        $this->addSql('DROP TABLE name');
        $this->addSql('ALTER TABLE gender CHANGE text gender_type LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE name (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, lastname VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE phone_table DROP FOREIGN KEY FK_573FA5C9D86650F');
        $this->addSql('ALTER TABLE user_table DROP FOREIGN KEY FK_14EB741EF8E0A4F3');
        $this->addSql('ALTER TABLE user_table DROP FOREIGN KEY FK_14EB741E6F7F214C');
        $this->addSql('DROP TABLE phone_table');
        $this->addSql('DROP TABLE student_registration');
        $this->addSql('DROP TABLE user_table');
        $this->addSql('ALTER TABLE gender CHANGE gender_type text LONGTEXT NOT NULL');
    }
}
