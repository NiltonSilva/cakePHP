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
}
