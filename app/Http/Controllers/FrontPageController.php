<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FrontPageLit;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
class FrontPageController extends Controller
{
    //
    public function index(){
      $whatWeDo = "Accident Victims Alliance is a 12­year old health management organization directed by a 20­year veteran of the insurance and healthcare industries. AVA’s mission is to provide FREE assistance to accident victims and hospital patients in their time of need; filling the gaps between injury, loss and recovery by managing post­hospitalization activities.";
      $intro = "Accident Victims Alliance is a 12­year old health management organization directed by a 20 ­year veteran of the insurance and healthcare industries. AVA’s mission is to provide FREE assistance to accident victims and hospital patients in their time of need; filling the gaps between injury, loss and recovery by managing post­hospitalization activities. Health studies prove the importance of preventative care to decrease patient rebounding and readmission; keeping healthcare costs low and increase positive outcomes for patients. AVA provides support to medical institutions by ensuring patients have adequate post­discharge support. AVA supports medical institutions in the following manner:

Provide personalized transitional guidance for patient’s follow­up with a primary care
Support patient's medication regimen and reconciliation.
Perform home assessments to learn patient’s circumstances including transportation
Connect patients to community resources to sustain their healing process.
Educate vulnerable patients with limited medical literacy.
Educate patients on the benefits associated with the Affordable Care Act.
AVA is seeking to support medical institutions / hospitals in Las Vegas and Los Angeles. Advocating for patients and connecting them to medical resources conveniently available in their communities. AVA can help:
INFORM​ those without Personal Health Insurance
ELIMINATE​multiple non­productive ER visits overloading the hospital’s man­power, facility capacity and financial capabilities
EDUCATE​people about Health Benefits and Rights our government has in place for citizens of California and Nevada
ASSIST​those withOUT a Primary Care Physician
STOP​ victimization and fraudulent claims
STABILIZE i​nsurance rates ( Management + NO Fraud = Stable Rates )
For more information contact: R O Brooks @ (888) HELP ­ AVA​­or­ HelpMe@​AVAKY.com";
  //FrontPageLit::find(1)->delete();
      return FrontPageLit::firstOrCreate([
        'whatwedo' => $whatWeDo,
        'intro' => $intro
        ]);
    }

    public function store(Request $request){

      $front = FrontPageLit::find(1);
      $front->fill($request->all());
      $front->save();
      // FILE UPLOADS

      $basePath = public_path('theme/img/');
      if($request->hasFile('header')){
         Image::make($request->file('header')->getRealPath())->save($basePath.'header.jpg');

      }
      if($request->hasFile('portfolio1')){
         Image::make($request->file('portfolio1')->getRealPath())->resize(650, 350)->save($basePath.'portfolio/1.jpg');
      }
      if($request->hasFile('portfolio2')){
        Image::make($request->file('portfolio2')->getRealPath())->resize(650, 350)->save($basePath.'portfolio/2.jpg');
      }
      if($request->hasFile('portfolio3')){
        Image::make($request->file('portfolio3')->getRealPath())->resize(650, 350)->save($basePath.'portfolio/3.jpg');
      }
      if($request->hasFile('portfolio4')){
        Image::make($request->file('portfolio4')->getRealPath())->resize(650, 350)->save($basePath.'portfolio/4.jpg');
      }
      if($request->hasFile('portfolio5')){
        Image::make($request->file('portfolio5')->getRealPath())->resize(650, 350)->save($basePath.'portfolio/5.jpg');
      }
      if($request->hasFile('portfolio6')){
        Image::make($request->file('portfolio6')->getRealPath())->resize(650, 350)->save($basePath.'portfolio/6.jpg');
      }

      return back();
    }

}
