<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    //login , logout , Register
    public function login(){
        return view('login');
    }
    
    public function signup(){
        return view('login');
    }

    public function logout(){
        return view('login');
    }

    public function register(){
        return view('employee.register');
    }

    //home page
    public function index(){
        return view('employee.index');
    }

    //Addresses
    public function addAddr(){
        return view('addresses.addaddresses');
    }

    public function saveAddr(){
        return view('employee.index');
    }

    public function editAddr(){
        return view('addresses.editaddresses');
    }

    //Employees
    public function addEmp(){
        return view('employee.addemployee');
    }

    public function saveEmp(){
        return view('employee.index');
    }

    public function editEmp(){
        return view('employee.editemployee');
    }

    public function removedEmp(){
        return view('employee.removedemployee');
    }

}
