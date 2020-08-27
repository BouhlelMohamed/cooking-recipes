<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200827191444 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sous_category (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_E022D9412469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_category_recipe (sous_category_id INT NOT NULL, recipe_id INT NOT NULL, INDEX IDX_19113620527FEED1 (sous_category_id), INDEX IDX_1911362059D8A214 (recipe_id), PRIMARY KEY(sous_category_id, recipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sous_category ADD CONSTRAINT FK_E022D9412469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE sous_category_recipe ADD CONSTRAINT FK_19113620527FEED1 FOREIGN KEY (sous_category_id) REFERENCES sous_category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sous_category_recipe ADD CONSTRAINT FK_1911362059D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sous_category_recipe DROP FOREIGN KEY FK_19113620527FEED1');
        $this->addSql('DROP TABLE sous_category');
        $this->addSql('DROP TABLE sous_category_recipe');
    }
}
