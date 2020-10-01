<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201001155636 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tiket_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE member_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE timetable_item_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE location_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE notification_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE task_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE transport_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE document_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE part_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE equipment_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE person_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE event_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE comment_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE nutrition_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE product (id INT NOT NULL, nutrition_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, quantity DOUBLE PRECISION NOT NULL, price INT DEFAULT 0 NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D34A04ADB5D724CD ON product (nutrition_id)');
        $this->addSql('CREATE TABLE tiket (id INT NOT NULL, person_id INT DEFAULT NULL, departure_from VARCHAR(255) NOT NULL, arrive_to VARCHAR(255) NOT NULL, departure_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, arrive_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, booking_number VARCHAR(255) DEFAULT NULL, voyage_number VARCHAR(255) DEFAULT NULL, seat_number VARCHAR(255) DEFAULT NULL, luggage_weight VARCHAR(255) DEFAULT NULL, price INT DEFAULT 0 NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_873E079D217BBB47 ON tiket (person_id)');
        $this->addSql('COMMENT ON COLUMN tiket.departure_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN tiket.arrive_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE member (id INT NOT NULL, invited_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, confirmed_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, event_id INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_70E4FA7871F7E88B ON member (event_id)');
        $this->addSql('COMMENT ON COLUMN member.invited_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN member.confirmed_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE timetable_item (id INT NOT NULL, person_id INT DEFAULT NULL, event_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, start_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, end_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8A27CF10217BBB47 ON timetable_item (person_id)');
        $this->addSql('CREATE INDEX IDX_8A27CF1071F7E88B ON timetable_item (event_id)');
        $this->addSql('COMMENT ON COLUMN timetable_item.start_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN timetable_item.end_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE location (id INT NOT NULL, person_id INT DEFAULT NULL, event_id INT DEFAULT NULL, address VARCHAR(255) NOT NULL, cost INT DEFAULT 0 NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5E9E89CB217BBB47 ON location (person_id)');
        $this->addSql('CREATE INDEX IDX_5E9E89CB71F7E88B ON location (event_id)');
        $this->addSql('CREATE TABLE notification (id INT NOT NULL, person_id INT DEFAULT NULL, event_id INT DEFAULT NULL, message TEXT NOT NULL, planned_sent_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, sent_date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_BF5476CA217BBB47 ON notification (person_id)');
        $this->addSql('CREATE INDEX IDX_BF5476CA71F7E88B ON notification (event_id)');
        $this->addSql('COMMENT ON COLUMN notification.planned_sent_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN notification.sent_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE task (id INT NOT NULL, person_id INT DEFAULT NULL, part_id INT DEFAULT NULL, text TEXT NOT NULL, transmitted_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, confirmed_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_527EDB25217BBB47 ON task (person_id)');
        $this->addSql('CREATE INDEX IDX_527EDB254CE34BEC ON task (part_id)');
        $this->addSql('COMMENT ON COLUMN task.transmitted_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN task.confirmed_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE transport (id INT NOT NULL, event_id INT DEFAULT NULL, cost INT DEFAULT 0 NOT NULL, type VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_66AB212E71F7E88B ON transport (event_id)');
        $this->addSql('CREATE TABLE document (id INT NOT NULL, person_id INT DEFAULT NULL, event_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, cost INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D8698A76217BBB47 ON document (person_id)');
        $this->addSql('CREATE INDEX IDX_D8698A7671F7E88B ON document (event_id)');
        $this->addSql('CREATE TABLE part (id INT NOT NULL, event_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, part_id INT NOT NULL, confirmed_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_490F70C671F7E88B ON part (event_id)');
        $this->addSql('COMMENT ON COLUMN part.confirmed_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE equipment (id INT NOT NULL, timetable_item_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, cost INT DEFAULT 0 NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D338D583930F1820 ON equipment (timetable_item_id)');
        $this->addSql('CREATE TABLE person (id INT NOT NULL, first_name VARCHAR(255) NOT NULL, middle_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, discr VARCHAR(255) NOT NULL, api_token VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_34DCD1767BA2F5EB ON person (api_token)');
        $this->addSql('CREATE TABLE event (id INT NOT NULL, organizer_id INT DEFAULT NULL, nutrition_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, start_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, end_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3BAE0AA7876C4DDA ON event (organizer_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3BAE0AA7B5D724CD ON event (nutrition_id)');
        $this->addSql('COMMENT ON COLUMN event.start_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN event.end_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE comment (id INT NOT NULL, part_id INT DEFAULT NULL, text TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_9474526C4CE34BEC ON comment (part_id)');
        $this->addSql('CREATE TABLE nutrition (id INT NOT NULL, event_id INT DEFAULT NULL, persons_count INT DEFAULT NULL, cost INT DEFAULT 0 NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B7C360F171F7E88B ON nutrition (event_id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADB5D724CD FOREIGN KEY (nutrition_id) REFERENCES nutrition (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE tiket ADD CONSTRAINT FK_873E079D217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE timetable_item ADD CONSTRAINT FK_8A27CF10217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE timetable_item ADD CONSTRAINT FK_8A27CF1071F7E88B FOREIGN KEY (event_id) REFERENCES event (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CB217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CB71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CA217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CA71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB25217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB254CE34BEC FOREIGN KEY (part_id) REFERENCES part (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT FK_66AB212E71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A7671F7E88B FOREIGN KEY (event_id) REFERENCES event (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE part ADD CONSTRAINT FK_490F70C671F7E88B FOREIGN KEY (event_id) REFERENCES event (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D583930F1820 FOREIGN KEY (timetable_item_id) REFERENCES timetable_item (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7876C4DDA FOREIGN KEY (organizer_id) REFERENCES person (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7B5D724CD FOREIGN KEY (nutrition_id) REFERENCES nutrition (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C4CE34BEC FOREIGN KEY (part_id) REFERENCES part (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE nutrition ADD CONSTRAINT FK_B7C360F171F7E88B FOREIGN KEY (event_id) REFERENCES event (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE equipment DROP CONSTRAINT FK_D338D583930F1820');
        $this->addSql('ALTER TABLE task DROP CONSTRAINT FK_527EDB254CE34BEC');
        $this->addSql('ALTER TABLE comment DROP CONSTRAINT FK_9474526C4CE34BEC');
        $this->addSql('ALTER TABLE tiket DROP CONSTRAINT FK_873E079D217BBB47');
        $this->addSql('ALTER TABLE timetable_item DROP CONSTRAINT FK_8A27CF10217BBB47');
        $this->addSql('ALTER TABLE location DROP CONSTRAINT FK_5E9E89CB217BBB47');
        $this->addSql('ALTER TABLE notification DROP CONSTRAINT FK_BF5476CA217BBB47');
        $this->addSql('ALTER TABLE task DROP CONSTRAINT FK_527EDB25217BBB47');
        $this->addSql('ALTER TABLE document DROP CONSTRAINT FK_D8698A76217BBB47');
        $this->addSql('ALTER TABLE event DROP CONSTRAINT FK_3BAE0AA7876C4DDA');
        $this->addSql('ALTER TABLE timetable_item DROP CONSTRAINT FK_8A27CF1071F7E88B');
        $this->addSql('ALTER TABLE location DROP CONSTRAINT FK_5E9E89CB71F7E88B');
        $this->addSql('ALTER TABLE notification DROP CONSTRAINT FK_BF5476CA71F7E88B');
        $this->addSql('ALTER TABLE transport DROP CONSTRAINT FK_66AB212E71F7E88B');
        $this->addSql('ALTER TABLE document DROP CONSTRAINT FK_D8698A7671F7E88B');
        $this->addSql('ALTER TABLE part DROP CONSTRAINT FK_490F70C671F7E88B');
        $this->addSql('ALTER TABLE nutrition DROP CONSTRAINT FK_B7C360F171F7E88B');
        $this->addSql('ALTER TABLE product DROP CONSTRAINT FK_D34A04ADB5D724CD');
        $this->addSql('ALTER TABLE event DROP CONSTRAINT FK_3BAE0AA7B5D724CD');
        $this->addSql('DROP SEQUENCE product_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tiket_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE member_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE timetable_item_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE location_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE notification_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE task_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE transport_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE document_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE part_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE equipment_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE person_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE event_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE comment_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE nutrition_id_seq CASCADE');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE tiket');
        $this->addSql('DROP TABLE member');
        $this->addSql('DROP TABLE timetable_item');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE task');
        $this->addSql('DROP TABLE transport');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE part');
        $this->addSql('DROP TABLE equipment');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE nutrition');
    }
}
