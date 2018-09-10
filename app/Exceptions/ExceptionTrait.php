<?php

namespace App\Exceptions;
use phpDocumentor\Reflection\Types\This;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


trait ExceptionTrait 
{
    public function apiException($request,$e)
    {
        if ($this->isModel($e)) {
            return $this->ModelResponse($e);
        }
        if ($this->isModel($e)) {
            return $this->HttpResponse($e);
        }
        return parent::render($request, $e);
    }

    public function isModel($e)
    {
        return $e instanceof ModelNotFoundException;
    }

    public function isHttp($e)
    {
        return $e instanceof NotFoundHttpException;
    }

    public function ModelResponse($e)
    {
        return response()->json([
            'errors' => 'Model Not Found'
        ], 404);
    }

    public function HttpResponse($e)
    {
        return  response()->json([
            'errors' => 'Incorect Root'
        ], 404);
    }
}