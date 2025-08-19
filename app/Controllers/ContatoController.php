<?php

namespace App\Controllers;

use App\Models\ContatoModel;
use CodeIgniter\Controller;

class ContatoController extends Controller
{
    public function enviar()
    {
        $model = new ContatoModel();

        $data = [
            'nome'     => $this->request->getPost('nome'),
            'email'    => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'empresa'  => $this->request->getPost('empresa'),
            'assunto'  => $this->request->getPost('assunto'),
            'mensagem' => $this->request->getPost('mensagem'),
            'aceite'   => $this->request->getPost('aceite') ? 1 : 0,
        ];

        $model->insert($data);

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
    public function index()
    {
        $model = new ContatoModel();
        $data['contatos'] = $model->findAll();

        return view('admin/contatos/index', $data);
    }

    public function show($id)
    {
        $model = new ContatoModel();
        $data['contato'] = $model->find($id);

        if (!$data['contato']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Contato não encontrado");
        }

        return view('admin/contatos/show', $data);
    }

    public function delete($id)
    {
        $model = new ContatoModel();
        $model->delete($id);

        return redirect()->to('/admin/contatos')->with('success', 'Contato removido com sucesso');
    }
}