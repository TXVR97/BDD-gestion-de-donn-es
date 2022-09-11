<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220909152338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE administrateurs CHANGE nom nom VARCHAR(50) NOT NULL, CHANGE prenom prenom VARCHAR(50) NOT NULL, CHANGE password password VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE agents CHANGE nom nom VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE missions ADD speciality_id INT NOT NULL');
        $this->addSql('ALTER TABLE missions ADD CONSTRAINT FK_34F1D47E3B5A08D7 FOREIGN KEY (speciality_id) REFERENCES specialites (id)');
        $this->addSql('CREATE INDEX IDX_34F1D47E3B5A08D7 ON missions (speciality_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE administrateurs CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE password password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE agents CHANGE nom nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE missions DROP FOREIGN KEY FK_34F1D47E3B5A08D7');
        $this->addSql('DROP INDEX IDX_34F1D47E3B5A08D7 ON missions');
        $this->addSql('ALTER TABLE missions DROP speciality_id');
    }
}
