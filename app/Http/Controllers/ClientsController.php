<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminClientsRequest;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Http\Request;

use CodeDelivery\Http\Requests;
use CodeDelivery\Services\ClientService;

class ClientsController extends Controller
{
    private $repository;

    public function __construct(ClientRepository $repository, ClientService $clientService)
    {
        $this->repository = $repository;
        $this->clientService = $clientService;
    }

    public function index()
    {
        $clients = $this->repository->paginate();

        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        
        return view('admin.clients.create');
    }

    public function store(AdminClientsRequest $request)
    {
        $data = $request->all();
        $this->clientService->create($data);

        return redirect()->route('admin.clients.index');
    }

    public function edit($id)
    {
        $clients = $this->repository->find($id);

        return view('admin.clients.edit', compact('clients'));
    }

    public function update(AdminClientsRequest $request, $id)
    {
        $data = $request->all();
        $this->clientService->update($data, $id);

        return redirect()->route('admin.clients.index');
    }

}
