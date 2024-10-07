<?php

declare(strict_types=1);

namespace CleverAge\ProcessUiBundle\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241007134542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add timezone field to user.';
    }

    public function up(Schema $schema): void
    {
        if ($schema->hasTable('process_user') && !$schema->getTable('process_user')->hasColumn('timezone')) {
            $this->addSql('ALTER TABLE process_user ADD timezone VARCHAR(255) DEFAULT NULL');
        }
    }

    public function down(Schema $schema): void
    {
        if ($schema->hasTable('process_user') && $schema->getTable('process_user')->hasColumn('timezone')) {
            $this->addSql('ALTER TABLE process_user DROP timezone');
        }
    }
}