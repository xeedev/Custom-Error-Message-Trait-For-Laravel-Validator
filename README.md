# Custom-Error-Message-Trait-For-Laravel-Validator
Trait file is the one containing all functionality to take $validator->failed(); as parameter from the controller and after perforimg the action it returns an array of erros that are suitable for your front-end to display error messages easily
where the controller with validator goes like this
```
        $validator = Validator::make($request->all(), [
            "abc"  => "required",
            "xyz" => "required | file",
            "abcxyz" => "required | max:5",
        ]);
        if($validator->fails()){
            $failed = $validator->failed();
            return $this->CustomErrorMessage($failed);
        }
```
make sure to call the trait file as well
