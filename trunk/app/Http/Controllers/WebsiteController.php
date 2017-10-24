<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use App\Website;
use App\Category;
use App\Publisher;
class WebsiteController extends Controller
{
    /**
     * [__construct description]
     */
    public function __construct(){

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::where('id',$id)->first(); 
        if(!$user->is('admin')){
            $websites = Website::orderBy('id','ASC')->where('user_id','=',$id)->paginate(10);
        }else{
            $websites = Website::with('categories')->get();
        }

        return view('website.index',compact('websites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('website.create',compact('categories','publishers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $current_user = auth()->user()->id;

        $category = Category::find($request->categories);
        $website = new Website;
        $website->user_id           =   $current_user;
        $website->url               =   $request->url;
        $website->cost              =   $request->costs;
        $website->currency          =   $request->currency;
        $website->language          =   $request->language;
        $website->processing_time   =   $request->processing_time;
        $website->example           =   $request->example;
        $website->note              =   $request->note;
        $website->f_n               =   $request->f_n;
        $apiResponse = $this->apiRequest($request->url);
        $apiArr = json_decode($apiResponse);
        $website->da                =   $apiArr->da;
        $website->pa                =   $apiArr->pa;
        $website->moz_rank          =   $apiArr->mozrank;
        $website->links             =   $apiArr->links;
        $website->equity            =   $apiArr->equity;
        $website->cf                =   $apiArr->cf;
        $website->tf                =   $apiArr->tf;
        $website->el                =   $apiArr->el;
        $website->ref_domains       =   $apiArr->refd;
        $website->sem_rush_domain   =   $apiArr->sr_domain;
        $website->alexa_rank        =   $apiArr->a_rank;
        $website->a_links           =   $apiArr->a_links;
        $website->a_cnt             =   $apiArr->a_cnt;
        $website->a_cnt_rank        =   $apiArr->a_cnt_r;
        $website->sr_rank           =   $apiArr->sr_rank;
        $website->sr_keywords       =   $apiArr->sr_kwords;
        $website->sr_traffic        =   $apiArr->sr_traffic;
        $website->sr_costs          =   $apiArr->sr_costs;
        $website->sr_ulinks         =   $apiArr->sr_ulinks;
        $website->sr_hlinks         =   $apiArr->sr_hlinks;
        $website->sr_dlinks         =   $apiArr->sr_dlinks;
        $website->save();
        $website->categories()->attach($request->categories);
        $website->publishers()->attach($request->publishers);
        return redirect()->route('website.index')->with('success','Website added successfully');
    }

    /**
     * [uploadcsv description]
     * @return [type] [description]
     */
    public function uploadCsv(Request $request){
        $this->validate($request, [
            'csvfile' => ' required|mimes:csv,txt',
        ]);
   
        $flag = true;
        $csv = $request->file('csvfile');
        $destPath = public_path('/uploads/');
        $csv->move( $destPath,  $csv ->getClientOriginalName());
        $filePath = $destPath.$csv ->getClientOriginalName();

        Excel::filter('chunk')->load($filePath)->chunk(10, function($results )
        {
               $current_user = auth()->user()->id;
               $website = new Website;
                foreach($results as $key=>$row)
                {
                    if($key===0){
                        continue;
                    }

                    $apiResponse = $this->apiRequest($row->url);
                    $apiArr = json_decode($apiResponse);

                    $csvData[] = array(
                        'url'       =>  $row->url,
                        'user_id'  =>  $current_user,   
                        'cost'      =>  12,
                        'currency'  =>  'USD',
                        'language'  =>  'EN',
                        'f_n'       =>  'follow',    
                        'da'                =>  $apiArr->da,
                        'pa'                =>  $apiArr->pa,
                        'moz_rank'          =>  $apiArr->mozrank,
                        'links'             =>  $apiArr->links,
                        'equity'            =>  $apiArr->equity,
                        'cf'                =>  $apiArr->cf,
                        'tf'                =>  $apiArr->tf,
                        'el'                =>  $apiArr->el,
                        'ref_domains'       =>  $apiArr->refd,
                        'sem_rush_domain'   =>  $apiArr->sr_domain,
                        'alexa_rank'        =>  $apiArr->a_rank,
                        'a_links'           =>  $apiArr->a_links,
                        'a_cnt'             =>  $apiArr->a_cnt,
                        'a_cnt_rank'        =>  $apiArr->a_cnt_r,
                        'sr_rank'           =>  $apiArr->sr_rank,
                        'sr_keywords'       =>  $apiArr->sr_kwords,
                        'sr_traffic'        =>  $apiArr->sr_traffic,
                        'sr_costs'          =>  $apiArr->sr_costs,
                        'sr_ulinks'         =>  $apiArr->sr_ulinks,
                        'sr_hlinks'         =>  $apiArr->sr_hlinks,
                        'sr_dlinks'         =>  $apiArr->sr_dlinks,
                        'created_at'        => now(), # \Datetime()
                        'updated_at'        => now(),  # \Datetime()
                    );

                }  
                if(!empty($csvData)){
                    $website->insert($csvData);
                }
        });
        return redirect()->route('website.index')->with('success','Website added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('website.edit',compact('categories','publishers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $website = Website::find($id);
        $website->categories()->detach();
        $website->delete();
        return redirect()->route('website.index')->with('success','Website deleted successfully');
    }

    private function apiRequest($url){
        $apiUrl = "https://seo-rank.my-addr.com/api2/moz+alexa+sr+maj+spam/F39A2476B7CE6DF7F32C95A8AE15F516/".$url;
        $curl = curl_init($apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        $curl_response = curl_exec($curl);

        if ($curl_response === false) {
            $info = curl_getinfo($curl);
            curl_close($curl);
            die('error occured during curl exec. Additioanl info: ' . var_export($info));
        }
        curl_close($curl);
        $decoded = json_decode($curl_response);
            if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
                die('error occured: ' . $decoded->response->errormessage);
            }
        return $curl_response;
    }
}
