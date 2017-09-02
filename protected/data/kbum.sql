CREATE TABLE usuario (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre TEXT NOT NULL,
    email TEXT  NOT NULL,
    puesto TEXT  NOT NULL,
    password TEXT  NOT NULL,
    status INT,
    tusuario INT,
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE empresadirector (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    iempresa INT NOT NULL,
    iddirector INT NOT NULL,
    CONSTRAINT fk_emp_dir FOREIGN KEY (iddirector) REFERENCES usuario (id) ON DELETE CASCADE ON UPDATE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE empresa (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    folio TEXT ,
    nombre TEXT  NOT NULL,
    empleados INT NOT NULL,
    giro TEXT  NOT NULL,
    razonsocial TEXT  NOT NULL,
    ubicacion TEXT  NOT NULL,
    email TEXT  NOT NULL,
    sitioweb TEXT ,
    acteconomica TEXT  NOT NULL,
    telefono INT,
    nombrejefe TEXT  NOT NULL,
    emailjefe TEXT  NOT NULL,
    anios TEXT  NOT NULL,
    tamanio TEXT  NOT NULL,
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE puesto (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre TEXT  NOT NULL,
    idusuario INT NOT NULL,
    tusuario INT NOT NULL,
    idempresa INT NOT NULL,
    CONSTRAINT fk_usu_puesto FOREIGN KEY (idusuario) REFERENCES usuario (id)
    CONSTRAINT fk_empre_puesto FOREIGN KEY (idempresa) REFERENCES empresa (id) ON DELETE CASCADE ON UPDATE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE test (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idempresa INT,
    idusuario INT,
    CONSTRAINT fk_test_usuario FOREIGN KEY (idusuario) REFERENCES usuario (id)
    CONSTRAINT fk_test_empresa FOREIGN KEY (idempresa) REFERENCES empresa (id) ON DELETE CASCADE ON UPDATE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE preguntas (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pregunta TEXT ,
    idtest INT,
    CONSTRAINT fk_pre_test FOREIGN KEY (idtest) REFERENCES test (id) ON DELETE CASCADE ON UPDATE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
