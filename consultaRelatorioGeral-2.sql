SELECT 
inscricao2013_2.id, 
c1.curso AS  "curso1", 
t1.turno AS "turno1",
c2.curso AS  "curso2", 
t2.turno AS "turno2",
inscricao2013_2.nome,
inscricao2013_2.nasc,
inscricao2013_2.responsavel,
inscricao2013_2.sexo,
inscricao2013_2.endereco,
inscricao2013_2.bairro,
inscricao2013_2.cep,
inscricao2013_2.comunidade,
inscricao2013_2.email,
inscricao2013_2.tel_fixo,
inscricao2013_2.tel_cel,
inscricao2013_2.tel_recado,
e.descricao as "escolaridade",
au.turno as "aulas_horarios",
inscricao2013_2.internet,
internet_usos.descricao,
inscricao2013_2.internet_acesso_outro,
co.descricao as "conhecimentos",
inscricao2013_2.expectativa
FROM inscricao2013_2
LEFT JOIN cursos c1 ON c1.sigla = inscricao2013_2.curso1
LEFT JOIN cursos c2 ON c2.sigla = inscricao2013_2.curso2
LEFT JOIN turnos t1 ON t1.id = inscricao2013_2.curso1_turno
LEFT JOIN turnos t2 ON t2.id = inscricao2013_2.curso2_turno
LEFT JOIN escolaridade_niveis e ON e.cod = inscricao2013_2.escolaridade_nivel
LEFT JOIN turnos au ON au.id = inscricao2013_2.aulas_horarios
LEFT JOIN internet_usos ON internet_usos.id = inscricao2013_2.internet_acesso
LEFT JOIN conhecimentos co ON co.id = inscricao2013_2.conhecimentos_info
