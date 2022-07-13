<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePresidentRequest;
use App\Http\Requests\UpdatePresidentRequest;
use App\Models\HistoryLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;

class PresidentController extends Controller
{
    public function index()
    {
        $presidents = User::where('role', 2)->paginate(10);
        return view('admin.president.index', compact('presidents'));
    }

    public function create()
    {
        return view('admin.president.create');
    }

    public function store(StorePresidentRequest $request)
    {
        $hashed_password = Hash::make($request->password);
        User::create([
            'role' => 2,
            'name' => $request->name,
            'email' => $request->email,
            'email verified at' => Null,
            'password' => $hashed_password,
        ]);
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Added a ' . $request->name . ' as a president.'
        ]);
        return redirect()->route('admin.president.index')->with('success', 'President Added Successfully');
    }

    public function edit($id)
    {
        $president = User::whereId($id)->firstOrFail();
        return view('admin.president.edit', compact('president'));

    }

    public function update($id, UpdatePresidentRequest $request)
    {
        $president = User::whereId($id)->firstOrFail();
        $president->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Edit ' . $request->name . '\'s details.'
        ]);
        return redirect()->route('admin.president.index')->with('success', 'President Updated Successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Delete president profile of ' . $user->name . '.'
        ]);
        return redirect()->route('admin.president.index')->with('success', 'President Deleted Successfully');
    }

    public function search(Request $request)
    {
        $output = '';
        $presidents = User::where('name', 'Like', '%' . $request->search . '%')->where('role', 2)->paginate(4);
        if (!$presidents->isEmpty()) {
            foreach ($presidents as $president) {
                $verified = '';
                $not_verified = '';
                if ($president->email_verified_at) {
                    $verified = '<span class="badge badge-success">Verified</span>';
                } else {
                    $not_verified = '<span class="badge badge-danger">Not Verified</span>';
                }
                $output .= '<tr>
                        <td>' . $president->id . '</td>
                        <td>' . $president->name . '</td>
                        <td class="d-none d-md-table-cell">' . $president->email . '</td>
                        <td>' . $president->mobile . '</td>
                        <td class="d-none d-md-table-cell">' . $president->degree_program . '</td>
                        <td class="d-none d-md-table-cell">' . $president->year . '</td>
                        <td class="d-none d-md-table-cell">' . $president->address_line1 . ', ' . $president->address_line2 . ', ' . $president->city
                    . ', ' . $president->province . ' </td >
                         <td>' . $verified . $not_verified . ' </td >
                         <td class="d-none d-md-flex">' . '
                         <a href = "president/' . $president->id . '/edit" class="pl-1" > ' . '
                                <button type = "button" class="btn btn-dark" > ' . '<i
                                        class="fa-duotone fa-pen-circle mr-1" > ' . '</i > ' . ' Edit ' . '
                                </button > ' . '
                            </a > ' . '
                             <form class="pl-1" action="president/' . $president->id . '" method="post">
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
