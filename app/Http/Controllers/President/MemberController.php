<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use App\Models\RegisteredUser;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $club_id = Clubs::where('president_id', \Auth::user()->id)->first();
        $members = RegisteredUser::where('club_id', $club_id->id)->with('registeredUsers')->paginate(10);
        return view('president.members.index', compact('members'));
    }

    public function edit($id)
    {
        $member = RegisteredUser::findOrFail($id);
        return view('president.members.edit', compact('member'));
    }

    public function destroy($id)
    {
        RegisteredUser::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Member removed Successfully');
    }

    public function search(Request $request)
    {
        $output = '';
        $users_ids = User::where('name', 'Like', '%' . $request->search . '%')->where('role', 3)->pluck('id');
        $members = RegisteredUser::with('registeredUsers')->whereIn('user_id', $users_ids)->paginate(10);
        if (!$members->isEmpty()) {
            foreach ($members as $member) {
                $verified = '';
                $not_verified = '';
                if ($member->registeredUsers->email_verified_at) {
                    $verified = '<span class="badge badge-success">Verified</span>';
                } else {
                    $not_verified = '<span class="badge badge-danger">Not Verified</span>';
                }
                $output .= '<tr>
                        <td>' . $member->id . '</td>
                        <td>' . $member->registeredUsers->name . '</td>
                        <td>' . $member->registeredUsers->mobile . '</td>
                        <td class="d-none d-md-table-cell">' . $member->registeredUsers->degree_program . '</td>
                        <td class="d-none d-md-table-cell">' . $member->registeredUsers->year . '</td>
                        <td class="d-none d-md-table-cell">' . $member->registeredUsers->address_line1 . ', ' . $member->registeredUsers->address_line2 . ', ' . $member->registeredUsers->city
                    . ', ' . $member->registeredUsers->province . ' </td >
                         <td>' . $verified . $not_verified . ' </td >
                         <td class="d-none d-md-flex">' . '
                             <form class="pl-1" action="members/' . $member->id . '" method="post">
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
