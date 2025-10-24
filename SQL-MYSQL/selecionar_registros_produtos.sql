USE gestao_produtos;

SELECT 
    id, 
    nome, 
    quantidade, 
    deletado_em 
FROM 
    produtos 
WHERE 
    quantidade > 5 AND deletado_em IS NULL;