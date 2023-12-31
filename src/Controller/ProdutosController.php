<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ProdutosController extends AppController
{
    public function index()
    {
        $produtosTable = TableRegistry::getTableLocator()->get('Produtos');
        $produtos = $produtosTable->find('all');

        $this->set('produtos', $produtos);
    }

    public function novo()
    {
        $produtosTable = TableRegistry::getTableLocator()->get('Produtos');
        $produto = $produtosTable->newEmptyEntity();
        $this->set('produto', $produto);
    }
}
