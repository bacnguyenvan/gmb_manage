<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Modules\GoogleClient;
use App\Publishers\GooglePublisher;
use App\Services\GMBService;
use Illuminate\Http\Request;
use App\Models\StarTemplate;
class HomeController extends Controller
{
    public function dashboard()
    {
        $account = Account::first();

        $gmbService = new GMBService();
        $client = $gmbService->getClient();

        $googleClient = new GoogleClient($client);
        $googlePublisher = new GooglePublisher($googleClient);

        $locations = $googlePublisher->getLocationWithDirection($account->account_id);

        if(!empty($locations->locations)) {
            $locations = $locations->locations;
        } else {
            $locations = [];
        }

        $data = [
            'account' => $account,
            'locations' => $locations
        ];
        return view('home.dashboard', $data);
    }

    public function connectAccount()
    {
        return view('home.connect_account');
    }

    public function reply(Request $request)
    {
        if($request->isMethod('POST')) {
            $contents = $request->content;
            $star_id = $request->star_id;

            if(count(array_unique($contents))<count($contents)) {
                return redirect()->route('reply')->with('error-msg', "Duplicate content");
            }

            if(count($contents) > 5 || count($contents) == 0 || !in_array($star_id, [1,2,3,4,5])) {
                return redirect()->route('reply')->with('error-msg', "Total templates reply don't allow");
            } else {
                StarTemplate::deleteByStar($star_id);

                for($i = 0 ; $i < count($contents); $i++) {
                    StarTemplate::create([
                        'star_id' => $star_id,
                        'content' => $contents[$i]
                    ]);
                }
                
                return redirect()->route('reply')->with('success-msg', "Create reply template success");
            }
        }  
        
        $replyOneStart = StarTemplate::getByStarId(1);
        $replyTwoStart = StarTemplate::getByStarId(2);
        $replyThreeStart = StarTemplate::getByStarId(3);
        $replyFourStart = StarTemplate::getByStarId(4);
        $replyFiveStart = StarTemplate::getByStarId(5);

        $data = [
            'replies' => [
                1 => $replyOneStart,
                2 => $replyTwoStart,
                3 => $replyThreeStart,
                4 => $replyFourStart,
                5 => $replyFiveStart,
            ]
        ];

        return view('home.reply', $data);
    }

    public function review($id)
    {
        return redirect('locationReview');
    }

    public function locationReview($locationId)
    {
        $account = request()->aid;

        $direction = $account . '/locations/' . $locationId;

        $gmbService = new GMBService();
        $client = $gmbService->getClient();

        $googleClient = new GoogleClient($client);
        $googlePublisher = new GooglePublisher($googleClient);

        $reviews = $googlePublisher->getReviewsLocation($direction);
        $locationName = request()->aname;

        $data = [
            'reviews' => $reviews->reviews ?? [],
            'locationName' => $locationName
        ];

        return view('home.review', $data);
    }
}
