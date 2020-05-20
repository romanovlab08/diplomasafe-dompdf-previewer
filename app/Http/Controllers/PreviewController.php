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

        $size = $request->size ?? 'a4';
        $orientation = $request->orientation ?? 'portrait';

        $pdf = $pdfService
            ->setPaper($size, $orientation)
            ->loadView($request->template_name, []);

        return $pdf->stream('example_diploma.pdf', ["Attachment" => 0]);
    }
}
