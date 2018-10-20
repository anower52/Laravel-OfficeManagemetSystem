<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDepartmentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $result = DB::table('department')
//            ->get();
        $result = Department::all();

        return view('department.list')
            ->with('deptlist' , $result);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDepartmentRequest $request)
    {
//        $data = [
//            'department_name' => $request->dname,
//            'location' => $request->loc
//        ];
//        DB::table('departments')
//            ->insert($data);
        $dept = new Department();
        $dept -> department_name = $request->dname;
        $dept -> location = $request-> loc;
        $dept -> save();

        return redirect()->route('department.list');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $dept = DB::table('departments')
//            ->where('id' , $id)
//            ->first();
        $dept = Department::find($id);

        return view('department.edit')
            ->with('department', $dept);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $data = [
//          'department_name' => $request->dname,
//            'location' => $request->loc
//        ];
//
//        DB::table('departments')
//            ->where('id',$request->did)
//            ->update($data);

        $deptToUpdate = Department::find($request->did);
        $deptToUpdate -> department_name = $request->dname;
        $deptToUpdate -> location = $request->loc;
        $deptToUpdate -> save();


        return redirect()->route('department.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
//        $dept = DB::table('departments')
//            ->where('id' , $id)
//            ->first();
        $dept = Department::find($id);

        return view('department.delete')
            ->with('department' , $dept);
        //
    }
    public function destroy(Request $request)
    {
//        DB::table('departments')
//            ->where('id',$request->did)
//            ->delete();
        $deptToDelete = Department::find($request->did);
        $deptToDelete -> delete();

        return redirect()->route('department.list');
        //
    }
}
