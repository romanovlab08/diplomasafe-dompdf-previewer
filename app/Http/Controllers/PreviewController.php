<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreviewRequest;

class PreviewController extends Controller
{
    public function preview(PreviewRequest $request)
    {
        if (!view()->exists($request->template_name)) {
            abort(404);
        }
        $pdfService = app()->make('dompdf.wrapper');
        //TODO: Get paper and orientation from request
        $pdf = $pdfService->loadView($request->template_name, [])->setPaper('letter', 'landscape');
        return $pdf->stream('preview.pdf');
    }
}
