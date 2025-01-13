<?php

namespace App\Http\Controllers;

use App\Models\Categor;
use App\Rules\MainRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CategorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categor::all();
        return view("CategoryFiles.index",["data"=>$data]);
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("CategoryFiles.addCategory");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // التحقق من المدخلات
        $request->validate(
            [
                "categoryName" => ["required", new MainRule(5)], // استخدام قاعدة مخصصة
            ],
            [
                "categoryName.required" => "يجب عليك ادخال هذه القيمة ....",
                "categoryName.main" => "يجب بان يكون العدد اكبر من 5...",
            ]
        );
    
        // جلب بيانات الفئة من الطلب
        $categoryName = $request->post("categoryName");
    
        // إنشاء وحفظ الفئة
        $category = new Categor();
        $category->name = $categoryName;
        $category->user_id = Auth::id(); // تعيين معرف المستخدم الحالي
        $status = $category->save();
    
        // التحقق من نجاح العملية
        if ($status) {  
            return redirect()->route("getAllCategory")->with("insertion_true", "insertion done");
        }
    
        // في حالة الفشل، يمكنك إعادة توجيه المستخدم برسالة خطأ
        return back()->withErrors("Failed to add category");
    }
    /**
     * Display the specified resource.
     */
    public function show(Categor $categor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $categor = Categor::findOrFail($id);
        return view("CategoryFiles.editCategory",[
            "category" => $categor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $categor = Categor::findOrFail($id);
        $categor->name = $request->Input("categoryName");
        $result = $categor->update();
        if($result){
            return redirect()->route("getAllCatrgory");
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $category0 = Categor::findOnFail($id);
        $numberOfRows = $category0->delete();
        if($numberOfRows == 1){
                return redirect()->round("getAllCategory");
        }
    }
}
