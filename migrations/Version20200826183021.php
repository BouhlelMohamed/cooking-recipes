<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200826183021 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE item_navbar (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, order_number INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE item_navbar_navbar (item_navbar_id INT NOT NULL, navbar_id INT NOT NULL, INDEX IDX_4609545654D399C5 (item_navbar_id), INDEX IDX_4609545658098F35 (navbar_id), PRIMARY KEY(item_navbar_id, navbar_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE item_navbar_navbar ADD CONSTRAINT FK_4609545654D399C5 FOREIGN KEY (item_navbar_id) REFERENCES item_navbar (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE item_navbar_navbar ADD CONSTRAINT FK_4609545658098F35 FOREIGN KEY (navbar_id) REFERENCES navbar (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE item_navbar_navbar DROP FOREIGN KEY FK_4609545654D399C5');
        $this->addSql('DROP TABLE item_navbar');
        $this->addSql('DROP TABLE item_navbar_navbar');
    }
}
