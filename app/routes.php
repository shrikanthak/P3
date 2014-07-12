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
        	$numTxtParagraphs=$data['txtNumParagraphs'];
        	
        	if(is_numeric($numTxtParagraphs) ? ($numTxtParagraphs>0) && ($numTxtParagraphs<=50) : false)
        	{
        		return View::make('LoremIpsum')->with('NumElements',$numTxtParagraphs)
        										->with('error','false');
    		}
    		else
    		{
    			return View::make('LoremIpsum')->with('NumElements',0)
        										->with('error','true');
    		}
        	
        }
        elseif($data['radioGroup1']==2)
        {
        	$numRandomLogins=$data['txtNumberRandomLogins'];
        	if(is_numeric($numRandomLogins) ? ($numRandomLogins>0) && ($numRandomLogins<=50) : false)
        	{
        		return View::make('RandomLogins')->with('NumElements',$numRandomLogins)
        										->with('error','false');
    		}
    		else
    		{
    			return View::make('RandomLogins')->with('NumElements',0)
        										->with('error','true');
    		}
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
