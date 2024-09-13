<?php

namespace App\Console\Commands;

use App\Models\Account;
use App\Models\StarTemplate;
use Illuminate\Console\Command;
use App\Modules\GoogleClient;
use App\Publishers\GooglePublisher;
use App\Services\GMBService;

class ReplyReviewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reply:review';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to reply reviews';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $account = Account::first();

        if(empty($account)) return 0;

        $accountId = $account->account_id;

        $client = new \Google_Client();

        $googleClient = new GoogleClient($client);
        $googlePublisher = new GooglePublisher($googleClient);

        $pageSize = config('api.locations.all_page_size');
        $locations = $googlePublisher->getLocationWithDirection($accountId, $pageSize);

        if(empty($locations->locations)) {
            return 0;
        } 

        $locationNames['locationNames'] = [];

        foreach($locations->locations as $loc){
            $locationNames['locationNames'][] = $accountId . '/' . $loc->name ;
        }

        if(empty($locationNames['locationNames'])) return 0;

        $locationReviews = $googlePublisher->getBatchGetReviewsLocations($locationNames, $accountId);
        
        if(empty($locationReviews)) return 0;

        $reviewsNotReplyYet = [];

        $starData = [
            'ONE' => 1,
            'TWO' => 2,
            'THREE' => 3,
            'FOUR' => 4,
            'FIVE' => 5
        ];

        foreach($locationReviews as $rev){
            $replyReview = $rev['review']['reviewReply']['comment'] ?? '';
            
            if(empty($replyReview)) {
                $starRating = $rev['review']['starRating'];
                
                $templateContent = $this->getRandomTemplate($starData[$starRating]);

                if(empty($templateContent)) continue;
                
                $reviewId = $rev['name'] . '/reviews/' .  $rev['review']['reviewId'];

                $reviewsNotReplyYet[$reviewId] = $templateContent;
            }
        }
    
        if(empty($reviewsNotReplyYet)) return 0;
        
        $comment = $googlePublisher->replyReviews($reviewsNotReplyYet);

        return 0;
    }

    private function getRandomTemplate($starId)
    {
        $template = StarTemplate::getContentsByStarId($starId);

        if(empty($template)) return [];

        $ran = array_rand($template, 1);

        return $template[$ran];
    }
}
