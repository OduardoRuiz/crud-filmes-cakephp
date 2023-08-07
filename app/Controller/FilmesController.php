<?php
class FilmesController extends AppController
{
    public function index()
    {
        $this->paginate = array('limit' => 9); // Define a quantidade de filmes por página
        $filmes = $this->paginate('Filme');
        $this->set('filmes', $filmes);
    }

    public function view($id)
    {
        $filme = $this->Filme->findById($id);
        $this->set('filme', $filme);
    }

    public function add()
    {
        // Recuperar as categorias do banco de dados
        $categorias = $this->Filme->Categoria->find('list', array('fields' => array('id', 'nome')));

        // Verificar se há categorias disponíveis
        if (empty($categorias)) {
            $this->Flash->error('Não há categorias disponíveis para cadastro de filmes.');
            $this->redirect(array('action' => 'indexCrud'));
        }

        if ($this->request->is('post')) {
            // Verificando se foi enviado um arquivo de capa
            if (!empty($this->request->data['Filme']['capa']['name'])) {
                $capaName = $this->uploadFile(); // Verificar se o upload foi bem-sucedido
                if ($capaName) {
                    $this->request->data['Filme']['capa'] = $capaName;
                } else {
                    // Houve um erro no upload, redirecionar para a página de cadastro com a mensagem de erro
                    $this->Flash->error('Erro ao fazer o upload da capa do filme.');
                    $this->redirect(array('action' => 'add'));
                }
            }

            if ($this->Filme->save($this->request->data)) {
                $this->Flash->success('Filme cadastrado com sucesso.');
                $this->redirect(array('action' => 'indexCrud'));
            } else {
                $this->Flash->error('Erro ao cadastrar o filme.');
            }
        }
        // Passar as categorias para a view
        $this->set('categorias', $categorias);
    }





    public function edit($id)
    {
        // Recuperar o filme e categorias do banco de dados
        $filme = $this->Filme->findById($id);
        $categorias = $this->Filme->Categoria->find('list', array('fields' => array('id', 'nome')));

        if (!$filme) {
            $this->Flash->error('Filme não encontrado.');
            $this->redirect(array('action' => 'index'));
        }

        if ($this->request->is(array('post', 'put'))) {
            // Verificar se foi enviado um novo arquivo de capa
            if (!empty($this->request->data['Filme']['capa']['name'])) {
                $capaName = $this->uploadFile(); // Verificar se o upload foi bem-sucedido

                if ($capaName) {
                    $this->request->data['Filme']['capa'] = $capaName;
                } else {
                    // Houve um erro no upload, redirecionar para a página de edição com a mensagem de erro
                    $this->Flash->error('Erro ao fazer o upload da capa do filme.');
                    $this->redirect(array('action' => 'edit', $id));
                }
            } else {
                // Se nenhum novo arquivo de capa foi enviado, manter o valor atual do campo 'capa' no banco de dados
                $this->request->data['Filme']['capa'] = $filme['Filme']['capa'];
            }

            $this->Filme->id = $id;
            if ($this->Filme->save($this->request->data)) {
                $this->Flash->success('Filme atualizado com sucesso.');
                $this->redirect(array('action' => 'indexCrud'));
            } else {
                $this->Flash->error('Erro ao atualizar o filme.');
            }
        } else {
            $this->request->data = $filme;
        }

        // Passar as categorias e o filme para a view
        $this->set('categorias', $categorias);
        $this->set('filme', $filme);
    }



    private function uploadFile()
    {
        $file = $this->request->data['Filme']['capa'];
        $filename = WWW_ROOT . 'media' . DS . 'filmes' . DS . $file['name'];

        if (move_uploaded_file($file['tmp_name'], $filename)) {
            return $file['name']; // Apenas o nome do arquivo é retornado
        } else {
            return false; // Retorna false em caso de erro no upload
        }
    }

    public function delete($id)
    {
        if ($this->request->is('delete')) {
            $filme = $this->Filme->findById($id);
            if (!$filme) {
                throw new NotFoundException('Filme não encontrado');
            }
            // Remover a imagem do filme
            $capa = $filme['Filme']['capa'];
            $caminhoCompleto = WWW_ROOT . 'media/filmes/' . $capa;
            if (file_exists($caminhoCompleto)) {
                unlink($caminhoCompleto);
            }
            // Excluir o registro do filme do banco de dados
            if ($this->Filme->delete($id)) {
                $this->Flash->success('Filme excluído com sucesso.');
            } else {
                $this->Flash->error('Erro ao excluir o filme.');
            }
            $this->redirect(array('action' => 'indexCrud'));
        } else {
            throw new MethodNotAllowedException();
        }
    }
    
    public function indexCrud()
    {
        $this->paginate = array('limit' => 5); // Define a quantidade de filmes por página
        $filmes = $this->paginate('Filme'); 
        $this->set('filmes', $filmes);
    }
}
