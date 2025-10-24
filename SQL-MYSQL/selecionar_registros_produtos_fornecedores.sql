USE gestao_produtos;

SELECT
    p.nome AS Nome_Produto,
    p.preco AS Preco_Unitario,
    p.quantidade AS Estoque,
    f.razao_social AS Fornecedor,
    f.cnpj AS CNPJ_Fornecedor
FROM
    produtos p
INNER JOIN 
    fornecedores f ON p.fornecedor = f.id
WHERE
    p.deletado_em IS NULL;