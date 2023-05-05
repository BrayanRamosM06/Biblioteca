CREATE TABLE tb_users(
    id_user         INT  (11)       NOT NULL        AUTO_INCREMENT      PRIMARY KEY,
    nombre          varchar(255)    NOT NULL,
    apellidos       varchar(255)    NOT NULL,
    DUI             VARCHAR(10)     NOT NULL,
    celular         VARCHAR(255)    NULL,
    cargo           VARCHAR(155)    NOT NULL,
    email           varchar(255)    NOT NULL,
    pass            TEXT            NOT NULL,
    fyhCreacion      DATEtIME        NOT NULL,
    fyhActualizacion    DATETIME NOT NULL,
    estado          VARCHAR(11)     NOT NULL
);