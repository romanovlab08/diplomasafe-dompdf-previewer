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
        $pdf = $pdfService
            ->loadView($request->template_name, [])
            ->setPaper($request->size, $request->orientation);
        return $pdf->stream('preview.pdf');
    }
}
