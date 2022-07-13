<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\HistoryLogs;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::where('role', 3)->paginate(10);
        return view('admin.member.index', compact('members'));
    }

    public function create()
    {
        return view('admin.member.create');
    }

    public function store(StoreMemberRequest $request)
    {
        $hashed_password = Hash::make($request->password);
        User::create([
            'role' => 3,
            'name' => $request->name,
            'email' => $request->email,
            'email verified at' => Null,
            'password' => $hashed_password,
        ]);
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Added a ' . $request->name . ' as a member.'
        ]);
        return redirect()->route('admin.member.index')->with('success', 'Member Added Successfully');
    }

    public function edit($id)
    {
        $member = User::findOrFail($id);
        return view('admin.member.edit', compact('member'));
    }

    public function update($id, UpdateMemberRequest $request)
    {
        $member = User::whereId($id)->firstOrFail();
        $member->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Edit ' . $request->name . '\'s details.'
        ]);
        return redirect()->route('admin.member.index')->with('success', 'Member Updated Successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Delete member profile of ' . $user->name . '.'
        ]);
        return redirect()->back()->with('success', 'Member removed Successfully');
    }

    public function search(Request $request)
    {
        $output = '';
        $members = User::where('name', 'Like', '%' . $request->search . '%')->where('role', 3)->paginate(10);
        if (!$members->isEmpty()) {
            foreach ($members as $member) {
                $verified = '';
                $not_verified = '';
                if ($member->email_verified_at) {
                    $verified = '<span class="badge badge-success">Verified</span>';
                } else {
                    $not_verified = '<span class="badge badge-danger">Not Verified</span>';
                }
                $output .= '<tr>
                        <td>' . $member->id . '</td>
                        <td>' . $member->name . '</td>
                        <td class="d-none d-md-table-cell">' . $member->email . '</td>
                        <td>' . $member->mobile . '</td>
                        <td class="d-none d-md-table-cell">' . $member->degree_program . '</td>
                        <td class="d-none d-md-table-cell">' . $member->year . '</td>
                        <td class="d-none d-md-table-cell">' . $member->address_line1 . ', ' . $member->address_line2 . ', ' . $member->city
                    . ', ' . $member->province . ' </td >
                         <td>' . $verified . $not_verified . ' </td >
                         <td class="d-none d-md-flex">' . '
                         <a href = "member/' . $member->id . '/edit" class="pl-1" > ' . '
                                <button type = "button" class="btn btn-dark" > ' . '<i
                                        class="fa-duotone fa-pen-circle mr-1" > ' . '</i > ' . ' Edit ' . '
                                </button > ' . '
                            </a > ' . '
                             <form class="pl-1" action="member/' . $member->id . '" method="post">
                             <input type="hidden" name="_method" value="delete">
                             <input type="hidden" name="_token" value="' . csrf_token() . '">
                                <button type = "submit" class="btn btn-danger" >' . '<i
                                        class="fa-duotone fa-circle-trash mr-1" >' . '</i >' . ' Delete ' . '
                                </button >' . '
                                </form>
                        </td >
                        </tr > ';
            }
        } else {
            $output .= '<tr><td colspan="9" class="text-center pt-5"><i class="fa-duotone fa-face-confused pr-3"></i>No results!</td></tr>';
        }

        return response($output);
    }
}
