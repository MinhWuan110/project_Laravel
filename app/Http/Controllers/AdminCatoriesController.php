<?php

namespace App\Http\Controllers;

use App\Models\catories;
use Illuminate\Http\Request;

class AdminCatoriesController extends Controller
{

    public function create_catories(Request $request)
    {
        $request->validate([
            'ten_tin_tuc' => 'required|string|max:255',
            'trang_thai' => 'required|integer',
            'noi_dung' => 'nullable|string',
        ]);

        catories::create($request->except('_token'));
        return redirect()->route('admin.catories')->with('success', 'Danh mục đã được thêm thành công!');
    }

    public function edit_catories(Request $request, $id)
    {
        $category = Catories::find($id);
        return view('admin.catories_edit', compact('category')); // Trả về view với dữ liệu danh mục
    }



    public function update_catories(Request $request, $id)
    {
        // Xác thực dữ liệu
        $request->validate([
            'ten_tin_tuc' => 'required|string|max:255',
            'trang_thai' => 'required|integer',
            'noi_dung' => 'nullable|string',
        ]);
        // Tìm danh mục bằng ID
        $category = Catories::findOrFail($id);
        // Cập nhật dữ liệu
        $category->update([
            'ten_tin_tuc' => $request->ten_tin_tuc,
            'trang_thai' => $request->trang_thai,
            'noi_dung' => $request->noi_dung,
        ]);

        // Chuyển hướng về danh sách danh mục với thông báo thành công
        return redirect()->route('admin.catories')->with('success', 'Danh mục đã được cập nhật thành công!');
    }

    public function delete_catories(Request $request, $id)
    {
        $category = Catories::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.catories')->with('success', 'Danh mục đã được xóa thành công!');
    }

    public function search_catories(Request $request)
    {
        $query = $request->input('query');

        // Tìm kiếm trong bảng Catories dựa trên tên
        $catories = Catories::where('ten_tin_tuc', 'LIKE', "%{$query}%")->get();

        // Trả về view với danh sách kết quả tìm kiếm
        return view('admin.catories', compact('catories'));
    }
}
