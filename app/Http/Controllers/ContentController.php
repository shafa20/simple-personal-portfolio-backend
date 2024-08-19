<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    // Fetch all contents
    public function index()
    {
        $content = Content::all();
        return response()->json([
            'status' => true,
            'message' => 'content retrieved successfully',
            'data' => $content
        ], 200);
    }

    // Fetch a single content
    public function show($id)
    {
        $content = Content::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'Content get successfully',
            'data' => $content
        ], 200);
    }
    public function showByTitle($title)
    {
        // Use 'like' to match titles that contain the given substring
        $contents = Content::where('title', 'like', '%' . $title . '%')->get();

        return response()->json([
            'status' => true,
            'message' => 'Contents retrieved by tittle successfully',
            'data' => $contents
        ], 200);
    }


    // Create new content
    public function store(Request $request)
    {

        $content = Content::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Content Created successfully',
            'data' => $content
        ], 200);


    }

    // Update existing content
    public function update(Request $request, $id)
    {

        $content = Content::findOrFail($id);
        $content->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Content Updated successfully',
            'data' => $content
        ], 200);
    }

    // Delete a content
    public function destroy($id)
    {



        $content = Content::findOrFail($id);
        $content->delete();

        return response()->json([
            'status' => true,
            'message' => 'Content deleted successfully'
        ], 204);
    }
}

