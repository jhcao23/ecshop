DROP TABLE ecs_shipping_category CASCADE;
CREATE TABLE ecs_shipping_category
(
   shipping_category_id    							SMALLINT UNSIGNED   NOT NULL,
   shipping_category_name  							VARCHAR(150)        DEFAULT '' NOT NULL,
   shipping_category_formula_sum        VARCHAR(150)        DEFAULT '' NOT NULL,
   shipping_category_formula_each       VARCHAR(150)        NULL,
   description													TEXT                NOT NULL
)
;
ALTER TABLE ecs_shipping_category
   ADD CONSTRAINT pk_ecs_shipping_category
   PRIMARY KEY (shipping_category_id);

CREATE INDEX shipping_category_id
   ON ecs_shipping_category (shipping_category_id ASC);

INSERT INTO ecs_shipping_category
(
  shipping_category_id,
  shipping_category_name,
  shipping_category_formula_sum,
  shipping_category_formula_each,
  description
)
VALUES
(
  1,
  'simple shipping fee category',
  '(${QUANTITY}%1)*(10+(${QUANTITY}-1)*5)',
  '',
  'first 1 $10 additional $5'
);

alter table ecs_goods add column shipping_category_if_real SMALLINT UNSIGNED default 1 Null;
commit;

INSERT INTO ecs_shipping_category
(
  shipping_category_id,
  shipping_category_name,
  shipping_category_formula_sum,
  shipping_category_formula_each,
  description
)
VALUES
(
  2,
  'simple shipping fee category',
  '(${QUANTITY}%1)*(10+(${QUANTITY}-1)*5)',
  '',
  'first 1 $10 additional $5'
);

update ecs_goods
set shipping_category_if_real= 2
where cat_id not in
(	select distinct cat_id
	from ecs_category
	where cat_id=16 or parent_id=16
)
;
commit;
