<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Modules\GoogleClient;
use App\Publishers\GooglePublisher;
use App\Services\GMBService;
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

    public function reply()
    {
        return view('home.reply');
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
