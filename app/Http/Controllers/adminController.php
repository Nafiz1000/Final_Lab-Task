<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use App\Http\Requests\employeeRequest;

class adminController extends Controller
{
    public function adminhome(){
        if(session('type')=='Admin')
        {
            return view('admin.home');     
        }
        else
        {
            return redirect('/login');
        }
    } 

     public function employeelist(){
        if(session('type')=='Admin')
        {
            $employee = Employee::all();
            return view('admin.employeelist')->with('employees', $employee);     
        }
        else
        {
            return redirect('/login');
        }
    } 

     public function create(){
        if(session('type')=='Admin')
        {
           return view('admin.create');    
        }
        else
        {
            return redirect('/login');
        }
    }

    public function store(employeeRequest $req){
        if(session('type')=='Admin')
        {
            $employee = new Employee();

            $employee->name         = $req->name;
            $employee->CompanyName  = $req->CompanyName;
            $employee->username     = $req->username;
            $employee->password     = $req->password;
            $employee->contactno    = $req->contactno;
            $employee->type         = $req->type;

            if($employee->save()){
                return redirect()->route('admin.employeelist');
            }    
        }
        else
        {
            return redirect('/login');
        }
    }

    public function edit($id){
        if(session('type')=='Admin')
        {
           $employee = Employee::find($id);
           return view('admin.edit', $employee);
        }
        else
        {
            return redirect('/login');
        } 
    }

    public function update($id, employeeRequest $req){
        if(session('type')=='Admin')
        {
            $employee = Employee::find($id);

            $employee->name         = $req->name;
            $employee->CompanyName  = $req->CompanyName;
            $employee->contactno    = $req->contactno;
            $employee->username     = $req->username;
            $employee->password     = $req->password;
            $employee->type         = $req->type;
            $employee->save();

            if($employee->save()){
                return redirect()->route('admin.employeelist');
            }  
        }
        else
        {
            return redirect('/login');
        } 
        
    }

     public function show($id){
        if(session('type')=='Admin')
        {
           $employee = Employee::find($id);
           return view('admin.show', $employee);
        }
        else
        {
            return redirect('/login');
        } 
        
    }

     public function delete($id){
        if(session('type')=='Admin')
        {
           $employee = Employee::find($id);
           return view('admin.delete', $employee);
        }
        else
        {
            return redirect('/login');
        } 
    }

    public function destroy($id){
        if(session('type')=='Admin')
        {
            $employee = Employee::find($id);
            if($employee->delete()){
                return redirect()->route('admin.employeelist');
            }
        }
        else
        {
            return redirect('/login');
        } 
    }

    public function index2()
    {
     return view('admin.users');
    }

    public function search(Request $request)
    {
      
       if($request->ajax()){
    
         $output="";
         $employees = Employee::where('username','LIKE','%'.$request->search."%")->get();
         
         if($employees){
      
            foreach ($employees as  $employee) {
            
             $output.='<tr>'.
             
             '<td>'.$employee->id.'</td>'.

             '<td>'.$employee->name.'</td>'.
             
             '<td>'.$employee->username.'</td>'.
             
             '<td>'.$employee->CompanyName.'</td>'.
             
             
             
             '</tr>';
         
            }
            return $output;  
 
         }
   
       }
 
    }
}
