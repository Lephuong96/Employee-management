<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('staffs.list', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStaffRequest $request)
    {
        $staff = new Staff();
        $staff->employee_id = $request->input('employee_id');
        $staff->group_employees = $request->input('group_employees');
        $staff->name = $request->input('name');
        $staff->gender = $request->input('gender');
        $staff->phone_number = $request->input('phone_number');
        $staff->birthday = $request->input('birthday');
        $staff->card_number = $request->input('card_number');
        $staff->email = $request->input('email');
        $staff->address = $request->input('address');
        $staff->save();

        Session::flash('success', 'Tạo mới thành công');
        return redirect()->route('staffs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('staffs.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, $id)
    {
        $staff = Staff::findOrFail($id);
        $staff->employee_id = $request->input('employee_id');
        $staff->group_employees = $request->input('group_employees');

        $staff->name = $request->input('name');
        $staff->gender = $request->input('gender');
        $staff->phone_number = $request->input('phone_number');
        $staff->birthday = $request->input('birthday');
        $staff->card_number = $request->input('card_number');
        $staff->email = $request->input('email');
        $staff->address = $request->input('address');
        $staff->save();


        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('staffs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        Session::flash('success', 'Xóa thành công');
        return redirect()->route('staffs.index');
    }
    public function search(Request $request)
    {

        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('staffs.index');
        }
        $staffs = Staff::where('name', 'LIKE', '%' . $keyword . '%')
            ->paginate(5);
        $totalStaffFilter = count($staffs);

        return view('staffs.list', compact('staffs', 'totalStaffFilter' ));
    }

}
