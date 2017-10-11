<?php
/**
 * Classe resposável por gerenciar os sorteios que serão realizados.
 */

App::uses('AppController', 'Controller');

class SorteioController extends AppController {


    public $uses = array();
    public function index() {
        $this->layout = null;
    }
}
