<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('_master');
});

Route::post('/', function()
{
	$data=Input::all();

	if (isset($data['btnSubmit']) && array_key_exists ('radioGroup1', $data))
	{
        if($data['radioGroup1']==1)
        {
            return  makeView($data,'txtNumParagraphs', 'LoremIpsum');
        }
        elseif($data['radioGroup1']==2)
        {
        	return makeView($data,'txtNumberRandomUsers', 'RandomUsers');
        }
        else
        {
        	return View::make('_master');
        }
        
    } 
    else 
    {
        return View::make('_master');
    }
});

function makeView($data,$textboxName, $webpageName)
{
    $numElements=$data[$textboxName];
            
    if(is_numeric($numElements) ? ($numElements>0) && ($numElements<=50) : false)
    {
        return View::make($webpageName)->with('NumElements',$numElements)
                                        ->with('error','false');
    }
    else
    {
        return View::make($webpageName)->with('NumElements',0)
                                        ->with('error','true');
    }
}