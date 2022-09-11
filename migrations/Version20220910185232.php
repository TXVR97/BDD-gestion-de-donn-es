<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220910185232 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agents_spe ADD skills_id INT NOT NULL');
        $this->addSql('ALTER TABLE agents_spe ADD CONSTRAINT FK_5FD082267FF61858 FOREIGN KEY (skills_id) REFERENCES skills (id)');
        $this->addSql('CREATE INDEX IDX_5FD082267FF61858 ON agents_spe (skills_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agents_spe DROP FOREIGN KEY FK_5FD082267FF61858');
        $this->addSql('DROP INDEX IDX_5FD082267FF61858 ON agents_spe');
        $this->addSql('ALTER TABLE agents_spe DROP skills_id');
    }
}
