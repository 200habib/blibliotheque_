<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240829075605 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ADD auteur_id INT NOT NULL, ADD user_id INT NOT NULL, ADD date_de_creation DATETIME NOT NULL, DROP date_de_création, CHANGE description description LONGTEXT NOT NULL, CHANGE date_de_publication date_de_publication DATETIME NOT NULL, CHANGE date_de_modification date_de_modification DATETIME NOT NULL');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A33160BB6FE6 FOREIGN KEY (auteur_id) REFERENCES auteur (id)');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A331A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_CBE5A33160BB6FE6 ON book (auteur_id)');
        $this->addSql('CREATE INDEX IDX_CBE5A331A76ED395 ON book (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A33160BB6FE6');
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A331A76ED395');
        $this->addSql('DROP INDEX IDX_CBE5A33160BB6FE6 ON book');
        $this->addSql('DROP INDEX IDX_CBE5A331A76ED395 ON book');
        $this->addSql('ALTER TABLE book ADD date_de_création VARCHAR(255) NOT NULL, DROP auteur_id, DROP user_id, DROP date_de_creation, CHANGE description description VARCHAR(255) NOT NULL, CHANGE date_de_publication date_de_publication VARCHAR(255) NOT NULL, CHANGE date_de_modification date_de_modification VARCHAR(255) NOT NULL');
    }
}
