#
# Table structure for table 'tx_ownblog_domain_model_blog'
#
CREATE TABLE tx_ownblog_domain_model_blog (

	title varchar(255) DEFAULT '' NOT NULL,
	author varchar(255) DEFAULT '' NOT NULL,
	date date DEFAULT NULL,
	category varchar(255) DEFAULT '' NOT NULL,
	blogtext text,
	picture int(11) unsigned NOT NULL default '0'

);
