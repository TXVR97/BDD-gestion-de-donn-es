<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220911090134 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE missions DROP specialite, DROP agents, DROP contacts, DROP cibles, DROP planques');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE missions ADD specialite VARCHAR(255) DEFAULT NULL, ADD agents VARCHAR(255) NOT NULL, ADD contacts VARCHAR(255) NOT NULL, ADD cibles VARCHAR(255) NOT NULL, ADD planques VARCHAR(255) NOT NULL');
    }
}
