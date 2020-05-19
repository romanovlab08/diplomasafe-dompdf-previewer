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
        $paperProperties = $this->getPaperProperties(strtolower($request->size), strtolower($request->orientation));
        $pdf = $pdfService->loadView($request->template_name, [])->setPaper($paperProperties['size'], $paperProperties['orientation']);
        return $pdf->stream('preview.pdf');
    }

    /**
     * @param $querySize
     * @param $queryOrientation
     * @return array
     */
    private function getPaperProperties($querySize, $queryOrientation) {
        $orientation = 'portrait';
        $size = 'A4';

        if ($querySize && in_array($querySize, config('constants.allowedPaperSizes'))) {
           $size = $querySize;
        }

        if ($queryOrientation && in_array($queryOrientation, config('constants.allowedPaperOrientations'))) {
            $orientation = $queryOrientation;
        }

        return [
            'size' => $size,
            'orientation' => $orientation,
        ];
    }
}
