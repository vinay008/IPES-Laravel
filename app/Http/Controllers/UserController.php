<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\SubmitProposal;
use App\Uploadpaper;

use Mail;

class UserController extends Controller
{


public function __construct()
   {
     $this->middleware('auth', ['except' => []]);
   }


   /*Submitting Proposal's*/
  	public function submitProposalget()
  	{
  	  	return view('node.77');
  	}
 
    public function submitProposalpost(Request $request)
  	{	
      $proposal= new SubmitProposal();
      $proposal->paper_title=$request['paper_title'];
      $proposal->u_email=$request['u_email'];
      
      $proposal->second_author=$request['second_author'];
      $proposal->second_author_email=$request['second_author_email'];
      $proposal->second_author_gender=$request['second_author_gender'];
      $proposal->second_author_institute=$request['second_author_institute'];
      $proposal->second_author_status=$request['second_author_status'];

      $proposal->third_author=$request['third_author'];
      $proposal->third_author_email=$request['third_author_email'];
      $proposal->third_author_gender=$request['third_author_gender'];
      $proposal->third_author_institute=$request['third_author_institute'];
      $proposal->third_author_status=$request['third_author_status'];
      
      $proposal->fourth_author=$request['fourth_author'];
      $proposal->fourth_author_email=$request['fourth_author_email'];
      $proposal->fourth_author_gender=$request['fourth_author_gender'];
      $proposal->fourth_author_institute=$request['fourth_author_institute'];
      $proposal->fourth_author_status=$request['fourth_author_status'];    

      $request->user()->proposals()->save($proposal);

		  $destinationPath = "uploads/";
	    $file = $request->file('file');
	    if($file->isValid())
	    {
	        $file->move($destinationPath, $file->getClientOriginalName());
	        $proposal->image_url=$file->getClientOriginalName();
          $request->user()->proposals()->save($proposal);
	       \Session::flash('messageset','Proposal Submited');
          return redirect('index');
      }

      /*$useremail=$request['u_email'];

      $a1nm=$request['second_author'];
      $a2nm=$request['third_author'];
      $a3nm=$request['fourth_author'];
    //      $a1=$request['second_author_email'];
      $a2=$request['third_author_email'];
      $a3=$request['fourth_author_email'];

      $email[]=array($a1nm=>$a1,$a2nm=>$a2,$a3nm=>$a3);
  

      $data[]=array('Something'=>'Nothing');  

      Mail::send('proposal.email', $data, function ($message) use ($email)
      {
        $message->from('siddarth.kumar@amexstech.com', 'Sid kay')->subject('Proposal');
          
          foreach($email as $key=>$value)
         
           dd($value); 

          $message->to($value[]);
      
          $message->setBody('has submitted a proposal for the 2016 IPES conference and included you as a co-author. If you have not already registered on the IPES website, please go to https://ncgg.princeton.edu/IPES/drupal/registration so that you can be kept abreast of IPES events. (Registration on the website will be required to register for the conference.)');
        });  


      Mail::send('proposal.email', $data, function ($message) use ($useremail)
      {
        $message->from('siddarth.kumar@amexstech.com', 'Sid kay')->subject('Proposal');
          $message->to($useremail);
        $message->setBody('');
        });  
*/

  	
  	}

    /*Update User Detail's*/
    public function updateget()
    {
        return view('node.72');
    }
 
    public function updatepost(Request $request)
    { 
        $user = User::findOrFail(Auth::user()->id);
        $user->update($request->all());
        $user->save();
        \Session::flash('messageset','updated your details');
         return Redirect::back();
    }


    /*Update User Detail's*/
    public function updloadget()
    {
        return view('node.76');
    }
 
    public function uploadpost(Request $request)
    { 
      $papers=new Uploadpaper();
      $papers->u_email=$request['u_email'];
      $papers->paper_title=$request['paper_title'];
      $papers->key1=$request['key1'];
      $papers->key2=$request['key2'];    

      $destinationPath = "uploads/";
      $file = $request->file('file');
      if($file->isValid())
      {
          $file->move($destinationPath, $file->getClientOriginalName());
          $papers->image_url=$file->getClientOriginalName();
          $request->user()->uploads()->save($papers);
          \Session::flash('messageset','Paper Uploaded');
          return view('node.76');
      }
    }


//Upload Paper's
    public function getupadmin()
    {
         $paper=Uploadpaper::all();
         if (!$paper->isEmpty()) 
          {
            return view('node.85',['data'=>$paper]);
          }
          else
          {
             return view('node.85',['data'=>$paper]);      
          }
    }

    public function approvepapper($doneapp)
    {
        Uploadpaper::where('id', $doneapp)->update(array('status' => 'approved'));
        return $this->getupadmin();
    }

    public function rejectpaper($rejapp)
    {
        Uploadpaper::where('id', $rejapp)->update(array('status' => 'rejected'));
        return $this->getupadmin();
    }


//Proposal's
    public function getproadmin()
    {
         $accpro=SubmitProposal::all();
         if (!$accpro->isEmpty()) 
          {
            return view('node.86',['data'=>$accpro]);
          }
          else
          {
             return view('node.86',['data'=>$accpro]);      
          } 
    }

    public function approvepro($doneapp)
    {
        SubmitProposal::where('id', $doneapp)->update(array('status' => 'approved'));
        return $this->getproadmin();
    }

    public function rejectpro($rejapp)
    {
        SubmitProposal::where('id', $rejapp)->update(array('status' => 'rejected'));
        return $this->getproadmin();
    }


    public function statusview()
    {
         $accpro=Uploadpaper::all();
         if (!$accpro->isEmpty()) 
          {
            return view('node.87',['data'=>$accpro]);
          }
          else
          {
             return view('node.87',['data'=>$accpro]);      
          } 
    }

    public function statusviews()
    {
         $accpro=SubmitProposal::all();
         if (!$accpro->isEmpty()) 
          {
            return view('node.88',['data'=>$accpro]);
          }
          else
          {
             return view('node.88',['data'=>$accpro]);      
          } 
    }

}