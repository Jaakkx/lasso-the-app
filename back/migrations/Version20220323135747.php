<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220323135747 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE association (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(5000) NOT NULL, npa_code VARCHAR(255) DEFAULT NULL, picture VARCHAR(255) NOT NULL, adress VARCHAR(255) DEFAULT NULL, phone_number VARCHAR(255) DEFAULT NULL, creation_date DATETIME NOT NULL, website VARCHAR(255) NOT NULL, score INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE association_category (association_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_308101A7EFB9C8A5 (association_id), INDEX IDX_308101A712469DE2 (category_id), PRIMARY KEY(association_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE association_user (id INT AUTO_INCREMENT NOT NULL, score_update_user INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE association_user_user (association_user_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_53F593F5693C433F (association_user_id), INDEX IDX_53F593F5A76ED395 (user_id), PRIMARY KEY(association_user_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favoris (id INT AUTO_INCREMENT NOT NULL, associations_id INT DEFAULT NULL, user_favoris_id INT DEFAULT NULL, INDEX IDX_8933C432F68F41F7 (user_favoris_id), INDEX IDX_8933C4324122538A (associations_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, type TINYINT(1) NOT NULL, detail_type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_user (id INT AUTO_INCREMENT NOT NULL, libelle_already_answer VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, associations_id INT DEFAULT NULL, questions_id INT DEFAULT NULL, questions_user_id INT DEFAULT NULL, email VARCHAR(255) NOT NULL, user_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, INDEX IDX_8D93D649BCB134CE (questions_id), INDEX IDX_8D93D649D4EBF353 (questions_user_id), INDEX IDX_8D93D6494122538A (associations_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE association_category ADD CONSTRAINT FK_308101A7EFB9C8A5 FOREIGN KEY (association_id) REFERENCES association (id)');
        $this->addSql('ALTER TABLE association_category ADD CONSTRAINT FK_308101A712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE association_user_user ADD CONSTRAINT FK_53F593F5693C433F FOREIGN KEY (association_user_id) REFERENCES association_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE association_user_user ADD CONSTRAINT FK_53F593F5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE favoris ADD CONSTRAINT FK_8933C4324122538A FOREIGN KEY (associations_id) REFERENCES association (id)');
        $this->addSql('ALTER TABLE favoris ADD CONSTRAINT FK_8933C432F68F41F7 FOREIGN KEY (user_favoris_id) REFERENCES favoris (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6494122538A FOREIGN KEY (associations_id) REFERENCES association (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649BCB134CE FOREIGN KEY (questions_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D4EBF353 FOREIGN KEY (questions_user_id) REFERENCES question_user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE association_category DROP FOREIGN KEY FK_308101A7EFB9C8A5');
        $this->addSql('ALTER TABLE favoris DROP FOREIGN KEY FK_8933C4324122538A');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6494122538A');
        $this->addSql('ALTER TABLE association_user_user DROP FOREIGN KEY FK_53F593F5693C433F');
        $this->addSql('ALTER TABLE association_category DROP FOREIGN KEY FK_308101A712469DE2');
        $this->addSql('ALTER TABLE favoris DROP FOREIGN KEY FK_8933C432F68F41F7');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649BCB134CE');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D4EBF353');
        $this->addSql('ALTER TABLE association_user_user DROP FOREIGN KEY FK_53F593F5A76ED395');
        $this->addSql('DROP TABLE association');
        $this->addSql('DROP TABLE association_category');
        $this->addSql('DROP TABLE association_user');
        $this->addSql('DROP TABLE association_user_user');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE favoris');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE question_user');
        $this->addSql('DROP TABLE user');
    }
}
