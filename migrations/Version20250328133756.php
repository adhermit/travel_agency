<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250328133756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE categories ADD trip_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE categories ADD CONSTRAINT FK_3AF34668A5BC2E0E FOREIGN KEY (trip_id) REFERENCES trip (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_3AF34668A5BC2E0E ON categories (trip_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE categories DROP FOREIGN KEY FK_3AF34668A5BC2E0E
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_3AF34668A5BC2E0E ON categories
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE categories DROP trip_id
        SQL);
    }
}
