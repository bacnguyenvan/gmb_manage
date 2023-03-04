<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Services\GMBService;
use Illuminate\Support\Facades\Redirect;
use App\Modules\GoogleClient;
use App\Publishers\GooglePublisher;

class GMBController extends Controller
{
    protected GMBService $GMBService;

    public function __construct(GMBService $GMBService)
    {
        $this->GMBService = $GMBService;
    }

    public function connect()
    {
        $urlAuth = $this->GMBService->connect();
        return redirect($urlAuth);
    }

    public function callback()
    {
        $request = request();
        $client = $this->GMBService->getClient();
        $path = storage_path("publishers/google/data.json");
        
        $this->GMBService->runGetToken($client, $path, $request);

        $googleClient = new GoogleClient($client);
        $googlePublisher = new GooglePublisher($googleClient);

        $accounts = $googlePublisher->getAccount($client);

        if(!empty($accounts->accounts[0])) {
            $account = $accounts->accounts[0];
            Account::create([
                'account_id' => $account->name,
                'account_name' => $account->accountName,
                'is_connect' => 1,
            ]);

            return redirect()->route('dashboard')->with('success-msg', 'Connect account google success');
        } else {
            return redirect()->route('dashboard')->with('error-msg', 'Connect account google fail');
        }
    }
}
