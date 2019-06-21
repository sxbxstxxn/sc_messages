CREATE TABLE tx_scmessages_domain_model_message (
   uid int(11) unsigned NOT NULL auto_increment,
   pid int(11) DEFAULT '0' NOT NULL,

   id int(11) DEFAULT '0' NOT NULL,

   PRIMARY KEY (uid),
   KEY parent (pid)
);