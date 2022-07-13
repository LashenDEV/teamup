<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use App\Models\HistoryLogs;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Clubs::with('clubOwner')->paginate(10);
        return view('admin.club.index', compact('clubs'));
    }


    public function approval($id)
    {
        $club = Clubs::whereId($id)->first();
        $club->approval = 1;
        $club->save();

        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Approved the ' . $club->name
        ]);
        return redirect()->back()->with('success', 'Club Approved Successfully');
    }

    public function rejection($id)
    {
        $club = Clubs::whereId($id)->first();
        $club->approval = '2';
        $club->save();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Rejected the ' . $club->name
        ]);
        return redirect()->back()->with('success', 'Club rejected Successfully');
    }

    public function destroy($id)
    {
        $club = Clubs::findOrFail($id);
        $club->delete();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Approved the ' . $club->name
        ]);
        return redirect()->route('admin.club.index')->with('success', 'Club Deleted Successfully');
    }

    public function search(Request $request)
    {
        $output = '';
        $clubs = Clubs::where('name', 'Like', '%' . $request->search . '%')->paginate(10);
        if (!$clubs->isEmpty()) {
            foreach ($clubs as $club) {
                $approved = '';
                $rejected = '';
                $pending = '';
                if ($club->approval == 1) {
                    $approved = '<span class="badge badge-success">Approved</span>';
                } elseif ($club->approval == 2) {
                    $rejected = '<span class="badge badge-danger">Rejected</span>';
                } else {
                    $pending = '<span class="badge badge-warning">Pending</span>';
                }
                $output .= '<tr>
                        <td>' . $club->id . '</td>
                        <td>' . $club->name . '</td>
                        <td class="d-none d-md-table-cell">' . $club->clubOwner->name . '</td>
                        <td class="d-none d-md-table-cell">' . '
                            <a href="club/' . $club->id . '/approval/">
                                <button type="button" class="btn btn-success"><i class="fa-duotone fa-circle-check"></i>
                                    Approve
                                </button>
                            </a>
                            <a href="club/' . $club->id . '/rejection/" class="pl-1">
                                <button type="submit" class="btn btn-danger"><i class="fa-duotone fa-circle-xmark"></i>
                                    Reject
                                </button>
                            </a>' . '
                        </td>
                         <td>' . $approved . $rejected . $pending . ' </td >
                         <td class="d-none d-md-flex">
                             <form class="pl-1" action="club/' . $club->id . '" method="post">
                             <input type="hidden" name="_method" value="delete">
                             <input type="hidden" name="_token" value="' . csrf_token() . '">
                                <button type = "submit" class="btn" >' . '<i
                                        class="fa-duotone fa-circle-trash mr-1 text-danger fa-2x" >' . '</i >' . '
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
