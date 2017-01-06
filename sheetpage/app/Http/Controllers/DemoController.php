<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Excel;

class DemoController extends Controller
{
	public function importExport()
	{
		return view('importExport');
	}
	public function downloadExcel(Request $request, $type)
	{
		$data = User::get()->toArray();
		return Excel::create('users', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}

	/**
     * Import file into database Code
     *
     * @var array
     */
	public function importExcel(Request $request)
	{

		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();

			$data = Excel::load($path, function($reader) {})->get();

			if(!empty($data) && $data->count()){

				foreach ($data->toArray() as $key => $value) {
					if(!empty($value)){
						foreach ($value as $v) {		
							$insert[] = ['Date' => $v['Date'], 'Project' => $v['Project'],'TicketNumber' => $v['TicketNumber'],'TicketSubject' => $v['TicketSubject'],'Timein'=>$v['Timein'],'Timeout'=>$v['Timeout']];
						}
					}
				}

				
				if(!empty($insert)){
					User::insert($insert);
					return back()->with('success','Insert Record successfully.');
				}

			}

		}

		return back()->with('error','Please Check your file, Something is wrong there.');
	}

}
