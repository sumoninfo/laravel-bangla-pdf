<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use Illuminate\Support\Facades\Mail;
use Mpdf\Mpdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;

class PdfController extends Controller
{
    public function generateBanglaPdf()
    {
        // Load font config
        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'fontDir' => array_merge($fontDirs, [resource_path('fonts')]),
            'fontdata' => $fontData + [
                    'siyamrupali' => [
                        'R' => 'Siyamrupali.ttf',
                        'useOTL' => 0xFF,
                        'useKashida' => 75,
                    ]
                ],
            'default_font' => 'siyamrupali'
        ]);

        $html = view('pdf.invoice')->render(); // Blade view
        $mpdf->WriteHTML($html);

        $pdfContent = $mpdf->Output('', 'S'); // Output as string

        // Send email with PDF attached
        Mail::to('customer@example.com')->send(new InvoiceMail($pdfContent));

        return response($mpdf->Output('invoice.pdf', 'I'));

        // Bangla content
        $banglaHtml = '
            <h1>asdfghjklqwertyuiopzxcvbnm</h1>
            <h1>1234567890</h1>
            <h1>বাংলা পিডিএফ ডেমো</h1>
            <p>এটি একটি বাংলা টেক্সট সম্বলিত পিডিএফ ডকুমেন্ট।</p>
            <p>বাড়ি নং: ১২৩, রোড নং: ৪

ব্লক: বি, সেকশন: ১০

মিরপুর, ঢাকা-১২১৬

বাংলাদেশ
 </p>
        ';

        $mpdf->WriteHTML($banglaHtml);
        return response($mpdf->Output('bangla-demo.pdf', 'D'));
    }
}
