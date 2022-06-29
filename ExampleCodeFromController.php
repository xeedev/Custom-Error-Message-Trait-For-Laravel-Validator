<?php
use Traits\CustomErrorBag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExampleCodeFromController extends Controller
{
    use CustomErrorBag;
    public function xyz(Request $request){
        $validator = Validator::make($request->all(), [
            "abc"  => "required",
            "xyz" => "required | file",
            "abcxyz" => "required | max:5",
        ]);
        if($validator->fails()){
            $failed = $validator->failed();
            return $this->CustomErrorMessage($failed);
        }
    }
}