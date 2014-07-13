<?php

class ReportController extends BaseController {

	public function connection() 
	{
		$credential = Input::get();
		return Response::json($credential);
	}


}