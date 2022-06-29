<?php

namespace Traits;

trait CustomErrorBag {
    protected $errors = [];
    public function CustomErrorMessage($fields){
        foreach (array_keys($fields) as $field){
            $this->errors[] =  array(
                $field => [
                    (array_keys($fields[$field])[0] === "Required") ? $field . " is required" : ($field ." should be " . array_keys($fields[$field])[0].' ' .(array_values($fields[$field])[0][0] ?? '')),
                ]
            );
        }
        return response()->json(array(
            'message' => 'The given data was invalid.',
            'errors' => $this->errors
        ), 422);

    }
}