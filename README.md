### Link
https://github.com/barryvdh/laravel-dompdf

### If print page with dynamic data
	https://stackoverflow.com/questions/38415939/how-to-generate-pdf-from-an-active-view-laravel

	``
	public function print($pageNo){
        $currentPage = 'admin.pdf';
        // $data['path'] = 'public_path';
        $data['users'] = User::all();

        $pdf = Pdf::loadView($currentPage, $data);

        $set_paper = 'portrait';

        // $pdf->set_paper("A4", "portrait");
        $pdf->set_paper("A4", $set_paper);
        return $pdf->download('result.pdf');
    }
	``