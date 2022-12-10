<?php

namespace App\Http\Controllers;

use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct(protected CompanyRepository $company)
    {
    }

    protected function getcontacts()
    {
        return [
            ['id' => 1, 'name' => 'Name 1', 'phone' => '1234567890'],
            ['id' => 2, 'name' => 'Name 2', 'phone' => '2345678901'],
            ['id' => 3, 'name' => 'Name 3', 'phone' => '3456789012'],
        ];
    }

    public function index(CompanyRepository $company)
    {
        $companies =  $company->pluck();
        $contacts = $this->getcontacts();

        return view('contact.index', compact('contacts', 'companies'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function edit($id)
    {
        $contacts = $this->getcontacts();
        abort_if(!isset($contacts[$id]), 404);
        $contact = $contacts[$id];
        return view('contact.edit');
    }

    public function show($id)
    {
        $contacts = $this->getcontacts();
        abort_if(!isset($contacts[$id]), 404);
        $contact = $contacts[$id];
        return view('contact.id')->with('contact', $contact);
    }
}
