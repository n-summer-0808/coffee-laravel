<?php

namespace App\Http\Controllers;

use App\Bean;
use App\Http\Requests\CreateBean;
use App\Http\Requests\EditBean;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeanController extends Controller
{
    /**
     * 豆一覧
     * @param Bean $bean
     * @return \Illuminate\View\View
     */
    public function index(Bean $bean)
    {
        $beans = Bean::all();
        //$bean = Auth::user()->beans()->get();
        return view('beans/index', [
            'beans' => $beans
        ]);
    }
    /**
     * 豆詳細ページ
     * @param Bean $bean
     * @return \Illuminate\View\View
     */
    public function detail(Bean $bean)
    {
        //$bean = Auth::user()->beans()->get();
        return view('beans/detail', [
            'bean' => $bean,
        ]);
    }
    /**
     * 豆作成フォーム
     * @param Bean $bean
     * @return \Illuminate\View\View
     */
    public function showCreateForm(Bean $bean)
    {
        return view('beans/create');
    }
    /**
     * 豆作成
     * @param Bean $bean
     * @param CreateBean $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Bean $bean, CreateBean $request)
    {
        $bean->country = $request->country;
        //$bean->save();
        Auth::user()->beans()->save($bean);
        return redirect()->route('beans.index');
    }
    /**
     * 豆編集フォーム表示
     * @param Bean $bean
     * @return \Illuminate\View\View
     */
    public function showEditForm(Bean $bean)
    {
        return view('beans/edit', [
            'bean' => $bean,
        ]);
    }
    /**
     * 豆編集
     * @param Bean $bean
     * @param EditBean $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(Bean $bean, EditBean $request)
    {
        return redirect()->route('beans.index', []);
    }
}
