<?php

namespace App\Http\Controllers;

use App\DataTables\SoftwareLogDataTable;
use Illuminate\Http\Request;
use App\Models\SoftwareLog;

class ResearchAndDevelopMentController extends Controller
{

    public function logInfoView(SoftwareLogDataTable $dataTable)
    {
        return $dataTable->render('user_log');
        // return view('user_log');
    }

    public function userLoginInfoCreate(Request $request)
    {
        $project_title = $request->project_title;
        $ip_address = $request->ip_address;
        $current_date = $request->current_date;
        $current_time = $request->current_time;
        $current_url = str_replace("-", "/", $request->current_url);
        $browser_name = $request->browser_name;
        $user = $request->user;
        // return $login_info;

        SoftwareLog::create([
            'project_title' => $project_title,
            'ip_address' => $ip_address,
            'date' => $current_date,
            'time' => $current_time,
            'url' => $current_url,
            'browser' => $browser_name,
            'user' => $user,
        ]);
    }

    public function clientServerCodeNote()
    {
        // This part will include into the child server do login method in login controller

        // project_title
        $project_title = 'project_title' ?? 'N_A';
        // return $project_title;

        // ip
        $ip_address = $_SERVER['REMOTE_ADDR'] ?? 'N_A';
        // return $ip_address;

        // date
        $current_date = date('Y-m-d') ?? 'N_A';
        // return $current_date;

        // time
        $current_time = date('H:i:s') ?? 'N_A';
        // return $current_time;

        // url
        $current_url = $_SERVER['REQUEST_URI'] ?? 'N_A';
        // return $current_url;

        // -- browser --
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $browser = "N/A";
        $browsers = [
            '/msie/i' => 'Internet explorer',
            '/firefox/i' => 'Firefox',
            '/safari/i' => 'Safari',
            '/chrome/i' => 'Chrome',
            '/Edg/i' => 'Edge',
            '/opera/i' => 'Opera',
            '/mobile/i' => 'Mobile browser',
        ];

        foreach ($browsers as $regex => $value) {
            if (preg_match($regex, $user_agent)) {
                $browser = $value;
            }
        }
        $browser_name = $browser ?? 'N_A';
        // return $browser_name;
        // -- end browser --

        // user
        $user = 'guest' ?? 'N_A';
        // return $user;

        // return $login_info;

        $client_url = 'https://rmghealthcarebd.com/MainServer/user/log/create/'
            . $project_title . '/' .
            $ip_address . '/' .
            $current_date . '/' .
            $current_time . '/' .
            $current_url . '/' .
            $browser_name . '/' .
            $user;

        // return $client_url;

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $client_url);
        return $response->getBody();

        // after that code, there will be do login code
    }
}
