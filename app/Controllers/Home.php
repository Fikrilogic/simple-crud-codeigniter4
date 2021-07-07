<?php

namespace App\Controllers;

use App\Models\Student;

class Home extends BaseController
{	
	protected $student;
	public function __construct() {
		$this->student = new Student();
	}

	public function print() {
		$dompdf =new \Dompdf\Dompdf();
		$data = $this->student->findAll();

		$s = [
			"student" => $data
		];

		$dompdf->loadHtml(view('report_pdf', $s));
		$dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('Laporan_Siswa');

		return redirect()->to('/insert');
	}

	public function findStudent()
	{	
		
		$data = $this->student->findAll();
		// dd($data);
		$s = [
			'student' => $data
		];

		return view('home', $s);
	}

	public function findStudentById($id)
	{	
		
		$data = $this->student->find($id);
		// dd($data);
		$s = [
			'student' => $data
		];

		return view('delete' ,$s);
	}

	

	public function insertStudent() {
		return view('insert');
	}
	public function saveStudent() {
		$birth = strtotime($this->request->getVar('birth'));
		$date = date('Y-m-d', $birth);

		$this->student->save([
			'name' => $this->request->getVar('name'),
			'birth' => $date,
			'email' => $this->request->getVar('email'),
			'phone' => $this->request->getVar('phone'),
			'status' => $this->request->getVar('status'),
		]);

		return redirect()->to('/insert');
	}
	public function deleteStudent() {
		return view('delete');
	}
	public function deleteStudentById($id) {
		$this->student->delete($id);
		session()->setFlashData('delete','success delete a data');
		return redirect()->to('/');
	}
	public function update() {
		return view('update');
	}
	public function displayStudent($id) {
		$data = $this->student->find($id);
		// dd($data);
		$s = [
			'student' => $data
		];
		return view('update' ,$s);
		
	}

	public function updateStudent($id) {

		$this->student->save([
			'id' => $id,
			'name' => $this->request->getVar('name'),
			'birth' => $this->request->getVar('birth'),
			'email' => $this->request->getVar('email'),
			'phone' => $this->request->getVar('phone'),
			'status' => $this->request->getVar('status'),
		]);
		session()->setFlashData('update','success update data');
		return redirect()->to('/');
	}
}
