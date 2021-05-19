<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210409145025 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dresseurs (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pokemons_dresseurs (pokemons_id INT NOT NULL, dresseurs_id INT NOT NULL, INDEX IDX_7A5892BB263F4792 (pokemons_id), INDEX IDX_7A5892BBCB0983B2 (dresseurs_id), PRIMARY KEY(pokemons_id, dresseurs_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pokemons_dresseurs ADD CONSTRAINT FK_7A5892BB263F4792 FOREIGN KEY (pokemons_id) REFERENCES pokemons (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pokemons_dresseurs ADD CONSTRAINT FK_7A5892BBCB0983B2 FOREIGN KEY (dresseurs_id) REFERENCES dresseurs (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemons_dresseurs DROP FOREIGN KEY FK_7A5892BBCB0983B2');
        $this->addSql('DROP TABLE dresseurs');
        $this->addSql('DROP TABLE pokemons_dresseurs');
    }
}
