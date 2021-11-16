<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\IssueBook;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issueBook = IssueBook::with(['book','member'])->get();

        return response()->json($issueBook);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $issueBook = IssueBook::create($request->all());
        return response()->json($issueBook);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $issueBook = IssueBook::findOrFail($id);

        if (!is_null($issueBook)) {
            return response()->json($issueBook);
        }else{
            return response()->json([
            'status' => 404,
            'message' => '🤘🏾🤐🤘🏾'
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $issueBook = IssueBook::findOrFail($id);

        if (!is_null($issueBook)) {
            return response()->json($issueBook);
        }else{
            return response()->json([
            'status' => 404,
            'message' => '🤘🏾🤐🤘🏾'
            ]);
        }
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
        $issueBook = IssueBook::findOrFail($id);
        $issueBook->update($request->all());


        return response()->json([
        'member' => $issueBook,
        'message' => '🤘🏾😎🤘🏾'
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        IssueBook::find($id)->delete();
        return response()->json([
            'status' => 204,
            'message' => 'wicked!!!'
        ]);
    }
}