<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220911090631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE missions ADD agents_spec_id INT NOT NULL');
        $this->addSql('ALTER TABLE missions ADD CONSTRAINT FK_34F1D47E8CD32DA5 FOREIGN KEY (agents_spec_id) REFERENCES agents_spe (id)');
        $this->addSql('CREATE INDEX IDX_34F1D47E8CD32DA5 ON missions (agents_spec_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE missions DROP FOREIGN KEY FK_34F1D47E8CD32DA5');
        $this->addSql('DROP INDEX IDX_34F1D47E8CD32DA5 ON missions');
        $this->addSql('ALTER TABLE missions DROP agents_spec_id');
    }
}
