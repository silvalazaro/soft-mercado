-- Adminer 4.8.1 PostgreSQL 15.0 (Debian 15.0-1.pgdg110+1) dump
DROP TABLE IF EXISTS "produtos";
DROP SEQUENCE IF EXISTS produtos_id_seq;
CREATE SEQUENCE produtos_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 3 CACHE 1;

CREATE TABLE "public"."produtos" (
    "id" integer DEFAULT nextval('produtos_id_seq') NOT NULL,
    "nome" character varying(200) NOT NULL,
    CONSTRAINT "produtos_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "produtos" ("id", "nome") VALUES
(2,	'produto 1'),
(3,	'produto 1');

DROP TABLE IF EXISTS "tipo_produto";
DROP SEQUENCE IF EXISTS tipo_produto_id_seq;
CREATE SEQUENCE tipo_produto_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 4 CACHE 1;

CREATE TABLE "public"."tipo_produto" (
    "id" integer DEFAULT nextval('tipo_produto_id_seq') NOT NULL,
    "nome" character varying(200) NOT NULL,
    "imposto" money,
    CONSTRAINT "tipo_produto_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "tipo_produto" ("id", "nome", "imposto") VALUES
(1,	'Alimentos 1',	NULL),
(2,	'Alimentos 1',	NULL),
(3,	'produto 1',	NULL),
(4,	'produto 1',	NULL);

-- 2022-10-24 15:30:34.155787+00