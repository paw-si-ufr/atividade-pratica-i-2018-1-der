CREATE TABLE evento (
  idevento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario_idusuario INTEGER UNSIGNED NOT NULL,
  titulo VARCHAR(255) NULL,
  descricao VARCHAR(255) NULL,
  data_2 DATE NULL,
  horaraio TIME NULL,
  imagem VARCHAR(255) NULL,
  local_2 VARCHAR(255) NULL,
  valor DOUBLE NULL,
  vagas INTEGER UNSIGNED NULL,
  PRIMARY KEY(idevento, usuario_idusuario),
  INDEX evento_FKIndex1(usuario_idusuario)
);

CREATE TABLE inscricao (
  idinscricao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  data_2 DATE NULL,
  hora TIME NULL,
  PRIMARY KEY(idinscricao)
);

CREATE TABLE inscricao_has_evento (
  inscricao_idinscricao INTEGER UNSIGNED NOT NULL,
  evento_usuario_idusuario INTEGER UNSIGNED NOT NULL,
  evento_idevento INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(inscricao_idinscricao, evento_usuario_idusuario, evento_idevento),
  INDEX inscricao_has_evento_FKIndex1(inscricao_idinscricao),
  INDEX inscricao_has_evento_FKIndex2(evento_idevento, evento_usuario_idusuario)
);

CREATE TABLE usuario (
  idusuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_usuario VARCHAR(255) NULL,
  rga VARCHAR(255) NULL,
  senha VARCHAR(255) NULL,
  PRIMARY KEY(idusuario)
);


