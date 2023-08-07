<?php
App::uses('Filmes', 'Model');

class CategoriasController extends AppController
{
    public function index()
    {
        $this->paginate = array('limit' => 10);
        $categorias = $this->paginate('Categoria');
        $this->set('categorias', $categorias);
    }

    public function add()
    {
        if ($this->request->is('post')) {
            if ($this->Categoria->save($this->request->data)) {
                $this->Flash->success('Categoria cadastrada com sucesso');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error('Erro ao cadastrar categoria.');
            }
        }
    }

    public function edit($id)
    {
        $categoria = $this->Categoria->findById($id);
        if (!$categoria) {
            $this->Flash->error('Categoria não encontrado.');
            $this->redirect(array('action' => 'index'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Categoria->id = $id;
            if ($this->Categoria->save($this->request->data)) {
                $this->Flash->success('Categoria atualizado com sucesso.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error('Erro ao atualizar o filme.');
            }
        } else {
            $this->request->data = $categoria;
        }
        $this->set('categoria', $categoria);
    }
    public function delete($id)
{
    if ($this->request->is('delete')) {
        // Verifique se a categoria está sendo usada na model Filmes
        $this->loadModel('Filmes');
        $filmesComCategoria = $this->Filmes->find('count', array(
            'conditions' => array('Filmes.categoria_id' => $id)
        ));

        if ($filmesComCategoria > 0) {
            $this->Flash->error('Erro ao excluir a Categoria. A categoria está sendo utilizada em Filmes.');
        } else {
            if ($this->Categoria->delete($id)) {
                $this->Flash->success('Categoria excluída com sucesso.');
            } else {
                $this->Flash->error('Erro ao excluir a Categoria.');
            }
        }

        $this->redirect(array('action' => 'index'));
    } else {
        throw new MethodNotAllowedException();
    }
}

}
