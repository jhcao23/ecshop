--sessions.sql
DROP TABLE ecs_sessions CASCADE;
CREATE TABLE ecs_sessions
(
   sesskey    CHAR(32) COLLATE utf8_bin   DEFAULT '' NOT NULL,
   expiry     INT UNSIGNED                DEFAULT 0 NOT NULL,
   userid     MEDIUMINT UNSIGNED          DEFAULT 0 NOT NULL,
   adminid    MEDIUMINT UNSIGNED          DEFAULT 0 NOT NULL,
   ip         CHAR(15)                    DEFAULT '' NOT NULL,
   user_name  VARCHAR(60)                 NOT NULL,
   user_rank  TINYINT                     NOT NULL,
   discount   DECIMAL(3,2)                NOT NULL,
   email      VARCHAR(60)                 NOT NULL,
   data       CHAR(255)                   DEFAULT '' NOT NULL
)
ENGINE=MEMORY;

ALTER TABLE ecs_sessions
   ADD CONSTRAINT pk_ecs_sessions
   PRIMARY KEY (sesskey);

CREATE INDEX expiry
   ON ecs_sessions (expiry);

DROP TABLE ecs_sessions_data CASCADE;
CREATE TABLE ecs_sessions_data
(
   sesskey  VARCHAR(32) COLLATE utf8_bin   DEFAULT '' NOT NULL,
   expiry   INT UNSIGNED                   DEFAULT 0 NOT NULL,
   data     LONGTEXT                       NOT NULL
)
ENGINE=MyISAM;

ALTER TABLE ecs_sessions_data
   ADD CONSTRAINT pk_ecs_sessions_data
   PRIMARY KEY (sesskey);

CREATE INDEX expiry
   ON ecs_sessions_data (expiry ASC);


