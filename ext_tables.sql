#
# Add SQL definition of database tables
#
--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
    tx_ku_semi_collapsible_accordion_item int(11) unsigned DEFAULT '0',
);

--
-- Table structure for table 'tx_ku_semi_collapsible_accordion_item'
--
CREATE TABLE tx_ku_semi_collapsible_accordion_item (
    tt_content int(11) unsigned DEFAULT '0',
    header varchar(255) DEFAULT '' NOT NULL,
    bodytext text,
    accordion_item_height varchar(128) DEFAULT '' NOT NULL,
    accordion_record_id varchar(128) DEFAULT '' NOT NULL,
    media int(11) unsigned DEFAULT '0',
    mediaorient varchar(60) DEFAULT '' NOT NULL,
    imagecols tinyint(4) unsigned DEFAULT '1' NOT NULL,
    image_zoom tinyint(3) unsigned DEFAULT '0' NOT NULL,
);