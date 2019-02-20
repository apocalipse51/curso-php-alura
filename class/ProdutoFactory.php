<?php

class ProdutoFactory {

    private $classes = array('LivroFisico', 'Ebook');

    public function criaPor($tipoProduto, $params) {

        $categoria = new Categoria();

        if(in_array($tipoProduto, $this->classes)) {
            return new $tipoProduto($params['nome'], $params['preco'], $params['descricao'], $categoria, $params['usado']);
        } else {
            return new LivroFisico($params['nome'], $params['preco'], $params['descricao'], $categoria, $params['usado']);
        }

    }    

}