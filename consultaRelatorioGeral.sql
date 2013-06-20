SELECT 
inscricao2013.id, 
c1.curso AS  "curso1", 
t1.turno AS "turno1",
c2.curso AS  "curso2", 
t2.turno AS "turno2",
inscricao2013.nome,
inscricao2013.nasc,
inscricao2013.responsavel,
inscricao2013.sexo,
inscricao2013.estado_civil,
inscricao2013.endereco,
inscricao2013.bairro,
inscricao2013.cep,
inscricao2013.comunidade,
inscricao2013.email,
inscricao2013.tel_fixo,
inscricao2013.tel_cel,
inscricao2013.tel_recado,
e.descricao as "escolaridade",
inscricao2013.instituicao_nome,
au.turno as "aulas_horarios",
com.descricao as "comunicacao",
inscricao2013.comunicacao_outro,
m.descricao as "motivacao",
inscricao2013.internet,
internet_usos.descricao,
inscricao2013.internet_acesso_outro,
inscricao2013.internet_acesso_nao_motivo,
co.descricao as "conhecimentos",
atso.descricao as "atividades_sociais",
inscricao2013.atividade_social_nome,
inscricao2013.expectativa
FROM inscricao2013
LEFT JOIN cursos c1 ON c1.sigla = inscricao2013.curso1
LEFT JOIN cursos c2 ON c2.sigla = inscricao2013.curso2
LEFT JOIN turnos t1 ON t1.id = inscricao2013.curso1_turno
LEFT JOIN turnos t2 ON t2.id = inscricao2013.curso2_turno
LEFT JOIN escolaridade_niveis e ON e.cod = inscricao2013.escolaridade_nivel
LEFT JOIN turnos au ON au.id = inscricao2013.aulas_horarios
LEFT JOIN comunicacao_tipos com ON com.id = inscricao2013.comunicacao
LEFT JOIN motivos m ON m.id = inscricao2013.motivacao
LEFT JOIN internet_usos ON internet_usos.id = inscricao2013.internet_acesso
LEFT JOIN conhecimentos co ON co.id = inscricao2013.conhecimentos_info
LEFT JOIN atividadesocial atso ON atso.id = inscricao2013.atividade_social