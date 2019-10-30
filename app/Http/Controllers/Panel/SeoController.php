<?php


namespace App\Http\Controllers\Panel;


use App\Http\Controllers\Controller;
use Models\Seo\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function set( Request $request )
    {
        Seo::updateOrCreate(
            [
                'model_type'    => $request->model_type,
                'model_id'      => $request->model_id
            ],
            [
                'model_type'    => $request->model_type,
                'model_id'      => $request->model_id,
                'heading'       => $request->heading,
                'title'         => $request->title,
                'meta_title'    => $request->meta_title,
                'meta_desc'     => $request->meta_desc,
            ]
        );

        return redirect()->back()->with('success', 'СЕО успешно изменено.');
    }
}