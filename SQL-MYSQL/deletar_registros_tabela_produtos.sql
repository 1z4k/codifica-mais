-- Pode ser usado tambem a forma (DELETE)
-- Ex. DELETE FROM ___deletado_em___ WHERE id = x;
USE gestao_produtos;

UPDATE produtos 
SET deletado_em = CURRENT_TIMESTAMP() 
WHERE id = 6;